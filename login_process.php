<?php $conn = mysqli_connect('localhost', 'root', '', 'test99')?>

<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    if (empty($id) || empty($pw)) {
        echo "
        <script>
            alert('아이디와 비밀번호를 입력해주세요');
            location.href = 'login.php'
        </script>";
    } else if ($id == 'admin' && $pw == '1234') {
        $_SESSION['id'] = $id;
        $_SESSION['pw'] = $pw;
        echo "
        <script>
            alert('관리자로 로그인 되었습니다');
            location.href = 'index.php?id=admin'
        </script>";
    } else if ($id == 'guide1' && $pw == '1234') {
        $_SESSION['id'] = $id;
        $_SESSION['pw'] = $pw;
        echo "
        <script>
            alert('해설가로 로그인 되었습니다');
            location.href = 'index.php?id=guide1'
        </script>";
    } else if ($id == 'guide2' && $pw == '1234') {
        $_SESSION['id'] = $id;
        $_SESSION['pw'] = $pw;
        echo "
        <script>
            alert('해설가로 로그인 되었습니다');
            location.href = 'index.php?id=guide2'
        </script>";
    } else {
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $sql = "SELECT * FROM user WHERE id = '$id' AND pw = '$pw'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $_SESSION['id'] = $id;
            $_SESSION['pw'] = $pw;
            echo "
            <script>
                alert('일반회원으로 로그인 되었습니다');
                location.href = 'index.php?id=$id'
            </script>";
        } else {
            echo "
            <script>
                alert('회원가입을 먼저 진행해주세요');
                location.href = 'join.php'
            </script>";
        }
    }
?>