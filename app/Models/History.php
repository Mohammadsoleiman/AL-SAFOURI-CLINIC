<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class History extends Model
{
    use HasFactory;
    protected $table ='patienthistory';
    protected $primartkey ='id';
    protected $fillable =['id','pid','did','date','time','detail'];
    public function doctor()
{
    return $this->belongsTo(User::class, 'did');
}
}
