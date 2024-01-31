<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
      <fieldset>
        <legend>volume of a cylinder</legend>
      enter radius<input type="number" name="radius">
      <br/>
      enter height<input type="number" name="height">
      <input type="submit" name="submit" value="volume">
      </fieldset>
    </form>
    <?php 
    if(isset($_POST["submit"])){
      $radius=$_POST["radius"];
      $height=$_POST["height"];
      $volume=3.142*sqrt($radius)*$height;
      echo"the volume of the cylinder is:".round($volume,3);
    }
    
    ?>
</body>
</html>