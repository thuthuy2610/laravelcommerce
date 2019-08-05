<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

	protected $table = 'order';
	public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
