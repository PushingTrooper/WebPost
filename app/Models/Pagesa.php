<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagesa extends Model
{
    use HasFactory;

    public $pagese_id;
    public $shuma;
    public $kryer;
    public $nga_derguesi;
    public $data_pagimit;

    protected $fillable = [
        'pagese_id',
        'shuma',
        'kryer',
        'nga_derguesi',
        'data_pagimit'
    ];
}
