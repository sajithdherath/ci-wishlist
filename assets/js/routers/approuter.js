var app = app || {};

app.routers.AppRouter = Backbone.Router.extend({
    routes: {
        "": "home",
        "list": "viewList"
    },

    home: function () {
        if (!app.loginView) {
            app.user = new app.models.User();
            app.loginView = new app.views.LoginFormView({model: app.user});
            app.loginView.render();
        } else {
            console.log("already logged");
            app.listView = new app.views.ListView({model: new app.collections.ItemCollection()});
            app.listView.render();
        }
    },

    viewList: function () {
        if (!app.listView) {
            app.listView = new app.views.ListView({collection: new app.collections.ItemCollection()});
            app.listView.render();
        }
    }

});
