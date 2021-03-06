<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- FONT  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- ICONES -->
<script src="https://kit.fontawesome.com/837ff4d40e.js" crossorigin="anonymous"></script>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="../css/desktop.css">
<link rel="stylesheet" href="../css/wideScreenDesktop.css">
<link rel="stylesheet" href="../css/smallScreenDesktop.css">


    <title>Thomas RIES</title>
</head>
<body>

    <div class="main-container">
        <a href="index.html"><i class="fas fa-user-astronaut"></i></a> 
        <!-- START NAVBAR -->
        <div class="navbar">
            <ol class="nav-ol">
                <li><a href="#bienvenue">Bienvenue</a> </li>
                <li><a href="#about">À Propos </a> </li>
                <li><a href="#experiences">Expériences </a> </li>
                <li><a href="#diplomes"> Cursus Académique </a> </li>
                <li><a href="#contact"> Contact </a> </li>
            </ol>
            <a href="../PDF/CV_Thomas_RIES-BALSAMO.pdf" target="blank" id="top">
              <input class="cv-btn" type="button" value="CV PDF">
            </a>
        </div>


        <!-- START NAV TITLE -->
        <!-- MOBILE IMG -->
        <img class="imgMountains" src="../img/mountains.jpg" alt="moutains picture" title="moutains picture" height="896" width="414">
        <!-- SMALL SCREEN IMG -->
        <img class ="imgLactee" src="../img/voieLactee.jpg" alt="milkyWay Image" title="MilkyWay image">
        <!-- DESKTOP IMG -->
        <img class ="imgLaunch" src="../img/launch.jpg" alt="Launch Image" title="Launch image">
        <!-- DESKTOP WIDE SCREEN IMG -->
        <img class ="imgForest" src="../img/forest.jpg" alt="Forest Image" title="Forest image">



          <h1 class="main-title">Thomas Ries Balsamo</h1>
          <hr class="line">
          <h2 class="job-title">Développeur Web Front-End Junior</h2>
        <!-- END NAV TITLE -->

        <!-- START SOCIAL ICONS -->
        <div class="socialIcons">
            <a href="https://github.com/Thomas-Ries" target="blank"><img class ="git" src="../icones-blanches-png/github.png" alt="lien Github" title="lien Github"></a>
            <a href="https://fr.linkedin.com/in/thomas-ries-balsamo-24116410b" target="blank"><img src="../icones-blanches-png/linkedin.png" alt="lien Linkedin" title="lien Linkedin"></a>
            <a href="https://twitter.com/nom_dune_banane" target="blank"><img src="../icones-blanches-png/twitter.png" alt="lien Twitter" title="lien Twitter"></a>
            <a href="https://www.instagram.com/de_la_a_de_la/" target="blank"><img src="../icones-blanches-png/instagram.png" alt="lien Instagram" title="lien Instagram"></a>
        </div>
        <!-- END SOCIAL ICONS -->

        <!-- START DESCRIPTION -->
        <div class="bodyDescription-container">

          

        <div class="imgDescription">
            <div class="photoProfile">
                <img class="imgProfile" src="../img/profil.jpg" alt="Photo de profil" title="photo de profil Thomas">
            </div>

            <div class="textPresentation" id="bienvenue">
                <h3> Bienvenue !</h3>
            <br>
                <p>Je suis Thomas RIES BALSAMO </p>

                <p> Actuellement en formation Développeur Web au sein d'Epitech Strasbourg, je cherche à me spécialiser dans le développement Front-End. </p>

                <a href="mailto:thomasries.dev@gmail.com"> <input class="contact-btn desktop-view" type="button" value="Contactez-moi"> </a>
                <a href="../PDF/CV_Thomas_RIES-BALSAMO.pdf" target="blank"> <input class="contact-btn mobile-view" type="button" value="Visualisez mon CV"> </a>
            </div>
        </div>
        <!-- END START DESCRIPTION -->

    <div class="about" id="about">
        <h3> <i class="fas fa-atom"></i></i>02. À Propos de Moi </h3> 
        <br>
        <p class="aboutFirstDescription">
            Dans le cadre d'une reconversion professionnelle, je suis actuellement en formation <a href="https://www.coding-academy.fr/" target="balnk">Coding Academy</a> au sein de l'école <a href="https://www.epitech.eu/fr/ecole-informatique-strasbourg/" target="blank"> Epitech</a>.
            Ayant depuis toujours été attiré par la culture Web et le design, c'et tout naturellement que je m'oriente vers le métier de Développeur Web.
            Lors de ce cursus, j'ai fait le choix de me spécialisé dans le Front-End afin de progresser sur ce sujet qui me passionne.
        </p>

        <br>

        <p class="aboutSecondDescription">
            Afin de faire évoluer mes compétences acquises je souhaite prendre part à une aventure à part entière en m'intégrant au sein d'une entreprise locale.
            Il est certain que pour pour progresser, il nous faut sortir de notre zone de confort et se heurter à des sujet complexes. Ayant toujours été avide d'apprentissage je serais ravi de pouvoir compléter ma formation lors d'un stage au sein d'un entreprise
            dynamique qui saura placer le partage de connaissance, l'esprit d'équipe et l'entraide au centre de ses préoccupations.
        </p>

        <h4 class="langage-h4"> Quelques langages & framework appris durant la formation</h4>
        <div class="langages">
            <div class="first-ul-langage">
            <ul>
                <li><i class="fas fa-caret-right"> HTML & CSS</i></li>
                <li><i class="fas fa-caret-right"> Javascript (ES6)</i></li>
                <li><i class="fas fa-caret-right"> PHP</i></li>
            </ul>
            </div>

            <div class="second-ul-langage">
            <ul class="">
                <li><i class="fas fa-caret-right"> Express</i></li>
                <li><i class="fas fa-caret-right"> JQuery</i></li>
                <li><i class="fas fa-caret-right"> Node.js</i></li>
            </ul>
            </div>

            <div class="third-ul-langage">
            <ul class="">
                <li><i class="fas fa-caret-right"> Bootstrap</i></li>
                <li><i class="fas fa-caret-right"> Vue.js</i></li>
                <li><i class="fas fa-caret-right"> Laravel</i></li>
            </ul>
            </div>
    <!-- END LANGAGES -->
        </div>

        <p class="aboutThirdDescription">
          Quand je ne suis pas devant un écran, je me passionne pour l'astronomie à travers l'observation direct et via l'astrophotographie mais encore, plus généralement pour les sciences. 
          Je prends également plaisir à écouter de la musique, lire et cuisiner. Des passions importantes pour moi, garantes d'un équilibre primordial.
      </p>
    <!-- END ABOUT     -->
    </div>


<!-- START EXPERIENCES PROFESSIONNELLES -->
    <div class="experiences" id="experiences">
        <h3> <i class="fas fa-atom"></i></i>03. Expériences Professionnelles </h3> 

        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Conseiller de Clientèle Privée
                  <i class="fas fa-chevron-down"></i>
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <h4> Banque Kolb</h4>
                  <h5> CDI - Juillet 2017 à Août 2020</h5>
                    <ul>
                      <li> Gestion d'un portefeuille clients</li>
                      <li> Gestion quotidienne du risque</li>
                      <li> Négociations et ventes objectivées </li>
                      <li> Placements à court moyen & long terme</li>
                      <li> Ananlyse & mise en place de dossiers de crédits</li>
                      <li> Conseils et ventes d'assurances</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Co-Gérant & Associé
                  <i class="fas fa-chevron-down"></i>
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <h4> SARL L'Eden Sans Gluten</h4>
                    <h5> Associé et Chef de cuisine - Janvier 2016 à Janvier 2017</h5>
                    <ul>
                        <li> Création & gestion du site web sous Wordpress</li>
                        <li> Création / Photographie / Publication de recettes</li>
                        <li> Blogging sous Wordpress</li>
                        <li> Animation des réseaux sociaux </li>
                        <li> Formateur et Animateur de cours de cuisine</li>
                        <li> Partage de savoirs et de compétences acquises en auto-didacte</li>
                        <li> Création et développement d'un réseau professionnel</li>
                    </ul>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Fondateur et gérant
                  <i class="fas fa-chevron-down"></i>
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <h4> L'Atelier du Barbu</h4>
                    <h5> Auto-Entreprise - Mars 2015 à Juillet 2016</h5>
                    <ul>
                        <li> Création & maintenance du site web sous Wordpress</li>
                        <li> Recrutement & gestion des ressources humaines</li>
                        <li> Développement de la stratégie</li>
                        <li> Management des équipes salle & cuisine </li>
                        <li> Relations fournisseurs & gestion des commandes</li>
                        <li> Développement de la communication</li>
                        <li> Gestion des réseaux sociaux</li>
                        <li> Veille concurrentielle / SAV</li>
                        <li> Gestion des relations presse</li>
                        <li> Gestion des réseaux sociaux</li>
                    </ul>
                </div>
              </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Conseiller de clientèle
                  <i class="fas fa-chevron-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                      <h4> Banque Populaire d'Alsace </h4>
                      <h5> CDI - CDI 2012 à 2015</h5>
                      <ul>
                          <li> Gestion d'un portefeuille clients</li>
                          <li> Gestion quotiienne du risque </li>
                          <li> Placements à court, moyen & long terme</li>
                          <li> Analyse & mise en place de dossiers de crédits </li>
                          <li> Conseils et vente d'assurances</li>
                          <li> Tenue de la caisse</li>
                      </ul>
                  </div>
                </div>
              </div>

          </div>
<!-- END EXPERIENCES PROFESSIONNELLES -->
    </div>
    
    <div class="diplomes" id="diplomes">
      <h3> <i class="fas fa-atom"></i></i>04. Cursus Académique </h3> 
      <br>

      <div>
      <h5>Développeur Intégrateur Web Front-End</h5>
      <h6>
        2021 - EPITECH Strasbourg (en cours de formation)
      </h6>
      <p>
        Actuellement en cours de formation, je suis cette dernière afin de me réorienter professionnellement. L'épanouissement professionnel est au coeur de cette démarche que je réalise après des années
        de travail dans la finance.
    </p>
    </div>

    <hr>

    <div>
      <h5>Licence Professionnelle Banque, Assurance, Finance</h5>
      <h6>
        2013 - Université de Droit de Strasbourg (Alternance)
      </h6>
      <p>
        Diplôme universitaire effectué dans le cadre d'une alternance avec la Banque Populaire d'Alsace. Au cours de cette expérience, riche en apport de connaissance, j'ai pu me confronter à des problématiques
        techniques réelles puisque déjà en poste sur un portefeuille de conseiller de clientèle en agence.
    </p>
    </div>

    <hr>

    <div>
      <h5>Certification de l'Autorité des Marchés Financiers</h5>
      <h6>
        2012 - Education National, Rectorat de Dijon
      </h6>
      <p>
        Certification obligatoire afin de pouvoir conseiller & vender des produits financiers comportant un risque pour l'épargnant. 
        Diplôme technique qui aura demandé de nombreuses recherches et l'apprentissage d'un vocabulaire technique poussé
    </p>
    </div>

    <hr>

    <div>
      <h5>BTS Banque Marché des Particuliers</h5>
      <h6>
        2012 - Centre de Formation à la Profession Bancaire de Strasbourg (Alternance)
      </h6>
      <p>
       Diplôme obtneu dans le cadre d'une alternance au sein de la Banque Populaire d'Alsace. Divers conseils et ventes m'auront apportés 
       confiance en moi et rigueur dans mon travail. Premiers entretiens bancaires individuels face à une clientèle de particuliers.
    </p>
    </div>

    <hr>

    <div>
      <h5>Baccalauréat Professionnel Commerce</h5>
      <h6>
        2010 - Académie des Métiers de la Gestion de Strasbourg (Alternance)
      </h6>
      <p>
        Diplôme obtenu dans le cadre d'une alternance avec le magasin "Le Temps des Cerises" de Strasbourg. Apprentissage de la vente en face à face encadrée par des règles
        de savoirs-faire et savoir-être commerciaux.
    </p>
    </div>

    <hr>

    <div>
      <h5>BEP Services à la Personne</h5>
      <h6>
        2003 - Lycée Agricole d'Erstein
      </h6>
      <p>
      Divers stages effectués à travers ce diplôme m'auront appris la patience, l'ampathie et le contrôle de soi. 
    </p>
    </div>
  </div>


    <!-- CONTACT CARD -->
    <h3 class="contactTitle"> <i class="far fa-bookmark"></i> 05. Contact </h3> 

    <div class="contactCard-container">

      <div class="contactCardPosition" id="contact">

        <div class="contactIdentite">
          <h4> Thomas Ries Balsamo </h4>
          <img class="imgBottom" src="../img/profil.jpg" alt="Photo de profil" title="photo de profil Thomas">
          <p> 28, Rue du fossé Riepberg</p>
          <p> 67100 - Strasbourg </p>
          <p> <i class="fas fa-mobile-alt"></i> 06 50 84 68 78 </p>
        </div>

        <div class="contactCard-PositionBtn">
          <a href="mailto:thomasries.dev@gmail.com"> <input class="contact-btn desktop-view" type="button" value="Contactez-moi"> </a>
          <a href="mailto:thomasries.dev@gmail.com" target="blank"> <input class="contact-btn mobile-view" type="button" value="Contactez-moi"> </a>
        </div>

      </div>

    </div>

    <a href="#top" class="topPage">Haut de page</a>


    <footer class="mobile-footer">
      <div class="socialIcons">
        <a href="https://github.com/Thomas-Ries" target="blank"><img class ="git" src="../icones-blanches-png/github.png" alt="lien Github" title="lien Github"></a>
        <a href="https://fr.linkedin.com/in/thomas-ries-balsamo-24116410b" target="blank"><img src="../icones-blanches-png/linkedin.png" alt="lien Linkedin" title="lien Linkedin"></a>
        <a href="https://twitter.com/nom_dune_banane" target="blank"><img src="../icones-blanches-png/twitter.png" alt="lien Twitter" title="lien Twitter"></a>
        <a href="https://www.instagram.com/de_la_a_de_la/" target="blank"><img src="../icones-blanches-png/instagram.png" alt="lien Instagram" title="lien Instagram"></a>
      </div>
    </footer>

    <!-- END MAIN-CONTAINER -->
    </div>

    <footer class="mobile-footer">
        <a href="https://github.com/Thomas-Ries" target="blank"><img class ="git" src="../icones-blanches-png/github.png" alt="lien Github" title="lien Github"></a>
        <a href="https://fr.linkedin.com/in/thomas-ries-balsamo-24116410b" target="blank"><img src="../icones-blanches-png/linkedin.png" alt="lien Linkedin" title="lien Linkedin"></a>
        <a href="https://twitter.com/nom_dune_banane" target="blank"><img src="../icones-blanches-png/twitter.png" alt="lien Twitter" title="lien Twitter"></a>
        <a href="https://www.instagram.com/de_la_a_de_la/" target="blank"><img src="../icones-blanches-png/instagram.png" alt="lien Instagram" title="lien Instagram"></a>
    </footer>


<!-- SCRIPT JS BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
