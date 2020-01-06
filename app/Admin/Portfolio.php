<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Admin\Category');
    }
}
