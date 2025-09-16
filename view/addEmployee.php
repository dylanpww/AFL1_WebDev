<?php
require_once('../model/Office_Model.php');
$officeModel = new Office_Model();
$offices = $officeModel->getOffice(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <a href="../index.php" class="text-white border px-2 py-1 bg-red-600 rounded hover:underline">Cancel</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Add Employee</h2>

        <form action="../controller/Employee_Controller.php" method="POST" class="space-y-4">

            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Usia</label>
                <input type="number" name="usia" min="18" required 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Office</label>
                <select name="office_id" required 
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php foreach ($offices as $office): ?>
                        <option value="<?= $office['office_id'] ?>">
                            <?= htmlspecialchars($office['nama']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" name="addEmployee"
                    class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                Save Employee
            </button>
        </form>
    </div>
</body>
</html>
