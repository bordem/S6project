function login(){
	var email=document.Connexion.usermail.value;
	var mail=email.toLowerCase();
	var password=document.Connexion.password.value;
	password=password.toLowerCase();
	if (email=="michel.micheline@hotmail.fr" && password=="micheline") {
	    alert("Bravo !,Vous avez trouvé le mot de passe :D et c'est votre cadeau : MaFormagerie{cyber_db_fuck3r}");
	} else {
	    alert("Mauvais mot de passe :( )");
	}
}
