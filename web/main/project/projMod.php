<div class="content body">
<?php
	include('main/dbConnect.php');
	
	$sql="SELECT ProjectId FROM Project WHERE ProjectStatus LIKE '%Active%'";
	$data=mysqli_query($connection, $sql);
	
	if(mysqli_num_rows($data)>=1){ ?>
		<select onchange="ajaxFunction1(this.value,'main/project/modifyProj.php','desc')">
			<option value="-1">------Choose A Project--------</option>
		<?php
				 $query="SELECT ProjectId,ProjectName FROM Project WHERE ProjectStatus LIKE '%Active%'";
				$data1=mysqli_query($connection, $query);
					if(mysqli_num_rows($data1)>=1){		
?>
							<?php while ($result=mysqli_fetch_assoc($data1)) {?>
								<option value="<?php echo $result['ProjectId']; ?>"><?php echo $result['ProjectName']; ?></option>
							<?php } ?>
<?php 				}
		
	echo "</select>";
	}else{ ?>
		<big> No Data Found</big>
<?php } ?>
<div id="desc">
</div>
</div>
