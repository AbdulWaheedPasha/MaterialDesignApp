<?php 

$db = mysqli_connect('localhost','waheed','waheed123','quranrom_1');
//$db = mysqli_connect('localhost','quranrom_1','quranrom1','quranrom_1');

$sSQL= 'SET CHARACTER SET utf8'; 

mysqli_query($db,$sSQL);

if(isset($_POST['search_value'])){
	$search_value = $_POST['search_value'];
	if(is_numeric($search_value)){
		$sql1 = "SELECT name , number FROM chapters where number = '$search_value' ";
		$result = mysqli_query($db,$sql1);
		while ($row = mysqli_fetch_array($result)) {
			echo '<button class="btn btn-primary btn-round">'.$row['name'].'</button>';
		}
	}
	else{
	$sql = "SELECT name , number from chapters where name LIKE '%$search_value%' ORDER by number ASC";
	$result = mysqli_query($db,$sql);
	$num = mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) {

		echo '<button class="btn btn-primary btn-round" onclick="showcontent('.$row['number'].')">'.$row['name'].'</button>';
	}
	}
	
	
}
?>