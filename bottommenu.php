<p class="bottommenu">
	<?php
	if($currentPage == "work.php" || $currentPage == "chemistry.php" || $currentPage == "aerosowing.php" || $currentPage == "monitoring.php" || $currentPage == "hinged.php"
		|| $currentPage == "hardware.php" || $currentPage == "avia.php" || $currentPage == "delivery.php" || $currentPage == "technology.php")
		echo "<b><a href=\"work.php\" class=\"bottommenu\">авиаработы</a></b> | ";
	else echo "<a href=\"work.php\" class=\"bottommenu\">авиаработы</a> | ";
	
	if($currentPage == "publication.php" || $currentPage == "reclame.php")
		echo "<b><a href=\"publication.php\" class=\"bottommenu\">публикации</a></b> | ";
	else echo "<a href=\"publication.php\" class=\"bottommenu\">публикации</a> | ";
	
	if($currentPage == "demand.php")
		echo "<b><a href=\"demand.php\" class=\"bottommenu\">оставить заявку</a></b> | ";
	else echo "<a href=\"demand.php\" class=\"bottommenu\">оставить заявку</a> | ";
	
	if($currentPage == "photo1.php" || $currentPage == "photo2.php" || $currentPage == "photo3.php" || $currentPage == "photo4.php" || $currentPage == "video.php")
		echo "<b><a href=\"photo1.php\" class=\"bottommenu\">фото и видео</a></b> | ";
	else echo "<a href=\"photo1.php\" class=\"bottommenu\">фото и видео</a> | ";
	
	if($currentPage == "price.php")
		echo "<b><a href=\"price.php\" class=\"bottommenu\">цены</a></b> | ";
	else echo "<a href=\"price.php\" class=\"bottommenu\">цены</a> | ";
	
	if($currentPage == "contact.php")
		echo "<b><a href=\"contact.php\" class=\"bottommenu\">контакты</a></b>";
	else echo "<a href=\"contact.php\" class=\"bottommenu\">контакты</a>";
	?>
</p>