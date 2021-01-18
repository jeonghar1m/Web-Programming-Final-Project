<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 자기소개</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #face > img {float: right; margin: 0 10px 10px 0;}
    </style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <div id="main">
        <section>
            <h1>자기소개</h1>
            <hr>
            <div id="face"><img src="img/face.png" width="150px"></div>
            저는 홍익대학교 게임소프트웨어전공에 재학하고 있는 15학번 정하림입니다.
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT']."/layout/aside.php"; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>