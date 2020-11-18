<?php include_once("header.php"); ?>
<section ng-controller="Allvid">
    <div id="latest" class="carou container-fluid">
        <h2>Mais Recentes<span><hr></span></h2>
        <div class="roll owl-carousel owl-theme">
            <div class="item" ng-repeat="vide in recentes">
                <a href="video-{{vide.id}}">
                    <img src="img/{{vide.image}}">
                    <div class="dark">
                        <div class="titulo"><h4>{{vide.title}}</h4></div>
                        <div class="name"><h5>{{vide.minister}}</h5></div>
                        <i class="far fa-play-circle"></i>
                    </div>
                </a>
            </div>
        </div><!-- close-Carousel -->
        <button class="arrowL"><i class="fas fa-angle-left"></i></button>
        <button class="arrowR"><i class="fas fa-angle-right"></i></button>
    </div><!-- close-latest -->

    <div id="Pers" class="carou container-fluid">
        <h2>Perseverança<span><hr></span></h2>
        <div class="roll2 owl-carousel owl-theme">
            <div class="item" ng-repeat="video in persev">
                <a href="video-{{video.id}}">
                    <img src="img/{{video.image}}">
                    <div class="dark">
                        <div class="titulo"><h4>{{video.title}}</h4></div>
                        <div class="name"><h5>{{video.minister}}</h5></div>
                        <i class="far fa-play-circle"></i>
                    </div>
                </a>
            </div>
        </div><!-- close-Carousel -->
        <button class="arrowL2"><i class="fas fa-angle-left"></i></button>
        <button class="arrowR2"><i class="fas fa-angle-right"></i></button>
    </div><!-- close-Pers -->

    <div id="More" class="carou container-fluid">
        <h2>Todos os Cultos<span><hr></span></h2>
        <div class="roll3 owl-carousel owl-theme">
            <div class="item" ng-repeat="video in more">
                <a href="video-{{video.id}}">
                    <img src="img/{{video.image}}">
                    <div class="dark">
                        <div class="titulo"><h4>{{video.title}}</h4></div>
                        <div class="name"><h5>{{video.minister}}</h5></div>
                        <i class="far fa-play-circle"></i>
                    </div>
                </a>
            </div>
        </div><!-- close-Carousel -->
        <button class="arrowL3"><i class="fas fa-angle-left"></i></button>
        <button class="arrowR3"><i class="fas fa-angle-right"></i></button>
    </div><!-- close-More -->
</section>
<?php include_once("footer.php"); ?>

<script src="lib/plyr/dist/plyr.js"></script>

<script>
angular.module("vid", []).controller("Allvid", function($scope, $http){

    $scope.recentes = [];
    $scope.persev = [];
    $scope.more = [];

    var initCarouselOne = function(){
        owl_vid = $('.roll');
        owl_vid.owlCarousel({
            loop:false,
            dots: false,
            nav: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                715:{
                    items:2
                },
                1050:{
                    items:3
                },
                1340:{
                    items:4,
                    loop:false
                }
            }
        });
        $('.arrowR').click(function(){
            owl_vid.trigger('next.owl.carousel');
        });
        $('.arrowL').click(function(){
            owl_vid.trigger('prev.owl.carousel');
        });
    };
    $http({
        method: 'GET',
        url: 'recent-vid'
    }).then(function successCallback(response) {
        $scope.recentes = response.data;
        setTimeout(initCarouselOne, 1000);
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    var initCarouselTwo = function(){
        owl_vid2 = $('.roll2');
        owl_vid2.owlCarousel({
            loop:false,
            dots: false,
            nav: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                715:{
                    items:2
                },
                1050:{
                    items:3
                },
                1340:{
                    items:4,
                    loop:false
                }
            }
        });
        $('.arrowR2').click(function(){
            owl_vid2.trigger('next.owl.carousel');
        });
        $('.arrowL2').click(function(){
            owl_vid2.trigger('prev.owl.carousel');
        });
    };
    $http({
        method: 'GET',
        url: 'persev-vid'
    }).then(function successCallback(response) {
        $scope.persev = response.data;
        setTimeout(initCarouselTwo, 1000);
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    var initCarouselThree = function(){
        owl_vid3 = $('.roll3');
        owl_vid3.owlCarousel({
            loop:false,
            dots: false,
            nav: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                715:{
                    items:2
                },
                1050:{
                    items:3
                },
                1340:{
                    items:4,
                    loop:false
                }
            }
        });
        $('.arrowR3').click(function(){
            owl_vid3.trigger('next.owl.carousel');
        });
        $('.arrowL3').click(function(){
            owl_vid3.trigger('prev.owl.carousel');
        });
    };
    $http({
        method: 'GET',
        url: 'more-vid'
    }).then(function successCallback(response) {
        $scope.more = response.data;
        setTimeout(initCarouselThree, 1000);
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });
});
</script>