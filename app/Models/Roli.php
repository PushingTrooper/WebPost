<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roli extends Model
{
    use HasFactory;

    public $rol_id;
    public $emer;

    protected $fillable = [
        'rol_id',
        'emer'
    ];
}
