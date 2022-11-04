<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg;
use App\Models\teacher;
use Session;
class regs extends Controller
{
    public function insert(Request $request){
        $name=$request->name;
        $email=$request->email;
        $gender=$request->gender;
        $pass=$request->password;
        $img="img".time().".".$request->img->getClientOriginalExtension();
        $request->img->storeAs('public/img',$img);
        $obj=new reg(['name'=>$name,'email'=>$email,'gender'=>$gender,'password'=>$pass,"img"=>$img]);
        $obj->save();
    }

    public function show(){
        $data=reg::get();
        return view('reg',['data'=>$data]);
    }

    public function del($id){
        reg::find($id)->delete();
        return redirect('reg');
    }

    public function upd($id){
        $data=reg::find($id);
        return view('update',['data'=>$data]);
    }

    public function upda(Request $request,$id){
        $name=$request->name;
        $email=$request->email;
        $gender=$request->gender;
        $password=$request->password;
        reg::find($id)->update(['name'=>$name,'email'=>$email,'gender'=>$gender,'password'=>$password]);
        return redirect('reg');
    }

    public function login(Request $request){
        $email=$request->email;
        $password=$request->pswd;
        $check=reg::where('email',$email)->first();
        if($check){
            if($password==$check->password){
                $request->Session()->put('loginid',$check->id);
                return redirect('profile');
            }
            else{
                $error="invalid credentials";
                return view('log',['error'=>$error]);
            }
        }else{
            $error="invalid user";
            return view('log',['error'=>$error]);
        }
    }

    public function pro(){
        if(Session::has('loginid')){
            $id=Session::get('loginid');

            // $data=reg::where('id',$id)->first();
            if(reg::where('id',$id)){
            $data=reg::select('regs.img','regs.name','regs.email','teachers.subname','teachers.school','teachers.join_date')->join('teachers','teachers.detail_id','=','regs.id')->where('regs.id',$id)->first();
            return view('profile',['data'=>$data]);
        }}
    }

    public function logout(){
        if(Session::has('loginid')){
            Session::pull('loginid');
            return redirect('log');
        }
    }

    function insert_sub(Request $request){
        $sname=$request->sname;
        $sub=$request->sub;
        $jdate=$request->jdate;
        $tid=$request->tid;
        $t1=new teacher(['school'=>$sname,'subname'=>$sub,'join_date'=>$jdate,'detail_id'=>$tid]);
        $entered=$t1->save();
        if($entered){
            return view('subject',['msg'=>'successfully enterd']);
        }else{
            return view('subject',['msg'=>'error']);
        }
    }
}
