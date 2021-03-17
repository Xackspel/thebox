<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Box</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm"><h1>The Box</h1></div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <form method="post">
                    <div class="mb-3">
                        <label for="input_login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="input_login" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="input_pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="input_pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Open the box</button>
                </form>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</body>
</html>
