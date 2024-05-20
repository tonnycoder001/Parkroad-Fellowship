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
        'application_date',
        'membership_applied_for',
        'first_name',
        'last_name',
        'postal_address',
        'email',
        'contact_info',
        'marital_status',
        'date_of_salvation',
        'where_do_you_go_to_church',
        'name_of_your_pastor',
        'serves_in_church',
        'department_of_church',
        'school_or_work',
        'location_of_school_or_work',
        'career_path',
        'job_or_vocation',
        'special_gifts',
        'receive_updates',
        'terms_and_condition',
    ];

    protected $casts = [
        'receive_updates' => 'array',
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
