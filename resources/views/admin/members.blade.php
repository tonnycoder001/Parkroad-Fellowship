<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-4">All Registered Members</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full divide-y divide-gray-200 border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">First Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Last Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-4 whitespace-nowrap">{{ $user->id }}</td>
                        <td class="px-4 py-4 whitespace-nowrap">{{ $user->first_name }}</td>
                        <td class="px-4 py-4 whitespace-nowrap">{{ $user->last_name }}</td>
                        <td class="px-4 py-4 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-4 py-4 whitespace-nowrap">
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete
                                    User</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
