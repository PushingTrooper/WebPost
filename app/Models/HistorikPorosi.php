<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(HistorikPorosi $attributes = [])
 * @method public Builder update(array $values)
 */
class HistorikPorosi extends Model
{
    use HasFactory;

    public $status_porosi_id;
    public $porosi_id;
    public $status_id;
    public $magazine_id;
    public $perdorues_id;
    public $data_krijimit;

    protected $fillable = [
        'status_porosi_id',
        'porosi_id',
        'status_id',
        'magazine_id',
        'perdorues_id',
        'data_krijimit'
    ];
}
