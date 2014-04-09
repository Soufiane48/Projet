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
        <h1>Contact-nous</h1>
        <p>au cas si vous en avez des questions ou vous cherchez de l'aide veuillez bien nous contacter et Merci d'avance !!</p>
        <?php
          
          $to = 'Saisissez un email valide ici';
          $subject = '';
          $contact_submitted = 'Votre message à bien été envoyer.';

          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">Vous devez tapez un email valide pour  pouvoir nous contacter</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) &&  $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              
                          $nom = $_POST['your_name'];
                          $email= $_POST['your_email'];
                          $message = $_POST['your_message'];

                          $requete="insert into message values('$nom', '$email', '$message')";



                          $bdd = mysql_connect("localhost", "root", "")or die("Impossible de se connecter : " . mysql_error());
                          mysql_select_db("test",$bdd);
                          mysql_query($requete);
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Veuillez saisir votre nom, un adresse email valide, votre message et le resultat matimatique afin de pouvoir envoyer votre email.</p>';
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            <p style="line-height: 1.7em;">pour éviter le spam veuillez répondre à la question suivante:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
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
