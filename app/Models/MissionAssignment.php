<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MissionAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission_id',
        'member_id',
    ];

    // Relationships

    public function mission()
    {
        return $this->hasMany(Mission::class);
    }

    public function member()
    {
        return $this->hasMany(User::class);
    }

    // // members
    // public function members()
    // {
    //     return $this->belongsToMany(User::class, 'mission_assignments', 'mission_id', 'member_id');
    // }
}
