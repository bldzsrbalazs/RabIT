
<?php 
//This is for prevent error codes, it is removable if not needed
error_reporting (0);
// If the $_GET['p'] not exists or empty, i created this, because with this when you load the page first, the default active link is the Home menu link
if(!array_key_exists('p', $_GET) || empty($_GET['p']))
	$_GET['p'] = 'home';
?>
<nav>
    <ul>
        <!-- If the $_GET['p'] equals to the if value the link is active, you are on that page -->
        <li ><a href = 'home' <?php if($_GET['p'] == "home"): echo "class='active'"; else: echo "class=''";  endif; ?>>Home</a></li>
        <li><a href = 'users' <?php if($_GET['p'] == "users"): echo "class='active'"; endif; ?>>Users list</a></li>
        <li><a href = 'advertisements' <?php if($_GET['p'] == "advertisements"): echo "class='active'"; endif;?>>Advertisements list</a></li>
    </ul>
</nav>