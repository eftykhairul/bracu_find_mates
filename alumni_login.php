<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Alumni Login</title>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <h1>Login as Alumni</h1>
    <div>
        <form action="process.php" method="POST">
            <div class="form-group"><label for="email">
                    Alumni Email
                </label>
                <input type="text" name="email" placeholder="Your Email" value="">
            </div>
            <div class="form-group">
                <label for="password">
                    Alumni Password
                </label>
                <input type="password" name="password" placeholder="Your password" value="">
            </div>
            <div class="form-group">
                <button type="submit" name="login_alumni" class="btn btn-primary">Login</button>
            </div>
            <div class="form-group">
                <a href="alumni_registration.php">Don't have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>
