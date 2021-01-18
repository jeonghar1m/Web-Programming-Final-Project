<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 회원가입</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <div id="main">
        <section>
            <form method="post">
                <fieldset>
                    <legend>입력 양식</legend>
                    <table>
                        <tr>
                            <td>ID</td>
                            <td><input type="text" name="id" placeholder="사용 할 ID를 입력해주세요." required></td>
                        </tr>
                        <tr>
                            <td>PW</td>
                            <td><input type="password" name="pw" placeholder="6자리 이상의 사용할 비밀번호를 입력해주세요." required></td>
                        </tr>
                        <tr>
                            <td>이름</td>
                            <td><input type="text" name="name" placeholder="이름을 입력해주세요." required></td>
                        </tr>
                        <tr>
                            <td>성별</td>
                            <td><select name="sex">
                            <option value="male">남성</option>
                            <option value="female">여성</option>
                            </select>
                            </td>
                        </tr>
                    </table>
                    <input type = "submit" value = "가입" />
            </fieldset>
        </form>
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT']."/layout/aside.php"; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>