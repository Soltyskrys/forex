function SummaryController() {

}


SummaryController.prototype.generate = function () {

    $.ajax({
        // Do upewnienia się - POST czy GET
        type: 'POST',
        // make sure you respect the same origin policy with this url:
        // http://en.wikipedia.org/wiki/Same_origin_policy
        url: 'generate.php',
        data: {
            'arg1': 'arg',
            'arg2': 'arg2'
        },
        success: function (msg) {
            $('#code_div').append(msg);
        }
    });
}