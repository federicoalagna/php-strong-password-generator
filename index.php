<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="my-4">Generatore di Password Sicure</h1>

    <form method="GET" action="index.php" class="mb-4">
        <div class="form-group">
            <label for="length">Lunghezza Password</label>
            <input type="number" id="length" name="length" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Genera Password</button>
    </form> 

    <?php
    function generatePassword($length) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
        $charactersLength = strlen($characters);
        $randomPassword = '';

        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomPassword;
    }

    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        $generatedPassword = generatePassword($length);

        echo "<div class='alert alert-success' role='alert'>";
        echo "<strong>Password Generata:</strong> $generatedPassword";
        echo "</div>";
    }
    ?>

</div>


</body>
</html>
