<!DOCTYPE HTML>
<html>

<head>
  <title>Autocar Maroc</title>
  <meta name="description" content="Les autocars du Maroc, Transport routière" />
  <meta name="keywords" content="Les autocars du Maroc, Transport routière " />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html" >Autocars<span class="logo_colour">Maroc</span></a></h1>
          <h2>Deplacez vous partout au Maroc facilement</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="Bus.html">Bus</a></li>
            <li><a href="Tourisme.html">Tourisme</a></li>
            <li><a href="Reservation.html">Reservation</a></li>
            <li><a href="#">Gare Routiere</a>
              <ul>
                <li><a href="Oujda.html">Oujda</a></li>
                <li><a href="Nador.html">Nador</a>
                  
                </li>
                <li><a href="#">Al Hoceima</a></li>
                <li><a href="#">Tetouan</a></li>
                <li><a href="#">Tanger</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact-nous</a></li>
          </ul>
        </div>
      </nav>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
        <h3>Informations</h3>
          <h4>derniere News</h4>
          <h5>Mars 30, 2014</h5>
          <p>Decouvrez le Maroc et dèplacez vous en toute sècuritè à l'aide de ce site web<br /><a href="#">suite</a></p>
        </div>
        <div class="sidebar">
          <h3>Lien Utiles</h3>
          <ul>
            <li><a href="#">Ministère de Transport</a></li>
            <li><a href="#">CTM</a></li>
            <li><a href="#">Visite le Maroc</a></li>
            <li><a href="#">Tourisme</a></li>
            <li><a href="#">Hotel</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
		
	
		
		<?
		                 $ville = $_POST['ville'];
                          $heure= $_POST['heure'];
                       


                          $bdd = mysql_connect("localhost", "root", "")or die("Impossible de se connecter : " . mysql_error());
                          mysql_select_db("test",$bdd);
                          $resultat=mysql_query("SELECT * FROM bus where ville='$ville' AND heure='$heure'");
		
		 if ($ligne = mysql_fetch_array($resultat)) 
   {
   ?>
     <table border=1>
     <tr><td>Numéro</td><td>Titre</td></tr>
	 <?
      do 
         {
		 ?>
          <tr><td><? echo $ligne["bus"] ?></td><td><? echo $ligne["ville"] ?></td></tr>
		 <?
         } 
      while ($ligne = mysql_fetch_array($resultat));
	  ?>
  </table>
  <?
   } 
   else  
   {
      echo "Désolé, pas d'enregistrement !";   
   }
		?>
		
			
      </div>
    </div>
    <footer>
          <p>Réaliser par <i>Soufiane Sail </i></p>
    </footer>
  </div>
  <p>&nbsp;</p>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
