<?php
	$servername="localhost";
	$dBUsername="root";
	$dBPassword="mysql";
	$dBName="films_series";
	$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
	if (!$conn){
		die("connexion echouée:".mysqli_connect_error());
	}
	$nom=$_GET['maRecherche'];
	$stmt = $conn->prepare('SELECT * FROM `serie` WHERE nom = ?');
	$stmt->bind_param('s',$nom);
	$stmt->execute();
	$resultat=$stmt->get_result();
	$ver=$resultat->num_rows;
	if($ver<1){
		$stmt2 = $conn->prepare('SELECT * FROM `film` WHERE nom = ?');
		$stmt2->bind_param('s',$nom);
		$stmt2->execute();
		$resultat2=$stmt2->get_result();
		$ver2=$resultat2->num_rows;
		if($ver2<1){
			header("location: /TEST%20SITE/resultat.php?description=film%20ou%20serie%20pas%20trouvée&image=NotFound"."&NBresultats=".$ver2."&genre=films");
			exit();
		}
		else{
			$row=$resultat2->fetch_assoc();
			header("location: /TEST%20SITE/resultat.php?success=filmtrouvé&nom=".$row["nom"]."&description=".$row["description"]."&personnages=".$row["personnages"]."&ads=".$row["année_de_sortie"]."&image=".$row["image"]."&genre=films");
			exit();
		}
	}
	else{
		$row=$resultat->fetch_assoc();
		header("location: /TEST%20SITE/resultat.php?success=serietrouvée&nom=".$row["nom"]."&description=".$row["description"]."&personnages=".$row["personnages"]."&ads=".$row["année_de_sortie"]."&image=".$row["image"]."&genre=series");
		exit();
	}
?>
