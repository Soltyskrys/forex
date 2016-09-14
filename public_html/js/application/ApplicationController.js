function ApplicationController() {

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

ApplicationController.prototype.changeToStrategy = function () {
    $('#choosePanel').children().hide();
    $('#strategy').show();
}

ApplicationController.prototype.changeToInputIndicators = function () {
    $('#choosePanel').children().hide();
    $('#input-indicators').show();
}

ApplicationController.prototype.changeToOutputIndicators = function () {
    $('#choosePanel').children().hide();
    $('#output-indicators').show();
}




/************Main Script*************************/
var appController = new ApplicationController();