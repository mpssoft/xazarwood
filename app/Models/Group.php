<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description','icon'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
