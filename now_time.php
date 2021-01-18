<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 현재 시간</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
        window.onload = function() {
            var clock = document.getElementById('clock');

            setInterval(function() {
                var now = new Date();
                clock.innerHTML = now.toString();
            }, 1000);
        };
    </script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <section>
        <h1>현재 시간</h1>
        <hr>
        <span id="clock"></span>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>