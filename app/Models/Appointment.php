<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table ='appointment';
    protected $primartkey ='id';
    protected $fillable =['id','pid','did','date','time','specialty'];
    public function app(){
        return $this->belongsTo(User::class);
    }
}

