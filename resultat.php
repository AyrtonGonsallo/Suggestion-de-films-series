<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Films et series</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/utilities.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> 

    </head>
    <body>
        <!-- entete-->
        <div class="navbar">
            <div class="conteneur flex">
                <h1 class="logo">recherche de films et series</h1>
                <nav>
                    <ul>
                        <li><a href="liste_films.html">liste de films</a></li>
                        <li><a href="liste_series.html">liste de series</a></li>
                        <li><a href="infos_mois.html">infos du mois</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- informations de recherche et barre de recherche-->
        <section class="sec1 resultat">
            <div class="conteneur centrer">
                <div class="sec1-infos grid">
                    <h1>recherche facile de film et series</h1>
                    <p id="desc">
                        <b>Description <?php echo $_GET['genre']?> :</b><br>
                        <?php echo ($_GET["nom"]."  ".$_GET['description']); ?>
                    </p>
                    <div >
                        <?php $path=$_GET['genre']."/".$_GET['image'].".jpg"; ?>
                        <img id="photo" alt="" src="images/<?echo $path?>">
                    </div>
                    <div id="btnRet">
                        <h1 id="retour">Retour</h1>
                        <a href="index.php"><i class="fas fa-arrow-circle-left fa-3x"></i></a>
                    </div>
                </div>
                
            </div>
        </section>
        <!--stats-->
        <section class="stats">
            <div class="conteneur">
                <h3 class="enteteStats centrer my-1">
                    Bienvenue sur le site le plus coté en bourse de Marrakech !
                </h3>
                <div class="grid grid3 centrer my-4">
                    <div>
                        <i class="fas fa-film fa-3x"></i>
                        <h3>10,349,405</h3>
                        <p class="text-sec">nombre de films referencés</p>
                    </div>
                    <div>
                        <i class="far fa-file-video fa-3x"></i>
                        <h3>102 films et 100 series</h3>
                        <p class="text-sec">publiés sur le site</p>
                    </div>
                    <div>
                        <i class="fas fa-users fa-3x"></i>
                        <h3>1245</h3>
                        <p class="text-sec">nombre de visiteurs</p>
                    </div>
                    <div>
                        <i class="fas fa-server fa-3x"></i>
                        <h3>pekin, tokyo, oslo</h3>
                        <p class="text-sec">emplacements des serveurs</p>
                    </div>
                </div>
            </div>
        </section>
    <!--footer-->
    <footer class="py-5 bg-dark footer">
        <div class="conteneur grid3">
                <h1>rechercher films et series</h1>
                <p>Copyright &copy;2020</p>
                <nav id="menufin">
                    <ul>
                        <li><a href="jeux.html">jeux videos</a></li>
                        <li><a href="docs.html">documentaires</a></li>
                        <li><a href="logs">logiciels</a></li>
                    </ul>
                </nav>
                <div class="social">
                    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fab fa-github fa-2x"></i></a>
                </div>
        </div>
    </footer>
    </body>
</html>