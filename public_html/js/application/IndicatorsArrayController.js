function IndicatorsArrayController(indicatorsArray, $chooser, $indContainer) {
    this.$chooser = $chooser;

    this.$indContainer = $indContainer;

    this.indicatorsControllers = indicatorsArray.map(function (val) {
        return new IndicatorController(val.name, val.properties);
    });

    this.addIndicatorsToChooser();

}

IndicatorsArrayController.prototype.addIndicatorsToChooser = function () {
    var that = this;
    this.indicatorsControllers.forEach(function (val) {
        var $li = $('<li><a>' + val.indName + '</a></li>');

        $li.on('click', (function (indController, indContainer) {
            return function () {
                indContainer.append(indController.$element());
                $(this).remove();
            }
        })(val, that.$indContainer));
        $(that.$chooser).children("ul.dropdown-menu").append($li);
    });
}