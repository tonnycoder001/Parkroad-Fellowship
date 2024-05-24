<script src="https://cdn.tailwindcss.com"></script>
@extends('admin.nav')

@section('content')
    <div id="app" class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-white w-64 p-6 shadow-md">
            <div>
                <a class="text-2xl font-bold text-gray-800 hover:text-gray-700"></a></a>
            </div>
            <nav class="mt-6">
                <div>

                    <h1 class="font-bold text-lg">Admin-Dashboard</h1>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/mission"
                        onclick="loadContent('/admin.mission', event)">Mission</a>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/mission-assignment"
                        onclick="loadContent('/admin.mission-assignment', event)">Mission-assignment</a>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/mission-report"
                        onclick="loadContent('/admin.mission-report', event)">Mission Report</a>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href=""
                        onclick="loadContent('/members', event)">Members</a>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/budget"
                        onclick="loadContent('/admin.budget', event)">Budget</a>
                    <a class="block text-gray-800 hover:bg-gray-200 p-2 rounded" href="/prayer-request"
                        onclick="loadContent('/admin.prayer-request', event)">Prayer Request</a>
                </div>

            </nav>
        </aside>

        <!-- Main Content -->
        <div id="mainContent" class="flex-1 p-6">
            <main>
                <!-- Content will be loaded here -->
            </main>
        </div>
    </div>

    <script>
        function loadContent(url, event) {
            event.preventDefault();
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
