var app = app || {};

app.routers.AppRouter = Backbone.Router.extend({
    routes: {
        "": "home",
        "list": "viewList"
    },

    home: function () {
        if (!app.loginView) {
            app.loginView = new app.views.LoginFormView({model: new app.models.User()});
            app.loginView.render();
        }else {
            console.log("already logged");
        }


    },

    viewList: function () {
        if (!app.searchView) {
            app.searchView = new app.views.SearchBookView();
        }
        var myview = app.searchView.render().el;
        $('#app').html(myview);
    }


});
