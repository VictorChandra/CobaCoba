<?php
session_start();
	if($_SESSION['login'] ==1){
echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Admin Menu</title>
		<link rel='stylesheet' type='text/css' href='stylesheet/admin.css'/>
	</head>
	<body>
	<div id='bungkus_admin_menu'>
		<div id='header'>
			<h2>Admin Menu</h2>
		</div><!--#header-->
		<div id='konten_admin_menu'>
			<h2><marquee behavior='ALTERNATE'>Welcome to Admin Menu</marquee></h2>
			<table>
				<tr>
					<td>
						<a href='manage_content.php'>Manage Content</a>
					</td>
					<td>
						<a href='manage_admin.php'>Manage User</a>
					</td>
					<td>
						<a href='logout.php'>Logout</a>
					</td>
				</tr>
			</table>
		</div><!--#konten_admin_menu-->
	</div><!--#bungkus_admin_menu-->
	</body>
</html>";

}
 else{
	echo "Anda belum login,silahkan login dulu";
 }
 ?>