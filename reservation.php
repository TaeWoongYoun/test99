<?php $conn = mysqli_connect('localhost', 'root', '', 'test99')?>

<?php
    if (isset($_GET['id'])) {
        if ($_GET['id'] == 'admin') {
            echo '1';
        } else if ($_GET['id'] == 'guide1') {
            echo '2';
        } else if ($_GET['id'] == 'guide2') {
            echo '3';
        } else if ($_GET['id'] == '') {
            echo "<script>
                    alert('로그인 해주세요');
                    location.href = 'index.php'
                </script>";
        } else {
            echo '5';
        }
    }
?>