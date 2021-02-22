const helper = require('./helper.js');
var run = function(items) {
    items.forEach(item => {
        toastr[item.type](item.message, { timeOut: 5000 });
    });
}
module.exports = {
    run,
    init: function() {
        var notification = $("#notification").val();
        var items = [];
        if (helper.isNotNull(notification)) {
            items = JSON.parse(notification);
        }
        run(items);
    }
};