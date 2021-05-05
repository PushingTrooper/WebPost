<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qytet extends Model
{
    use HasFactory;

    public $qytet_id;
    public $shtet_id;
    public $emer;

    protected $fillable = [
        'qytet_id',
        'shtet_id',
        'emer'
    ];
}
