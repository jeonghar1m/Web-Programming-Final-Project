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
        <h1>Main Page</h1>
        <hr>
        <p>2020년 겨울학기 웹프로그래밍 기말과제로 제출한 포트폴리오입니다.</p>
		<p>테스트 환경: <a style="color:blue;" href="http://www1.jeongharim.com">개인 웹호스팅 공간</a></p>
        <h2>사이트맵</h2>
        <ul>
            <li>메인페이지</li>
            <ul>
                <li>자기소개</li>
                <li>기술정리</li>
                <li>시간표</li>
                <li>좋아하는 노래</li> <!-- audio 태그 사용 예정 -->
                <li>예상 키 계산하기</li> <!-- form 태그 사용 예정 -->
                <li>현재 시간</li>
            </ul>
        </ul>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>