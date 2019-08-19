function verificarSenhaMestra(){
	var senhaMestra = document.getElementById("senhaProf").value;

	if(senhaMestra == "123"){
		window.open("dashboard.php");
	} else {
		alert("Senha Incorreta!");
	}
}