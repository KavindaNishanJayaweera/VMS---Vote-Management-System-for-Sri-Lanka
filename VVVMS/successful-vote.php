<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vote Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            padding: 40px;
        }

        .success-icon {
            font-size: 72px;
            color: #10B981;
        }

        .success-message {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #4B5563;
        }

        .next-voter-btn {
            display: inline-block;
            margin-top: 40px;
            background-color: #3B82F6;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .next-voter-btn:hover {
            background-color: #2563EB;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container">
    
        <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
       
        <p class="success-message">Your vote has been successfully cast!</p>
        <a href="login.php" class="next-voter-btn">Next Voter Login</a>
    </div>
</body>

</html>
