<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
    <title>
      Calcular
    </title>
  </head>
  <body>
    <?php include "./php/php.php";?>
    <div class="w3-container w3-margin">
      <div class="w3-container w3-blue">
        <h2>
          Mayor que , menor que e igual que
        </h2>
      </div>
      <form action="./index.php" class="w3-container" method="get">
        <p>
          <label>
            Numero 1
          </label>
          <input class="w3-input" name="numero1" type="text"/>
        </p>
        <p>
          <label>
            Numero 2
          </label>
          <input class="w3-input" name="numero2" type="text"/>
        </p>
        <p>
          <input class="w3-button w3-block w3-green" type="submit" value="Button"/>
        </p>
      </form>
      <div class="w3-container w3-blue">
        <h2>
          <?php despliega();?>
        </h2>
      </div>
    </div>
  </body>
</html>

