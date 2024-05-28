<?php

namespace App\Models;

use App\Models\Budget;
use App\Models\MissionReport;
use App\Models\MissionAssignment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;

    // protected $fillables = [
    //     'description',
    //     'location',
    //     'date',

    // ];

    protected $guarded = [
        'id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'mission_assignments');
    }

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }

    public function missionAssignments()
    {
        return $this->hasMany(MissionAssignment::class);
    }

    public function missionReport()
    {
        return $this->hasOne(MissionReport::class);
    }
}
