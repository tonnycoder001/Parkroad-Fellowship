<?php

namespace App\Models;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Budget extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'budget_id',
    //     'amount',
    //     'estimated_expenses',
    //     'actual_expenditures',
    //     'funding_sources'
    // ];

    protected $guarded = [
        'id'
    ];


    // Relationships
    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
