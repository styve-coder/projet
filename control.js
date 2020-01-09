function commande() {
	if(document.myform.ide_livreur.value==""){
		alert("veuillez enter le code du livreur (CIN)");
	}

	if(document.myform.id_client.value==""){
		alert("veuillez enter le code du client (CIN)");
	}
	var today = new Date();
	var livraison = document.myform.day.value;
	if(livraison == "") {
		alert("La date est obligatoire");
		document.getElementById('erreur').innerHTML = "La date est obligatoire";
		return false;
	}
	var date_livraison = new Date(livraison);
	if(today.toISOString() > date_livraison.toISOString()) {
		alert("la Date doit être supérieur à Aujourd'hui");
	}
	if(document.myform.etat.value==""){
		alert("veuillez enter l etat de la livraison");
	}
		if(document.myform.id_commande.value==""){
		alert("veuillez enter l id de la commande");
	}
}