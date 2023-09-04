<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Event;
use App\Models\schedule;
use App\Models\Evaluationdocument;
use App\Models\registers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\File;
use App\Models\test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


//studentHome


    public function studentHome()
    {

        return view('student.studenthome',["msg"=>"ยินดีต้อนรับนักศึกษา><"]);
    }

    public function personal()
    {
        return view('student.personal',["msg"=>"I am Editor role"]);
    }

    public function establishmentuser()
    {
        // $users=DB::table('users')->get();
        $users=DB::table('establishment')->paginate(5);
        // $users=users::paginate(5);
        return view('student.establishmentuser',compact('users'));
    }

    public function viewestablishmentuser($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);

         return view('student.viewestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    public function calendar()
    {
        return view('student.calendar',["msg"=>"I am student role"]);
    }

    public function timeline()
    {
        $all=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);

        return view('student.timeline',compact('all'));
    }
    public function registeruser()
    {
        //$registers=DB::table('registers')->paginate(5);
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);

        return view('student.register',compact('registers'));
    }

    public function acceptancedocument()
    {
        return view('student.acceptancedocument',["msg"=>"I am student role"]);
    }

    public function informdetails()
    {
        $informdetails=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);

        return view('student.informdetails',compact('informdetails'));
    }

     public function record()
    {
        return view('student.record',["msg"=>"I am student role"]);
    }

      public function report()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);
        return view('student.report',compact('report'));
    }

       public function listofteachers()
    {
        return view('student.listofteachers',["msg"=>"I am student role"]);
    }

    public function calendar2confirm()
    {
        $events=DB::table('events')
        ->join('users','events.user_id','users.id')
        ->select('events.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);
        return view('student.calendar2confirm',compact('events'));
    }

      public function calendar2(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('student.calendar2',['events' => $events]);
    }
    public function documents()
    {
        return view('student.documents',["msg"=>"I am student role"]);
    }



    // public function sendMessage(Request $request)
    // {
    //     $message["text"]="text";
    //     $message["text"]=$request->message;
    //     $line_msg["message"][0]=$message;
    //     $line_msg["to"][0]=$request->line_id;
    //     $this->putMessageLine($line_msg,'push');
    //     return response()->json9 ([
    //         'code'=>0,
    //         'status' =>'success',
    //         'msg'=>'ส่งข้อความเรียบร้อยแล้ว',
    //         'callFunction'=>'sendSuccess',
    //     ]);
        // return view('student.register',["msg"=>"I am student role"]);
    // }




    public function Home()
    {
        return view('welcome');
    }


// officerHome
    public function officerHome()
    {
        return view('officer.officerhome',["msg"=>"I am Editor role"]);
    }

    public function user1()
    {
        return view('officer.user1',["msg"=>"I am Editor role"]);
    }

    public function establishmentuser1()
    {
        $establishments=DB::table('establishment')->paginate(5);

        return view('officer.establishmentuser1',compact('establishments'),["msg"=>"I am Editor role"]);
    }


    public function searchestablishment(Request $request)
    {
        $request->validate([
            // 'query'=>'required|min:2'
         ]);
dd($request->$name);
         $search_text = $request->input('query');
         $countries = DB::table('establishment')
                    ->where('name','LIKE','%'.$search_text.'%')
                  //   ->orWhere('SurfaceArea','<', 10)
                  //   ->orWhere('LocalName','like','%'.$search_text.'%')
                    ->paginate(2);

        // return view('officer.establishmentuser1',compact('establishments'),["msg"=>"I am Editor role"]);
    }





    public function viewestablishment($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);

         return view('officer.viewestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    // public function editestablishmentuser1()
    // {
    //     // $establishments=DB::table('establishment')->paginate(5);

    //     return view('officer.editestablishmentuser1');
    // }

    #officer


    public function register1()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')
        ->paginate(5);

        return view('officer.register1',compact('registers'));
    }
    public function timeline2()
    {
        $timelines=DB::table('timeline')
        ->join('users','timeline.user_id','users.id')
        ->select('timeline.*','users.name')
        ->paginate(5);

        return view('officer.timeline2',compact('timelines'));
    }
    public function acceptancedocument1()
    {
        $acceptances=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->join('establishment','acceptance.establishment_id','establishment.id')
        ->select('acceptance.*','users.name','establishment.address')
        ->paginate(5);
        return view('officer.acceptancedocument1',compact('acceptances'));
    }
    public function informdetails2()
    {
        $informdetails=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.name')
        ->paginate(5);
        return view('officer.informdetails2',compact('informdetails'));
    }
    public function record2()
    {
        return view('officer.record2');
    }

    public function experiencereport2()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.name')
        ->paginate(5);

        return view('officer.experiencereport2',compact('report'));
    }
    public function assessmentreport2()
    {
        return view('officer.assessmentreport2');
    }
    public function advisor2()
    {
        return view('officer.advisor2');
    }
    public function practice()
    {
        return view('officer.practice');
    }
    public function documents2()
    {
        return view('officer.documents2');
    }
    public function Evaluate()
    {
        $supervision=DB::table('supervision')
        ->join('users','users.id','=','student_id',)
        ->join('establishment','establishment.id','=','establishment_id')
        ->select('supervision.*','users.name','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(5);
        return view('officer.Evaluate',compact('supervision'));
    }

    public function Supervise()
    {
        $advisors=DB::table('advisor')
        //->join('users','events.user_id','users.id')
        //->select('events.*','users.name')
        ->paginate(5);
        return view('officer.Supervise',compact('advisors'));
    }
    public function supervision()
    {
        $events=DB::table('events')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.name')
        ->paginate(5);
        return view('officer.supervision',compact('events'));
    }



    public function calendar5(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('officer.calendar4',['events' => $events]);
    }

    public function calendar6(Request $request)
    {

        $events = array();
        $bookings = schedule::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('officer.calendar6',['events' => $events]);
    }


    public function schedule()
    {
        $schedules=DB::table('schedule')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.name')
        ->paginate(5);
        return view('officer.schedule',compact('schedules'));
    }

    public function Evaluationdocuments()
    {
        $evaluationdocuments=DB::table('evaluationdocument')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.name')
        ->paginate(5);
        return view('officer.Evaluationdocuments',compact('evaluationdocuments'));
    }







// teacherHome
    public function teacherHome()
    {
        return view('teacher.teacherhome',["msg"=>"I am teacher role"]);
    }
    public function documents1()
    {
        $documents=DB::table('documents')
        // ->join('users','report.user_id','users.id')
        // ->select('report.*','users.name')
        ->paginate(5);

        return view('teacher.documents1',compact('documents'));
    }
    public function timeline1()
    {
        $timelines=DB::table('timeline')
        ->join('users','timeline.user_id','users.id')
        ->select('timeline.*','users.name')
        ->paginate(5);
        return view('teacher.timeline1',compact('timelines'));
    }
    public function informdetails1()
    {
        $informdetails=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.name')
        ->paginate(5);

        //return view('student.informdetails',compact('informdetails'));

        return view('teacher.informdetails1',compact('informdetails'));
    }
    public function record1()
    {
        return view('teacher.record1');
    }
    public function listofteachers1()
    {
        return view('teacher.listofteachers1');
    }
    public function estimate1()
    {
        $supervision=DB::table('supervision')
        ->join('users','users.id','=','student_id',)
        ->join('establishment','establishment.id','=','establishment_id')
        ->select('supervision.*','users.name','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(5);
        return view('teacher.estimate1',compact('supervision'));
    }
    public function advisor1()
    {
        return view('teacher.advisor1');
    }
    public function reportresults1()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.name')
        ->paginate(5);
        return view('teacher.reportresults1',compact('report'));
    }

    public function registeruser1()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')
        ->paginate(5);
        return view('teacher.register',compact('registers'));
    }

    public function calendar3(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('teacher.calendar2',['events' => $events]);
    }

    public function calendar4(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('teacher.calendar',['events' => $events]);
    }








    public function adminHome()
    {
        // $users=DB::table('users')->get();
      //  $users=Users::get();
       // $users = Users::select(DB::raw("COUNT(*) as count")
       // , DB::raw("MONTHNAME(created_at) as month_name"))
                   // ->whereYear('created_at', date('Y'))
                   //->groupBy(DB::raw("Month(created_at)"))
                   // ->pluck('count', 'month_name');
                    //->get();
                   // $users=DB::table('registers')

                    //->select(DB::raw("COUNT(*)(created_at)id"))
                   // ->select(DB::raw("COUNT(created_at),id"))
                   // -> whereYear('created_at', date('Y'))
                   // ->groupBy('created_at')
                   // ->pluck('id', 'created_at');

                  // ->groupBy('id')
                   // ->orderBy('created_at','desc')
                   // ->get();
            //      //->paginate(5);
       // $labels = $users->keys();

//  $users = registers::selectraw('MONTH(created_at)as month,COUNT(*) as count')
//    -> whereYear('created_at', date('Y'))
//  ->groupBy('month')
//   ->orderBy('month')
//   ->get();

// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
//                     ->whereYear('created_at', date('Y'))
//                     ->groupBy(DB::raw("Month(created_at)"))
//                     ->pluck('count', 'month_name');

// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("YEAR_NAME(created_at) as year_name"))

//     ->whereYear('created_at', date('Y'))
//     ->groupBy(DB::raw("YEAR(created_at)"))
//     ->pluck('count', 'year_name');



// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
// ->whereYear('created_at', date('Y'))
// ->groupBy(DB::raw("Month(created_at)"))
// ->pluck('count', 'month_name');

$users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("YEAR(created_at) as year_name"))
    //->whereYear('created_at', date('Y'))
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');

// $labels = $users->keys()->map(function ($month) {
//     return Carbon::createFromDate(null, $month, null)->format('F Y');
// });

// $labels = $users->keys()->map(function ($monthName) {
    //     return ucfirst($monthName);
    // });
  //dd($users);
 //year
 //YEAR
       $labels = $users->keys();
        //$data = $users->values();
        $data = $users->values();
        return view('admin.adminhome',compact('users'), compact('labels','data'),["msg"=>"I am Admin role"]);

    }

    public function user()
    {
        $users=DB::table('users')
         -> where('role','student')
        // ->orWhere('role', '=', 'test')
        //-> where('role','1',)
        ->orWhere('role', '=', '0')
        ->paginate(5);
        //->get();
        #แสดงข้อมูลเฉพาะ
        // $users = DB::table('users')->where('role', 'student')->get();
        // $users=Users::get();
        return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);

    }

    public function changeStatus(Request $request)
    {
        $user = Users::find($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
    public function updateStatus(Request $request)
    {
        dd($request);
        $product = Users::find($request->id);
        $product->role = $request->role;
        $product->save();
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function edituser($id)
    {
        $users=Users::find($id);
        return view('admin.edituser',compact('users'),["msg"=>"I am Admin role"]);

    }

    public function test(Request $request)
    {
        // $users=DB::table('users')->get();
        //$users=Users::get();

        if($request->ajax()) {
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            return response()->json($data);
        }

        return view('student.test',["msg"=>"I am student role"]);

    }

    public function test2(Request $request)
    {
        // $users=DB::table('users')->get();
       // $path = public_path('test/');
//dd($request);
    // if(!File::isDirectory($path)){
    //     File::makeDirectory($path, 0777, true, true);


    // }
//     if($request->hasFile("files")){
//         $file=$request->file("files");
//          $imageName=time().'_'.$file->getClientOriginalName();
//         $file->move(\public_path("/fileinformdetails"),$imageName);
//     }
//     ([


//            "name" =>$request->name,

//       ]);
//     $path = public_path().'/test'.$request->name ;
// File::makeDirectory($path, $mode = 0777, true, true);
   return view('student.test',["msg"=>"I am student role"]);
    }


    public function test1(Request $request){
        // $ch =curl_init("https://notify-api.line.me/api/notify")
        // $authorization ="Authorization: Bearer"('line_token');
        // $payload = json_encode($line_mge);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);

        // curl_setopt($ch, CURLOPT_HTTPHEADER,$array('Content-Type:application/json',$authorization));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        // $result=curl_exec($ch);
        // curl_exec($ch);
        // $line_token = "NnBcVp0RwWJZsbE7GTdjE96g3F68wxz1KANBrOSTf80";
//    dd($request->message1);

		$request->validate([
			'message1' => 'required'



		]);

    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");
    // QCMCPw8g9sW980Gz3OkyjGA3qQI6mljDIQ581rXgQcs
	$sToken = "QCMCPw8g9sW980Gz3OkyjGA3qQI6mljDIQ581rXgQcs";
	$sMessage = "มีรายการสั่งซื้อเข้าจ้า....";
    $sMessage .= "มีรายการสั่งซื้อเข้าจ้า....".$request->message1."\n";

	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $chOne, CURLOPT_POST, 1);
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );
    return redirect('/studenthome/test')->with('success', 'สมัครสำเร็จ.');
    // if($result){
    //     $
    // }
	//Result error
	if(curl_error($chOne))
	{
		echo 'error:' . curl_error($chOne);
	}
	else {
		$result_ = json_decode($result, true);
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	}
	curl_close( $chOne );
   }



    public Model $model;
    public string $field;

    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toggle-switch');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }






    public function cooperative()
    {
        return view('cooperative.cooperative',["msg"=>"I am Admin role"]);

    }


    public function establishment()
    {

        $establishments=DB::table('establishment') ->orderBy('name','desc')
        //->pluck('name')
   // ->implode(', ');
        //->select('name')
        ->paginate(6);
        //->get();
        //  dd($establishments);
         // $users=DB::table('users')->get();

        return view('cooperative.establishment',compact('establishments'));

    }


    public function changeStatus2(Request $request)
    {
     // dd();
        $user = test::find($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function changeStatus1()
    {
        $establishments=DB::table('test')->get();

        return view('test4',compact('establishments'));

    }

    public function test6()
    {
        $establishments=DB::table('test')->get();

        return view('test6',compact('establishments'));

    }



}
?>
