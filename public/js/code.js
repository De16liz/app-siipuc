function iniciar(){

	var usu = $("#usu").val();
	var pass = $("#pass").val();

	$.ajax({
		url:"iniar.php",
		success: function(result){
			if(result=="true"){
				document.location.href="labsi.php";
			}else{
				$("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, no se puedo comprobar el usuario</b></div>");
			}
		},
		data:{
			usu:usu,
			pass:pass
		},
		type:"POST"
	})
}