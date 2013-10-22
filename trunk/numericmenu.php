<?php
if($currentPage == "photo1.php")
		echo "<p class=\"bottommenu\">
		<b><a href=\"photo1.php\" class=\"bottommenu\">1</a></b> | 
		<a href=\"photo2.php\" class=\"bottommenu\">2</a> | 
		<a href=\"photo3.php\" class=\"bottommenu\">3</a> | 
		<a href=\"photo4.php\" class=\"bottommenu\">4</a>";
if($currentPage == "photo2.php")
		echo "<p class=\"bottommenu\">
		<a href=\"photo1.php\" class=\"bottommenu\">1</a> | 
		<b><a href=\"photo2.php\" class=\"bottommenu\">2</a></b> | 
		<a href=\"photo3.php\" class=\"bottommenu\">3</a> | 
		<a href=\"photo4.php\" class=\"bottommenu\">4</a>";
if($currentPage == "photo3.php")
		echo "<p class=\"bottommenu\">
		<a href=\"photo1.php\" class=\"bottommenu\">1</a> | 
		<a href=\"photo2.php\" class=\"bottommenu\">2</a> | 
		<b><a href=\"photo3.php\" class=\"bottommenu\">3</a></b> | 
		<a href=\"photo4.php\" class=\"bottommenu\">4</a>";
if($currentPage == "photo4.php")
		echo "<p class=\"bottommenu\">
		<a href=\"photo1.php\" class=\"bottommenu\">1</a> | 
		<a href=\"photo2.php\" class=\"bottommenu\">2</a> | 
		<a href=\"photo3.php\" class=\"bottommenu\">3</a> | 
		<b><a href=\"photo4.php\" class=\"bottommenu\">4</a></b>";
?>