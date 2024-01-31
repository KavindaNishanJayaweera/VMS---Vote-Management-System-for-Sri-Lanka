<?php
require_once("config.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $district = $_POST["district"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, nic, district, password) VALUES ('$name', '$nic', '$district', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration successful!";
    } else {
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <h2 class="text-2xl font-bold mb-4">Register Voter</h2>
        <?php if ($message !== "") : ?>
            <div class="<?php echo (strpos($message, 'successful') !== false) ? 'bg-green-200 text-green-900' : 'bg-red-200 text-red-900'; ?> px-4 py-2 mb-4 rounded">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="space-y-4">
            <div>
                <label for="name" class="block font-semibold">Name:</label>
                <input type="text" id="name" name="name" class="border rounded px-3 py-2 w-full" required>
            </div>
            <div>
                <label for="nic" class="block font-semibold">NIC:</label>
                <input type="text" id="nic" name="nic" class="border rounded px-3 py-2 w-full" required>
            </div>
            <div>
                <label for="district" class="block font-semibold">District:</label>
                <select id="district" name="district" class="border rounded px-3 py-2 w-full" required>
                    <option value="" disabled selected>Select District</option>
                    <option value="Ampara">Ampara</option>
                    <option value="Anuradhapura">Anuradhapura</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Galle">Galle</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Matale">Matale</option>
                    <option value="Matara">Matara</option>
                    <option value="Monaragala">Monaragala</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Ratnapura">Ratnapura</option>
                    <option value="Trincomalee">Trincomalee</option>
                    <option value="Vavuniya">Vavuniya</option>
                </select>
            </div>
            <div>
                <label for="password" class="block font-semibold">Password:</label>
                <input type="password" id="password" name="password" class="border rounded px-3 py-2 w-full" required>
            </div>
            <button type="submit" name="register" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Register</button>
        </form>
    </div>
</body>

</html>
