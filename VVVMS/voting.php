<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

require_once("config.php");

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

if (isset($_POST['vote'])) {
    $candidate_id = $_POST['candidate_id'];
    $update_sql = "UPDATE candidates SET vote_count = vote_count + 1 WHERE id = $candidate_id";
    if ($conn->query($update_sql) === TRUE) {
        $user_id = $_SESSION['logged_in'];
        $update_user_status = "UPDATE users SET status = 'Voted' WHERE id = $user_id";
        if ($conn->query($update_user_status) === TRUE) {

            header("Location: successful-vote.php");
            exit;
        } else {
            echo "Error updating user status: " . $conn->error;
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT * FROM candidates";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>List of Candidates</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
    /* Styling for the modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border-radius: 8px;
        width: 60%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .modal-header {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .modal-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .modal-button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .modal-button.primary {
        background-color: #3490dc;
        color: white;
    }

    .modal-button.secondary {
        background-color: #e3342f;
        color: white;
    }

    .modal-button:hover {
        filter: brightness(110%);
    }
</style>

</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">List of Candidates</h2>

        <form method="post" action="" class="mb-4">
            <input type="submit" name="logout" value="Logout" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <p class="font-bold text-xl mb-2"><?php echo $row["name"]; ?></p>
                        <p>District: <?php echo $row["district"]; ?></p>
                        <p>Party: <?php echo $row["party"]; ?></p>
                        <button onclick="confirmVote(<?php echo $row['id']; ?>)" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Vote</button>
                    </div>
            <?php
                }
            } else {
                echo "<p>No candidates found</p>";
            }
            $conn->close();
            ?>
        </div>
    </div>

    <div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Confirm Vote</h2>
        </div>
        <p>Are you sure you want to vote for this candidate?</p>
        <div class="modal-buttons">
            <button onclick="closeModal()" class="modal-button secondary">Cancel</button>
            <button onclick="submitVote()" class="modal-button primary">Vote</button>
        </div>
    </div>
</div>

    <form id="voteForm" method="post" action="" style="display: none;">
        <input type="hidden" name="candidate_id" id="candidate_id" value="">
        <input type="hidden" name="vote" value="1">
    </form>

    <script>
        function confirmVote(candidateId) {
            var modal = document.getElementById('myModal');
            var candidateIdField = document.getElementById('candidate_id');
            candidateIdField.value = candidateId;
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = "none";
        }

        function submitVote() {
            document.getElementById('voteForm').submit();
        }
    </script>
</body>

</html>
