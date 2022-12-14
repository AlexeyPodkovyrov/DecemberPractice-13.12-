<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = [       
        'updated_at',
        'deleted_at',
    ];
	
	public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
