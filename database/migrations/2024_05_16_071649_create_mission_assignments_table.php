<?php

use App\Models\Member;
use App\Models\Mission;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mission_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Mission::class, 'mission_id');
            $table->foreignId(Member::class, 'member_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_assignments');
    }
};
