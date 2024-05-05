<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $table ='message';
    protected $primartkey ='id';
    protected $fillable =['id','name','email','subject','message'];
}
