<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
