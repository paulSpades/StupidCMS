<?php 
	include '../app.php';

	$pages = new Data('../pages');
	$posts = new Data('../posts');
	$users = new Data('../users');

	if( isset($_GET['do']) && !empty($_GET['do'])){
		$do = $_GET['do'];
	}

// function putDummyData(){
// 	global $pages, $posts, $users;

// 	$b = new Page;
// 	$b->pub = true;
// 	$b->title = "Contact Us";
// 	$b->keywords = "page, contact, text";
// 	$b->content = "This should be the <b>Contact Us page</b>. And this is <i>dummy data</i>.";
// 	$pages->add($b);

// 	$c = new Post;
// 	$c->pub = true;
// 	$c->postType = "text";
// 	$c->title = "Example #1 Using global";
// 	$c->keywords = "php, global, text";
// 	$c->content = "This script will not produce any output because the echo statement refers to a local version of the \$a variable, and it has not been assigned a value within this scope. You may notice that this is a little bit different from the C language in that global variables in C are automatically available to functions unless specifically overridden by a local definition. This can cause some problems in that people may inadvertently change a global variable. In PHP global variables must be declared global inside a function if they are going to be used in that function.";
// 	$c->author = "admin";
// 	$posts->add($c);

// 	$d = new User;
// 	$d->role = "administrator";
// 	$d->name = "admin";
// 	$d->email = "admin@domain.com";
// 	$d->fname = "Paul";
// 	$d->password = "admin";
// 	$users->add($d);
// }
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>  </title>

	<link rel="stylesheet" href="css/main.css" >
</head>
<body>
	<header>
		<div class="container">
			<h2 class="logo"><a href="index.php"> Stup!d CMS </a> </h2>
			<nav>
				<a href="?do=page">+ Page</a>
				<a href="?do=post">+ Post</a>
				<a href="?do=user">+ User</a>
				<a href="?do=editUser">User Settings</a>
				<a href="?do=editSettings">Site Settings</a>
				<a href="../">&rarr; Website</a>
			</nav>
		</div>
	</header>
	<section id="main">
		<div class="container">

		<?php include 'forms/'. $do .".html" ?>

		</div> <!-- end .container -->
	</section>
	<footer>
		<div class="container">
			<p>
				<b>Stup!id CMS</b>
				, &copy; <?= date('Y') ?>
			</p>
		</div>
	</footer>
</body>

</html>