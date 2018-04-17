/* <![CDATA[ */
function Login(){
	var email=document.login.email.value;
	var mail=email.toLowerCase();
	var password=document.login.password.value;
	password=password.toLowerCase();
	if (email=="michel.micheline@hotmail.fr" && password=="michelline") {
	    alert("Bravo !,Vous avez trouvé le mot de passe :D");
	} else {
	    alert("Mauvais mot de passe :( )");
	}
}

/* ]]> */
/*javascript authentication attack */
