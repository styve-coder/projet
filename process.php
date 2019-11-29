<?php

session_start(); 

$mysqli=new mysqli('localhost', 'root', '', 'livraison') or die(mysqli_error($mysqli));
$id= 0;
$Update=false;
$id_livraison='';
$ide_facture='';
$ide_livreur='';
$etat='';

if(isset ($_POST['save'])){
	$id_livraison=$_POST['id_livraison'];
	$ide_facture=$_POST['ide_facture'];
	$ide_livreur=$_POST['ide_livreur'];
	$etat=$_POST['etat'];
	
	$mysqli->query("INSERT INTO livraison(id_livraison, ide_facture, ide_livreur, etat) VALUES('$id_livraison', '$ide_facture', '$ide_livreur', '$etat') ") or
	die($mysqli->error);
	
	$_SESSION['message'] ="record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: index.php");
	
}

if (isset($_GET['delete'])){
	$id= $_GET['delete'];
	$mysqli->query("DELETE FROM livraison WHERE Id=$id") or die($mysqli->error()); 


$_SESSION['message'] ="record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
		header("location: index.php");

}

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$Update=true;
	$result=$mysqli->query("select * FROM livraison WHERE Id=$id") or die ($mysqli->error());
	if(count($result)==1){
		$row = $result->fetch_array();
		$id_livraison=$row['id_livraison'];
		$ide_facture=$row['ide_facture'];
		$ide_livreur=$row['ide_livreur'];
		$etat=$row['etat'];

	}
}

if(isset($_POST['Update'])){
	$id_livraison=$_POST['id_livraison'];
		$ide_facture=$_POST['ide_facture'];
		$ide_livreur=$_POST['ide_livreur'];
		$etat=$_POST['etat'];
	
	$mysqli->query("Update livraison SET id_livraison='$id_livraison', ide_facture='$ide_facture', ide_livreur='$ide_livreur', etat='$etat', WHERE Id='$id'") or die ($mysqli->error());
	$_SESSION['message']="record has been updated!";
	$_SESSION['msg_type']="warning";
	
	header('Location:index.php');
}
?>