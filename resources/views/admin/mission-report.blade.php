<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mission Report</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-semibold mb-4">Create Mission Report</h1>

            <form action="{{ route('mission-report.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name_of_mission_leader" class="block text-sm font-medium text-gray-700">Name of Mission
                        Leader</label>
                    <input type="text" name="name_of_mission_leader" id="name_of_mission_leader"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="list_of_missionaries" class="block text-sm font-medium text-gray-700">List of
                        Missionaries</label>
                    <input type="text" name="list_of_missionaries" id="list_of_missionaries"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="new_believers" class="block text-sm font-medium text-gray-700">New Believers</label>
                    <input type="text" name="new_believers" id="new_believers"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="male_new_believers" class="block text-sm font-medium text-gray-700">Male New
                        Believers</label>
                    <input type="text" name="male_new_believers" id="male_new_believers"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="female_new_believers" class="block text-sm font-medium text-gray-700">Female New
                        Believers</label>
                    <input type="text" name="female_new_believers" id="female_new_believers"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="non_students_new_believers" class="block text-sm font-medium text-gray-700">Non-Students
                        New Believers</label>
                    <input type="text" name="non_students_new_believers" id="non_students_new_believers"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="names_of_new_believers" class="block text-sm font-medium text-gray-700">Names of New
                        Believers</label>
                    <input type="text" name="names_of_new_believers" id="names_of_new_believers"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="topics_shared" class="block text-sm font-medium text-gray-700">Topics Shared</label>
                    <input type="text" name="topics_shared" id="topics_shared"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="details_of_mission_ground" class="block text-sm font-medium text-gray-700">Details of
                        mission ground</label>
                    <input type="text" name="details_of_mission_ground" id="details_of_mission_ground"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="name_and_contact_of_patron" class="block text-sm font-medium text-gray-700">Name and
                        contact of Patron</label>
                    <input type="text" name="name_and_contact_of_patron" id="name_and_contact_of_patron"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="feedback_from_the_institution" class="block text-sm font-medium text-gray-700">feedback
                        from the institution</label>
                    <input type="text" name="feedback_from_the_institution" id="feedback_from_the_institution"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="did_you_receive_financial_resources_from_fellowship"
                        class="block text-sm font-medium text-gray-700">Did you receive financial resources form the
                        fellowship?</label>
                    <input type="text" name="did_you_receive_financial_resources_from_fellowship"
                        id="did_you_receive_financial_resources_from_fellowship"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="amount_used_for_transport" class="block text-sm font-medium text-gray-700">Amount used
                        for transport to and fro in KES</label>
                    <input type="text" name="amount_used_for_transport" id="amount_used_for_transport"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="amount_used_for_food" class="block text-sm font-medium text-gray-700">Amount used for
                        snacks and food in KES</label>
                    <input type="text" name="amount_used_for_food" id="amount_used_for_food"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="balance" class="block text-sm font-medium text-gray-700">Balance</label>
                    <input type="text" name="balance" id="balance"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="amount_in_token_received_from_the_school"
                        class="block text-sm font-medium text-gray-700">Indicate the amount in token received from the
                        school</label>
                    <input type="text" name="amount_in_token_received_from_the_school"
                        id="amount_in_token_received_from_the_school"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="any_other_expenses" class="block text-sm font-medium text-gray-700">Any other
                        expenses</label>
                    <input type="text" name="any_other_expenses" id="any_other_expenses"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>

                <div class="mb-4">
                    <label for="do_you_have_any_other_feedback" class="block text-sm font-medium text-gray-700">Do you
                        have any
                        other feedback</label>
                    <input type="text" name="do_you_have_any_other_feedback" id="do_you_have_any_other_feedback"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-12"
                        required>
                </div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
