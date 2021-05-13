<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(Marres $attributes = [])
 * @method public Builder update(array $values)
 */
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
