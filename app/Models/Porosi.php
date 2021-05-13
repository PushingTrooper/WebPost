<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(Porosi $attributes = [])
 * @method public Builder update(array $values)
 */
class Porosi extends Model
{
    use HasFactory;

    public $porosi_id;
    public $pagese_id;
    public $marres_id;
    public $gjurmim_id;
    public $tipi;
    public $tipi_dergeses;
    public $koment;

    protected $fillable = [
        'porosi_id',
        'pagese_id',
        'marres_id',
        'gjurmim_id',
        'tipi',
        'tipi_dergeses',
        'koment'
    ];
}
