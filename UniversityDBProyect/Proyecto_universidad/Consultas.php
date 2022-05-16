
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="Login">
        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <h1 class="subsubtitle" >Tablas</h1>
            <h2 class="subtitle">Seleccione alguna de los siguientes Tablas para consultar, crear, editar o eliminar</h2>
            
            <form action="/" class="form">
            
                <input type="button" value="Estudiante" class="primary-button login-button"  onclick="javascript:void(window.open('./est_conexion_pg1.php'));">
                <input type="button" value="Asignatura" class="primary-button login-button" onclick="javascript:void(window.open('./asig_conexion_pg1.php'));">
                <input type="button" value="Docente" class="primary-button login-button" onclick="javascript:void(window.open('./doc_conexion_pg1.php'));">
                <input type="button" value="Carrera" class="primary-button login-button" onclick="javascript:void(window.open('./car_conexion_pg1.php'));">
              
    
            </form>
 
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./Login.php'));" >Regresar</button>
        </div>
    </section>
</body>
</html>