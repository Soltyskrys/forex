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



function TextPropertyController(aName, aPossibleValues) {
    this.possibleValues = aPossibleValues;
    this.name = aName;
    this.$DOMElement = undefined;
}

TextPropertyController.prototype.$element = function () {
    if (this.$DOMElement === undefined) {
        var $div = $('<div class="form-group"/>');
        $div.append($('<label>' + this.name + '</label>'));
        var $form = $('<select class="form-control"/>');
        this.possibleValues.forEach(function (val) {
            $form.append($('<option>' + val + '</option>'));
        })
        $div.append($form);
        this.$DOMElement = $div;
    }
    return this.$DOMElement;
}




function NumberPropertyController(aName, aRange) {
    this.range = aRange;
    this.name = aName;
    this.$DOMElement = undefined;
}

NumberPropertyController.prototype.$element = function () {
    if (this.$DOMElement === undefined) {
        this.$DOMElement = $('<div class="form-group"/>');
        this.$DOMElement.append($('<label>' + this.name + '</label><br/>'));
        this.$DOMElement.append($('<label>' + this.range[0] + '-' + this.range[1] + '</label>'));
        this.$DOMElement.append($('<input type="number"/>'));
    }
    return this.$DOMElement;
}