
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Conexión PosgreSQL</title>
    <link  rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="Login">
        <div class="form-container">
            <h1 class="title creation">Bases Datos Universidad</h1>
            <form action="/" class="form">
                <label for="email" class="label">Email address</label>
                <input type="email" id="email" placeholder=" Enter your email address" class="input input-email">

                <label for="new-password" class="label">Password</label>
                <input type="password" id="new-password" placeholder="  ********" class="input input-password">

                <p class="resend"> 
                    <a href="/">¿Que deseas hacer?</a> 
                </p>

                
                <input type="button" value="Tablas" class="primary-button login-button"  onclick="javascript:void(window.open('./Consultas.php'));">
                <input type="button" value="Reportes" class="primary-button login-button" onclick="javascript:void(window.open('./Reportes.php'));">
            
            </form>
           
           
            <button class="primary-button signup-button" type="button" onclick="javascript:void(window.open('./auditoria_conexion_pg1.php'));" >Auditoria</button>
           
          
            

        </div>
    </section>
</body>
</html>