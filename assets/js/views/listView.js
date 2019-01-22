var app = app || {};

app.views.ListView = Backbone.View.extend({
   initialize:function () {
       this.listenTo(this.model,"sync change",this.render);
   },
    render:function () {
        
    }
});