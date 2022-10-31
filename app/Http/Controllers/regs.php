<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg;
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
            $data=reg::where('id',$id)->first();
            return view('profile',['data'=>$data]);
        }
    }

    public function logout(){
        if(Session::has('loginid')){
            Session::pull('loginid');
            return redirect('log');
        }
    }
}
