<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeDiscount extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function procedures() {
		return $this->hasMany(Procedure::class);
	}
}