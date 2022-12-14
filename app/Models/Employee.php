<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = [       
        'updated_at',
        'deleted_at',
    ];
	
	public function computer()
    {
        return $this->hasMany(Computer::class);
    }
	
	public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
