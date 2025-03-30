<?php
  require_once 'index.php';
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <div class="info">
            <div class="heading">
                <h1>Let's Know About:</h1>
            </div>
            <div class="content">
                <i>Here You Can <span class="highlight"><strong>Chat</strong></span> Live With Another Person Currently
                    Available In Server,<br>Have Tried to Make This Software User Friendly That's Why
                    <br><strong>Here</strong> You Are Able to See The Profile Picture To know-about And The Person You Are
                    Chhating With,</i>
            </div>
            <div class="signup slides ">
                <div class="signup-heading use-heading"><u><strong>SIGNUP</strong></u></div>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label"><strong>Choose Profile
                                Picture</strong></label>
                        <input type="file" class="form-control" id="picture" name="image" accept="image/*"
                            capture="environment" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="use">
            <div class="login slides ">
                <div class="login-heading use-heading"><u><strong>LOGIN</strong></u></div>

                <form action="chat.php" method="GET">
                    <div class="mb-3">
                        <label for="checkName" class="form-label">Enter Name</label>
                        <input type="text" class="form-control" id="checkName" name="checkName" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter Password</label>
                        <input type="password" class="form-control" id="password" name="checkPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">CHAT</button>
                </form>
            </div>
</html>