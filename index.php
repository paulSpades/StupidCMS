
<?php 

include 'app.php';
$pages = new Data('pages');
$posts = new Data('posts');

$homepage = "theme/posts.html";

if( isset($_GET['page']) && (!empty($_GET['page']) || $_GET['page'] === "0" ) ) {
	$key = $_GET['page'];
	include "theme/page.html";
} else if ( isset($_GET['post']) && (!empty($_GET['post']) || $_GET['post'] === "0") ) {
	$key = $_GET['post'];
	include "theme/singlePost.html";	
} else {
	include $homepage;
}

?>