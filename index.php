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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <h1>The Box</h1>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <form action="engine.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Login</label>
                        <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Type your login</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        <div id="passwordHelp" class="form-text">Type your password</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
    <? if($_REQUEST['Empty_Input'] == '1'): ?>
        <script src="js/js.js"></script>
    <? endif; ?>
</body>
</html>