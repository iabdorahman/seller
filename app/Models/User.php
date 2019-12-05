<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    /**
     * Get the user_type that own users.
     */
    public function userType()
    {
        return $this->belongsTo('App\Models\UserType');
    }
    
}
