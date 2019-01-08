<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function projects()
	{
		return $this->belongsToMany(Project::class);
	}

	public function technologiesCategory()
	{
		return $this->hasOne(TechnologyCategory::class);
	}
}
