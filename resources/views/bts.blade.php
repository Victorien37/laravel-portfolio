@include('template.header')
@include('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">Le BTS SIO</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                Le Brevet de Technicien Supérieur Services Informatiques aux Organisations (BTS SIO), s'adresse à ceux qui souhaitent se former en deux ans aux métiers
                d'administrateur système et réseau ou de développeur pour intégrer directement la vie active soit de continuer ses études
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-warning">Le BTS SIO propose 2 spécialités</h2>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card bg-dark text-center" style="width: 18rem;">
                <img src="{{asset('assets/img/dev_animado.gif')}}" class="card-img-top" alt="gif dev" width="300" height="200">
                <div class="card-body">
                  <h5 class="card-title text-warning">SLAM</h5>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-slam">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card bg-dark text-center" style="width: 18rem;">
                <img src="{{asset('assets/img/master-dc-mastercz.gif')}}" class="card-img-top" alt="gif reseau" width="300" height="200">
                <div class="card-body">
                  <h5 class="card-title text-warning">SISR</h5>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-sisr">En savoir plus</button>
                </div>
            </div>
        </div>
        <!--OVERLAY SLAM-->
        <div class="modal fade overlay-slam" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
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
        <!--OVERLAY SISR-->
        <div class="modal fade overlay-sisr" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Solutions d'Infrastructure, Système et Réseau</h5>
                    <br>
                    <p class="text-center">
                        L’option Solutions d'Infrastructure, Système et Réseau forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité). En sortant d’un BTS SIO SISR, vous serez capables de gérer et d’administrer le réseau d’une société et d’assurer sa sécurité et sa maintenance.
                        Les techniciens supérieurs en informatique option SISR, peuvent accéder aux métiers de :
                    </p>
                    <br>
                    <p>
                        -> Administrateur systèmes et réseaux <br>
                        -> Gestionnaire de parc informatique <br>
                        -> Support systèmes et réseaux <br>
                        -> Analyste d'exploitation informatique <br>
                        -> Technicien d’infrastructure <br>
                        -> Technicien de production <br>
                        -> Technicien réseaux et télécoms <br>
                        -> Technicien systèmes et réseaux <br>
                        -> Responsable d’exploitation informatique <br>
                        -> Webmaster
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('template.footer')
