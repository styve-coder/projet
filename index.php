<!DOCTYPE html>
<html>
<head>
	<title> PHP CRUD </title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"> </script>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</head>
	<body>
	<?php require_once 'process.php'; ?> 
	<?php
	
	if(isset($_SESSION['message'])): ?>
	
<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
</div>

<?php endif ?>
	<div class="container">
	<?php
	  $mysqli= new mysqli('localhost', 'root', '' ,'livraison') or die (mysqli_error($mysqli));
	  $result =$mysqli->query("SELECT * FROM livraison") or die($mysqli->error);
	  //pre-r($result);
	  //pre-r($result->fetch_assoc());
	  //pre-r($result->fetch_assoc());
	  ?>
	  <div class="row justify-content-center">
	  
	  <table class="table">
	   <thead>
	    <tr>
	       <th> id_livraison </th>
		   <th> ide_livreur</th>
		   <th> ide_facture </th>
		   <th> etat </th>
			<th colspan="2"> action </th>
	    </tr >
	   </thead>
	   <?php
			while($row=$result->fetch_assoc()): ?>
			<tr> 
			<td> <?php echo $row['id_livraison']; ?></td>
			<td> <?php echo $row['ide_facture']; ?></td>
			<td> <?php echo $row['ide_livreur']; ?></td>
			<td> <?php echo $row['etat']; ?></td>
			<td> <a href="index.php?edit=<?php echo $row['Id'];?>"
			class="btn btn-info">Edit </a>
			<a href="process.php?delete=<?php echo $row['Id']; ?>" 
			class="btn btn-danger"> Delete </a>
			</td>
			
			</tr>
			<?php endwhile; ?>
	     </table>
	  </div>
	  <?php 
  
	  
	  function pre_r($array) {
		  echo '<pre>';
		  print_r($array);
		  echo '</pre>';
	  }
	  
	?>
	<div class="row justify-content-center">
		<form action="process.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $id; ?>">
		
		<div class= "form-group">
		<label> id_livraison </label>
		<input type="text" name="id_livraison" class="form-control" value="<?php echo $id_livraison;  ?>" placeholder="livraison id">
		</div>
		<div class="form-group">
		<label> ide_facture </label>
		<input type="text" name="ide_facture" class="form-control" value="<?php echo $ide_facture; ?>" placeholder="facture id">
		</div>
		<div class= "form-group">
		<label> ide_livreur </label>
		<input type="text" name="ide_livreur" class="form-control" value="<?php echo $ide_livreur;  ?>" placeholder="enter your name">
		</div>
		<div class="form-group">
		<label> etat </label>
		<input type="text" name="etat" class="form-control" value="<?php echo $etat; ?>" placeholder="enter your stat">
		</div>
		<div class="form-group">
		<?php
		if($Update == true):
		?>
		<button type="submit" class="btn btn-info" name="Update"> Update</button>
		<?php else: ?>
		<button type="submit" class="btn btn-primary" name="save"> Save</button>
		<?php endif; ?>
		</div>
		</form>
		</div>
		</div>
	</body>

</html>