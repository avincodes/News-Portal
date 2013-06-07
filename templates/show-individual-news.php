
<table class='individual-news-box' border width=1 color=white>
	<tr>
		<td class='individual-news'>
			<table>
				<tr>
					<td class='title'>
						<?=$item['title']?>
					</td>
				</tr>
				<tr>
					<td class='image'>
						<?php
							//print "<table>";
							//		print "<tr>";
							foreach($images as $image)
							{
								$image=$image['address'];
								$dim=getimagesize("images/".$image);
								//print_r($dim);
								$height=$dim[1];
								$width=$dim[0];
								$ar=$width/$height;
								if($ar>1.3)
								{
									$width=800;
									$height=600/$ar;
								}
								else
								{
									$height=600;
									$width=600*$ar;
								}
								
								print "<li>";
									print "<img src='images/".$image."' height=".$height." width=".$width." />";
								print "</li>";
							}
							//	print "</tr>";
							//print "</table>";
						?>
					</td>
				</tr>
				<tr>
					<td class='content'>
						<?=$item['content']?>
					</td>
				</tr>
			</table>

		</td>
		<td class='related-news'>
			<table style="width:400px">
				<tr>
					<td class='title'>
						Related News
					</td>
				</tr>
				<tr>
					<td class='content'>
					<?php
						foreach($related as $item)
						{
							print "<a href='individual-news.php?id=".$item["id"]."' />";
							print "<li>";
							print $item["title"];
							print "</li>";
						}
					?>
					</td>
				</tr>
			</table>
			
		</td>
	</tr>
</table>
