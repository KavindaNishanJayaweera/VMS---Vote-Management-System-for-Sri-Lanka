<?php
session_start();
require_once("config.php");

$entered_nic = $_POST['nic'];
$entered_password = $_POST['password'];
$error_message = '';

$sql = "SELECT * FROM users WHERE nic = '$entered_nic'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    $user_status = $row['status'];

    if ($user_status === 'Voted') {
        $error_message = "You have already voted. Cannot vote again.";
    } elseif (password_verify($entered_password, $hashed_password)) {
        $_SESSION['logged_in'] = true;
        header("Location: voting.php");
    } else {
        $error_message = "Invalid password. Please try again.";
    }
} else {
    
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <?php if (!empty($error_message)) : ?>
            <div class="bg-red-200 text-red-900 px-4 py-2 mb-4 rounded"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="login.php" method="post" class="space-y-4">
            <label for="nic" class="block font-semibold">NIC:</label>
            <input type="text" id="nic" name="nic" class="border rounded px-3 py-2 w-full"><br>
            <label for="password" class="block font-semibold">Password:</label>
            <input type="password" id="password" name="password" class="border rounded px-3 py-2 w-full"><br>
            <input type="submit" value="Login" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
</body>
</html>
