// Check if value is not null
var isNotNull = function(obj) {
    return typeof obj !== 'undefined' && obj !== null && obj !== '';
};
module.exports = {
    isNotNull,
    // Get value
    getValue(obj) {
        var value = '';
        if (isNotNull(obj)) {
            value = obj;
        }
        return value;
    },
    // Find/get key by value in an object
    getKeyByValue(object, value) {
        return Object.keys(object).find(key => object[key] === value);
    },
};
