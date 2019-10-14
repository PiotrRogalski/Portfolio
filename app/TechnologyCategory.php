<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnologyCategory extends Model
{
    public function technologies()
	{
		return $this->hasMany(Technology::class, 'category_id');
	}
}
