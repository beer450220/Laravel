<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establishment;
use App\Models\registers;
use App\Models\users;
use App\Models\informdetails;
use App\Models\report;
use App\Models\Event;
use App\Models\supervision;
use App\Models\acceptance;
use App\Models\advisor;
use App\Models\schedule;
use App\Models\Evaluationdocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class EditController extends Controller
{
   
    
    public function editestablishment($id) {
        //ตรวจสอบข้อมูล 
        
        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);
         
         return view('officer.editestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

    

     public function editregisteruser($id) {
        //ตรวจสอบข้อมูล 
        
        // $establishments=establishment::find($id);
        $establishments=DB::table('registers')->find($id);
        //  dd($establishments);
         
         return view('student.Edit.editregister',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

   
     public function   updateestablishment(Request $request,$id) {
        //ตรวจสอบข้อมูล 
        
        // $establishments=establishment::find($id);
        // $establishments=DB::table('establishment')->find($id);
        //  dd($id,$request);
        //  $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'phone' => 'required',

        // ]);
        $request->validate([
            // 'images' => ['required','mimes:jpg,jpeg,png'],
            // 'name' => ['required','min:5'],
        ]);
        $post=establishment::findOrFail($id);
        if($request->hasFile("images")){
            if (File::exists("image/".$post->images)) {
                File::delete("image/".$post->images);
            }
            $file=$request->file("images");
            $post->images=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/image"),$post->images);
            $request['images']=$post->images;
        }
    //    DB::table('establishment')->where('id',$id)->update([
    //     'name'=> $request->name,
    //     'address'=> $request->address,
    //     'phone'=> $request->phone
    //   $data =
        //]);
        $post->update([
            "name" =>$request->name,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "images"=>$post->images,
        ]);


    //   DB::table('establishment')($data);
        return redirect('/officer/establishmentuser1')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
        //  return view('officer.editestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


     public function delestablishment($id) {
        //ตรวจสอบข้อมูล 
        
        // $establishments=establishment::find($id);
        // DB::table('establishment')->where('id',$id)->delete();
         
        $posts=establishment::findOrFail($id);

         if (File::exists("image/".$posts->images)) {
             File::delete("image/".$posts->images);
         }
        
        //  dd($posts);
         $posts->delete();
        //  return view('officer.editestablishmentuser1',compact('establishments'));
         return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
     }

    //  public function deletecover($id){
    //     $cover=Post::findOrFail($id)->cover;
    //     if (File::exists("cover/".$cover)) {
    //        File::delete("cover/".$cover);
    //    }
    //    return back();
    // }


    public function deleteimage($id){
        // $cover=Post::findOrFail($id)->images;
       dd($id,);
        $images=establishment::findOrFail($id)->images;
        if (File::exists("/image".$images)) {
           File::delete("/image".$images);
       } 
       return back();
}


public function   updateregisteruser(Request $request,$id) {
    //ตรวจสอบข้อมูล 
    
    
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            'establishment.required' => "กรุณา",

        ]
    );
    $post=registers::findOrFail($id);
    $post->user_id = Auth::user()->id;
    $post->Status ="รอตรวจสอบ";
    if($request->hasFile("filess")){
        if (File::exists("file/".$post->filess)) {
            File::delete("file/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/file"),$post->filess);
        $request['filess']=$post->filess;
    }
    // dd($request);

    $post->update
    ([
        "name" =>$request->name,
        "establishment"=>$request->establishment,
        // "phone"=>$request->phone,
        "filess"=>$request->filess,
        "filess"=>$post->filess,
    ]);
    
    return redirect('/studenthome/register')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }


 public function delregister($id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=registers::findOrFail($id);

     if (File::exists("file/".$posts->filess)) {
         File::delete("file/".$posts->filess);
     }
    
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }




 #informdetails

 public function editinformdetails($informdetails_id) {
    //ตรวจสอบข้อมูล 
    //dd($informdetails_id);
    $informdetails=informdetails::find($informdetails_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);
     
     return view('student.Edit.editinformdetails',compact('informdetails'));
     
 }

 public function   updateinformdetails(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล 
    
   // dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            'establishment.required' => "กรุณา",

        ]
    );
    $post=informdetails::findOrFail($informdetails_id);
    $post->user_id = Auth::user()->id;
    $post->Status ="รอตรวจสอบ";
    if($request->hasFile("files")){
        if (File::exists("fileinformdetails/".$post->files)) {
            File::delete("fileinformdetails/".$post->files);
        }
        $file=$request->file("files");
        $post->files=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/fileinformdetails"),$post->files);
        $request['files']=$post->files;
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        "establishment"=>$request->establishment,
        // "phone"=>$request->phone,
        "files"=>$request->files,
        "files"=>$post->files,
    ]);
    
    
    return redirect('/studenthome/informdetails')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }



 public function delinformdetails($informdetails_id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=informdetails::findOrFail($informdetails_id);

     if (File::exists("fileinformdetails/".$posts->files)) {
         File::delete("fileinformdetails/".$posts->files);
     }
    
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }



#report

public function editreport($report_id) {
    //ตรวจสอบข้อมูล 
    //dd($report_id);
    $report=report::find($report_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);
     
     return view('student.Edit.editreport',compact('report'));
     
 }

 public function   updatereport(Request $request,$report_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    $post=report::findOrFail($report_id);
    $post->user_id = Auth::user()->id;
    $post->Status ="รอตรวจสอบ";
    if($request->hasFile("projects")){
        if (File::exists("รายงานโครงการ/".$post->projects)) {
            File::delete("รายงานโครงการ/".$post->projects);
        } 
        $file=$request->file("projects");
         $post->projects=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/รายงานโครงการ"),$post->projects);
         $request['projects']=$post->projects;
      // dd($post);
    }

    if($request->hasFile("presentation")){
        if (File::exists("การนำเสนอ/".$post->presentation)) {
            File::delete("การนำเสนอ/".$post->presentation);
        }
        $file=$request->file("presentation");
        $post->presentation=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/การนำเสนอ"),$post->presentation);
        $request['presentation']=$post->presentation;
    }

    if($request->hasFile("poster")){
        if (File::exists("โปสเตอร์/".$post->poster)) {
            File::delete("โปสเตอร์/".$post->poster);
        }
        $file=$request->file("poster");
        $post->poster=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/โปสเตอร์"),$post->poster);
        $request['poster']=$post->poster;
    }
    if($request->hasFile("projectsummary")){
        if (File::exists("รายงานสรุปโครงการ/".$post->projectsummary)) {
            File::delete("รายงานสรุปโครงการ/".$post->projectsummary);
        }
        $file=$request->file("projectsummary");
        $post->projectsummary=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/รายงานสรุปโครงการ"),$post->projectsummary);
        $request['projectsummary']=$post->projectsummary;
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        //"establishment"=>$request->establishment,
        // "phone"=>$request->phone,
       // "files"=>$request->files,
        "projects"=>$post->projects,
        "presentation"=>$post->presentation,
        "poster"=>$post->poster,
        "projectsummary"=>$post->projectsummary,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);
    
    
    return redirect('/studenthome/report')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }



 public function delreport($report_id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=report::findOrFail($report_id);

     if (File::exists("รายงานโครงการ/".$posts->projects)) {
         File::delete("รายงานโครงการ/".$posts->projects);
     }
     if (File::exists("การนำเสนอ/".$posts->presentation)) {
        File::delete("การนำเสนอ/".$posts->presentation);
    }
    if (File::exists("โปสเตอร์/".$posts->poster)) {
        File::delete("โปสเตอร์/".$posts->poster);
    }
    if (File::exists("รายงานสรุปโครงการ/".$posts->projectsummary)) {
        File::delete("รายงานสรุปโครงการ/".$posts->projectsummary);
    }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }


#calendar2confirm

 public function calendar2confirmedit($id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    $events=DB::table('events')->find($id);
    //  dd($establishments);
     
     return view('student.edit.calendar2confirmedit',compact('events'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }



 public function   updatecalendar2confirm(Request $request,$id) {
    //ตรวจสอบข้อมูล 
    
   // dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    $post=Event::findOrFail($id);
    $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);

    $post->update
    ([
       "name2" =>$request->name2,
        //"establishment"=>$request->establishment,
        // "phone"=>$request->phone,
       // "files"=>$request->files,
        // "projects"=>$post->projects,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        "Status"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);
    
    
    return redirect('/studenthome/calendar2confirm')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }



# teacher

 public function viewregisters($id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    $registers=DB::table('registers')->find($id);
    //  dd($establishments);
     
     return view('teacher.viewregister',compact('registers'));
    
 }
 public function  viewinformdetails1($informdetails_id) {
    //ตรวจสอบข้อมูล 
    // $informdetails=report::find($informdetails_id)->join('users','informdetails.user_id','users.id')
    // ->select('informdetails.*','users.name');
  //  $informdetails=informdetails::find($informdetails_id);
    $informdetails=DB::table('informdetails')->where('informdetails_id',$informdetails_id)
    ->join('users','informdetails.user_id','users.id')
    ->select('informdetails.*','users.name')
    // ->find($informdetails_id);
    ->first();
     //dd($informdetails);
     
     return view('teacher.viewinformdetails1',compact('informdetails'));
     
 }


 public function editestimate1($supervision_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $supervisions=DB::table('supervision')->first();
    $establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
    ->get();
    //dd($establishment);
     // dd($supervisions);
     return view('teacher.edit.editestimate1', compact('supervisions'),compact('establishment'));
    
 }

 public function   updateestimate1(Request $request,$supervision_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=supervision::findOrFail($supervision_id);
   $post->user_id = Auth::user()->id;
   $post->Status ="รอตรวจสอบ";
   if($request->hasFile("filess")){
       if (File::exists("ไฟล์เอกสารประเมิน(สก.12)/".$post->filess)) {
           File::delete("ไฟล์เอกสารประเมิน(สก.12)/".$post->filess);
       } 
       $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.12)"),$post->filess);
        $request['filess']=$post->filess;
     // dd($post);
   }
    $post->update
    ([
       "year" =>$request->year,
        //"establishment"=>$request->establishment,
         "term"=>$request->term,
        "score"=>$request->score,
         "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        //"Status"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);
    
    
    return redirect('/teacher/estimate1')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 
 public function viwetimeline($timeline_id) {
    //ตรวจสอบข้อมูล 
        
    // $establishments=establishment::find($id);
    $timelines=DB::table('timeline')
    //->get();
    //->first();
   // dd($timelines);
    // $all=DB::table('registers')
     ->join('users','timeline.user_id','users.id')
     ->join('registers','timeline.register_id','registers.id')
     ->join('report','timeline.report_id','report.report_id')
     ->join('informdetails','timeline.informdetails_id','informdetails.informdetails_id')
    
     ->select('timeline.*','users.name','registers.Status'
     ,'report.Status_report','informdetails.Status_informdetails')
     //->where('user_id')
     
     //->paginate(5);
     ->where('timeline_id',$timeline_id)
    // ->first();
       ->get();
    // dd($timelines);
     
     return view('teacher.viwe.viwetimeline',compact('timelines'));
    
 }

 ##officer
 
 
 public function editexperiencereport2($report_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $reports=DB::table('report')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editexperiencereport2',compact('reports'));
    
 }

 public function   updateexperiencereport2(Request $request,$report_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";

   //dd($request->Status);
   $post=report::findOrFail($report_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รอตรวจสอบ";

    $post->update
  
    ([
        
       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_report"=>$request->Status_report,
       
    ]);
     // dd($request);
    
    return redirect('/officer/experiencereport2')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }



 public function editEvaluate($supervision_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $supervisions=DB::table('supervision')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editEvaluate',compact('supervisions'));
    
 }

 public function   updateEvaluate(Request $request,$supervision_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";

   //dd($request->Status);
   $post=supervision::findOrFail($supervision_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รอตรวจสอบ";

    $post->update
  
    ([
        
       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_supervision"=>$request->Status_supervision,
       
    ]);
     // dd($request);
    
    return redirect('/officer/Evaluate')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }


 public function editinformdetails2($informdetails_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $informdetails=DB::table('informdetails')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    dd($informdetails);
     // dd($supervisions);
     return view('officer.edit.editinformdetails2',compact('informdetails'));
     
 }
 public function   updateinformdetails2(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล 
    
   // dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";

   //dd($request->Status);
   $post=informdetails::findOrFail($informdetails_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รอตรวจสอบ";

    $post->update
  
    ([
        
       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_informdetails"=>$request->Status_informdetails,
       
    ]);
     // dd($request);
    
    return redirect('/officer/informdetails2')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }




 public function editregister1($_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $registers=DB::table('registers')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editregister1',compact('registers'));
     
 }
 public function   updateregister1(Request $request,$id) {
    //ตรวจสอบข้อมูล 
    
   // dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";

   //dd($request->Status);
   $post=registers::findOrFail($id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รอตรวจสอบ";

    $post->update
  
    ([
        
       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_registers"=>$request->Status_registers,
       
    ]);
     // dd($request);
    
    return redirect('/officer/register1')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function viwetimeline2($timeline_id) {
    //ตรวจสอบข้อมูล 
        
    // $establishments=establishment::find($id);
    $timelines=DB::table('timeline')
    //->get();
    //->first();
   // dd($timelines);
    // $all=DB::table('registers')
     ->join('users','timeline.user_id','users.id')
     ->join('registers','timeline.register_id','registers.id')
     ->join('report','timeline.report_id','report.report_id')
     ->join('informdetails','timeline.informdetails_id','informdetails.informdetails_id')
    
     ->select('timeline.*','users.name','registers.Status_registers'
     ,'report.Status_report','informdetails.Status_informdetails')
     //->where('user_id')
     
     //->paginate(5);
     ->where('timeline_id',$timeline_id)
    // ->first();
       ->get();
    // dd($timelines);
     
     return view('officer.viwe.viwetimeline',compact('timelines'));
    
 }
 public function editacceptance($acceptance_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $acceptances=acceptance::find($acceptance_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editacceptancedocument1',compact('acceptances'));
     
 }
 
 public function   updateacceptance(Request $request,$acceptance_id) {
    //ตรวจสอบข้อมูล 
    
    ///dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=acceptance::findOrFail($acceptance_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รอตรวจสอบ";
   if($request->hasFile("filess")){
       if (File::exists("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$post->filess)) {
           File::delete("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$post->filess);
       } 
       $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารตอบรับนักศึกษา(สก.02)"),$post->filess);
        $request['filess']=$post->filess;
     // dd($post);
   }
    $post->update
    ([
       "year" =>$request->year,
        //"establishment"=>$request->establishment,
         "term"=>$request->term,
        "annotation"=>$request->annotation,
         "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);
    
    
    return redirect('/officer/acceptancedocument1')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function delacceptance($acceptance_id) {
    //ตรวจสอบข้อมูล 
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=acceptance::findOrFail($acceptance_id);

     if (File::exists("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$posts->filess)) {
         File::delete("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$posts->filess);
     }
    
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }



 


 public function editSupervise($advisor_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $advisors=advisor::find($advisor_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editSupervise',compact('advisors'));
     
 }

 public function   updateSupervise(Request $request,$advisor_id) {
    //ตรวจสอบข้อมูล 
    
    ///dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=advisor::findOrFail($advisor_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รอตรวจสอบ";
  
     // dd($post);
   
    $post->update
    ([
       "name" =>$request->name,
        
         "course"=>$request->course,
        "faculty"=>$request->faculty,
        
    ]);
    
    
    return redirect('/officer/Supervise')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function delSupervise($advisor_id) {
    //ตรวจสอบข้อมูล 
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=advisor::findOrFail($advisor_id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }
 

 public function editsupervision1($id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();  
      
     $supervisions=Event::find($id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
  //dd($supervisions);
     // dd($supervisions);
     return view('officer.edit.editsupervision',compact('supervisions'));
     
 }

 public function   updatesupervision1(Request $request,$id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=Event::findOrFail($id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รอตรวจสอบ";
  
     // dd($post);
   
    $post->update
    ([
       "term" =>$request->term,
       "title" =>$request->title,
         "start"=>$request->start,
        "end"=>$request->end,
        "year"=>$request->year,
        
    ]);
    
    
    return redirect('/officer/supervision')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function editschedule1($schedule_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();  
      
     $schedules=schedule::find($schedule_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
  //dd($supervisions);
     // dd($supervisions);
     return view('officer.edit.editschedule',compact('schedules'));
     
 }


 public function   updateschedule1(Request $request,$schedule_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=schedule::findOrFail($schedule_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รอตรวจสอบ";
  
     // dd($post);
   
    $post->update
    ([
       "term" =>$request->term,
       "title" =>$request->title,
         "start"=>$request->start,
        "end"=>$request->end,
        "year"=>$request->year,
        
    ]);
    
    
    return redirect('/officer/schedule')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function delschedule1($schedule_id) {
    //ตรวจสอบข้อมูล 
    
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=schedule::findOrFail($schedule_id);

    
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }


 public function editEvaluationdocument($Evaluationdocument_id) {
    //ตรวจสอบข้อมูล 
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $Evaluationdocuments=Evaluationdocument::find($Evaluationdocument_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editEvaluationdocuments',compact('Evaluationdocuments'));
     
 }

 public function   updateEvaluationdocument(Request $request,$Evaluationdocument_id) {
    //ตรวจสอบข้อมูล 
    
    //dd($request);
   
    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รอตรวจสอบ";
    // $post->Status ="รอตรวจสอบ";
   //dd($request->Status);
   $post=Evaluationdocument::findOrFail($Evaluationdocument_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รอตรวจสอบ";
   if($request->hasFile("files1")){
       if (File::exists("ไฟล์เอกสารประเมิน(สก.13)/".$post->files1)) {
           File::delete("ไฟล์เอกสารประเมิน(สก.13)/".$post->files1);
       } 
       $file=$request->file("files1");
        $post->files1=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.13)"),$post->files1);
        $request['files1']=$post->files1;
     // dd($post);
   }
   if($request->hasFile("files2")){
    if (File::exists("ไฟล์เอกสารประเมิน(สก.14)/".$post->files2)) {
        File::delete("ไฟล์เอกสารประเมิน(สก.14)/".$post->files2);
    } 
    $file=$request->file("files2");
     $post->files2=time()."_".$file->getClientOriginalName();
     $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.14)"),$post->files2);
     $request['files2']=$post->files2;
  // dd($post);
}
    $post->update
    ([
    //    "year" =>$request->year,
        //"establishment"=>$request->establishment,
        //  "term"=>$request->term,
        // "annotation"=>$request->annotation,
         "files1"=>$post->files1,
         "files2"=>$post->files2,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);
    
    
    return redirect('/officer/Evaluationdocuments')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function deleEvaluationdocument($Evaluationdocument_id) {
    //ตรวจสอบข้อมูล 
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();
     
    $posts=Evaluationdocument::findOrFail($Evaluationdocument_id);

     if (File::exists("ไฟล์เอกสารประเมิน(สก.13)/".$posts->files1)) {
         File::delete("ไฟล์เอกสารประเมิน(สก.13)/".$posts->files1);
     }

     if (File::exists("ไฟล์เอกสารประเมิน(สก.14)/".$posts->files2)) {
        File::delete("ไฟล์เอกสารประเมิน(สก.14)/".$posts->files2);
    }
    
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }
}