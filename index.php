<?php
// Détection des appareils mobiles ou tablettes
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function isMobileOrTablet($user_agent) {
    $devices = ['Android', 'iPhone', 'iPad', 'iPod', 'webOS', 'BlackBerry', 'Windows Phone'];
    foreach ($devices as $device) {
        if (stripos($user_agent, $device) !== false) {
            return true;
        }
    }
    return false;
}

// Si ce n'est pas un mobile ou une tablette, bloquer l'accès
if (!isMobileOrTablet($user_agent)) {
    header("HTTP/1.1 403 Forbidden");
    echo "Accès refusé : ce site est uniquement accessible depuis un téléphone ou une tablette.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
  <script src="password_protect.js"></script>
</head>
<style>

 
    body {
      
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    .container {
      
      background-color: #fff;
      width: 85%;
      
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
    }

    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .container img{
      
      vertical-align: middle;
      text-align: center;
      width: 400px;

    }

   
  
      
  
  </style>
<body>
    
    <div class="container" style="max-width:800px;">
      <img  src="https://www.poledeseaux.fr/sites/poledeseaux.fr/www.poledeseaux.fr/themes/poledeseaux/logo.svg"><br><br><br><br>
    <h1 style="font-size: 53px;">Page protegee par mot de passe</h1>
  
  <form id="passwordForm" onsubmit="return checkPassword()">
    <input type="password" id="passwordInput" placeholder="Mot de passe" required style="height: 45px; font-size: 35px;">
    <input type="submit" value="Valider" style="font-size: 40px;">
  </form>
</div>
  <p id="errorText" style="color: red; display: none;">Mot de passe incorrect</p>
</body>
</html>



