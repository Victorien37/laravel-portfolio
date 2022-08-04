@include('template.header')
@include('template.navbar')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">A Propos</h1>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <img src="{{asset('assets/img/myface.jpg')}}" alt="My Face" class="img-fluid">
        </div>
        <div class="col-lg-8 col-sm-12">
            <h2 class="text-warning">Présentation</h2>
            <p>Je me présente, Victorien Rodrigues, étudiant en 2eme année de BTS SIO (Services Informatiques aux
                Organisations), option SLAM (Solutions Logicielles et Application Métier), l'option spécialisée dans le
                développement, au lycée Paul-Louis Courier à Tours (37000)
                <br>
                <a href="{{asset('assets/pdf/CV-RODRIGUES.pdf')}}" class="text-warning" target="_blank">Mon CV ici</a>
            </p>
            <br><br>
            <h2 class="text-warning">Projets Professionnels</h2>
            <p>Mon but après le BTS SIO est de continuer mes études en Master 1 Concepteur Développeur
                d'Application en alternance puis me lancer dans le monde du travail et ainsi devenir développeur
                logiciel.
            </p>
        </div>
    </div>
</div>
@include('template.footer')
