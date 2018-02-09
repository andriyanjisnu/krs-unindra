<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$npm = $_GET['npm'];
 
// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE a, b 
							  FROM mahasiswa a
							  JOIN user b 
							  ON (a.npm=b.username) 
							  WHERE npm=$npm AND b.username='$npm'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:m_all.php");
?>