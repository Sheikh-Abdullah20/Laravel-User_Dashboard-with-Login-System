<?php

namespace App\Http\Controllers;

use App\Http\Requests\own_Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function signup()
    {
        return view('signup');
    }

    public function addUser(own_Request $req)
    {

        if ($req->password === $req->cpassword) {
            $hash = password_hash($req->password, PASSWORD_DEFAULT);
            $users = User::insert([
                "name" => $req->name,
                "email" => $req->email,
                "password" => $hash,
            ]);
            return redirect()->route('signin');
        } else {
            $user = "password does not match";

        }

    }

    public function signin()
    {
        return view('signin');

    }

    public function getUser(Request $req)
    {

        $user = User::where("email", $req->email)->first();
        if ($user &&  password_verify($req->password, $user->password)) {
            session()->put('loggedin',true);
            session()->put('name',$user->name);
            session()->put('email',$user->email);
            // return dd(session());
            return redirect()->route('home');
        }else{
            echo "Please Enter Valid Email & Password";
            
        }

    }

    public function users()
    {
        $users = User::paginate(3);
        // return $users;
        return view('users', compact('users'));
    }

    public function createUserPage()
    {
        // return dd();
        return view('createUser');
    }

    public function createUser(own_Request $req)
    {
        $user = User::insert([
            "name" => $req->name,
            "email" => $req->email,
            "password" => password_hash($req->password, PASSWORD_DEFAULT),
        ]);
        if ($user) {
            return redirect()->route('users')->with('createuser','User Has Been Created');
        }

    }
    public function editPage(string $id)
    {
        $user = User::where("id", $id)->first();
        return view('edit', compact('user'));
    }

    public function update(string $id, Request $req)
    {
        $user = User::where("id", $id)->update([
            "name" => $req->name,
            "email" => $req->email,
        ]);
        if ($user) {
            return redirect()->route('users')->with('updated','User Has Been Updated');

        }
        return redirect()->route('users');
    }

    public function delete(string $id)
    {
        $user = User::where("id", $id)->delete();

        if ($user) {
            return redirect()->route('users')->with('deleted','User Has Been Deleted');
        }

    }


    
    public function editprofile(){
        $email = session()->get('email');
        $user = User::where("email",$email)->first();
        // if($user){
        //     $user->password = crypt::decryptstring($user->password);
        // }
        // return $user;
        return view('editprofile', ['user'=>$user]);
    }


    

    public function updateprofilepage(){

        $email = session()->get('email');
        $user = User::where("email",$email)->first();
        return view('updateprofile',['user'=> $user]);
    }


    public function updateprofile(Request $req){

        $email = session()->get('email');
        $user = User::where('email', $email)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password
        ]);
        // return $user;

        if($user){
            return redirect()->route('editProfile')->with('success', 'Profile updated successfully');
        }
        return redirect()->route('editProfile');
    }

    
    public function signOut(){
        session()->flush();
        return redirect()->route('signin');
    }
}
