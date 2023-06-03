<?php
function genererChaineAleatoire($longueur = 10)
	{ return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($longueur/strlen($x)) )),1,$longueur);	}
	$numero1 = genererChaineAleatoire(20);
	$numero2 = genererChaineAleatoire(25);
	$numero3 = genererChaineAleatoire(30);
	$numero4 = genererChaineAleatoire(35);
	include('connexion.php');
	$nom = mysqli_real_escape_string($conn, $_POST['nom']);
	$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
	$contact = $_POST['contact'];
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	


	$sqlinscription = "INSERT INTO bd (nom, prenom, contact, email) VALUES ('$nom', '$prenom', '$contact', '$email');";
	$result = mysqli_query($conn, $sqlinscription);




// 	<?php
	
// 	include('connexion.php');

//  $sql="SELECT * FROM bd ";
// $reponse = mysqli_query($conn, $sql);	

// 	?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAUBOUE FOR AWS</title>

    <link rel="stylesheet" href="./css/style.css">

    <style>
        body{
            background-image: url("./images/pexels-elijah-o'donnell-3473569.jpg");
        }

        section{
            color: #fff;
        }

        .title_transport{
            text-align: center;
        }

        input, textarea, select{
            width: 85%;
            padding: 1rem;
            background: var(--color-bg);
            color: #fff;
            margin-left: 4rem;
            margin-right: 4rem;
            gap: 1.2rem;
        }
    </style>

    <!-- ICONSCOUT CDN -->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">



</head>
<body >

    <nav>
        <div class="container nav_container">
            <a href="index.html"><h4>LAUBOUE FOR AWS</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="liste.php">Liste des participants</a></li>
            </ul>

            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>



        <div style="color: #fff;margin-top:300px;margin-bottom:300px;text-align:center;font-size:23px">
		<?php
		echo("Bonjour $nom $prenom, merci de vous êtes inscrit à la cohorte AWS LAUBOUE FOR SIMPLON.")
		?>
		</div>

		




    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>LAUBOUE FOR AWS</h4></a>
                <p style="color: #fff;">« La technologie au coeur de nos actions. »</p>
            </div>

            <div class="footer_2">
                <h4 style="color: #fff;">Nos liens SIMPLON CI</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="liste.html">Liste des participants</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4 style="color: #fff;">Notre politique de données</h4>
                <ul class="privacy">
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Termes et conditions d'utilisation des données</a></li>
                    <li><a href="#">Données & Sécurité</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4 style="color: #fff;">Contactez_nous</h4>
                <div>
                    <p style="color: #fff;">(+225) 01 00 24 65 00</p>
                    <p style="color: #fff;">simplon_test_lauboue@simplon_test.ci</p>
                </div>

                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                </ul>
            </div>

            <div class="footer_copyright">
                <small style="color: #fff;">Copyright &copy; LAUBOUE FOR AWS</small>
            </div>
        </div>
    </footer>















    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <script>
            var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints:{
            600: {
                slidesPerView: 2
            }
        }
        });
    </script>
    
</body>
</html>



?>	

