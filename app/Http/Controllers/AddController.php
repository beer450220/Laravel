<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\establishment;
use App\Models\registers;
use App\Models\users;
use App\Models\informdetails;
use App\Models\report;
use App\Models\supervision;
use App\Models\acceptance;
use App\Models\advisor;
use App\Models\Event;
use App\Models\schedule;
use App\Models\Evaluationdocument;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class AddController extends Controller
{
    public function ssHome()
    {
        return view('welcome');
    }

    public function register2(Request $request) {
        //ตรวจสอบข้อมูล 
         // dd($request->username);
         $request->validate([
             'test' => 'required'
            //  'email' => 'required',
            //  'username' => 'required',
            //  'password' => 'required'
          
             //'password' => Hash::make($request->password),
         ]);
 
         $data =array();
         $data["test"]= $request->test;
         
       DB::table('test')->insert($data);
         return redirect('/studenthome/register')->with('success', 'สมัครสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


     public function saddestablishment(Request $request) {
        //ตรวจสอบข้อมูล 
        //  dd($request->images);
        $request->validate([
          'images' => 'required|mimes:jpg,jpeg,png',
         
      ]);
        if($request->hasFile("images")){
          $file=$request->file("images");
          $imageName=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/image"),$imageName);

          $post =new establishment([
              
                "name" => $request->name,
             "address" => $request->address,
             'phone' => $request->phone,
              "images" =>$imageName,
          ]); // dd($request->id);
         $post->save();
      }

          // if($request->hasFile("images")){
          //     $files=$request->file("images");
          //     foreach($files as $file){
          //         $imageName=time().'_'.$file->getClientOriginalName();
          //         $request['post_id']=$post->id;
          //         $request['image']=$imageName;
          //         $file->move(\public_path("/images"),$imageName);
          //         establishment::create($request->all());

             // }
         // }
          return redirect('/officer/establishmentuser1')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
        //  $request->validate([




            //  'name' => 'required',
            //  'address' => 'required',
            //  'phone' => 'required',
              // 'image' => 'required|mimes:jpg,ipeg,png',
            //  'username' => 'required',
            //  'password' => 'required'
          
             //'password' => Hash::make($request->password),
        //  ]);
 
        //  $data =array();
        //  $data["name"]= $request->name;
        //  $data["address"]= $request->address;
        //  $data["phone"]= $request->phone;
        //  $data= $request->file('image');
    // dd($data);
        //  $name_gen=hexdec(uniqid());
        //  $img_ext =strtolower($image->getClientOriginalExtension());
        //   $image=$name_gen.'.'.$img_ext;

        //  $upload_location='image';
        //  $full_path = $upload_location.$img_name;
        // $image->move($upload_location,$img_name);

      // DB::table('establishment')->insert($data);
        //  return redirect('/officer/establishmentuser1')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
 
     public function addregisteruser(Request $request) {
      //ตรวจสอบข้อมูล 
      //  dd($request);
      $request->validate([
        'filess' => 'required|mimes:pdf',
        // 'user_id' => 'required|unique:user_id',
      ],[
          // 'name.required' => "กรุณา",
        ]
    );
      if($request->hasFile("filess")){
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/file"),$imageName);
{
  
        $post =new registers
     
      //  $post->Status = "student"
      //  $post->name = $request->name;
      //  $post->establishment = $request->establishment;
      // //  $post->filess =>$imageName;
      // $post ->filess= $request->$imageName;
      //  $post ->filess= $request->filess;
      // $post->save();
        ([
          "user_id" => $request->user_id,
             "name" => $request->name,
           'establishment' => $request->establishment,
            "filess" =>$imageName,
            
           
        ]);// dd($request);dd($request->Status);

      $post->Status ="รอตรวจสอบ";
      $post->user_id = Auth::user()->id;
      $post->save();
      //  $data->save();
    }
    

     
         return redirect('/studenthome/register')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
  
   



}

     }
   
     public function addinformdetails(Request $request) {
      //ตรวจสอบข้อมูล 
      //  dd($request);
      $request->validate([
        // 'filess' => 'required|mimes:pdf',
        // 'user_id' => 'required|unique:user_id',
      ],[
          // 'name.required' => "กรุณา",
        ]
    );
      if($request->hasFile("files")){
        $file=$request->file("files");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/fileinformdetails"),$imageName);
{
  
        $post =new informdetails
     
      //  $post->Status = "student"
      //  $post->name = $request->name;
      //  $post->establishment = $request->establishment;
      // //  $post->filess =>$imageName;
      // $post ->filess= $request->$imageName;
      //  $post ->filess= $request->filess;
      // $post->save();
        ([
          // "user_id" => $request->user_id,
            //  "name" => $request->name,
           'establishment' => $request->establishment,
            "files" =>$imageName,
            
           
        ]);// dd($request);dd($request->Status);

      $post->Status ="รอตรวจสอบ";
      $post->user_id = Auth::user()->id;
      $post->save();
      //  $data->save();
    }
    

     
         return redirect('/studenthome/informdetails')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
  
   



}

     }

     public function addreport(Request $request) {
      //ตรวจสอบข้อมูล 
      //dd($request);
      $request->validate([
        // 'filess' => 'required|mimes:pdf',
        // 'user_id' => 'required|unique:user_id',
      ],[
          // 'name.required' => "กรุณา",
        ]
    );
      if($request->hasFile("projects"))
      {
        $file=$request->file("projects");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/รายงานโครงการ"),$imageName);
      
      
        if  ($request->hasFile("presentation")){
          $file=$request->file("presentation");
           $image=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/การนำเสนอ"),$image);
         }
         if  ($request->hasFile("poster")){
          $file=$request->file("poster");
           $poster=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/โปสเตอร์"),$poster);
         }
      
         if  ($request->hasFile("projectsummary")){
          $file=$request->file("projectsummary");
           $projectsummary=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/รายงานสรุปโครงการ"),$projectsummary);
         }
        $post =new report
        ([
          // "user_id" => $request->user_id,
            //  "name" => $request->name,
          //  'establishment' => $request->establishment,
            "projects" =>$imageName,
             "presentation" =>$image,
             "poster" =>$poster,
             "projectsummary" =>$projectsummary,
            
        ]);// dd($request);dd($request->Status);

      $post->Status ="รอตรวจสอบ";
      $post->user_id = Auth::user()->id;
      $post->save();
    }
         return redirect('/studenthome/report')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
}


public function calendar2add(Request $request,$id) {
  //ตรวจสอบข้อมูล 
   dd($request);
   
   $request->validate([
    // 'title' => 'required|string'
]);
$post=Event::findOrFail($id);

$post->update([
  // 'title' => $request->title,
  //   'start' => $request->start,
  //   'end' => $request->end,
  //   'name' => $request->name,
    'Status' => $request->Status,
]);

//    $data =array();
//    $data["test"]= $request->test;
//    $data["test"]= $request->test;
//  DB::table('test')->insert($data);
   return redirect('/studenthome/calendar2')->with('success', 'สมัครสำเร็จ.');
   // return redirect("/welcome")->with('success', 'Company has been created successfully.');
}



#teacher
public function addestimate1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student") 
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('teacher.add.addestimate1',compact('users'),compact('establishment'));
    }
    


    public function addestimate(Request $request) {
      //ตรวจสอบข้อมูล 
       //dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);

if($request->hasFile("filess"))
      {
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.12)"),$imageName);
    // $post=Event::findOrFail($id);
    
    $post =new supervision
    ([
        "student_id" => $request->student_id,
        "term" => $request->term,
        'establishment_id' => $request->establishment_id, 
        "year" => $request->year,
        'score' => $request->score,
        "filess" =>$imageName,
       
        
    ]);
    $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/teacher/estimate1')->with('success', 'สมัครสำเร็จ.');
       // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
}  

#officer

public function addacceptancedocument1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student") 
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addacceptancedocument1',compact('users'),compact('establishment'));
    }


    public function addacceptancedocument(Request $request) {
      //ตรวจสอบข้อมูล 
      // dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);

if($request->hasFile("filess"))
      {
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารตอบรับนักศึกษา(สก.02)"),$imageName);
    // $post=Event::findOrFail($id);
    
    $post =new acceptance
    ([
        "user_id" => $request->user_id,
        "term" => $request->term,
        'establishment_id' => $request->establishment_id, 
        "year" => $request->year,
        'annotation' => $request->annotation,
        "filess" =>$imageName,
        'Status_acceptance'=>$request->Status_acceptance,
        
    ]);
   // $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/acceptancedocument1')->with('success', 'สมัครสำเร็จ.');
       // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
}



public function addsupervision()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student") 
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addsupervision',compact('users'),compact('establishment'));
    }


    public function addsupervision1(Request $request) {
      //ตรวจสอบข้อมูล 
      // dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);    
    $post =new Event
    ([
        "title" => $request->title,
        "start" => $request->start,
        'end' => $request->end, 
        "term" => $request->term,
        "year" => $request->year,
        
        
    ]);
   // $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/supervision')->with('success', 'สมัครสำเร็จ.');
       
    }




    public function addSupervise()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student") 
     // ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addSupervise');
    }
    


    public function addSupervise1(Request $request) {
      //ตรวจสอบข้อมูล 
      // dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);    
    $post =new advisor
    ([
        "name" => $request->name,
        "course" => $request->course,
        'faculty' => $request->faculty, 
        
        
    ]);
   // $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/Supervise')->with('success', 'สมัครสำเร็จ.');
       
    }
    

    public function addschedule()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student") 
     // ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addschedule');
    }
    


    public function addschedule1(Request $request) {
      //ตรวจสอบข้อมูล 
      // dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);    
    $post =new schedule
    ([
        "title" => $request->title,
        "start" => $request->start,
        'end' => $request->end, 
        "term" => $request->term,
        "year" => $request->year,
        
        
    ]);
   // $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/schedule')->with('success', 'สมัครสำเร็จ.');
       
    }
    

    public function addEvaluationdocuments()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student") 
     // ->get();
     // dd($users);
     // ->paginate(5); 
     $users=DB::table('users')
    ->where('role',"student")->get(); 
      $establishment=DB::table('establishment')
       ->get(); 
        return view('officer.add.addEvaluationdocuments',compact('users'),compact('establishment'));
       
    }    




    public function addEvaluationdocument(Request $request) {
      //ตรวจสอบข้อมูล 
      //dd($request);
       
       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);

if($request->hasFile("files1"))
      {
        $file=$request->file("files1");
         $files1=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.13)"),$files1);
    // $post=Event::findOrFail($id);
      }
    if($request->hasFile("files2"))
      {
        $file=$request->file("files2");
         $files2=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.14)"),$files2);
      }
    $post =new Evaluationdocument
    ([
        // "user_id" => $request->user_id,
        // "term" => $request->term,
        // 'establishment_id' => $request->establishment_id, 
        // "year" => $request->year,
        // 'annotation' => $request->annotation,
        "files1" =>$files1,
        "files2" =>$files2,
        // 'Status_acceptance'=>$request->Status_acceptance,
        
    ]);
   // $post->Status ="รอตรวจสอบ";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/Evaluationdocuments')->with('success', 'สมัครสำเร็จ.');
       
    }
}



