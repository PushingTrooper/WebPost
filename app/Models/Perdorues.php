<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perdorues extends Model
{
    use HasFactory;

    public $perdorues_id;
    public $magazine_id;
    public $rol_id;
    public $qytet_id;
    public $email;
    public $password;
    public $emri;
    public $mbiemri;
    public $paga;
    public $foto_profili;
    public $adrese;
    public $latitude;
    public $longitude;
    public $kerkuar_ndryshim_fjalekalimi;

    protected $fillable = [
        'perdorues_id',
        'magazine_id',
        'rol_id',
        'qytet_id',
        'email',
        'emri',
        'mbiemri',
        'paga',
        'foto_profili',
        'adrese',
        'latitude',
        'longitude',
        'kerkuar_ndryshim_fjalekalimi'
    ];
}
