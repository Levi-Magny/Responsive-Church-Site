<?php include_once("header.php"); ?>

    <section>
        <div id="banner-carousel">
            <div class="info owl-carousel owl-theme">
                <div class="Item">
                    <img src="img/PNM.png">
                </div>
                <div class="Item">
                    <img src="img/OESO.png">
                </div>
            </div>
        </div><!-- close-Carousel -->
        <div id="quem-somos">
            <div class="container-fluid">
                <div class="row">
                    <div id="col-1" class="col-sm-6">
                        <div class="container">
                            <h2>Quem Somos<span><hr></span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque dolores illum voluptatibus sint, laboriosam nostrum, asperiores vitae dolor dicta, aliquid odio fugiat porro deleniti culpa. Illum recusandae voluptate architecto explicabo!</p>
                            <a id="btn-sabermais" href="#" class="btn btn-warning">saber mais</a>
                        </div>
                    </div>
                    <div class="col-sm-6 image">
                        <img src="img/Post_GOD-Flower_Insta-2.png" alt="Igreja Batista Manancial">
                    </div>
                </div>
            </div>
        </div><!-- close-quem-somos -->
        <div id="cultos" class="container-fluid" ng-controller="cultos-in">
            <h2>Nossos Cultos<span><hr></span></h2>
            <div class="row">
                <div class="col-sm-4" ng-repeat="video in videos">
                    <div class="card-video">
                        <a href="video-{{video.id}}">
                            <div><img src="img/{{video.image}}"></div>
                            <h4>{{video.title}}</h4>
                            <h5>{{video.minister}}</h5>
                        </a>
                        <p>{{video.dates}}</p>
                    </div>
                </div>
                <a id="btn-vermais" href="midia" class="btn btn-warning">ver mais</a>
            </div>
        </div><!-- close-cultos -->
        <div id="schedule">
            <div class="container-fluid">
                <h2>Agenda<span><hr></span></h2>
                <div class="text-agenda">
                    <h4>Domingo</h4>
                    <p>Culto de celebração às 19h</p>
                    <h4>Quarta-Feira</h4>
                    <p>Reunião de liderança às 19:30h</p>
                    <h4>Sexta-Feira</h4>
                    <p>Culto de Oração às 20h</p>
                    <a id="btn-schedule" href="agenda" class="btn btn-warning">Mais detalhes</a>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("footer.php"); ?>

    <script>
        angular.module("vid", []).controller("cultos-in", function($scope, $http){

            $scope.videos = [];

            $http({
                method: 'GET',
                url: 'vid'
            }).then(function successCallback(response) {
                $scope.videos = response.data;
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
            
        });
    </script>