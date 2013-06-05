<table class="news-table">
<?php
	$latest=query("select id,title,content from news order by timestamp desc limit 5;");
?>
	<tr>
		<td>
			<table>
				<tr>
					<td style="vertical-align:top">
						<table class="first-news">
						<?php 
							$current=$latest[0];
							$image=query("select address from images where id=?",$current["id"]);
							if(count($image)==0)
							{
								$image="default.png";
							}
							else
							{
								$image=$image[0];
								$image=$image["address"];
							}
						?>
							<tr>
								<td style="height:300px;text-align:center">
									<?php
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
										print "<img src=images/".$image." height=".$height." width=".$width." />";
									?>
								</td>
							</tr>
							<tr>
								<td>
									<table class="first-news">
										<tr>
											<td class="title">
												<?=$current["title"]?>
											</td>
										</tr>
										<tr>
											<td class="content">
												<?=substr($current["content"],0,768)?>...
											</td>
										</tr>
									</table>	
								</td>
							</tr>
						</table>	
					</td>
					<td style="vertical-align:top">
						<table>
						<?php 
							$latest=array_slice($latest,1);
							foreach($latest as $current)
							{
						?>
							<tr>
								<td>
									<table class="latest-news">
										<tr>
											<td class="title">
												<?=$current["title"]?>	
											</td>
										</tr>
										<tr>
											<td class="content">
												<?=substr($current["content"],0,256)?>...
											</td>
										</tr>
									</table>
								</td>
							</tr>
						<?php
							}
						?>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			Preview;
		</td>
	</tr>
	<?php
		$categories=query("select * from categories");
		$n=count($categories);
		$k=0;
		while($k<$n)
		{
			if($n-$k-1>=1)
			{
				print "<tr>";
					$item=$categories[$k];
					print"<td>";
						print $item["name"];
					print"</td>";
					$item=$categories[$k+1];
					print"<td>";
						print $item["name"];
					print"</td>";
				print "</tr>";
			}
			else
			{
				print "<tr>";
					$item=$categories[$k];
					print"<td>";
						print $item["name"];
					print"</td>";
				print "</tr>";
			}
			$k=$k+2;
		}
	?>	
				
</table>
