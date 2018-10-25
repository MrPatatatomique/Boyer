<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 21/10/2018
 * Time: 13:21
 */
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="#sec1">Section 1</a></li>
        <li><a href="#sec2">Section 2</a></li>
        <li><a href="#sec3">Section 3</a></li>
        <li><a href="#sec4">Section 4</a></li>
        <li><a href="#sec5">Section 5</a></li>
        <li><a href="#sec6">Section 6</a></li>
    </ul>
    <section id="sec1" data-text="Section 1">

        <?php
        require '../app/form.php';
        require '../app/bootstrapForm.php';
        $form = new BootstrapForm($_POST);
        ?>

        <form action="#" method="post">
            <?php
            echo $form->input('username');
            echo $form->input('password');
            echo $form->submit();
            ?>
        </form>
    </section>
    <section id="sec2" data-text="Section 2"></section>
    <section id="sec3" data-text="Section 3"></section>
    <section id="sec4" data-text="Section 4"></section>
    <section id="sec5" data-text="Section 5"></section>
    <section id="sec6" data-text="Section 6"></section>
</body>
</html>
