<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            padding: 20px;
        }

        .result-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result-container">
            <?php
            // exibe o resultado da pesquisa
            if (isset($_GET['result'])) {
                echo urldecode($_GET['result']);
            } else {
                echo "Error: Result not available.";
            }
            ?>
        </div>
    </div>
</body>
</html>