<!-- resources/views/admin/dashboard.blade.php -->
<script src="https://cdn.tailwindcss.com"></script>

@extends('nav')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Application</title>
        <link href="" rel="stylesheet">
    </head>

    <body class="bg-gray-100">
        <div id="app" class="flex h-screen">
            <!-- Sidebar -->
            <aside class="bg-white w-64 p-6 shadow-md">
                <div>
                    <a class="text-2xl font-bold text-gray-800 hover:text-gray-700"></a></a>
                </div>
                <nav class="mt-6">
                    <div>

                        <h1 class="font-bold text-lg">Admin-Dashboard</h1>
                        <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded"href="/mission">Mission</a>
                        <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="">Mission Report</a>
                        <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="">Members</a>
                        <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/budget">Budget</a>
                        <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/prayer-request">Prayer
                            Request</a>
                    </div>

                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 p-6">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </body>

    </html>
@endsection
