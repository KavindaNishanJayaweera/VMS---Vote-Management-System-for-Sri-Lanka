<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $district = $_POST["district"];
    $party = $_POST["party"];

    require_once("config.php");

    $sql = "INSERT INTO candidates (name, district, party) VALUES ('$name', '$district', '$party')";

    if ($conn->query($sql) === TRUE) {
        echo "Candidate added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Candidate</title>
</head>
<body>
    <h2>Add Candidate</h2>
    <form method="post" action="candidate.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

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
                </select><br><br>

        <label for="party">Party:</label><br>
        <input type="text" id="party" name="party"><br><br>

        <input type="submit" value="Add Candidate">
    </form>
</body>
</html>
