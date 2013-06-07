<?php
	$news=$values["news"];
?>
<table class="category-list-box">
<?php
	foreach($news as $new)
	{
		print "<tr>";
			print "<td>";
				print "<table class='category-list-news'>";
					print "<tr>";
						print "<td class='title'>";
							print "<a href='individual-news.php?id=".$new['id']."' >";
								print $new['title'];
							print "</a>";
						print "</td>";
					print "</tr>";
					print "<tr>";
						print "<td>";
							print "<table class='category-list-news'>";
								print "<tr>";
									print "<td class='image'>";
									$image=query("select address from images where id=? limit 1",$new['id']);
									if(count($image)==!0)
									{
										$image=$image[0]['address'];
										$dim=getimagesize("images/".$image);
										//print_r($dim);
										$height=$dim[1];
										$width=$dim[0];
										$ar=$width/$height;
										if($ar>2)
										{
											$width=600;
											$height=300/$ar;
										}
										else
										{
											$height=300;
											$width=300*$ar;
										}
										print "<img src='images/".$image."' height=".$height." width=".$width." />";
									}	
									print "</td>";
									print "<td style='text-align:justify;vertical-align:top'>";
									print substr($new["content"],0,1024)."...";
									print "</td>";
								print "</tr>";
							print "</table>";
						print "</td>";
					print "</tr>";
				print "</table>";
			print "</td>";
		print "</tr>";
	}
?>
</table>
