<?php
require("model/Employee_Model.php");
$employeeModel = new Employee_Model();
$employees = $employeeModel->getEmployee();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">employee dan office</h1>

        <div class="flex justify-end space-x-2 mb-4">
            <a href="view/addEmployee.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                + Add Employee
            </a>
            <a href="view/addOffice.php" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                + Add Office
            </a>
        </div>
        
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Umur</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Jabatan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Office</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($employees)): ?>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($employee['nama']) ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($employee['usia']) ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($employee['jabatan']) ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($employee['office_nama']) ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="controller/Employee_Controller.php?action=edit&id=<?= $employee['employee_id'] ?>"
                                    class="text-blue-500 hover:underline">
                                    Edit
                                </a>
                                <a href="controller/Employee_Controller.php?action=delete&id=<?= $employee['employee_id'] ?>"
                                    class="text-red-500 hover:underline ml-4" onclick="return confirm('Are you sure?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center border border-gray-300 px-4 py-2">No employee data found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
