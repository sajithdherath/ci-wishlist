var app = app || {};

app.views.ListView = Backbone.View.extend({
    el: ".container",

    render: function () {
        console.log("render");
        var url = this.collection.url + "?user=" + app.user.get("user_id");
        this.collection.fetch({
            reset: true,
            "url": url,
            success: function (collection, response) {
                console.log("init");
                template = _.template($('#list-template').html());
                $(".container").html(template());

            }
        });

    },
    viewAll:function () {
        console.log(this.collection);
        this.collection.each(function (item) {

            //var itemView = app.views.ItemView({model:item});
            var itemView = app.views.ItemView({model: new app.models.Item()});
            this.$el.html(itemView.render().el);
        });
    }
});