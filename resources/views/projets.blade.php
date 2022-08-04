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
                    <h5 class="text-warning text-center">Solutions Logicielles et Application Métier</h5>
                    <br>
                    <p class="text-center">
                        L’option Solutions Logicielles et Applications Métiers forme des spécialistes des logiciels (rédaction d’un cahier des charges, formulation des besoins et spécifications, développement, intégration au sein de la société).
                        <br>
                        Les techniciens supérieurs en informatique option SLAM, sont préparés aux métiers de :
                    </p>
                    <p>
                        -> Analyste d’exploitation informatique <br>
                        -> Chargé d’études informatiques <br>
                        -> Développeur d’application mobile <br>
                        -> Développeur informatique <br>
                        -> Programmeur analyste <br>
                        -> Programmeur d’applications <br>
                        -> Responsable de services applicatifs <br>
                        -> Technicien d’études informatiques
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('template.footer')
