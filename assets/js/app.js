var app = app || {};
app.views = {};
app.routers = {};
app.models = {};
app.collections = {};

$(document).ready(function() {
    app.appRouter = new app.routers.AppRouter();
    $(function () {
        Backbone.history.start();
    });
});
