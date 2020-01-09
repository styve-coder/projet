function commande() {
	if(document.myform.id_livreur.value==""){
		alert("veuillez enter le code du livreur (CIN)");
	}

	if(document.myform.nom_livreur.value==""){
		alert("veuillez enter le noms du livreur");
	}
	if(document.myform.prenom_livreur.value==""){
		alert("veuillez enter le prenoms du livreur");
	}
		if(document.myform.image_livreur.value==""){
		alert("veuillez enter l image du livreur");
	}
	if(document.myform.email_livreur.value==""){
		alert("veuillez enter l email du livreur");
	}
    else{
    var mail =document.myform.email_livreur.value;
    var a = "@";
    var pt = ".";
    var prenom = mail.substring(0,mail.indexOf(pt));
    var nom = mail.substring(mail.indexOf(pt) + 1,mail.indexOf(a));
}
	if(document.myform.adresse.value==""){
		alert("veuillez enter l adresse du livreur");
	}
	if(document.myform.telephone.value==""){
		alert("veuillez enter le telephone du livreur");
	}
		
}