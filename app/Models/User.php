<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Member;
use App\Models\MissionReport;
use App\Models\PrayerRequest;
use App\Models\MembershipStatus;
use App\Models\MissionAssignment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    // Relationships
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function membershipStatus()
    {
        return $this->hasOne(MembershipStatus::class);
    }

    public function missionAssignments()
    {
        return $this->hasMany(MissionAssignment::class);
    }

    public function missionReports()
    {
        return $this->hasMany(MissionReport::class, 'mission_leader_id');
    }

    public function prayerRequests()
    {
        return $this->hasMany(PrayerRequest::class);
    }

    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
