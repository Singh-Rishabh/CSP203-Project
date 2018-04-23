<?php
session_start();

if(!isset($_SESSION['admin']) && $_SESSION['admin'] != 1){
	header("Location: login.php");
	return;
}
include_once("db.php")
?>

<!DOCTYPE html >
<html>
<head>
        <title>BLOG</title>
</head>
<body>
<?php
require_once("nbbc/nbbc.php");
$bbcode = new BBCode;
$sql = "SELECT * FROM posts ORDER BY id DESC";
$res = mysqli_query($db,$sql) or die(mysql_error());
$posts = "";

if(mysqli_num_rows($res) > 0) {
	
	while($row = mysqli_fetch_assoc($res)) {
		$id = $row[ 'id' ] ;
		$title = $row[ 'title'];
        $content = $row['content'];
		$date = $row[ 'date' ];
		$output = $bbcode->Parse($content);
		
		$admin = "<div><a href ='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Reply</a></div>";
		
		$posts  .= "<div><h2><a href ='view_post.php?pid=$id' target='_blank'>$title</a></h2><h3>$date</h3>$admin<hr /></div>";
		
	}
	echo $posts;
} else {
	echo "there are no posts to display";
}
?>

</body>
</html>