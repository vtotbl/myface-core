<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для пола
 *
 * Class Sex
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Sex extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
