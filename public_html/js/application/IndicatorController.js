function IndicatorController(aIndicator, aName, aProperties, remove) {
    this.indicator = aIndicator;
    this.indName = aName;
    this.isUsed = false;
    this.remove = remove;


    this.propertiesControllers = aProperties.map(function (val) {
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
        var cleanCol = $('<div class="col-md-2" style="text-align:center"/>');
        var $row = $('<div class="row" style="border-top:1px dashed"/>');

        var $nameCol = cleanCol.clone();


        $nameCol.append('<h3>' + this.indName + '</h3>');
        var $removeButton = $('<button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>');
        $($removeButton).on('click', this.remove);

        $nameCol.append($removeButton);
        $row.append($nameCol);

        this.propertiesControllers.forEach(function (val) {
            var $propertyCol = cleanCol.clone();
            $propertyCol.append(val.$element());
            $row.append($propertyCol);

        })

        this.$html = $row;
    }
    return this.$html;
}