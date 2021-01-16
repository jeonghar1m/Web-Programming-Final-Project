<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 기술정리</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <section>
        <h1>기술정리</h1>
        <hr>
        <p>제 홈페이지에 들어갈 기술은 수업시간에 배웠던 html/css를 기본적으로 사용할 것이며, 추가적으로, 수업시간에는 배우지 않았지만, 하나의 레이아웃을 사용할 것이기 때문에 php include를 활용하였습니다.</p>
		<p>본 기술 정리 페이지와 메인 페이지는 가장 기본적인 html 코드를 사용했습니다.</p>
		<p>시간표 페이지의 경우에는 table을 사용하여 직전 2학기 시간표를 출력하게끔 제작하였습니다.</p>
		<p>플레이리스트는 유튜브에서 iframe 태그로 배포되는 기능을 사용하여 영상 2개를 불러왔으며, 그 외에 음악 파일과 영상 파일을 업로드 해, 태그를 이용해서 출력되게끔 구현했습니다.</p>
		<p>예상 키 계산하기 기능은 form태그와 php를 이용하여 <a href="stature.php">stature.php</a>에서 값을 입력하면, <a href="result.php">result.php</a> 파일로 값이 넘어가게끔 구현하였으며, 예외처리도 했습니다.</p>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>