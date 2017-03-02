<?php

namespace App;

class Post extends Model
{
	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}
}
