
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
        <section class="sec1">
            <div class="conteneur grid centrer">
                <div class="sec1-infos">
                    <h1>recherche facile de film et series</h1>
                    <p>Bienvenue sur le meilleur moteur de recherche pour découvrir pléthorie
                        de films et séries qui vous plaisent.<br> Grace à nos algorithmes optimisés 
                        vous n'avez qu'a entrer un scénario, une description du contexte, ou une type de personnage qui vous plait et notre AI vous propose 
                        le film ou la série adéquate.<br>
                        Vous pouvez aussi faire des recherches par séries similiares, mots clés ou même
                        customiser vos critères.
                    </p>
                    <a class="plus plus-outline" href="plus.html">Plus...</a>
                </div>
                <div class="zoneRecherche card">
                    <h2>recherche simple</h2>
                    <form action="resultat.inc.php" method="get" id="RechercheDirecte">
                        <div class="barre-logo">
                            <input type="text" placeholder="entrez un film ou une serie" name="maRecherche" class="barreR">
                            <button class="btnRecherche" type="submit">
                                <i class="fas fa-search fa-2x"></i>
                            </button>
                        </div>
                    </form>
                    <form>
                        <fieldset>
                            <legend>Recherche avancée</legend>
                            genre :<br>
                            <input type="radio" name="genre" value="film">
                            film<br>
                            <input type="radio" name="genre" value="serie">
                            serie<br>
                            <input type="radio" name="genre" value="animé">
                            animé<br>
                            <input type="radio" name="genre" value="autres">
                            autres<br>
                            Choissisez un theme :<br>
                            <select name="theme" id="theme">
                            <optgroup label="espionnage">
                                <option value="CIA"’> CIA</option>
                                <option value="Division"’> Division</option>
                                <option value="NSA"’> NSA</option>
                                <option value="Securité Interieure"’> Securité Interieure</option>
                                <option value="FBI"’> FBI</option>
                            </optgroup >
                            <optgroup label="richesse">
                                <option value="Milliardaire de genie"’> Milliardaire de genie </option>
                                <option value="famille riche"’> famille riche </option>
                                <option value="Playboy Milliardaire"’> Playboy Milliardaire</option>
                            </optgroup>
                            <optgroup label="crime">
                                <option value="crime organisé"> crime organisé </option>
                                <option value="gangs"> gangs </option>
                                <option value="assassinats commandités"> assassinats commandités </option>
                            </optgroup>
                            </select>
                            <br>
                        </fieldset>
                            <input type="submit" value="rechercher" id="env">
                        
                    </form>
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

    <!--vues de films et series-->
    <section class="vues">
        <h2 class="centrer">Nos Collections</h2>
        <div class="conteneur grid">
            <img alt="" src="images/series/POI.jpg">
            <img alt="" src="images/series/gotham.jpg">
            <img alt="" src="images/series/JR.jpg">
            <img alt="" src="images/series/TLK.jpg">
            <img alt="" src="images/series/nikita.jpg">
            <img alt="" src="images/series/supernatural.jpg">
            <img alt="" src="images/series/24.jpg">
            <img alt="" src="images/series/got.jpg">
            <img alt="" src="images/series/hanna.jpg">
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