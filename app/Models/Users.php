<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class users extends Authenticatable
{
    use HasFactory;

    public $table="users";
    public $primarykey="user_id";
    protected $fillable=[
        'username',
        'user_id',
        'GPA',
        'images',
        'Status',
        'establishment'
    ];
    public function Users(){
        return $this->hasOne(Users::class,'user_id','name');
    }
}
