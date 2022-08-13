@include('template.header')
@include('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-warning">Veille</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-center"><a class="text-warning" data-toggle="modal" data-target=".overlay-veille">Technologique</a></h3>
        </div>
        <div class="modal fade overlay-veille" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <h5 class="text-warning text-center">Quel langage de programmation pour quelle finalité ?</h5>
                    <br>
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center text-warning">Langage</th>
                            <th scope="col" class="text-center text-warning">Web</th>
                            <th scope="col" class="text-center text-warning">Mobile</th>
                            <th scope="col" class="text-center text-warning">Logiciel</th>
                            <th scope="col" class="text-center text-warning">IA</th>
                            <th scope="col" class="text-center text-warning">Type de langage</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">HTML</th>
                                <td class="text-center">Natif</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">Langage de structure</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">CSS</th>
                                <td class="text-center">Natif</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">Langage de style pour HTML</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">JavaScript</th>
                                <td class="text-center">React, Angular, Vue, Node, Jquery</td>
                                <td class="text-center">Ionic (Cross-Platform)</td>
                                <td class="text-center">Node</td>
                                <td class="text-center"></td>
                                <td class="text-center">Interprété</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">PHP</th>
                                <td class="text-center">Natif, architecture MVC, Laravel, Symphony</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">Interprété</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">Python</th>
                                <td class="text-center">Django, Flask</td>
                                <td class="text-center">BeeWare (Cross-Platform)</td>
                                <td class="text-center">Natif</td>
                                <td class="text-center">Natif</td>
                                <td class="text-center">Interprété</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">Java</th>
                                <td class="text-center">JavaWebStart</td>
                                <td class="text-center">Android</td>
                                <td class="text-center">Natif</td>
                                <td class="text-center">Natif</td>
                                <td class="text-center">Compilé</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">Kotlin</th>
                                <td class="text-center"></td>
                                <td class="text-center">Android</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">Compilé</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">Quel langage de programmation pour quelle finalité ?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center"><a class="text-light" data-toggle="modal" data-target=".overlay-whatisveille">Qu'est-ce qu'une veille technologique ?</a></p>
        </div>
        <div class="modal fade overlay-whatisveille" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <br>
                    <img src="{{asset('assets/img/rss.jpg')}}" alt="logo flux rss" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <p class="text-center">Une veille technologique consiste à s'informer régulièrement des dernières nouveautés d'un domaine ou d'une technologie.
                        Pour cela, j'utilise Google alert, un outil agrégateur de flux RSS.
                        Mais qu'est-ce que c'est qu'un agrégateur de flux RSS ?
                        C'est très simple, c'est un outil qui analyse des articles et qui concentre toutes les données que demandé sur une seule interface.
                        C'est très pratique pour trouver beaucoup d'informations en peu de temps !
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center"><a class="text-light" data-toggle="modal" data-target=".overlay-langage">Quelle est la différence entre un langage compilé et interprété ?</a></p>
        </div>
        <div class="modal fade overlay-langage" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark">
                    <br>
                    <img src="{{asset('assets/img/intervscomp.jpeg')}}" alt="logo flux rss" class="img-fluid img-thumbnail rounded mx-auto d-block" width="250" height="250">
                    <br>
                    <p class="text-center">Un langage compilé est traduit en langage binaire compréhensible par la machine.
                        Un langage interprété fait certaines actions grâce au parseur qui est intégré.
                        L'avantage d'un langage compilé est qu'il s'exécute rapidement.
                        En revanche, le langage est plus complexe à appréhender car il nécessite plus de précisions pour la machine, les fichiers des langages compilés sont donc lourds.
                        L'avantage d'un langage interprété est qu'il est facile à apprendre car plus simpliste, les fichiers sont donc légers.
                        En revanche, le parseur est un intermédiaire avec la machine et doit exécuter ligne par ligne, ce qui le rend plus long à exécuter.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="{{asset('assets/img/veilletechnologique.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="500" height="500">
        </div>
    </div>
</div>

@include('template.footer')
