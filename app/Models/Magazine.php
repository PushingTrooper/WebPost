<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    public $magazine_id;
    public $emer;
    public $latitude;
    public $longitude;

    protected $fillable = [
        'magazine_id',
        'emer',
        'latitude',
        'longitude'
    ];
}
