<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class registerController extends Controller
{
    public function index() {
        $data['register1'] = User::orderBy('id', 'asc')->paginate(5);
        return view('auth.Register1');
    }
    // public function create() {
    //     return view('auth.Register1');
    // }

    public function register2(Request $request) {
       //ตรวจสอบข้อมูล 
        // dd($request->username);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
         
            //'password' => Hash::make($request->password),
        ]);

        $user = new user;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "student";
        $user->save();
        return redirect('/')->with('success', 'สมัครสำเร็จ.');
        // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
    public function index2() {
        $data['add'] = User::orderBy('id', 'asc')->paginate(5);
        return view('admin.adduser');
    }

    public function adduser(Request $request) {
        //ตรวจสอบข้อมูล 
         // dd($request->username);
         $request->validate([
             'name' => 'required',
             'email' => 'required',
             'username' => 'required',
             'password' => 'required'
          
             //'password' => Hash::make($request->password),
         ]);
 
         $user = new user;
         $user->name = $request->name;
         $user->username = $request->username;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->role = "student";
         $user->save();
         return redirect('/user')->with('success', 'สมัครสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
}
