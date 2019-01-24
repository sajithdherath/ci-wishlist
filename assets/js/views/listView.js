var app = app || {};

app.views.ListView = Backbone.View.extend({
    el: ".container",
    initialize: function () {
        this.listenTo(this.list, 'add', this.addOne);

    },
    render: function () {
        console.log("render");
        template = _.template($('#list-template').html());
        this.$el.html(template(app.user.attributes));
        this.collection.each(function (item) {
            console.log(item);
            var itemView = new app.views.ItemView({model: item});
            itemView.render();
        });
    },
    addOne:function () {
        
    }

});