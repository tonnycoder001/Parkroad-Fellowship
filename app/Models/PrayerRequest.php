<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'prayer_request_id',
        'member_id',   //foreign id
        'text_request'
    ];

    // relationship

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
