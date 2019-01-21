var LoginView = Backbone.View.extend({

    events: {
        "click #btn-login": "do_login"
    },
    do_login: function (e) {
        e.stopPropagation();
        e.preventDefault();

        var username = $("input#login-username").val();
        var password = $("input#login-password").val();
        user.save({username: username, password: password}, {
            wait: true,
            success: function (model, response) {
                if (response.status == "SUCCESS" || response.status == "ALREADY_LOGGED") {
                    $("#auth").hide();
                    var itemListView = new ItemListView({model:new Items()});
                    itemListView.render();
                } else if (response.status == "NOT_REGISTERED") {
                    $("#msg").html("Not Registered");
                }
            },
            error: function (model, error) {
                console.log(error);
                console.log(model.toJSON());
                console.log('error.responseText');
            }
        });
    }
});

var ItemView = Backbone.View.extend({
    el: "#item-list",
    initialize: function () {
        this.$el.append("<li>" + this.model.get("title") + "</li>");
    }
});

var loginView = new LoginView({el: "#auth", model: user});

var ItemListView = Backbone.View.extend({
    el: "#items",
    model:items,
    render: function () {
        this.$el.html("<ul id='item-list'></ul>");
        var items = new Items();

        items.fetch({
            success: function (item) {
                item.each(function (item) {
                    var itemView = new ItemView({model: item});

                });
            }
        });
    }
});