<?php include_once("header.php"); ?>
    <section>
        <div id="video" class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="plyr__video-embed" id="player">
                        <iframe src="https://www.youtube.com/embed/<?=$video['link']?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                        </iframe>
                    </div>            
                </div>
                <div class="col-sm-6">
                    <h2><?=$video['title']?></h2>
                    <hr>
                    <h3><?=$video['minister']?></h3>
                    <p id="data"><?=$video['dates']?></p>
                </div>
            </div><!-- close row -->
        </div><!-- close container -->
    </section>
<?php include_once("footer.php"); ?>

<script src="lib/plyr/dist/plyr.js"></script>
<script>
(function(d, p){
    var a = new XMLHttpRequest(),
        b = d.body;
    a.open("GET", p, true);
    a.send();
    a.onload = function(){
        var c = d.createElement("div");
        c.style.display = "none";
        c.innerHTML = a.responseText;
        b.insertBefore(c, b.childNodes[0]);
    }
})(document, "lib/plyr/dist/sprite.svg");
</script>