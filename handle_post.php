<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv"Content-Type"conent="text/html; charset=utf-8"/>
<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 - handle_post.php
/* This script receives five values from posting.html:
first_name, last_name, email, posting, submit */

// Address error management, if you want.

// Get values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = $_POST['posting'];

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>$posting</p></div>";

?>
</body>
</html>
