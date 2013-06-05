<table class="center">
	<tr>
		<td>
			<table>
				<tr>
					<td>
						First News
					</td>
					<td>
						<table>
							<tr>
								<td>
									Second News
								</td>
							</tr>
							<tr>
								<td>
									Third News
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</td>
	<tr>
		<td>
			Preview;
		</td>
	</td>
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
