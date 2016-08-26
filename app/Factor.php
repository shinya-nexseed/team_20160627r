<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
	public function selectFactor($type){

		return $this->where('type', $type)->get();

	}
}
