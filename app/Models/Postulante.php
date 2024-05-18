<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Postulante extends Model
{
    use HasFactory;

    protected $table = "Postulantes";
    protected $primaryKey = 'idPostulante';

    protected $fillable = [
        'nombrePostulante',
        'carreraProcedenciaPostulante',
        'institucionProcedenciaPostulante',
    ];

    public $timestamps = true;
}
