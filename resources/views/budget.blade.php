<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Budget</title>
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-semibold mb-4">Budget</h1>

            <form action="" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                    <input type="number" name="amount" id="amount"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>

                <div class="mb-4">
                    <label for="id" class="block text-sm font-medium text-gray-700">Mission Id</label>
                    <input type="id" name="id" id="id"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>

                <div class="mb-4">
                    <label for="estimated_expenses" class="block text-sm font-medium text-gray-700">Estimated
                        Expenses</label>
                    <input type="number" name="estimated_expenses" id="estimated_expenses"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>

                <div class="mb-4">
                    <label for="funding_sources" class="block text-sm font-medium text-gray-700">Funding Sources</label>
                    <input type="text" name="funding_sources" id="funding_sources"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
                </div>

                <div class="mb-4">
                    <label for="actual_expenditures" class="block text-sm font-medium text-gray-700">Actual
                        Expenditures</label>
                    <input type="number" name="actual_expenditures" id="actual_expenditures"
                        class="mt-1 block w-full border-gray-300 rounded-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        required>
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
