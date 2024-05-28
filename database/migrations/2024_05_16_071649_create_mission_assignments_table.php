<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('mission_assignments', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('mission_id')->constrained()->onDelete('cascade');
    //         $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('mission_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mission_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mission_assignments');
    }
};
