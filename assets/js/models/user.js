var app = app || {};
app.models.User = Backbone.Model.extend({
    urlRoot: '/advanced-server-side/cw2/user/',
    defaults: {
        username: "",
        password: "",
        user_id: null,
        list_name: "",
        list_description: ""
    },
    url: '/advanced-server-side/cw2/user/',


});