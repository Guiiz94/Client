<!DOCTYPE html>
<html>
<head>
<title>PointLand</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-color: black;
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

.button {
  display: inline-block;
  background-color: #8f8b9500;
  border-radius: 10px;
  border: 4px double #626262;
  color: #9e9e9e;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

</style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-middle">
    <img src="photos/logo.png" class="w3-jumbo w3-animate-top" width="100%" height="100%">
    <hr class="w3-border-grey" style="margin:auto;width:40%"><br>
    <div class="w3-large w3-center">
      <a href="connexion_client.php">
        <input type="button" class="button" value="Entrer">
      </a>
    </div>
  </div>
</div>

</body>
</html>