<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * Get the category that own products.
     */
    public function catgeory()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
