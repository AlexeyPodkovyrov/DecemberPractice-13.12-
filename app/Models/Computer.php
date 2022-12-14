<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Computer extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = [       
        'updated_at',
        'deleted_at',
    ];


    public function processors()
    {
        return $this->hasMany(Processor::class);
    }

    public function memories()
    {
        return $this->hasMany(Memory::class);
    }

    public function monitors()
    {
        return $this->hasMany(Monitor::class);
    }

    public function storages()
    {
        return $this->hasMany(DataStorage::class);
    }

    public function bios()
    {
        return $this->hasOne(Bios::class);
    }

    public function videocards()
    {
        return $this->hasMany(Videocard::class);
    }

    public function motherboards()
    {
        return $this->hasMany(Motherboard::class);
    }

	public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
