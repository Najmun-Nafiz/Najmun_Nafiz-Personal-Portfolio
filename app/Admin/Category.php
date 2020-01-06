<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function portfolio()
    {
    	return $this->hasMany('App\Admin\Portfolio');
    }
}
