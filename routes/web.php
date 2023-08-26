<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FileController;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('companies', CompanyCRUDController::class);
Route::get('/', function () {
    return view('welcome');
});
// Route::resource('auth.register1', registerController::class);
Route::get('/register1', [registerController::class,'index'])->name('register1');
Route::post('/register1/add', [registerController::class,'register2'])->name('register2');


Route::get('/establishment', [HomeController::class,'establishment'])->name('establishment');
Route::get('/cooperative', [HomeController::class,'cooperative'])->name('cooperative');

Route::get('/test4', function () {
    return view('test4');
});

// Route::resource('register1', registerController::class);
// {
//     return view('auth.Register1');
// };

// Auth::routes();
// // User Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/studenthome",[HomeController::class,'userHome'])->name('student.studenthome');
// });
/** set active sidebar */
function set_active($route) {
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Auth::routes();
// student Route
Route::middleware(['auth','user-role:student'])->group(function()
{
    Route::get("/studenthome",[HomeController::class,'studentHome'])->name('student.studenthome');
    Route::get("/studenthome/edituser1/{id}",[EditController::class,'edituser1'])->name('edituser1');
        

     Route::get("/studenthome/test",[HomeController::class,'test'])->name('test');
     Route::post("/studenthome/test",[HomeController::class,'test2'])->name('test2');

    Route::get("/studenthome/establishmentuser",[HomeController::class,'establishmentuser'])->name('student.establishmentuser');
    Route::get('/studenthome/view/{id}', [HomeController::class,'viewestablishmentuser'])->name('viewestablishmentuser');
    Route::get("/studenthome/calendar",[HomeController::class,'calendar'])->name('student.calendar');

    Route::get("/studenthome/register",[HomeController::class,'registeruser'])->name('student.register');
    Route::get("/studenthome/edit/{id}",[EditController::class,'editregisteruser'])->name('editregisteruser');
    Route::post("/studenthome/update/{id}",[EditController::class,'updateregisteruser'])->name('updateregisteruser');
    Route::get('/studenthome/delete/{id}', [EditController::class,'delregister'])->name('delregister');
    Route::post("/studenthome/addregisteruser",[AddController::class,'addregisteruser'])->name('addregisteruser');

    Route::post("/studenthome/register",[AddController::class,'sregister2'])->name('sregister2');
    

    Route::post('/register1/add', [AddController::class,'register2'])->name('register2');
    Route::get("/studenthome/timeline",[HomeController::class,'timeline'])->name('student.timeline');

    Route::get("/studenthome/documents",[HomeController::class,'documents'])->name('student.documents');

    Route::get("/studenthome/informdetails",[HomeController::class,'informdetails'])->name('student.informdetails');
    Route::post("/studenthome/add",[AddController::class,'addinformdetails'])->name('addinformdetails');
    Route::get("/studenthome/editinformdetails/{informdetails_id}",[EditController::class,'editinformdetails'])->name('editinformdetails');
    Route::post("/studenthome/updateinformdetails/{informdetails_id}",[EditController::class,'updateinformdetails'])->name('updateinformdetails');
    Route::get('/studenthome/deleteinformdetails/{informdetails_id}', [EditController::class,'delinformdetails'])->name('delinformdetails');


    Route::get("/studenthome/record",[HomeController::class,'record'])->name('student.record');
    
    Route::get("/studenthome/report",[HomeController::class,'report'])->name('student.report');
    Route::post("/studenthome/addreport",[AddController::class,'addreport'])->name('addreport');
    Route::get("/studenthome/editreport/{report_id}",[EditController::class,'editreport'])->name('editreport');
    Route::post("/studenthome/updatereport/{report_id}",[EditController::class,'updatereport'])->name('updatereport');
    Route::get('/studenthome/deletereport/{report_id}', [EditController::class,'delreport'])->name('delreport');


    Route::get("/studenthome/listofteachers",[HomeController::class,'listofteachers'])->name('student.listofteachers');
    
    Route::get("/studenthome/calendar2",[HomeController::class,'calendar2'])->name('student.calendar2');
    Route::get("/studenthome/calendar2confirm",[HomeController::class,'calendar2confirm'])->name('calendar2confirm');
    Route::get("/studenthome/calendar2confirmedit/{id}",[EditController::class,'calendar2confirmedit'])->name('calendar2confirmedit');
    Route::post("/studenthome/updatecalendar2confirm/{id}",[EditController::class,'updatecalendar2confirm'])->name('updatecalendar2confirm');
    Route::post("/studenthome/calendar2add/{id}",[AddController::class,'calendar2add'])->name('calendar2add');

    Route::get("/studenthome/acceptancedocument",[HomeController::class,'acceptancedocument'])->name('student.acceptancedocument');
});


// officer Route
Route::middleware(['auth','user-role:officer'])->group(function()
{
    Route::get("/officer/home",[HomeController::class,'officerHome'])->name('officer.officerhome');
    Route::get("/officer/user1",[HomeController::class,'user1'])->name('officer.user1');

    Route::get("/officer/establishmentuser1",[HomeController::class,'establishmentuser1'])->name('officer.establishmentuser1');
    Route::post('/officer/establishmentuser1', [AddController::class,'addestablishment'])->name('addestablishment');
    Route::get('/officer/establishmentuser1/{id}', [EditController::class,'editestablishment'])->name('editestablishment');
 // Route::post('/officer/update/{id}', [EditController::class,'updateestablishment'])->name('updateestablishment');   
    Route::post('/officer/update/{id}', [EditController::class,'updateestablishment'])->name('updateestablishment');
    Route::get('/officer/delete/{id}', [EditController::class,'delestablishment'])->name('delestablishment');
    Route::delete('/deleteimage/{id}',[EditController::class,'deleteimage'])->name('deleteimage');
    Route::get('/officer/view/{id}', [HomeController::class,'viewestablishment'])->name('viewestablishment');
    Route::get('/officer/search', [HomeController::class,'searchestablishment'])->name('searchestablishment');


    Route::get("/officer/register1",[HomeController::class,'register1'])->name('officer.register1');
    Route::get("/officer/editregister1/{id}",[EditController::class,'editregister1'])->name('editregister1');
    Route::post("/officer/updateregister1/{id}",[EditController::class,'updateregister1'])->name('updateregister1');



    Route::get("/officer/timeline2",[HomeController::class,'timeline2']);
    Route::get("/officer/viwetimeline2/{timeline_id}",[EditController::class,'viwetimeline2'])->name('viwetimeline2');

    Route::get("/officer/acceptancedocument1",[HomeController::class,'acceptancedocument1']);
    Route::get("/officer/addacceptancedocument1",[addController::class,'addacceptancedocument1'])->name('addacceptancedocument1');
    Route::post("/officer/addacceptancedocument1",[addController::class,'addacceptancedocument'])->name('addacceptancedocument');
    Route::get("/officer/editacceptancedocument1/{acceptance_id}",[EditController::class,'editacceptance'])->name('editacceptance');
    Route::post("/officer/updateacceptance/{acceptance_id}",[EditController::class,'updateacceptance'])->name('updateacceptance');
    Route::get('/officer/deletacceptance/{acceptance_id}', [EditController::class,'delacceptance'])->name('delacceptance');


    Route::get("/officer/informdetails2",[HomeController::class,'informdetails2']);
    Route::get("/officer/editinformdetails2/{informdetails_id}",[EditController::class,'editinformdetails2'])->name('editinformdetails2');
    Route::post("/officer/updateinformdetails2/{informdetails_id}",[EditController::class,'updateinformdetails2'])->name('updateinformdetails2');
    
    Route::get("/officer/record2",[HomeController::class,'record2']);

    Route::get("/officer/experiencereport2",[HomeController::class,'experiencereport2']);
    Route::get("/teacher/editexperiencereport2/{report_id}",[EditController::class,'editexperiencereport2'])->name('editexperiencereport2');
    Route::post("/teacher/updateexperiencereport2/{report_id}",[EditController::class,'updateexperiencereport2'])->name('updateexperiencereport2');
   
   
    Route::get("/officer/assessmentreport2",[HomeController::class,'assessmentreport2']);
    Route::get("/officer/advisor2",[HomeController::class,'advisor2']);
    Route::get("/officer/practice",[HomeController::class,'practice']);
    Route::get("/officer/documents2",[HomeController::class,'documents2']);

    Route::get("/officer/Evaluate",[HomeController::class,'Evaluate']);
    Route::get("/officer/editEvaluate/{supervision_id}",[EditController::class,'editEvaluate'])->name('editEvaluate');
    Route::post("/officer/updateEvaluate/{supervision_id}",[EditController::class,'updateEvaluate'])->name('updateEvaluate');
   
    
    
    Route::get("/officer/Supervise",[HomeController::class,'Supervise']);
    Route::get("/officer/addSupervise",[addController::class,'addSupervise'])->name('addSupervise');
    Route::post("/officer/addSupervise1",[addController::class,'addSupervise1'])->name('addSupervise1');
    Route::get("/officer/editSupervise/{advisor_id}",[EditController::class,'editSupervise'])->name('editSupervise');
    Route::post("/officer/updatSupervise/{advisor_id}",[EditController::class,'updateSupervise'])->name('updatSupervise');
    Route::get('/officer/deletSupervise/{advisor_id}', [EditController::class,'delSupervise'])->name('delSupervise');




    Route::get("/officer/supervision",[HomeController::class,'supervision']);
    Route::get('/officer/pdf', [FileController::class, 'createPDF'])->name('createPDF');
    Route::get('/officer/Excel', [FileController::class, 'export'])->name('export');

    Route::get("/officer/addsupervision",[addController::class,'addsupervision'])->name('addsupervision');
    Route::post("/officer/addsupervision1",[addController::class,'addsupervision1'])->name('addsupervision1');
    Route::get("/officer/editsupervision1/{id}",[EditController::class,'editsupervision1'])->name('editsupervision1');
    Route::post("/officer/updatesupervision1/{id}",[EditController::class,'updatesupervision1'])->name('updatesupervision1');
   
    Route::get('/officer/deletacceptance/{acceptance_id}', [EditController::class,'delacceptance'])->name('delacceptance');

    Route::get("/officer/calendar5",[HomeController::class,'calendar5']);
    Route::get("/officer/calendar6",[HomeController::class,'calendar6']);

    
    

    Route::get("/officer/schedule",[HomeController::class,'schedule']);

    Route::get("/officer/addschedule",[addController::class,'addschedule'])->name('addschedule');
    Route::post("/officer/addschedule1",[addController::class,'addschedule1'])->name('addschedule1');
    Route::get("/officer/editschedule1/{schedule_id}",[EditController::class,'editschedule1'])->name('editschedule1');
    Route::post("/officer/updateschedule1/{schedule_id}",[EditController::class,'updateschedule1'])->name('updateschedule1');
   
    Route::get('/officer/deleschedule1/{schedule_id}', [EditController::class,'delschedule1'])->name('delschedule1');

    Route::get("/officer/Evaluationdocuments",[HomeController::class,'Evaluationdocuments']);

    Route::get("/officer/addEvaluationdocuments",[addController::class,'addEvaluationdocuments'])->name('addEvaluationdocuments');
    Route::post("/officer/addEvaluationdocument",[addController::class,'addEvaluationdocument'])->name('addEvaluationdocument');
    Route::get("/officer/editEvaluationdocument/{Evaluationdocument_id}",[EditController::class,'editEvaluationdocument'])->name('editEvaluationdocument');
    Route::post("/officer/updateEvaluationdocument/{Evaluationdocument_id}",[EditController::class,'updateEvaluationdocument'])->name('updateEvaluationdocument');
   
    Route::get('/officer/deleEvaluationdocument/{Evaluationdocument_id}', [EditController::class,'deleEvaluationdocument'])->name('deleEvaluationdocument');


});


// teacher Route
Route::middleware(['auth','user-role:teacher'])->group(function()
{
    Route::get("/teacher/home",[HomeController::class,'teacherHome'])->name('teacher.teacherhome');
    Route::get("/teacher/documents1",[HomeController::class,'documents1'])->name('teacher.documents1');

    Route::get("/teacher/timeline1",[HomeController::class,'timeline1'])->name('teacher.documents1');
    Route::get("/teacher/viwetimeline/{timeline_id}",[EditController::class,'viwetimeline'])->name('viwetimeline');

    Route::get("/teacher/informdetails1",[HomeController::class,'informdetails1'])->name('teacher.informdetails1');
    Route::get("/teacher/viewinformdetails1/{informdetails_id}",[EditController::class,'viewinformdetails1'])->name('viewinformdetails1');

    Route::get("/teacher/record1",[HomeController::class,'record1'])->name('teacher.record1');
    Route::get("/teacher/listofteachers1",[HomeController::class,'listofteachers1'])->name('teacher.listofteachers1');
   
    Route::get("/teacher/estimate1",[HomeController::class,'estimate1'])->name('teacher.estimate1');
    Route::get("/teacher/addestimate1",[addController::class,'addestimate1'])->name('addestimate1');
    Route::post("/teacher/addestimate",[addController::class,'addestimate'])->name('addestimate');
    Route::get("/teacher/editestimate1/{supervision_id}",[EditController::class,'editestimate1'])->name('editestimate1');
    Route::post("/studenthome/updateestimate1/{supervision_id}",[EditController::class,'updateestimate1'])->name('updateestimate1');

    Route::get("/teacher/calendar2",[HomeController::class,'calendar3'])->name('calendar3');

    Route::get("/teacher/calendar",[HomeController::class,'calendar4'])->name('calendar4');

    Route::get("/teacher/register",[HomeController::class,'registeruser1'])->name('registeruser1');
    Route::get("/teacher/viewregisters/{id}",[EditController::class,'viewregisters'])->name('viewregisters');
    
    Route::get("/teacher/advisor1",[HomeController::class,'advisor1'])->name('teacher.advisor1');
    Route::get("/teacher/reportresults1",[HomeController::class,'reportresults1'])->name('teacher.reportresults1');
    

});




// Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/adminhome",[HomeController::class,'adminHome' ])->name('admin.adminhome');
    
    Route::get("/user",[HomeController::class,'user'])->name('admin.user');
    Route::get("/user/adduser",[registerController::class,'index2'])->name('adduser2');
    Route::post("/user/add",[registerController::class,'adduser'])->name('adduser');
  
    Route::get("/user/edituser/{id}",[HomeController::class,'edituser'])->name('admin.edituser');
    Route::post("/user/updateuser/{id}",[EditController::class,'updateuser'])->name('updateuser');
    
    Route::get("/user1",[HomeController::class,'changeStatus'])->name('changeStatus');
   // Route::get('/status/update', [HomeController::class, 'updateStatus'])->name('update.status');
});


Route::controller(BasicController::class)->group(function () {
    Route::get('/tabelist', 'tabelist_fn');
    Route::get('/addlist', 'addlist_fn');
    Route::post('/addlist', 'postlist');
    Route::get('/deltel/{id}','deltel_fn');
   
    // Route::get('/edit/{id}','edit_fn');
    Route::post('/post_edit', 'post_edit_fn');
    
});