/* <![CDATA[ */
function Login(){
	var email=document.login.email.value;
	var mail=email.toLowerCase();
	var password=document.login.password.value;
	password=password.toLowerCase();
	if (email=="hacker12@gmail.com" && password=="887862ba8e39f9badf8d7896c377b301") {
	    alert("Vous avez trouvé le mot de passe,mais il vous reste une petite étape");
	} else {
	    alert("Mauvais mot de passe");
	}
}

/* ]]> */
