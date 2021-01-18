<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정하림 - 시간표</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        table{margin:0 auto;}
        tr,td {width:300px; text-align:center;}
    </style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/layout/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/nav.php"; ?>
    <div id="main">
        <section>
            <h1>2020년 2학기 시간표</h1>
            <hr>
            <table border="1">
                <tr>
                    <th></th>
                    <th>월</th>
                    <th>화</th>
                    <th>수</th>
                    <th>목</th>
                    <th>금</th>
                </tr>
                <tr>
                    <th>9</th>
                    <td rowspan="3">게임제작프로젝트(1)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>10</th>
                    <td>게임인공지능</td>
                    <td rowspan="2">게임인공지능</td>
                    <td rowspan="2">자료구조</td>
                    <td></td>
                </tr>
                <tr>
                    <th>11</th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>12</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>13</th>
                    <td></td>
                    <td rowspan="2">직업과취업</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>14</th>
                    <td rowspan="2">컴퓨터그래픽스</td>
                    <td rowspan="3">시스템프로그래밍실습</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>15</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>16</th>
                    <td>자료구조</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>17</th>
                    <td></td>
                    <td></td>
                    <td>컴퓨터그래픽스</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT']."/layout/aside.php"; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/layout/footer.php"; ?>
</body>
</html>