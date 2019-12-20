<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peticion</title>
    <style>

body{
  background-color: #000;
}

*{box-sizing:border-box;}

form{
	width:350px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#ccc;
}

form label{
	width:72px;
	font-weight:bold;
	display:inline-block;
}

form input[type="text"],form input[type="file"]{
	width:180px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}

form input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color:#fff;
	background-color:#000;
}

form input[type="submit"]:hover{
	cursor:pointer;
}

textarea{
	width:100%;
	height:100px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	/*resize: vertical | horizontal | none | both*/
	resize:none;
	display:block;
}
    </style>
</head>
<body>

  <form action="#" target="" method="get" name="formDatosPersonales">

    <label for="nombre">Nombre y apellido</label>

    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>

    <label for="apellidos">zona geografica</label>
    <input type="text" name="apellidos" id="apellidos" placeholder="de donde es"/>

    <label for="email">foto</label>
    <input type="file" name="email" id="email" placeholder="email" required />

    <label for="asunto">nacimiento</label>
    <input type ="date" name="asunto" id="asunto"/><br>


    <label for="asunto">fallecimiento</label>
    <input type ="date" name="asunto" id="asunto"/><br>

    <label for="mensaje">información</label>
    <textarea name="mensaje" for="mensaje" placeholder="describe brevemente en menos de 300 carácteres" maxlength="300"></textarea>
    <label for="nombre">URL</label>

    <input type="text" name="nombre" id="nombre" placeholder="pagina de informacion"/>


    <input type="submit" name="enviar" value="enviar datos"/>
  </form>



</body>
</html>
