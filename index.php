<?php $conn = mysqli_connect('localhost', 'root', '', 'test99')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_array($result)) {
            echo "
            <button><a href=''>{$row['name']}</a></button>
            <button><a href='index.php'>로그아웃</a></button>";
        }
    } else {
        echo "
        <button><a href='join.php'>회원가입</a></button>
        <button><a href='login.php'>로그인</a></button>";
    }
    ?>
        <button><a href="reservation.php?id=<?=$id?>">예약하기</a></button>
</body>
</html>