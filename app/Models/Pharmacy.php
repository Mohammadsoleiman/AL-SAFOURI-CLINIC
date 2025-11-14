<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pharmacy extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table ='pharmacy';
    protected $primartkey ='id';
    protected $fillable =['id','name','production_date','end_date','amount','price'];

    public function dollar()
    {
        return $this->price. "L.L";
    }
}
