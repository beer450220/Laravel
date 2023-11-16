<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Users;
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
          //dd($request);
         $request->validate([
             'code_id' => 'required|unique:users',
              'email' => 'required',
            //  'username' => 'required',
            //  'password' => 'required'

             //'password' => Hash::make($request->password),
             ] ,[
                'code_id.unique' => "รหัสประจำตัวซ้ำ",

            ]
        );
        if($request->hasFile("images")){
            $file=$request->file("images");
             $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/รูปโปรไฟล์"),$imageName);


            $post =new Users([


                "images" =>$imageName,


            ]);
         }
         $user = new Users;
         $user->code_id = $request->code_id;
         $user->major_id = $request->major_id;
         $user->establishment_id = "ยังไม่มีสถานประกอบการ";

         $user->fname = $request->fname;
         $user->surname = $request->surname;
         $user->telephonenumber = $request->telephonenumber;
         $user->address = $request->address;
         $user->GPA = $request->GPA;
         $user->Parent_name = $request->Parent_name;
         $user->Parent_address = $request->Parent_address;
         $user->Parent_phonenumber = $request->Parent_phonenumber;
         $user->Relevance = $request->Relevance;
         $user->images = $request->	images;
        // $user->username = $request->username;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->role = "student";
         $user-> status = "ยังไม่ได้ยืนยันตัวตน";

         $user->save();
         return redirect('/user')->with('error','success', 'สมัครสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
}
