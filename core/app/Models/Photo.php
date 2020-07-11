<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Сущность для фотографии
 *
 * Class Photo
 * @package App\Models
 *
 * @property int $id
 * @property int $user_id
 * @property string $path
 * @property Carbon $uploaded_at
 * @property bool $is_active
 */
class Photo extends Model
{
    const CREATED_AT = 'uploaded_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'path',
        'uploaded_at',
        'is_active',
    ];

    /**
     * Атрибуты, которые должны быть преобразованы к датам.
     *
     * @var array
     */
    protected $dates = [
        'uploaded_at',
    ];

    /**
     * @return string|null
     */
    public function getUpdatedAtColumn() {
        return null;
    }
}
