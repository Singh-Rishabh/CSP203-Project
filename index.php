<?php
session_start();

if(!isset($_SESSION['id'])){
	header("Location: login.php");
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
		$content = $row[ 'content'];
		$date = $row[ 'date' ];
		
		
		$output = $bbcode->Parse($content);
		$posts  .= "<div><h2><a href ='view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><hr /></div>";
		
	}
	echo $posts;
} else {
	echo "there are no posts to display";
}

$postnew ="<div><h2><a href ='post.php'>POST</a></h2></div>";
echo $postnew;

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
	echo"<a href= 'admin.php' >Admin</a> | <a href= 'logout.php'>Logout</a>";
}

if(!isset($_SESSION['username']) ) {
	echo"<a href= 'login.php' >Login</a>" ;
}

if(isset($_SESSION['username']) && !isset($_SESSION['admin']) ) {
	echo "<a href= 'logout.php' >Logout</a>" ;
}

?>

</body>
</html>
