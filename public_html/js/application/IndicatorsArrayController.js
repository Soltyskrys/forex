function IndicatorsArrayController(indicatorsArray, $chooser, $indContainer) {
    this.$chooser = $chooser;
    this.indicators = indicatorsArray;
    this.indicatorsControllers = [];
    this.$indContainer = $indContainer;
    this.INDICATOR_MAX_TIME_USED = 3;


    var that = this;
    this.indicators.forEach(function (indicator) {
        that.addIndicatorToChooser(indicator);
    })

}

IndicatorsArrayController.prototype.addIndicatorToChooser = function (indicator) {
    var $li = $('<li><a>' + indicator.name + '</a></li>');
    $li['timeUsed'] = 0;

    var that = this;
    $li.on('click', function () {


        // Do poprawienia - czytelność kodu 
        var indController = new IndicatorController(indicator, indicator.name, indicator.properties, function () {

            $li.timeUsed--;
            if ($($li).is(":hidden")) {

                $($li).show();
            }

            $(indController.$element()).remove();
            var indexToRemove = that.indicatorsControllers.indexOf(indController);
            that.indicatorsControllers.splice(indexToRemove, 1);
        });

        that.indicatorsControllers.push(indController);
        $(that.$indContainer).append(indController.$element());

        $li.timeUsed++;

        if ($li.timeUsed === that.INDICATOR_MAX_TIME_USED)
            $(this).hide();
    });

    that.$chooser.children("ul.dropdown-menu").append($li);
}