<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MissionReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission_report_id',
        'mission_id', //foreign id
        'report_text'

    ];

    // Relationships

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }

    public function missionLeader()
    {
        return $this->belongsTo(User::class, 'mission_leader_id');
    }
}
