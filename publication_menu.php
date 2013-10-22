<p class="topmenu">
	<?php
	if($currentPage == "publication.php")
		echo "<b><a href=\"publication.php\" class=\"topmenu\">Статьи</a></b> | ";
	else echo "<a href=\"publication.php\" class=\"topmenu\">Статьи</a> | ";
	
	if($currentPage == "reclame.php")
		echo "<b><a href=\"reclame.php\" class=\"topmenu\">Реклама</a></b>";
	else echo "<a href=\"reclame.php\" class=\"topmenu\">Реклама</a>";
	?>
</p>