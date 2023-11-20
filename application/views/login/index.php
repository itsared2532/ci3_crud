<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/public/login.css') ?>">


    <style>
        
    </style>
    <!-- <script>
        // Fetch a random image URL from Unsplash API (replace with your own image source)
			 fetch('https://source.unsplash.com/random/1600x900')
        .then(response => {
            document.getElementById('loginContainer').style.backgroundImage = `url('${response.url}')`;
        })
        .catch(error => {
            console.error('Error fetching image:', error);
        });

    </script> -->
</head>
<body >
    <div class="login-container" id="loginContainer">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <div class="login-form">
        <form action="<?= site_url('login/process') ?>" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <div>
        <php if(isset($username) && isset($password)): ?>
            <h2>Username: <= $username ?></h2>
            <h2>Password: <= $password ?></h2>
        <php endif; ?>
    </div> -->

</body>
</html>
