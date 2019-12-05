<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_type';

    /**
     * Get the users for the userType.
     */
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
