<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establishment extends Model
{
    use HasFactory;
    public $table="establishment";
    public$primarykey="id";
    protected $fillable=[
        'address',
        'name',
        'phone',
        'images',
    ];
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
