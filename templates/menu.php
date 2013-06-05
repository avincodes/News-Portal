<menu>
<table class="menu">
	<tr>
		<td>
			<a href="../html" class="menu-button">Home</a>
		</td>
		<?php
			$categories=query("select name from categories");
			foreach($categories as $category)
			{
		?>
		<td>
			<a href="" class="menu-button">	<?=$category["name"]?> </a>
		</td>
		<?php
			}
		?>
	</tr>
</table>
</menu>
