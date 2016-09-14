function StrategyController() {
    this.option1 = $('#option_1');
    this.option2 = $('#option_2');
    this.option3 = $('#option_3');
    this.optionText = $('#input_option');

    var that = this;

    this.option1.change(function () {
        if ($(this).is(':checked')) {

            that.option2.attr('disabled', true);
            that.option2.attr('checked', false);
        } else {
            that.option2.attr('disabled', false);
        }
    })


    this.option3.change(function () {
        if ($(this).is(':checked')) {
            that.optionText.hide();
        } else {
            that.optionText.show();
        }
    })

}