<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('land');
        }
    }
    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->gender=$req->gender;
        $user->age=$req->age;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");
    }
}
