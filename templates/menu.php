<menu>
<table class="menu">
	<tr>
		<td >
			<a href="../html" class="menu-button">Home</a>
		</td>
		<?php
			$categories=query("select id,name from categories");
			foreach($categories as $category)
			{
		?>
		<td>
		<?php
			print "<a href='category-news.php?category=".$category["id"]."'  class='menu-button'>";
		?>
			<?=$category["name"]?> 
			</a>
		</td>
		<?php
			}
		?>
	</tr>
</table>
</menu>
