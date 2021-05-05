<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorikPorosi extends Model
{
    use HasFactory;

    public $status_porosi_id;
    public $status_id;
    public $magazine_id;
    public $perdorues_id;
    public $data_krijimit;

    protected $fillable = [
        'status_porosi_id',
        'status_id',
        'magazine_id',
        'perdorues_id',
        'data_krijimit'
    ];
}
