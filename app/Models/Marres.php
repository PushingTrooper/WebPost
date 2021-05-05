<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marres extends Model
{
    use HasFactory;

    public $marres_id;
    public $qytet_id;
    public $emer;
    public $mbiemer;
    public $adrese;

    protected $fillable = [
        'marres_id',
        'qytet_id',
        'emer',
        'mbiemer',
        'adrese'
    ];
}
