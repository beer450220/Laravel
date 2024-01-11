<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
class Event extends Model
{
    use HasFactory;
    protected $table ='events';
    protected $fillable = ['title','start','end','term','year','Statustime', 'student_name','establishment_name'];
}
