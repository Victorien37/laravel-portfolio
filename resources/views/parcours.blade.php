@include('template.header')
@include('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">Parcours</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionExample">
                <div class="card bg-dark">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn text-warning btn-block text-left text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Expériences Professionnelles
                        </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li class="accordeon">
                                    Développeur PHP Laravel Kernl Tours
                                    <br>
                                    Alternance Septembre 2022 - Aout 2024 (2ans)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Conseiller de vente Leroy Merlin Tours sud
                                    <br>
                                    CDI étudiant Février 2021 - Août 2022 (1 an et demi)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Hôte d'accueil Banque Populaire La Riche
                                    <br>
                                    CDD Juillet - Août 2020 (1 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Vendeur LDLC Chambray-Lès-Tours
                                    <br>
                                    CDD Décembre 2019 - Janvier 2020 (1 semaine)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Ouvrier Equinoxe Saint-Branchs
                                    <br>
                                    CDD Etés 2018 et 2019 (1mois + 1 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    CDD Septembre 2017 (1 semaine)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                        <button class="btn text-warning btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Formations
                        </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li class="accordeon">
                                    Master 1 CDA ENI Niort
                                    <br>
                                    Concepteur Développeur d'Application
                                    <br>
                                    Octobre 2022 - 2024 (En Cours)
                                </li>
                                <br>
                                <li class="accordeon">
                                    BTS SIO SLAM Lycée Paul-Louis Courier Tours
                                    <br>
                                    Services Informatiques aux organisations
                                    <br>
                                    Solutions Logicielles et Applications Métier
                                    <br>
                                    2020 - 2022 (Obtenu)
                                </li>
                                <br>
                                <li class="accordeon">
                                    BAC PRO SN RISC Lycée Henri Becquerel Tours
                                    <br>
                                    Systèmes Numériques
                                    <br>
                                    Réseaux Informatiques et Systèmes Communicants
                                    <br>
                                    2017 - 2020 (Obtenu: Mention Bien)
                                </li>
                                <br>
                                <li class="accordeon">
                                    BEP SN Lycée Henri Becquerel
                                    <br>
                                    Systèmes Numériques 2019 (Obtenu)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                        <button class="btn text-warning btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Stages
                        </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li class="accordeon">
                                    AG2R LA MONDIALE
                                    <br>
                                    Migration de projets Java
                                    <br>
                                    Janvier - Février 2022 (1 mois et demi)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Rudy Michau Sorigny
                                    <br>
                                    Création d'un add-on sur le logiciel 3D Blender
                                    <br>
                                    Juin 2021 (1 mois)
                                </li>
                                <br>
                                <li class="accrodeon">
                                    LDLC Chambray-Lès-Tours
                                    <br>
                                    Réparation et vente de matériel informatique
                                    <br>
                                    Novembre - Décembre 2019 (2 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    IUT Tours nord
                                    <br>
                                    Création d'un serveur DRBL / Clonezilla
                                    <br>
                                    Mai - Juin 2019 (1 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Actévolis Joué-Lès-Tours
                                    <br>
                                    Remise en service d'une baie de brassage
                                    <br>
                                    Janvier - Février 2018 (1 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Rudy Michau Sorigny
                                    <br>
                                    Initiation au langage de programmation Python
                                    <br>
                                    Juin - Juillet 2018 (1 mois)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Equinoxe Saint-Branchs
                                    <br>
                                    Fabrication de pieuvre électrique
                                    <br>
                                    Février 2018 (3 semaines)
                                </li>
                                <br>
                                <li class="accordeon">
                                    Hutchinson Joué-Lès-Tours
                                    <br>
                                    Découverte du monde de l'informatique (Réseau)
                                    <br>
                                    Février 2017 (1 semaine)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('template.footer')
