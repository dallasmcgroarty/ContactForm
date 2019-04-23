<?php
    $name = trim($_POST['name']);
	$email = trim($_POST['email']);
    $comments = trim($_POST['comments']);
    $fColor = trim($_POST['fColor']);

    $file = fopen('outputForm.csv', 'a');

    $data = array($name, $email, $comments, $fColor);

    fputcsv($file, $data);

    fclose($file);
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Form Sumbitted</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body class="container">
        <header>
            <h1 class="text-center">Your Information Has Been Submitted!</h1>
        </header>
        <section>
            <p class="text-center text-success">Thank you for contacting us via our Contact Us form</p>
        </section>
    </body>