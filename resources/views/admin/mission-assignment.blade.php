<!-- resources/views/mission_assignments.blade.php -->

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4">
    <h1 class="text-3xl font-semibold mb-4">Mission Assignments</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-xl font-semibold mb-2">Available Members</h2>
            <ul>

            </ul>

        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">Missions</h2>
            <ul class="list-disc pl-4">
            </ul>
        </div>
    </div>

    <hr class="my-8">

    <h2 class="text-xl font-semibold mb-4">Assign Members to Mission</h2>
    {{-- <form action="{{ route('assign_members') }}" method="POST" class="max-w-md"> --}}
    @csrf
    <div class="mb-4">
        <label for="member_id" class="block text-sm font-medium text-gray-700">Select Member:</label>
        <select name="member_id" id="member_id"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

        </select>
    </div>
    <div class="mb-4">
        <label for="mission_id" class="block text-sm font-medium text-gray-700">Select Mission:</label>
        <select name="mission_id" id="mission_id"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

        </select>
    </div>
    <button type="submit"
        class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Assign
        Members to Mission</button>
    </form>

    <hr class="my-8">

    <h2 class="text-xl font-semibold mb-4">Assigned Members</h2>
    <ul class="list-disc pl-4">

    </ul>
