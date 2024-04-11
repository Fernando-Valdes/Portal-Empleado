<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="public/images/TA PJECHIS.ico" />
    <title>Tribunal Administrativo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="public/css/style_login.css" type="text/css" ">
    <link rel="style" href="public/css/style.css">
  </head>
  <body class="">
    <section>
      <div class="row g-0">
        <div class="col-lg-7 d-none d-lg-block">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item img-cl min-vh-100 active">
                <a href="https://tachiapas.gob.mx/capacitaciones/"  target=”_blank”><img src="public/images/anuncios/4.jpg" class="vh-100 mw-100 mv-100 col-md-12"></a>                            
              </div>
              <div class="carousel-item min-vh-100">
                <a href="https://tachiapas.gob.mx/comite-igualdad/"  target=”_blank”><img src="public/images/anuncios/5.jpg" class="vh-100 mw-100 mv-100 col-md-12"></a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Regresar</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>        
        <div  style="background-color: #692e42; " class="col-lg-5 d-flex flex-column min-vh-100 position-relative backcolor">
          <div class="justify-content-center">
            <h3 class="fw-bold text-center pt-5" style="color: f0f2f5 ;"></h3>
            <h3 class="fw-bold text-center pt-5" style="color: f0f2f5 ;"></h3>
          </div>
        <div class="container containerheight mt-2 pt-4 d-flex justify-content-center">
          <div class="card mt-5 shadow bg-white rounded">
            <div class="card-header">
              <div class="text-center social_icon">
                <span>
                  <img src="public/images/logo circular.png" width="80" height="80" >
                </span>
              </div>
              <h3 class="fw-bold text-center">Iniciar sesión</h3>
            </div>
            <div class="card-body">

                <div class="input-group my-4">                
                  <span class="input-group-text material-icons md-dark" id="inputGroup-sizing-default">perm_identity</span>    
                <input type="email" id="email" name="email" class="form-control" aria-label="Sizing example input" data-toggle="tooltip" data-placement="right" title="Ingresar correo electrónico" placeholder="Correo"  aria-describedby="inputGroup-sizing-default" required>
                </div>
                  <div class="input-group">                
                    <span class="input-group-text material-icons md-dark span-icon" id="inputGroup-sizing-default">vpn_key</span>
                    <input type="password" id="password" name="password" class="form-control" aria-label="Sizing example input" data-toggle="tooltip" data-placement="right" title="Ingresar Contraseña"  placeholder="Contraseña" aria-describedby="inputGroup-sizing-default" required>
                  </div>
                  <div class="mb-4"> 
                    <input type="checkbox" id="showPassword"> Mostrar contraseña
                  </div>
                  <div class="d-grid mb-4">
                    <!--<input type="submit" class="btn btn-primary" title="Iniciar Sesión" name="iniciar_sesion" value="Iniciar sesión">-->
                    <button type="button" name="BtnLogin" class="btn btn-primary" id="BtnLogin" class="buttonModal">Iniciar sesión</button>                
                  </div>
                  <div class="d-flex justify-content-center">
                    <a title="Olvidó su contraseña" href="Recuperar-contrasena.php">¿Olvidaste tu contraseña?</a>
                  </div>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-center mb-2"> ¿Aún no estás registrado? </div>
                <div class="d-flex justify-content-center mb-2">
                  <a title="Registrarme" href="Registrarse.php">Registrarme</a>
				      </div>			
            </div>
            </div>
          </div>         
      </div>  
    </section>
    <footer class="text-center bg-dark py-3 ">
      <div class="container text-white">Tribunal Administrativo del Poder Judicial del Estado de Chiapas | Todos los Derechos         Reservados | Blvd. Belisario Domínguez No. 1713, Col. Xamaipak, Tuxtla Gutiérrez, Chiapas.
      <a class="text-white" href="https://www.tachiapas.gob.mx/">www.tachiapas.gob.mx</a>
    </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
