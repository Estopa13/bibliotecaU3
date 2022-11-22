<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
   // use HasFactory;

    protected  $table="clasificaciones";
    protected $primaryKey="id_clasificacion";
    protected $fillable=['id_clasificacion','desc_c'];

    public $timestamps= false;
}
