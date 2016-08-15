<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <button type="button" class="btn btn-default btn-md" onclick="changeToStrategy()" onclick="changeToStrategy()">
                Strategia
            </button>
            <button type="button" class="btn btn-default btn-md" onclick="changeToInputIndicators()">
                Wskazniki wejscia
            </button>
            <button type="button" class="btn btn-default btn-md" onclick="changeToOutputIndicators()">
                Wskazniki wyjscia
            </button>
        </div>


        <div class="panel-body" id="choosePanel" style="min-height:100px;">

            <div class="chooser" id="strategy_chooser">
                <h2>Choose Strategy</h2>
                <div class="form-group">
                    <label for="sel1">Select list:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>


            <div class="chooser" id="output_indicator_chooser">
                <h2>Choose output indicator</h2>
                <div class="dropdown" style="">
                    <button class="btn btn-primary-toggle" type="button" data-toggle="dropdown" id="strategie">Strategy

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a>first</a></li>
                        <li><a>second</a></li>
                        <li><a>third</a></li>
                        <li><a>another</a></li>
                        <li><a>another</a></li>
                    </ul>
                </div>

            </div>

            <div class="chooser" id="input_indicator_chooser">
                <h2>Choose input indicator</h2>
                <div class="dropdown" style="">
                    <button class="btn btn-primary-toggle" type="button" data-toggle="dropdown" id="strategie">Strategy

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a>first</a></li>
                        <li><a>second</a></li>
                        <li><a>third</a></li>
                        <li><a>another</a></li>
                        <li><a>another</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>





<script>
    var strategy_chooser = $("#strategy_chooser");
    var output_indicators_chooser = $("#output_indicator_chooser");
    var input_indicators_chooser = $("#input_indicator_chooser");

    $("#choosePanel").children().hide();


    function changeToStrategy() {
        $("#choosePanel").children().hide();
        strategy_chooser.show();
    }

    function changeToInputIndicators() {
        $("#choosePanel").children().hide();
        input_indicators_chooser.show();
    }

    function changeToOutputIndicators() {
        $("#choosePanel").children().hide();
        output_indicators_chooser.show();
    }

    function addIndicator() {

    }
</script>