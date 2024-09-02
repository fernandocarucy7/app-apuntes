<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $casts = [
        'apuntes' => 'array',
        'referencias' => 'array',
    ];

    protected function titulo(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    protected function apuntes(): Attribute
    {
        return Attribute::make(
            set: function($cadena) {
                $cadena = str_replace(["\r", "\n"], '', $cadena);
                $array = explode(',', $cadena);
                return json_encode($array);
            }
        );
    }
    protected function referencias(): Attribute
    {
        return Attribute::make(
            set: function($cadena) {
                $cadena = str_replace(["\r", "\n"], '', $cadena);
                $array = explode(',', $cadena);
                return json_encode($array);
            }
        );
    }
}
