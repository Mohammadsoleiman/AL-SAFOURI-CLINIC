<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class X_ray extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table ='x-ray';
    protected $primartkey ='id';
    protected $fillable =['id','name','phone','date','time'];

}
