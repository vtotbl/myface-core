<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Сущность для жалобы
 *
 * Class Report
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id
 * @property int $photo_id
 * @property int $cause_id
 * @property Carbon $created_at
 */
class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'photo_id',
        'cause_id',
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
