<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php require "header.php" ?>
</head>

<body style="background-color: hsl(284, 100%, 7%);">

    <div class="container" style="width:60vh;position:fixed;top:200px;left:680px;background-color: hsl(284, 50%, 16%);border-radius:30px;border:4px solid whitesmoke;">

        <div class="row">

            <div class="img" style="position:relative;left:25px;">
                <img class="img img-thumbnail rounded mt-4 mb-2" src="../logo/univ-fianar.png" alt="logoEmit" style="width:10vh;">
                <img class="img img-thumbnail rounded mt-4 mb-2" src="../logo/Logo-EMIT.png" alt="logoEmit" style="width:10vh;position:relative;left:240px;">
            </div>
            <h1 class="h1 text-center text-light"><i class="fas fa-sign-in-alt"></i> Login</h1>
            <div class="form-floating mb-4 mt-3" style="position:relative;left:65px;">
                <input type="text" class="form-control border border-0 " style="width:40vh;" id="nomUser" placeholder="Nom d'utilisateur">
                <label for="nomUser" class="mx-2"><i class="far fa-user-circle"></i> Nom d'utilisateur</label>
            </div>
            <div class="form-floating mb-4" style="position:relative;left:65px;">
                <input type="password" class="form-control border border-0 bg-light" style="width:40vh;" id="passwdUser" placeholder="Mot de passe">
                <label for="passwdUser" class="mx-2"><i class="fas fa-unlock-alt"></i> Mot de passe</label>
            </div>
            <div id="erreur" style="color: red;width:40vh;position:relative;left:78px;">

            </div>
            <div class="text-center mb-4">
                <a type="button" id="seConnecter" class="btn btn-primary mb-4" style="width:40vh;position:relative;left:0px;">
                    <span id="chargement"></span>
                    Connexion
                </a>
                <a type="button" id="annulerCon" class="btn btn-warning mb-4" style="width:40vh;position:relative;left:0px;">
                    <span></span>
                    Actualiser
                </a>
            </div>

        </div>

    </div>
    <script src="../framework/js/jquery.js"></script>
    <script>
        $(document).ready(() => {
            $("#chargement").removeClass();
            $("#annulerCon").click(()=>{
                $("body").load("index.php");
            });
            connexion();
            $user = ["FRANCO"];
            $mdp = ["1234"];

            function connexion() {
                $("#seConnecter").click(function() {
                    $("#chargement").addClass("spinner-border spinner-border-sm");
                    $utile = $("#nomUser").val();
                    $pwde = $("#passwdUser").val();
                    if ($user.indexOf($utile) == -1) {
                        $("#seConnecter").removeAttr("href");
                        $("#erreur").addClass("alert alert-danger");
                        $("#erreur").text("");
                        $("#erreur").text("Utilisateur non reconnu!");
                        $("#chargement").removeClass();
                    } else if ($user.indexOf($utile) != $mdp.indexOf($pwde)) {
                        $("#seConnecter").removeAttr("href");
                        $("#erreur").addClass("alert alert-danger");
                        $("#erreur").text("");
                        $("#erreur").text("Mot de passe erroné!");
                        $("#chargement").removeClass();
                    } else if ($mdp.indexOf($pwde) == -1) {
                        $("#seConnecter").removeAttr("href");
                        $("#erreur").addClass("alert alert-danger");
                        $("#erreur").text("");
                        $("#erreur").text("Mot de passe incorrect!");
                        $("#chargement").removeClass();
                    } else {
                        $("#seConnecter").attr("href", "index1.php");
                    }
                });
            }
        });
    </script>
    <?php require "footer.php" ?>

</body>

</html>