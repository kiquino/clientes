<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-171136344-1');
    </script>
    <div class="container">
        <div class=" full-height row d-flex align-items-center">
            <div class="col-md-4 col-sm-2"></div>
            <div id="card" class="col-md-4 col-sm-8 flip-card effect-on-active">
                <div class="form-box front">

                    <h2 class="texto-centro">login</h2>
                    <form action="" id="form-lg">
                        <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="complete con su email ej: youremail@domain.com" autocomplete="username"
                            name="id" id="id" placeholder="id" required>
                        <input type="password" pattern="[A-Za-z0-9_-]{1,15}" autocomplete="current-password" name="pwd"
                            id="pwd" placeholder="contraseña" required>
                        <button id="login" type="submit">ingresar</button>

                    </form>
                    <p>no tego cuenta, <a class="p-hover" style="color:blue;" onclick="flip()">registrarme</a></p>
                    <script src="actions.js"></script>
                </div>
                <div class="form-box back">

                    <h2 class="texto-centro">Registro</h2>
                    <form action="PDO/ingresar.php" method="post" class="needs-validation"
                         novalidate>
                        <input type="text" name="name" id="name" placeholder="nombre" required>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="username" name="mail" id="mail" placeholder="email" required>
                        <label for="birth">Fecha de nacimiento</label>
                        <input type="date" name="birth" id="birth">
                        <input type="password" autocomplete="new-password" name="pswr" id="pswr"
                            placeholder="contraseña" required>
                        <input type="password" autocomplete="new-password" name="pswrr" id="pswrr"
                            placeholder="confirme contraseña">

                        <button type="submit" name="submit">Registrarse</button>
                    </form>
                    <p>Ya tengo cuenta, <a class="p-hover" style="color:blue;" onclick="unflip()">ingresar</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-2"></div>
        </div>
    </div>
    <!--<script src="js/compare.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>