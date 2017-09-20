<?php
$quoteArr = array("The future belongs to those who prepare for it today. -MalcomX",
"I know where I’m going and I know the truth, and I don’t have to be what you want me to be. I’m free to be what I want. -Muhammad Ali",
"Blindly following ancient customs and traditions doesn't mean the dead are alive, but that the living are dead -Ibn Khaldun");
$quote = $quoteArr[array_rand($quoteArr, 1)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mohammad Fahad Sheikh</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>mohammad fahad sheikh</h1>

  <img class="profile-pic" src="images/Fahad.jpg" alt="Mohammad Fahad Sheikh Profile Picture"/>

  <h2>about me</h2>

  <p class="profile-description">
    Javascript Engineer with Web, Mobile, Big Data, and Game Development experience. Passionate about UX, design,
    and building unified applications across mobile and web. Joined CSCI E-15 for an excuse to learn some PHP and Laravel.
  </p>

  <h1>random quote</h1>

  <blockquote><?php echo $quote; ?></blockquote>
</body>
</html>