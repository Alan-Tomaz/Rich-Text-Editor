<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Rich Text Editor/admin/config/database.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Text Editor</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Google Font (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <main>
        <!-- Text Editor Header -->
        <div class="text-editor-header">
            <button class="btn" data-element="bold">
                <i class="fa fa-bold"></i>
            </button>
            <button class="btn" data-element="italic">
                <i class="fa fa-italic"></i>
            </button>
            <button class="btn" data-element="underline">
                <i class="fa fa-underline"></i>
            </button>
            <button class="btn" data-element="insertUnorderedList">
                <i class="fa fa-list-ul"></i>
            </button>
            <button class="btn" data-element="insertOrderedList">
                <i class="fa fa-list-ol"></i>
            </button>
            <button class="btn" data-element="createLink">
                <i class="fa fa-link"></i>
            </button>
            <button class="btn" data-element="justifyLeft">
                <i class="fa fa-align-left"></i>
            </button>
            <button class="btn" data-element="justifyCenter">
                <i class="fa fa-align-center"></i>
            </button>
            <button class="btn" data-element="justifyRight">
                <i class="fa fa-align-right"></i>
            </button>
            <button class="btn" data-element="justifyFull">
                <i class="fa fa-align-justify"></i>
            </button>
            <button class="btn" data-element="insertImage">
                <i class="fa fa-image"></i>
            </button>
            <button class="btn" data-element="fontSize">
                <i class="fa fa-text-height"></i>
            </button>
        </div>
        <form action="./pages/content.php" method="post">
            <!-- End Of The Text Editor Header -->
            <!-- Content -->
            <div class="content" contenteditable="true">

            </div>
            <input type="text" name="content" id="hidden-input">
            <!-- End Of Content -->
            <div class="next-page">
                <!-- <a href="./pages/content.php" class="btn-link">Show Text -></a> -->
                <button type="submit" name="submit" class="btn-link">Next Page</button>
            </div>
        </form>
    </main>

</body>
<!-- Font Awesome -->

<!-- External JS -->
<script src="./js/main.js"></script>

</html>