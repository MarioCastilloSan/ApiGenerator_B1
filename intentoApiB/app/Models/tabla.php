<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla extends Model
{
    use HasFactory;

    //---SELECT TABLE_NAME from Information_Schema.Tables where table_type = 'BASE TABLE'--
    //protected $tabla = 'INFORMATION_SCHEMA.TABLES';
    protected $table = 'Information_Schema.Tables';


    //lo siguiente es Opcional
    protected  $fillable = ['TABLE_NAME'];

    protected $hidden = ['TABLE_CATALOG','TABLE_SCHEMA', 'TABLE_TYPE'];


    //TABLE_CATALOG	"prueba"
    //TABLE_SCHEMA	"dbo"
    //TABLE_NAME	"migrations"
    //TABLE_TYPE

    //Determinamos la tabla : protected $table = [''];
    //Determinamos los campos de la tabla: protected $fillable = [''];
    //Ocultar los campos de la tabla: protected $hidden = [''];

}
