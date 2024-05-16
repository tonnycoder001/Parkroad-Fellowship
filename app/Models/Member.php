<?php

namespace App\Models;

use App\Models\MissionReport;
use App\Models\PrayerRequest;
use App\Models\MembershipStatus;
use App\Models\MissionAssignment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'user_id',   //foreign
        'first_name',
        'last_name',
        'contact_information',
        'skills',
        'agm_eligible',
        'date_joined'
    ];


    // Relationship
    public function prayer()
    {
        return $this->hasMany(PrayerRequest::class);
    }

    public function mission_assignment()
    {
        return $this->belongsToMany(MissionAssignment::class);
    }

    public function mission_report()
    {

        return $this->hasMany(MissionReport::class);
    }

    public function membership_status()
    {

        return $this->belongsToMany(MembershipStatus::class);
    }
}
