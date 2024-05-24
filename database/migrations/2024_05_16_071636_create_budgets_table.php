<?php

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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            // $table->foreignId(Mission::class, 'mission_id');
            $table->integer('estimated_expenses');
            // $table->foreignId('mission_id')->constrained()->onDelete('cascade');
            $table->string('funding_sources');
            $table->integer('actual_expenditures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
