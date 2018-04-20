<?php 
//$con =  mysqli_connect('localhost','waheed','waheed123','hospital');
$con =  mysqli_connect('localhost','id5420298_waheed','waheed123','id5420298_hospital');
if(!$con){
	echo ' not connected';

}

if(isset($_POST['submit'])){
	echo "submited";
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$sql= "INSERT into patient (firstname,lastname,age,dob,gender,phone,message) VALUES ('$firstname','$lastname','$age','$dob','$gender','$phone','$message')";

	mysqli_query($con,$sql);
	?> <script type="text/javascript">
		window.location.replace("index.php");
	</script><?php 

}

if(isset($_POST['search_value'])){

	$name  = $_POST['search_value'];
	$sql = "SELECT * from patient where concat(firstname,lastname) like '%$name%'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)){
		echo '<tr>
            <td>' . $row['id'] .'</td>
            <td>'.$row['firstname'] . '</td>
            <td>'.$row['lastname'] . '</td>
            <td>'. $row['age'] . ' </td>
            <td>'. $row['dob'] . ' </td>
            <td>'. $row['gender'] . ' </td>
            <td>'. $row['phone'] . ' </td>
            <td>'. $row['message'] . ' </td>
          </tr>';
	}
}
?>