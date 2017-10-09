<body>    
<body background=”tovabbi-szereplok_image_10006539_16-9.jpg”> 
  <?php   
    $login = ""; $jelszo = ""; 
    // Az űrlapot elküldték ?
    if (isset($_POST["kuld"])) {
      // Létezik a 'nev' nevű mező?	
      if (isset($_POST["login"])) { 
        if ( $_POST["login"] > "") {$nev = $_POST["login"];}
      } 
      // Létezik a 'jelszo' nevű mező?	
      if (isset($_GET["jelszo"])) { 
        if ($_POST["jelszo"] > "") {$jelszo = $_POST["jelszo"];}
      }   
      // A beérkező adatok megjelenítése
      echo"<h2>Ezt küldte a szervernek:</h2>
           <br><b>Login:</b> $login
           <br><b>Jelszó:</b> $jelszo
           <br><hr><br>"; 
    } 
    ?> 
    <h2>Bejelentkezés az oldalra</h2>
    <form action="php5_form_post_jelszo.php" method="post" >
      <label for="login">Login:</label>
      <input type="text" id="login" name="login" value="" > <br>
      <label for="jelszo">Jelszó:</label>
      <input type="password" id="jelszo" name="jelszo" value="" >
	  <input type="button" value="OK" onclick="location='menu.php';">
      
    </form>  
     	 <img src="tovabbi-szereplok_image_10006539_16-9.jpg" alt="tovabbi-szereplok_image_10006539_16-9" style="display:block; float:left"/>
<br>
      


</body>
 