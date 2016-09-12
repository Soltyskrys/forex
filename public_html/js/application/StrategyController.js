function StrategyController(strategies, $chooser) {
    this.$chooser = $chooser;

    this.strategies = strategies;

    var that = this;
    strategies.forEach(function (val) {
        that.addStrategy(val);
    });

}

StrategyController.prototype.addStrategy = function (strategy) {

    $(this.$chooser).find(".form-control").append($('<option>' + strategy.name + '</option>'));
}