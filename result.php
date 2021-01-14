<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <section>
        <h1>예상 키 계산하기</h1>
        <hr>
        <?
		if($_GET['sex'] == null || $_GET['f_stature'] == null || $_GET['m_stature'] == null) {
			echo "<script>alert('필수 입력 값이 정상적으로 입력되지 않았습니다.'); history.back();</script>";
			exit;
		}
		if($_GET['f_stature'] < 100 || $_GET['m_stature'] < 100 || $_GET['f_stature'] > 280 || $_GET['m_stature'] > 280) {
			echo "<script>alert('정상적인 키의 범위가 아닙니다. 100이상 280 이하의 값을 입력해주십시오.'); history.back();</script>";
			exit;
		}
		$e_stature == 0;
		if($_GET['sex'] == "male")
			$e_stature = ($_GET['f_stature'] + $_GET['m_stature'] + 13) / 2;
		else if($_GET['sex'] == "female")
			$e_stature = ($_GET['f_stature'] + $_GET['m_stature'] - 13) / 2;
		
		echo "당신의 예상키는 ";
		echo $e_stature. "입니다. <br />";
        ?>
        <form action="stature.php" method="post">
        <p><input type = "submit" value = "이전" /></p>
        </form>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>