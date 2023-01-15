<?php
use app\Services\Page;
use app\Views\Views;
?>
<!doctype html>
<html lang="en">
<?php Page::part("header"); ?>
<body>
<?php Page::part("nav"); ?>
<div class="container">

    <form method="post" id="FormReg" action="" enctype="multipart/form-data" >
        <h2>reg</h2>
        <div class="mb-3">
            <div class="msg">

            </div>

            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div> <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password_conf</label>
            <input name="pass_conf" type="password" class="form-control" id="pass_conf">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" id="register" class="btn btn-primary">Submit</button>
    </form>

</div>

<script src="../../assets/js/ajax.js"></script>


</body>
</html>