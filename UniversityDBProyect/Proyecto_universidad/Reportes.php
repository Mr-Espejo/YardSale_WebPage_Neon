
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="Login">
        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle" >Reportes</h1>
            <h2 class="subtitle">Selecciona alguno de los siguientes Reportes</h2>
            
            <form action="/" class="form">
                
                <input type="button" value="Listados de asignatura" class="primary-button login-button"  onclick="javascript:void(window.open('./v1_conexion_pg1.php'));">
                <input type="button" value="Listado de docentes sin asignaturas" class="primary-button login-button" onclick="javascript:void(window.open('./v2_conexion_pg1.php'));">
            
            </form>
 
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./Login.html'));" >Regresar</button>
        </div>
    </section>
</body>
</html>