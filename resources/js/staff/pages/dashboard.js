// script for dashboard
module.exports = function(data) {
    var _data = {
        message: 'This is a dashboard page script.'
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        mounted() {
            this.test();
        },
        methods: {
            test() {
                console.log(this.message);
            }
        }
    }
};