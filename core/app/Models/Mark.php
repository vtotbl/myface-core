<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Сущность для оценок
 *
 * Class Mark
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id
 * @property int $photo_id
 * @property int $mark
 * @property Carbon $created_at
 */
class Mark extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'photo_id',
        'mark',
        'created_at',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы к датам.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
    ];
}
