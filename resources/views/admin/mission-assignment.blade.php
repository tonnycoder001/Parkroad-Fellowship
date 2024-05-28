{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Assignments</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-4">Mission Assignments</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-2">Available Members</h2>
                <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                First Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Last Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $member)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->id }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->first_name }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->last_name }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-2">Missions</h2>
                <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Location</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($missions as $mission)
                            <tr>
                                <td class="px-6 py-4 whitespace-wrap max-w-xs overflow-hidden">
                                    <div class="h-16 overflow-y-auto">{{ $mission->description }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $mission->location }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $mission->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-8">

        <h2 class="text-xl font-semibold mb-4">Assign Members to Mission</h2>
        <form action="{{ route('assign') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="member_id" class="block text-sm font-medium text-gray-700">Select Member:</label>
                <select name="member_id" id="member_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach ($data as $member)
                        <option value="{{ $member->id }}">{{ $member->first_name }} {{ $member->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="mission_id" class="block text-sm font-medium text-gray-700">Select Mission:</label>
                <select name="mission_id" id="mission_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach ($missions as $mission)
                        <option value="{{ $mission->id }}">{{ $mission->description }} - {{ $mission->location }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Assign
                Members to Mission
            </button>
        </form>

        <hr class="my-8">

        <div class="flex flex-col">
            @foreach ($missions as $mission)
                <div class="flex mb-8">
                    <div class="w-1/2 pr-4">
                        <h2 class="text-xl font-semibold mb-4">Assigned Members</h2>
                        <div class="list-disc pl-4">
                            @foreach ($mission->users as $user)
                                <div class="font-bold">{{ $user->id }} {{ $user->first_name }}
                                    {{ $user->last_name }}</div>
                            @endforeach
                        </div>
                    </div>

                    <div class="w-1/2 pl-4">
                        <h2 class="text-xl font-semibold mb-4">Assigned Missions</h2>
                        <div class="list-disc pl-4">
                            <div class="pl-4">
                                <strong>{{ $mission->description }} - {{ $mission->location }}
                                    ({{ $mission->date }})</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4 border-t-2 border-gray-300">
            @endforeach
        </div>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Assignments</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-4">Mission Assignments</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-2">Available Members</h2>
                <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                First Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Last Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $member)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->id }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->first_name }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->last_name }}</td>
                                <td class="px-4 py-4 whitespace-nowrap">{{ $member->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-2">Missions</h2>
                <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Location</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($missions as $mission)
                            <tr>
                                <td class="px-6 py-4 whitespace-wrap max-w-xs overflow-hidden">
                                    <div class="h-16 overflow-y-auto">{{ $mission->description }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $mission->location }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $mission->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-8">

        <h2 class="text-xl font-semibold mb-4">Assign Members to Mission</h2>
        <form action="{{ route('assign') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="member_ids" class="block text-sm font-medium text-gray-700">Select Members:</label>
                <select name="member_ids[]" id="member_ids" multiple
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach ($data as $member)
                        <option value="{{ $member->id }}">{{ $member->first_name }} {{ $member->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="mission_id" class="block text-sm font-medium text-gray-700">Select Mission:</label>
                <select name="mission_id" id="mission_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach ($missions as $mission)
                        <option value="{{ $mission->id }}">{{ $mission->description }} - {{ $mission->location }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Assign
                Members to Mission
            </button>
        </form>

        <hr class="my-8">

        <div class="flex flex-col">
            @foreach ($missions as $mission)
                <div class="flex mb-8">
                    <!-- Assigned Members Column -->
                    <div class="w-1/2 pr-4">
                        <h2 class="text-xl font-semibold mb-4">Assigned Members</h2>
                        <div class="list-disc pl-4">
                            @foreach ($mission->users as $user)
                                <div class="font-bold">{{ $user->id }} {{ $user->first_name }}
                                    {{ $user->last_name }}</div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Assigned Missions Column -->
                    <div class="w-1/2 pl-4">
                        <h2 class="text-xl font-semibold mb-4">Assigned Missions</h2>
                        <div class="list-disc pl-4">
                            <div class="pl-4">
                                <strong>{{ $mission->description }} - {{ $mission->location }}
                                    ({{ $mission->date }})</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4 border-t-2 border-gray-300">
            @endforeach
        </div>
    </div>
</body>

</html>
