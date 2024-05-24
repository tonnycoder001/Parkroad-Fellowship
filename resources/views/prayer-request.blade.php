<!-- resources/views/prayer_request.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Prayer Request</title>
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-semibold mb-4">Prayer Request</h1>

            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="text_request" class="block text-sm font-medium text-gray-700">Prayer Request</label>
                    <textarea name="text_request" id="text_request"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required></textarea>
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
