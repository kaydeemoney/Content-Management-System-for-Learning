<h1>Registo</h1>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Nome:</label>
            <!-- Icone -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>

                <input type="text" class="form-control" placeholder="Insira o seu nome" id="email" name="registoNome">
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <!-- Icone -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>

                <input type="email" class="form-control" placeholder="email" id="email" name="registerEmail">
            </div>
        </div>
        <!-- PP -->
        <div class="form-group">
            <label for="pwd">Palavra passe:</label>
            <!-- Icone -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></i></span>
                </div>

                <input type="password" class="form-control" placeholder="palavra passe" id="pwd" name="registerPassword">
            </div>
        </div>
        <!-- Remember -->
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Lembre-me
            </label>
        </div>
        <?php

        /***********************************************************
         *        A static method is instantiated by the class.     * 
         ************************************************************/

        $register = ControllerForms::ctrRegister();

        if ($register == "ok") {

            echo '<script>
            if ( window.history.replaceState ) {

                window.history.replaceState( null, null, window.location.href );

            }

        </script>';


            echo '<div class="alert alert-success">O usúrario foi registado</div>';


        }
        ?>
        <!-- submit -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>