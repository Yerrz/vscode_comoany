<?php
header("Content-Type: text/html; charset=utf-8");
include('conn.php');
$sql = "select * from vscode where id=1";
$query = mysqli_query($db,$sql);
$info = mysqli_fetch_array($query);
print_r($info['sdetail']);
$sDetail = $info['sdetail'];

$time = date('Y-m-d H:i:s',time());

//提交表单
$user = '';
if(isset($_POST['user'])){
    $user = $_POST['user'];
}

$sdetail = array();
array_push($sdetail,$time,$user,'来源','haha');
print_r($sdetail);
if($info['sdetail'] == '' || $info['sdetail'] == null){
    $sDetail = array();
    $sDetail[] = $sdetail;
}
else{
    $sDetail = json_decode($sDetail);
    $sDetail[] = $sdetail;
}
print_r($sDetail);
$sDetail = json_encode($sDetail);
$sql_update = "update vscode set sdetail='{$sDetail}' where id=1";
mysqli_query($db,$sql_update);

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <form method="post" action="sdetail.php">
        <input type="text" id="tags" name="user">
        <input type="submit" value="提交" >
    </form>
</body>
</html>

<!-- [["2023-11-13 12:34:12","u80e1u4e66","u6765u6e90","haha"],["2023-11-13 12:34:17","u80e1u4e66","u6765u6e90","haha"]]
[["2023-11-13 12:34:12","u80e1u4e66","u6765u6e90","haha"],["2023-11-13 12:34:17","u80e1u4e66","u6765u6e90","haha"],["2023-11-13 12:35:24","u9886u4e66","u6765u6e90","haha"]] -->