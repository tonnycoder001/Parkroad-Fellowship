<!-- resources/views/mission_assignments.blade.php -->

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4">
    <h1 class="text-3xl font-semibold mb-4">Mission Assignments</h1>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-xl font-semibold mb-2">Available Members</h2>
            <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                <tr>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Id
                    </td>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        First Name
                    </td>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Last Name
                    </td>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </td>


                </tr>

                @foreach ($data as $data)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->first_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->phone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->status }}
                    </tr>
                @endforeach
            </table>


        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">Missions</h2>
            <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                <tr>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        description
                    </td>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        location
                    </td>
                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        date
                    </td>


                </tr>

                @foreach ($missions as $mission)
                    <tr>
                        <td class="px-6 py-4 whitespace-wrap max-w-xs overflow-hidden">
                            <div class="h-16 overflow-y-auto">{{ $mission->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mission->location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mission->date }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

    <hr class="my-8">

    <h2 class="text-xl font-semibold mb-4">Assign Members to Mission</h2>
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
</div>
