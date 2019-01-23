var app = app || {};

app.views.ItemView = Backbone.View.extend({

    el:"#item",
    render:function () {
        this.$el.append("<li>"+this.model.get("id")+"</li>");
    }
});