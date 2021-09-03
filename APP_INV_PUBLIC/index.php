<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Genereteur Etiquette</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/main.js"></script>
  <link rel="icon" href="images/favicon.png" />
</head>

<body onload="disable_typing()">
  <div class="main-panel page1-panel">
    <div class="inv-select">
      <div class="form-header"><img class="form-logo" src="images/logo.png" alt="logo">
        <p>Impression étiquette</p>
      </div>
      <form action="process/creer.php" method="GET">
        <label for="cat-select" class="form-label">Catégorie</label>
        <div onclick="change_select()">
          <select class="form-select" aria-label="Default select example" id="cat-select" onchange="change_select()" onclick="change_select()" name="selection">
            <option selected value="0">Mobilier</option>
            <option value="1">Informatique</option>
            <option value="2">Enseignement</option>
            <option value="3">Scientifique</option>
            <option value="4">Sport</option>
            <option value="5">Don</option>
            <option value="6">Prix</option>
          </select>
        </div>
        <div class="mb-3" onclick="typing()">
          <label for="typing" class="form-label">Ou</label>
          <input name="ecrit" type="text" class="form-control" id="typing" maxlength="8" placeholder="ex: FMPO" required>
        </div>
        <button type="submit" class="form-submit btn btn-primary mb-3">
          Continuer
        </button>
      </form>
    </div>

    <div class="inv-image">
      <img id="category-image" src="images/mob.jpg" alt="image" />
    </div>
  </div>
  <div class="copyright">Created By Anas Chahid 2021 - <?php echo date("Y"); ?></div>
</body>

</html>