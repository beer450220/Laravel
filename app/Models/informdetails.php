<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informdetails extends Model
{
    use HasFactory;
    // public $incrementing = false;
    protected $primaryKey = 'informdetails_id';
    protected $table="informdetails";
    // protected $primarykey = "";
    protected $fillable=[
        'user_id',
        'files',
        'establishment',
        //'Status',
        "annotation" ,
        
         "Status_informdetails",
    ];
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
