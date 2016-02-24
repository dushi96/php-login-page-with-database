<?php
session_start();
if(!isset($_SESSION["sess_user"]))
{
	header("Location:login.php");
}
else{
?>
<!doctype html>
<html>
<head>
<title>WELcome</title>
</head>
<body>
<h2>Welcome, <? $_SESSION['sess_user'];?>!<a href="logout.php">Logout></a></h2>
<p>
hbggugugtyftyfyghughjguggjgj hhvbhhg hvhghghgh hhghgh hghghghgjhj bjhuhuhb hgygn hguyghjn buh hjb hb h h h huhj hjhuhuh hbub hu uuhuijjbh  ubu unuhunubyh  ubu u nuhjjkjjhgtkfresderfghjkjhgfdsfghjkmj buni vb uytyutyu buh ub hubh ub ububiubiubiubiubnininoinoinbnnn       uhijoijiojij
</p>
</body>
</html>
<?php
}
?>