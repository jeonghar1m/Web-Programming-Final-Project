<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 플레이리스트</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        video {width:40%;}
    </style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <section>
        <h1>플레이리스트</h1>
        <hr>
        <h2>유튜브</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VpmvNEUXkQ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9MZInS3ShhQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h2>mp3 파일</h2>
        <audio controls="controls">
        <source src="mp3/Kalimba.mp3" type="audio/mp3">
        </audio>
        <div>
            <video controls="controls" poster="http://placehold.it/640x360">
            <source src="video/Wildlife.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>