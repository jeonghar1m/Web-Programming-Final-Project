<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 예상 키 계산하기</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <div id="main">
        <section>
            <h1>예상 키 계산하기</h1>
            <hr>
            <p>자녀의 예상 키를 산출해줍니다.</p>
            <form action="result.php" method="get">
                <fieldset>
                    <legend>입력 양식</legend>
                    <table>
                        <tr>
                            <td>성별</td>
                            <td><select name="sex">
                            <option value="male">남성</option>
                            <option value="female">여성</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>아빠 키</td>
                            <td><input type="number" name="f_stature" placeholder="100이상 280이하" required></td>
                        </tr>
                        <tr>
                            <td>엄마 키</td>
                            <td><input type="number" name="m_stature" placeholder="100이상 280이하" required></td>
                        </tr>
                    </table>
                    <input type = "submit" value = "확인" />
            </fieldset>
        </form>
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT']."/layout/aside.php"; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>