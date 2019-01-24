var app = app || {};

app.routers.AppRouter = Backbone.Router.extend({
    routes: {
        "": "viewList",
        "login": "login",
        "edit/:id": "editbook"
    },

    login: function () {
        userJson = JSON.parse(localStorage.getItem("user"));
        app.user = new app.models.User(userJson);
        if (!app.user) {
            if (!app.loginView) {
                app.loginView = new app.views.LoginFormView({model: app.user});
                app.loginView.render();
            }
        } else {
            this.viewList();
        }
    },

    viewList: function () {
        userJson = JSON.parse(localStorage.getItem("user"));
        app.user = new app.models.User(userJson);
        if (app.user) {
            if (!app.listView) {
                app.list = new app.collections.ItemCollection();
                app.listView = new app.views.ListView({collection: app.list});
                var url = app.listView.collection.url + app.user.get("user_id");
                app.list.fetch({
                    "url": url,
                    wait: true,
                    success: function (collection, response) {
                        app.listView.render();
                    }
                });

            } else {
                this.viewList();
            }
        } else {
            app.appRouter.navigate("#login", {trigger: true, replace: true});
        }
    },
    editbook:function (id) {
        if (!isNaN(id) && id !== 0) {

        }
    }

})
;
