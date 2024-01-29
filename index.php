<?php 
    include './functions.php';
    
    if(isset($_GET['password-length']) && $_GET['password-length'] != ''){
        $password_length = $_GET['password-length'];
        $password = generatePassword($password_length);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET" class="row g-3 my-5">
                    <div class="col-auto">
                        <label for="password-length" class="visually-hidden">password</label>
                        <input type="password" name="password-length" id="password-length" placeholder="Password" class="form-control">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
