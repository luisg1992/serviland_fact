<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/style.css">
   <title>Document</title>
</head>
<body>
   <form action="sunat/api.php" method="post">
      <label for="search">Search</label>
      <input id="search" name="search" type="search" pattern=".*\S.*" required>
      <span class="caret"></span>
   </form>
</body>
</html>