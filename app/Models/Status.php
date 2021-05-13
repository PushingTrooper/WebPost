<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(Status $attributes = [])
 * @method public Builder update(array $values)
 */
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
