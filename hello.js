/* <![CDATA[ */
function Login(){
	var email=document.login.email.value;
	var mail=email.toLowerCase();
	var password=document.login.password.value;
	password=password.toLowerCase();
	if (email=="michel.micheline@hotmail.fr" && password=="micheline") {
	    alert("Bravo !,Vous avez trouvé le mot de passe :D et c'est votre cadeau : {cyber_db_fuck3r}");
	} else {
	    alert("Mauvais mot de passe :( )");
	}
}

/* ]]> */
/*javascript authentication attack */
