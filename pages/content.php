<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Text Editor</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/content.css">
    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Google Font (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <?php

    if (isset($_POST["submit"])) {
        $content = $_POST["content"];
    }
    ?>


    <main>
        <h1>Content</h1>
        <div>
            <?= $content ?>
        </div>
    </main>

</body>
<!-- Font Awesome -->
<script src="https://use.fontawesome.com/a31a3f8384.js"></script>
<!-- External JS -->
<script src="../js/main.js"></script>

</html>