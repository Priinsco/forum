<?php require("actions/sigupAction.php"); ?>
<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php")?>

<body class="container">
    <form method="post" class="mt-5">

        <?php if(isset($errorMSG)){ echo "<div class='bg-dark text-light text-center'>". $errorMSG ."</div>";} ?>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>
</body>
</html>