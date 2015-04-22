<?php
	$menuItems = array( "introduction" => "Introduction", 
						"benefits" => "Benefits", 
						"eyfs" => "EYFS", 
						"technology" => "Technology",
						"pricing" => "Pricing",
						"furtherinfo" => "Further Information");
	
?>


<ul id="navmenu" class="mainMenu">
	<?php
		// <li class="topmenu selected"><a href="introduction" class="menuLink"">Introduction</a></li>
		// <li class="topmenu"><a href="benefits" class="menuLink" ><span>Benefits</span></a>
		// <li class="topmenu"><a href="eyfs" class="menuLink" ><span>EYFS</span></a>
		// <li class="topmenu"><a href="technology" class="menuLink" >Technology</a></li>
		// <li class="topmenu"><a href="furtherinfo" class="menuLink" >Further Information</a></li>
		foreach ($menuItems as $key => $value) {
			if ($title == $key) print("<li class=\"topmenu selected\"><a href=\"$key\" class=\"menuLink\"><span>$value</span></a>");
			else 				print("<li class=\"topmenu\"><a href=\"$key\" class=\"menuLink\"><span>$value</span></a>");
		}
	?>
</ul>

<ul class="miniMenu">
	<li class="menuText"><a href="#">Menu</a>
		<ul class="noJS">
			<?php
			
			// <li class="menuHead selected"><a href="#" >Introduction</a></li>
			// <li class="menuHead"><a href="#" ><span>Benefits</span></a>
			// <li class="menuHead"><a href="#" ><span>EYFS</span></a>
			// <li class="menuHead"><a href="#" >Technology</a></li>
			// <li class="menuHead"><a href="#" >Further Information</a></li>
			foreach ($menuItems as $key => $value) {
			    if ($title == $key) print("<li class=\"menuHead selected\"><a class=\"menuLink\" href=\"$key\" >$value</a></li>");
				else 				print("<li class=\"menuHead\"><a class=\"menuLink\" href=\"$key\" >$value</a></li>");
			}
				
			?>
		</ul>
	</li>
</ul>