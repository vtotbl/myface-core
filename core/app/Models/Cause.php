<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для причин жалоб
 *
 * Class Cause
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Cause extends Model
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
