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

    this.strategyController = new StrategyController();
}

ApplicationController.prototype.showOnly = function (id) {
    $('#choosePanel').children().hide();
    $('#' + id).show();
}

/************Main Script*************************/
var appController = new ApplicationController();