<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Сущность для групп
 *
 * Class Group
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Group extends Model
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
