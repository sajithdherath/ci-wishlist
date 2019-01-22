var app = app || {};

app.views.ItemView = Backbone.View.extend({
    el:"#item",
    tagName:"li",
    initialize:function () {

    },
    render:function () {
        this.$el.html(this.model.get("id"));
        return this;
    }
});