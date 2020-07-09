<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для соответствий пола и пользователя
 *
 * Class SexView
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id
 * @property int $sex_id
 */
class SexView extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'sex_id',
    ];
}
