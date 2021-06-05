<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(Pagesa $attributes = [])
 * @method public Builder update(array $values)
 */
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
