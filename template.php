<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information about users</title>
</head>
<body>
<header>
    <h1>Users</h1>
</header>
<?php if(!empty($users)):?>
<?foreach($users as $user):?>

        <p><?=$user['login']?></p>
        <?php endforeach;?>
<?php endif;?>
</body>
</html>
