@include('template.header')
@include('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">Certification</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="card bg-dark text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-warning">HTML & CSS</h5>
                  <p>Apprenez à créer votre site web avec HTML5 et CSS3</p>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-htmlcss">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card bg-dark text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-warning">Bootstrap 4</h5>
                  <p>Créez des sites responsive avec Bootstrap 4</p>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-bootstrap">En savoir plus</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card bg-dark text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-warning">Animations CSS</h5>
                  <p>Créez des animations CSS modernes</p>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".overlay-htmlcss">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="row">

    </div>
</div>

@include('template.footer')
