<?php

use App\Models\Role;
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
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->date('application_date');
            // $table->string('membership_applied_for');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('postal_address');
            // $table->string('email')->unique();
            // $table->string('contact_info');
            // $table->string('marital_status');
            // $table->date('date_of_salvation')->nullable();
            // $table->string('where_do_you_go_to_church')->nullable();
            // $table->string('name_of_your_pastor')->nullable();
            // $table->string('serves_in_church');
            // $table->string('department_of_church')->nullable();
            // $table->string('school_or_work')->nullable();
            // $table->string('location_of_school_or_work')->nullable();
            // $table->string('career_path')->nullable();
            // $table->string('job_or_vocation')->nullable();
            // $table->string('special_gifts')->nullable();
            // $table->json('receive_updates')->nullable();
            // $table->boolean('terms_and_condition');
            // $table->rememberToken();
            // $table->timestamps();

            $table->id();
            $table->date('application_date');
            $table->string('membership_applied_for');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('postal_address');
            $table->string('email')->unique();
            $table->string('contact_info');
            $table->string('marital_status');
            $table->date('date_of_salvation')->nullable();
            $table->string('where_do_you_go_to_church')->nullable();
            $table->string('name_of_your_pastor')->nullable();
            $table->string('serves_in_church');
            $table->string('department_of_church')->nullable();
            $table->string('school_or_work')->nullable();
            $table->string('location_of_school_or_work')->nullable();
            $table->string('career_path')->nullable();
            $table->string('special_gifts')->nullable();
            $table->string('receive_updates');
            $table->string('preferred_updates_mode');
            $table->json('interested_updates')->nullable();
            $table->string('accept_terms');
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
