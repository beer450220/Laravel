<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class users extends Authenticatable
{
    use HasFactory;

    public $table="users";
    public$primarykey="id";
    protected $fillable=[
        'username',
        'GPA',
        'images',
        'Status',
        'establishment'
    ];
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
