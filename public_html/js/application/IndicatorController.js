function IndicatorController(name, properties) {
    this.indName = name;
    this.isUsed = false;


    this.propertiesControllers = properties.map(function (val) {
        if (val.type === "number") {
            return new NumberPropertyController(val.name, val.range);
        } else if (val.type === "text") {
            return new TextPropertyController(val.name, val.possible_values);
        }
    });

    this.$html = undefined;
}

IndicatorController.prototype.$element = function () {
    if (this.$html === undefined) {
        var $row = $('<div class="row" style="border-top:1px dashed"/>');
        var $nameCol = $('<div class="col-md-2"/>');

        $nameCol.append(this.indName);
        $row.append($nameCol);


        this.propertiesControllers.forEach(function (val) {
            var $propertyCol = $('<div class="col-md-2"></div>');
            $propertyCol.append(val.$element());
            $row.append($propertyCol);
        })
        this.$html = $row;
    }
    return this.$html;
}

IndicatorController.prototype.indName = function () {
    return this.indName;
}