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
        this.$DOMElement.append($('<input type="number"/>'));
    }
    return this.$DOMElement;
}