<?php $conn = mysqli_connect('localhost', 'root', '', 'test99')?>

<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $sql = "INSERT INTO user (id, pw, name) VALUES ('$id', '$pw', '$name')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('회원가입 성공');
    location.href = 'index.php'
</script>