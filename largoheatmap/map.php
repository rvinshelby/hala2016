<?php
header('Access-Control-Allow-Origin:*');

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,'db_voting');

$provinces = "SELECT * FROM tbl_vote";

$result = mysqli_query($conn, $provinces);

if(mysqli_num_rows($result) > 0){
	echo "<script>";
	echo "var provinceArray = [];";
		while($row = mysqli_fetch_assoc($result)){
		echo "provinceArray[provinceArray.length] = '".$row["fld_province"]."' ;" ;	
		}
	echo "</script>";	
}	

else{
	echo "No Record Found";
}


?>