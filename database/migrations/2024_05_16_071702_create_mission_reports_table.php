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
        Schema::create('mission_reports', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('mission_id')->constrained('missions')->onDelete('cascade');
            $table->string('report_title');
            $table->string('name_of_mission_leader');
            $table->string('list_of_missionaries');
            $table->string('name_of_host_institution');
            $table->date('date_of_mission');
            $table->string('nature_of_mission');
            $table->string('new_believers');
            $table->string('male_new_believers');
            $table->string('female_new_believers');
            $table->string('non_students_new_believers');
            $table->string('names_of_new_believers');
            $table->string('topics_shared');
            $table->string('details_of_mission_ground');
            $table->string('name_and_contact_of_patron');
            $table->string('feedback_from_the_institution');
            $table->string('did_you_receive_financial_resources_from_fellowship');
            $table->string('amount_used_for_transport');
            $table->string('amount_used_for_food');
            $table->string('balance');
            $table->string('amount_in_token_received_from_the_school');
            $table->string('any_other_expenses');
            $table->string('do_you_have_any_other_feedback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_reports');
    }
};
