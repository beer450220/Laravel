<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    public $table="users";
    public$primarykey="id";
    
    public function Users(){
        return $this->hasOne(Users::class,'id','name');
    }
}
