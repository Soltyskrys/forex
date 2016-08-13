<script type="text/javascript">
    function zamienNaStrategie() {
        document.getElementById("wybieracz").innerHTML = "dwa";
    }
</script>






<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="btn btn-default btn-md" onclick="zamienNaStrategie()">
                    Strategia
                </button>
                <button type="button" class="btn btn-default btn-md">
                    Wskazniki wejscia
                </button>
                <button type="button" class="btn btn-default btn-md">
                    Wskazniki wyjscia
                </button>
            </div>
            <div class="panel-body" style="min-height:500px;">

                <div id="wybieracz"></div>
                <div class="dropdown">
                    <button class="btn btn-primary-toggle" type="button" data-toggle="dropdown" id="strategie">Strategia

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">jeden</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-primary-toggle" type="button" data-toggle="dropdown" id="wskaznikiWejscia">Wskaznik1

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">jeden</a></li>
                    </ul>
                </div>


                <div class="dropdown">
                    <button class="btn btn-primary-toggle" type="button" data-toggle="dropdown" id="wskazniki_Wyjscia">Wskaznik2

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">jeden</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>