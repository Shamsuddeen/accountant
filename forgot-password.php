<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - DH Accountant</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include('components/nav.php'); ?>

    <div class="container">
        <form action="#" method="POST">
            <legend>Reset Account Password</legend>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <button type="submit" class="btn btn-primary">Seach Account</button>
            <p>Don't have an account? <a href="./register.php">Create Account</a> | <a href="login.php">Login</a></p>

        </form>
    </div>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>