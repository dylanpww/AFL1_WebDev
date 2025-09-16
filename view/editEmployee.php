<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Employee</h2>

        <form action="../controller/Employee_Controller.php" method="POST" class="space-y-4">
            <input type="hidden" name="employee_id" value="<?= $employee['employee_id'] ?>">

            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" required 
                    value="<?= htmlspecialchars($employee['nama']) ?>"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" required 
                    value="<?= htmlspecialchars($employee['jabatan']) ?>"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Usia</label>
                <input type="number" name="usia" min="18" 
                    value="<?= htmlspecialchars($employee['usia']) ?>"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Office</label>
                <select name="office_id" required 
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php foreach ($offices as $office): ?>
                        <option value="<?= $office['office_id'] ?>" 
                            <?= $employee['office_id'] == $office['office_id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($office['nama']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" name="updateEmployee"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Update Employee
            </button>
        </form>
    </div>
</body>
</html>
