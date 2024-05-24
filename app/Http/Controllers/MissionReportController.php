<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissionReport;

class MissionReportController extends Controller
{

    public function create()
    {
        return view('admin.mission-report');
    }

    public function store(Request $request)
    {
        $request->validate([
            'report_title' => 'required|string',
            'name_of_mission_leader' => 'required|string',
            'list_of_missionaries' => 'required|string',
            'name_of_host_institution' => 'required|string',
            'date_of_mission' => 'required|date',
            'nature_of_mission' => 'required|string',
            'new_believers' => 'required|string',
            'male_new_believers' => 'required|string',
            'female_new_believers' => 'required|string',
            'non_students_new_believers' => 'required|string',
            'names_of_new_believers' => 'required|string',
            'topics_shared' => 'required|string',
            'details_of_mission_ground' => 'required|string',
            'name_and_contact_of_patron' => 'required|string',
            'feedback_from_the_institution' => 'required|string',
            'did_you_receive_financial_resources_from_fellowship' => 'required|string',
            'amount_used_for_transport' => 'required|string',
            'amount_used_for_food' => 'required|string',
            'balance' => 'required|string',
            'amount_in_token_received_from_the_school' => 'required|string',
            'any_other_expenses' => 'required|string',
            'do_you_have_any_other_feedback' => 'required|string',
        ]);

        MissionReport::create($request->all());

        // return redirect()->route('mission-report.create')->with('success', 'Mission report submitted successfully.');
    }
}
