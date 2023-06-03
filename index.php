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

<!-- pour swiper les temoignages -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">



</head>
<body>

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

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>L'équipe SIMPLON CI fait confiance à Monsieur LAUBOUE...</h1>
                <p>Dans le cadre de ses activités de formation professionnelle au monde du numérique,
                    l'équipe SIMPLON CI demande à tous ses participants de s'enregistrer sur ce formulaire de présence 
                    en ligne et ce, pour toutes les cohortes à venir.
                </p>
                <a href="#" class="btn btn-primary">Je m'enregistre</a>
            </div>

            <div class="header_right">
                <div class="header_right-image">
                    <img src="./images/undraw_code_review_re_woeb.svg" alt="">
                </div>
            </div>
        </div>
    </header>


    

    <section>
        <div class="title_transport" style="margin-top: 7rem;">
            <h1 >Faites votre enregistrement</h1>
            
        </div>
        <br><br>
        <div class="transport_form" style="text-align: center;">
            <form action="traitement.php" action="liste.php" method="post" class="contact_form" >
                <div class="form_name" style="display:grid;gap:1.5rem">
                    <h2 >IDENTIFICATION</h2>
                

                    <input type="text" name="nom" placeholder="Nom du participant" required>
                    <input type="text" name="prenom" placeholder="Prénoms du participant*" required>
                    <input type="text" name="contact" placeholder="Numéro de téléphone*" required>
                    <input type="email" name="email" id="" placeholder="Email du participant">

                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary" style="margin-top: 2rem;" name="valider">M'enregistrer</button>
                </div>
                
                
            </form>
        </div>
    </section>








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