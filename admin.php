<?php 
session_start();
if ($_SESSION['role'] == 'admin') {
    // header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h1 class="mb-4">Selamat Datang, Administrator</h1>
                <h2 class="text-primary"><?php echo htmlspecialchars($_SESSION['name']); ?></h2>
                <a href="./backend/logout.php" class="btn btn-danger mt-4">Logout</a>
            </div>
        </div>
    </div>

   
</body>
</html>
