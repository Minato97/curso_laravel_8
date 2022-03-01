<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Curso extends Model
{
    use HasFactory;

//    protected $table = 'cursos';
//    protected $fillable = [
//        'name',
//        'slug',
//        'descripcion',
//        'categoria'
//    ];

    protected $guarded = ['status'];


    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';
    }
}
