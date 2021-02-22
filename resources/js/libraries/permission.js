var permissions = window.permissions;
module.exports = {
    has(name) {
        return permissions.includes(name);
    }
};