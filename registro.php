<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">Registro</h1>
                    <p class="register-login-p">Por favor ingrese sus datos para crear su cuenta</p>
                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="firstname" class="form-control" required>
                                    <label for="firstname" class="form-label">Nombre</label>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="username" class="form-control" required>
                                    <label for="username" class="form-label">Apodo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <input type="email" id="email" class="form-control" required>
                                <label for="email" class="form-label">E-mail</label>
                            </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="form-group margin--bottom">
                                <input type="password" id="confirmpassword" class="form-control" required>
                                <label for="confirmpassword" class="form-label">Confirmar contraseña</label>
                            </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
                                <label class="form-check-label order-2" for="remember">Acepto los términos y condiciones</label>
                                <label class="label--ckecked order-1" for="remember"></label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-lg-center">
                            <button type="button"class="btn btn-signup--register align-self-center">Aceptar</button>
                        </div>
                        <a href="#" class="register-link--haveaccount">¿Ya tiene una contraseña? Entrar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
