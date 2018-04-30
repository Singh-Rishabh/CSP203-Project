<!DOCTYPE html >
<html>
<head>
        <title>BLOG</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<?php
session_start();

if(!isset($_SESSION['admin']) && $_SESSION['admin'] != 1){
	header("Location: login.php");
	return;
}
include_once("db.php")
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/abc.css" rel="stylesheet">
	
	<style>
	body{font-size:20px;color:#212529;font-family:Lora,'Times New Roman',serif}p{line-height:1.5;margin:30px 0}p a{text-decoration:underline}h1,h2,h3,h4,h5,h6{font-weight:800;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif}a{color:#212529;-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s}a:focus,a:hover{color:#0085a1}blockquote{font-style:italic;color:#868e96}.section-heading{font-size:36px;font-weight:700;margin-top:60px}.caption{font-size:14px;font-style:italic;display:block;margin:0;padding:10px;text-align:center;border-bottom-right-radius:5px;border-bottom-left-radius:5px}::-moz-selection{color:#fff;background:#0085a1;text-shadow:none}::selection{color:#fff;background:#0085a1;text-shadow:none}img::selection{color:#fff;background:0 0}img::-moz-selection{color:#fff;background:0 0}#mainNav{position:absolute;border-bottom:1px solid #e9ecef;background-color:#fff;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif}#mainNav .navbar-brand{font-weight:800;color:#343a40}#mainNav .navbar-toggler{font-size:12px;font-weight:800;padding:13px;text-transform:uppercase;color:#343a40}#mainNav .navbar-nav>li.nav-item>a{font-size:12px;font-weight:800;letter-spacing:1px;text-transform:uppercase}@media only screen and (min-width:992px){#mainNav{border-bottom:1px solid transparent;background:0 0}#mainNav .navbar-brand{padding:10px 20px;color:#fff}#mainNav .navbar-brand:focus,#mainNav .navbar-brand:hover{color:rgba(255,255,255,.8)}#mainNav .navbar-nav>li.nav-item>a{padding:10px 20px;color:#fff}#mainNav .navbar-nav>li.nav-item>a:focus,#mainNav .navbar-nav>li.nav-item>a:hover{color:rgba(255,255,255,.8)}}@media only screen and (min-width:992px){#mainNav{-webkit-transition:background-color .2s;-moz-transition:background-color .2s;transition:background-color .2s;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-backface-visibility:hidden}#mainNav.is-fixed{position:fixed;top:-67px;-webkit-transition:-webkit-transform .2s;-moz-transition:-moz-transform .2s;transition:transform .2s;border-bottom:1px solid #fff;background-color:rgba(255,255,255,.9)}#mainNav.is-fixed .navbar-brand{color:#212529}#mainNav.is-fixed .navbar-brand:focus,#mainNav.is-fixed .navbar-brand:hover{color:#0085a1}#mainNav.is-fixed .navbar-nav>li.nav-item>a{color:#212529}#mainNav.is-fixed .navbar-nav>li.nav-item>a:focus,#mainNav.is-fixed .navbar-nav>li.nav-item>a:hover{color:#0085a1}#mainNav.is-visible{-webkit-transform:translate3d(0,100%,0);-moz-transform:translate3d(0,100%,0);-ms-transform:translate3d(0,100%,0);-o-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}header.masthead{margin-bottom:50px;background:no-repeat center center;background-color:#868e96;background-attachment:scroll;position:relative;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}header.masthead .overlay{position:absolute;top:0;left:0;height:100%;width:100%;background-color:#212529;opacity:.5}header.masthead .page-heading,header.masthead .post-heading,header.masthead .site-heading{padding:200px 0 150px;color:#fff}@media only screen and (min-width:768px){header.masthead .page-heading,header.masthead .post-heading,header.masthead .site-heading{padding:200px 0}}header.masthead .page-heading,header.masthead .site-heading{text-align:center}header.masthead .page-heading h1,header.masthead .site-heading h1{font-size:50px;margin-top:0}header.masthead .page-heading .subheading,header.masthead .site-heading .subheading{font-size:24px;font-weight:300;line-height:1.1;display:block;margin:10px 0 0;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif}@media only screen and (min-width:768px){header.masthead .page-heading h1,header.masthead .site-heading h1{font-size:80px}}header.masthead .post-heading h1{font-size:35px}header.masthead .post-heading .meta,header.masthead .post-heading .subheading{line-height:1.1;display:block}header.masthead .post-heading .subheading{font-size:24px;font-weight:600;margin:10px 0 30px;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif}header.masthead .post-heading .meta{font-size:20px;font-weight:300;font-style:italic;font-family:Lora,'Times New Roman',serif}header.masthead .post-heading .meta a{color:#fff}@media only screen and (min-width:768px){header.masthead .post-heading h1{font-size:55px}header.masthead .post-heading .subheading{font-size:30px}}.post-preview>a{color:#212529}.post-preview>a:focus,.post-preview>a:hover{text-decoration:none;color:#0085a1}.post-preview>a>.post-title{font-size:30px;margin-top:30px;margin-bottom:10px}.post-preview>a>.post-subtitle{font-weight:300;margin:0 0 10px}.post-preview>.post-meta{font-size:18px;font-style:italic;margin-top:0;color:#868e96}.post-preview>.post-meta>a{text-decoration:none;color:#212529}.post-preview>.post-meta>a:focus,.post-preview>.post-meta>a:hover{text-decoration:underline;color:#0085a1}@media only screen and (min-width:768px){.post-preview>a>.post-title{font-size:36px}}.floating-label-form-group{font-size:14px;position:relative;margin-bottom:0;padding-bottom:.5em;border-bottom:1px solid #dee2e6}.floating-label-form-group input,.floating-label-form-group textarea{font-size:1.5em;position:relative;z-index:1;padding:0;resize:none;border:none;border-radius:0;background:0 0;box-shadow:none!important;font-family:Lora,'Times New Roman',serif}.floating-label-form-group input::-webkit-input-placeholder,.floating-label-form-group textarea::-webkit-input-placeholder{color:#868e96;font-family:Lora,'Times New Roman',serif}.floating-label-form-group label{font-size:.85em;line-height:1.764705882em;position:relative;z-index:0;top:2em;display:block;margin:0;-webkit-transition:top .3s ease,opacity .3s ease;-moz-transition:top .3s ease,opacity .3s ease;-ms-transition:top .3s ease,opacity .3s ease;transition:top .3s ease,opacity .3s ease;vertical-align:middle;vertical-align:baseline;opacity:0}.floating-label-form-group .help-block{margin:15px 0}.floating-label-form-group-with-value label{top:0;opacity:1}.floating-label-form-group-with-focus label{color:#0085a1}form .form-group:first-child .floating-label-form-group{border-top:1px solid #dee2e6}footer{padding:50px 0 65px}footer .list-inline{margin:0;padding:0}footer .copyright{font-size:14px;margin-bottom:0;text-align:center}.btn{font-size:14px;font-weight:800;padding:15px 25px;letter-spacing:1px;text-transform:uppercase;border-radius:0;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif}.btn-primary{background-color:#0085a1;border-color:#0085a1}.btn-primary:active,.btn-primary:focus,.btn-primary:hover{color:#fff;background-color:#00657b!important;border-color:#00657b!important}.btn-lg{font-size:16px;padding:25px 35px}
	</style>
</head>

<body>
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

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
		$posts  .= "<div class=\"post-preview\">".
            "<a href =\"view_post.php?pid=".$id."\">".
              "<h2 class=\"post-title\">".
               $title.
              "</h2>".
               "</a>".
           " <p class=\"post-meta\">". 
              "on ". $date."</p>".
			 " <h3>".
			 $admin.
			  "</h3>".
          "</div>".
          "<hr>";
		
		
		
	}
	echo $posts;
} else {
	echo "there are no posts to display";
}
?>

</body>
</html>