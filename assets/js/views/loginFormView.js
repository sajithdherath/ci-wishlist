var app = app || {};

app.views.LoginFormView = Backbone.View.extend({

    render:function () {
        $("#auth").show();
    },
    events: {
        "click #btn-login": "do_login"
    },
    do_login: function (e) {

    }
});