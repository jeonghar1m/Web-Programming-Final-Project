<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 로그인</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <div id="main">
        <section>
            <form method="post">
                <fieldset>
                    <legend>입력</legend>
                    <table>
                        <tr>
                            <td>ID</td>
                            <td><input type="text" name="id" required></td>
                        </tr>
                        <tr>
                            <td>PW</td>
                            <td><input type="password" name="pw" required></td>
                        </tr>
                    </table>
                    <input type = "submit" value = "로그인" />
            </fieldset>
        </form>
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT']."/layout/aside.php"; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>