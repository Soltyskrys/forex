// ********************** Te funkcje przenieść do App Controllera
function changeToStrategy() {
    $('#choosePanel').children().hide();
    $('#strategy').show();
}

function changeToInputIndicators() {
    $('#choosePanel').children().hide();
    $('#input-indicators').show();
}

function changeToOutputIndicators() {
    $('#choosePanel').children().hide();
    $('#output-indicators').show();
}



function ApllicationController() {

    this.inputIndicatorController;
    this.outputIndicatorController;
    this.strategyController;

    $.getJSON("inputIndicators.json", function (data) {
        inputIndicatorController = new IndicatorsArrayController(data, $('#input-indicator-chooser'), $('#input-indicator-div'));

    });
    $.getJSON("outputIndicators.json", function (data) {
        outputIndicatorController = new IndicatorsArrayController(data, $('#output-indicator-chooser'), $('#output-indicator-div'));
    });

    $.getJSON("strategy.json", function (data) {
        strategyController = new StrategyController(data, $('#strategy-list'));
    });


}

new ApllicationController();