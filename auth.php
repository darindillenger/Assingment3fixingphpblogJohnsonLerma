<?php
if (!$_SESSION['authenticated']) {
	Header ("Location: /login.php");
}


if ($_SESSION['role'] == 'user'{
	$result = get_article($aid);
	$article = $result->fetch();

	if ($_SESSION['id'] != $article['author'] {
		redirect_and_exit("location: /admin.php");
	}

}

if ($_SESSION['role'] === 'user' && $row['author'] !== $_SESSION['id]) {
        redirect_and_exit("Location: /admin.php");
	}

?>
