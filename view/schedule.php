<?php include_once('header.php')?>

<section ng-controller="sched">
    <div id="sched">
        <div id="sched-days" class="container-fluid">
            <h2>Agenda<span><hr></span></h2>
            <div id="Botoes" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-sun"> Domingo
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-mon"> Segunda-Feira
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-tues"> Terça-Feira
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-wed"> Quarta-Feira
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-thu"> Quinta-Feira
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-fri"> Sexta-Feira
                </label>
                <label class="lab btn btn-secondary">
                    <input type="radio" name="options" id="btn-sat"> Sábado
                </label>
            </div>
            <div id="info-sun" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>19:00h</td>
                        <td class="second">Culto de Celebração</td>
                    </tr>
                </table>
            </div><!-- close info-sun -->
            <div id="info-mon" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>-:-</td>
                        <td class="second">Sem programação</td>
                    </tr>
                </table>
            </div><!-- close info-mon -->
            <div id="info-tues" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>-:-</td>
                        <td class="second">Sem programação</td>
                    </tr>
                </table>
            </div><!-- close info-tues -->
            <div id="info-wed" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>19:30h</td>
                        <td class="second">Treinamento Avançado de Líderes (TADEL)</td>
                    </tr>
                </table>
            </div><!-- close info-wed -->
            <div id="info-thu" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>20:00h</td>
                        <td class="second">Células</td>
                    </tr>
                    <tr>
                        <td>20:00h</td>
                        <td class="second">Células</td>
                    </tr>
                    <tr>
                        <td>20:00h</td>
                        <td class="second">Células</td>
                    </tr>
                </table>
            </div><!-- close info-thu -->
            <div id="info-fri" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>19:30h</td>
                        <td class="second">Culto de Oração</td>
                    </tr>
                </table>
            </div><!-- close info-fri -->
            <div id="info-sat" class="info-date hide">
                <table class="info-list">
                    <tr>
                        <td>16:00h</td>
                        <td class="second">Ensaio: Ministério de Louvor</td>
                    </tr>
                </table>
            </div><!-- close info-sat -->
        </div>
    </div><!-- close sched-days -->
    <div id="cults">
        <div class="container-fluid">
            <h2>Eventos<span><hr></span></h2>
            <div id="ifNo" class="hide warning"><p>Não há Eventos Cadastrados!</p></div>
            <div class="evento row" ng-repeat="eve in evento">
                <div class="text-center col-sm-3 image">
                    <img src="img/{{eve.eventImage}}" alt="">
                </div>
                <div class="col-sm-9 infos">
                    <h3>{{eve.eventTitle}}</h3>
                    <h4>Local: {{eve.eventPlace}}</h4>
                    <h5>Descrição:</h5>
                    <p class="description">{{eve.eventDescription}}</p>
                    <p>Data: {{eve.eventDate}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>
<script src="js/agenda.js"></script>
<script>
    angular.module("vid", []).controller("sched", function($scope, $http){

        $scope.evento = [];

        $http({
        method: 'GET',
        url: 'agenda-event'
        }).then(function successCallback(response) {
            $scope.evento = response.data;
            if($scope.evento.length == 0){
                var text = document.getElementById('ifNo');
                text.classList.remove('hide');
            }
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

    });
</script>