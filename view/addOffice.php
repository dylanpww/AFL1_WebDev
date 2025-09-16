<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Office</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <a href="../index.php" class="text-white border px-2 py-1 bg-red-600 rounded hover:underline">Cancel</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Add Office</h2>

        <form action="../controller/Office_Controller.php" method="POST" class="space-y-4">
            
            <div>
                <label class="block text-gray-700">Nama Office</label>
                <input type="text" name="nama" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label class="block text-gray-700">Alamat</label>
                <input type="text" name="alamat" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label class="block text-gray-700">Tahun Berdiri</label>
                <input type="number" name="tahun_berdiri" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <button type="submit" name="addOffice"
                    class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                Save Office
            </button>
        </form>
    </div>
</body>
</html>