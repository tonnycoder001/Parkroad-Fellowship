<?php

namespace App\Models;

use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembershipStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_status_id',
        'status',
        'description'
    ];

    // relationships
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
