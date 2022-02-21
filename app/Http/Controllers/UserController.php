<?php

namespace App\Http\Controllers;

use App\Models\PlayList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showFormLogin()
    {
        if(!Auth::user()){
            return view("template.login");
        }else{
            return redirect()->route("homepage");
        }

   }
    public function login(Request $request)
    {
        $user = User::where('email', $request->username)
            ->where('password',md5($request->password))
            ->first();
        Auth::login($user);
        return redirect()->route("homepage");
    }

    public function logout()
    {
        Auth::logout();
        return view('fontend.home');
    }

    public function getAll()
    {
        if(Auth::check()){
            $id = Auth::id();
        $user = User::findOrFail($id);
        $playlists = PlayList::all();
        return view("fontend.profile",compact("user","playlists"));
        }else{
            return redirect()->route("login");
        }
    }

    public function detail()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        return view("user.detail",compact("user"));
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->password = md5($request->password);
        if($request->hasFile('imageUser')){
            $file = $request->file('imageUser');
            $path = $file->store('image','public');
            $user->image = $path;
        }
        $user->save();
        return redirect()->route("profile");
    }

    public function showFormRegister()
    {
        return view("template.register");
   }
    public function register(Request  $request)
    {
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = md5($request->password);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('image','public');
            $user->image = $path;
        }
        $user->save();
        return redirect()->route("showFormLogin");
    }
}
