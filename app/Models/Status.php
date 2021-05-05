<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $status_id;
    public $status;

    protected $fillable = [
        'status_id',
        'status'
    ];
}
