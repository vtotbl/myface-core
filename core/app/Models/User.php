<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * Сущность для пользователя
 *
 * Class User
 * @package App\Models
 *
 * @property int $id
 * @property string $login
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property int $sex_id
 * @property Carbon $date_birth
 * @property Carbon $premium_stop_date
 * @property int $group_id
 * @property bool $is_banned
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы к датам.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'premium_stop_date',
        'date_birth',
        'email_verified_at',
    ];
}
