<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro_nacimiento extends Model
{
    use HasFactory;

    use HasFactory;

    public $table='registro_nacimientos';
    public $timestamps=false;
    protected $fillable =[
        'id', 'nombre','peso','fecha_hora_nacimiento','color_de_ojos',"lunares",
    ];

    protected $primaryKey = 'id';
}
