<?php
include_once __DIR__ . '/functions.php';

if(isset($_POST['email'])) {

    $email = $_POST['email'];
    $result = controlEmail($email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Iscriviti alla newsletter</h2>
    <?php if(isset($result)) { ?>
    <div class="alert <?php echo $result ? 'alert-succes' : 'alert-danger' ;  ?>">
        <?php echo $result ? 'grazie per esserti iscritto' : 'email errata'; ?>
    </div>
    <?php } ?>
    <form action="index.php" method="POST">
        <label for="email">Inserisci email</label>
        <input class="form-control" id="email" name="email" type="text" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''; ?>">

        <button class="btn btn-primary" type="submit">Iscriviti</button>
    </form>
</div>
</body>
</html>