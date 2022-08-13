@include('template.header')
@include('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">Projets</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">AC_Blanqui</h5>
                    <p class="card-text">Projet de conception d'un site web avec le CMS WordPress suivant un cahier des charges précis.</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-acblanqui">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Millenuits</h5>
                    <p class="card-text">Projet de conception d'un site web avec l'architecture MVC (Modèle Vue Contrôleur) suivant un cahier des charges précis. Utilisation du framework Bootstrap 4 (CSS), base de données MySQL</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-millenuit">En savoir plus</button>
                </div>
            </div>
        </div>
        <!--OVERLAY AC_BLANQUI-->
        <div class="modal fade overlay-acblanqui" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Ateliers de Professionnalisation</h5>
                    <br>
                    <img src="{{asset('assets/img/AC-Blanqui-blanc.jpeg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        AC_Blanqui est une association culturelle située à Tours. Elle souhaite ajouter une visibilité numérique à sa démarche grâce à un site internet et à sa présence sur les réseaux sociaux. Elle fait appel à l'entreprise START_DEV_Tours pour la mise en place de ce site.
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">Réaliser un site statique à l'aide du CMS WordPress.
                        Ce site internet doit présenter l'association et les différentes activités qu'elle propose.
                        De plus, son contenu doit pouvoir être mis à jour par un membre du AC_Blanqui
                    </p>
                </div>
            </div>
        </div>
        <!--OVERLAY MILLENUIT-->
        <div class="modal fade overlay-millenuit" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Ateliers de Professionnalisation</h5>
                    <br>
                    <img src="{{asset('assets/img/millenuit.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        Millenuits est une entreprise qui vend du textile pour la literie comme des couettes et des draps.
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        Pour affiner la définition des objectifs et l’attribution des budgets, il sera nécessaire d’informatiser les comptes rendus de visite et les activités complémentaires (organisation de cocktail, de réunions d’information, etc.) menées par les commerciaux afin de fidéliser les clients, et cela de manière nationale (pour répartir les budgets dans chaque secteur).
                        L'entreprise désire mettre à disposition des commerciaux une application Web permettant de centraliser les comptes-rendus de visite.
                        Cette base d'information sera utilisée à des fins d'élaboration de la démarche de communication auprès des distributeurs (clients) et donnera une vision individuelle et synthétique de l'activité de représentation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Concours des vins</h5>
                    <p class="card-text">Projet de conception d'une application web MVC (Modèle Vue Contrôleur) suivant un cahier des charges précis. Utilisation du framework CodeIgniter (PHP), base de données MySQL</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-cdv">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Syndicat des Eaux du Gévaudan</h5>
                    <p class="card-text">Projet de conception d'un WebService et d'une application mobile Java communicant ensemble en suivant un cahier des charges précis.</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-seg">En savoir plus</button>
                </div>
            </div>
        </div>

        <!--OVERLAY CDV-->
        <div class="modal fade overlay-cdv" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Ateliers de Professionnalisation</h5>
                    <br>
                    <img src="{{asset('assets/img/concoursdesvins.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        L'association concours des vins est un union d'œunologues du Val de Loire et attribue des récompenses (Or, Argent, Bronze) que les viticulteurs pourront arborer sur leurs bouteilles.
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        La consultation du palmarès est accessible à tous les internautes à partir de la date d’affichage des résultats du concours.
                        Chaque membre du jury devra s’authentifier pour saisir ses notes et consulter les notes qu’il a déjà attribuées.
                        Le président du concours peut consulter les notes attribuées par tous les jurés pour chaque vin et définit le palmarès à la fin du concours.
                    </p>
                </div>
            </div>
        </div>
        <!--OVERLAY SEG-->
        <div class="modal fade overlay-seg" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Ateliers de Professionnalisation</h5>
                    <br>
                    <img src="{{asset('assets/img/seg.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        Le Syndicat des Eaux du Gévaudan est une entreprise qui relève les consommations d'eau et indique s'il y a des anomalies
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        Une fois par an, les agents du SEG relèvent les consommations d’eau des compteurs vannes de chaque secteur.
                        Le relevé du nouvel index d’un compteur vanne sera saisi et enregistré sur le support mobile mis à disposition de chaque agent.
                        Les données seront ensuite exportées dans la base de données du SEG.
                    </p>
                    <br>
                    <a href="https://bitbucket.org/VictorienRodrigues/seg/src/master/" target="_blank" class="text-warning">Le lien du projet ici</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Blender Game Engine</h5>
                    <p class="card-text">Conception d'un add-on "Moteur de jeu" sur le logiciel Blender. Utilisation de l'API Blender, du langage de programmation Python. Programmation orientée objet avec mon tuteur de stage Rudy MICHAU</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-bge">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">ICE to PACIFIC</h5>
                    <p class="card-text">Migration de projets Java par la création d'un fichier Groovy pour de l'intégration continue.</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-ag2r">En savoir plus</button>
                </div>
            </div>
        </div>

        <!--OVERLAY BGE-->
        <div class="modal fade overlay-bge" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Rudy MICHAU</h5>
                    <br>
                    <img src="{{asset('assets/img/rudy.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        Rudy MICHAU est une entreprise qui a été créée le premier février 2011 à Joué-Lès-Tours et qui aujourd’hui se situe à Sorigny. A ce jour, aucun salarié n’est dans l’entreprise car monsieur MICHAU travaille en freelance. Il est spécialisé dans la création web (sites internet et applications web) et l’infographie.
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        Le but de ce stage était de créer un add-on pour le logiciel de rendu 3D Blender en utilisant son API (Python)
                        L'add'on est un moteur de jeu qui permet de se déplacer dans un environnement en 3 dimensions non prédictible. Le but était d'automatiser un personnage qui marche devant, derrière, à gauche, à droite de lui tout en gérant les collisions, les pentes, ...
                    </p>
                    <br>
                    <a href="{{asset('assets/pdf/RDS-RUDYMICHAU.pdf')}}" target="_blank" class="text-warning">Le rapport de stage ici</a>
                </div>
            </div>
        </div>
        <!--OVERLAY AG2R-->
        <div class="modal fade overlay-ag2r" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">AG2R LA MONDIALE</h5>
                    <br>
                    <img src="{{asset('assets/img/ag2r-lamondiale.jpeg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation de l'entreprise</h6>
                    <p class="text-center">
                        AG2R LA MONDIALE est une entreprise qui a été créée en 2008 suite à la fusion entre l'entreprise La Mondiale société d'assurance mutuelle créée en 1905 et l'entreprise AGRR créée en 1951 qui était une association générale de retraite par répartition (Renommée AG2R en 1992).Officiellement, AG2R LA MONDIALE hérite de l'entreprise La Mondiale et de son historique. Elle est donc recensée comme né en 1905.
                    </p>
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        Le but de ce stage était de créer un pipeline (fichier d'intégration continue en Groovy) pour un nouveau serveur interne CloudBees / Jenkins nommé PACIFIC et ainsi migrer un lot de projet Java sur ce nouveau serveur.
                    </p>
                    <br>
                    <a href="{{asset('assets/pdf/RDS-AG2RLAMONDIALE.pdf')}}" target="_blank" class="text-warning">Le rapport de stage ici</a>
                    <a href="https://github.com/Victorien37/Jenkinsfile/blob/cdddbb4c8b7047ce09a108db2219a94458a189e1/Jenkinsfile" target="_blank" class="text-warning">Le lien du pipeline ici</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card text-center bg-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-warning">Portfolio</h5>
                    <p class="card-text">Conception et mise en place d'un site web type portfolio pour l'épreuve E5 du BTS SIO.</p>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-portfolio">En savoir plus</button>
                </div>
            </div>
        </div>

        <div class="modal fade overlay-portfolio" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Portfolio</h5>
                    <br>
                    <img src="{{asset('assets/img/icon.png')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <h6 class="text-center text-warning">Présentation du contexte</h6>
                    <p class="text-center">
                        Suite à 2 années en BTS SIO, l'étudiant doit développer un site web type portfolio suivant un cahier des charges précis pour l'épreuve E5.
                    </p>
                    <br>
                    <a href="https://github.com/Victorien37/Portfolio" target="_blank" class="text-warning">Le lien du projet ici</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('template.footer')
