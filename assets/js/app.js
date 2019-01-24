var app = app || {};
app.views = {};
app.routers = {};
app.models = {};
app.collections = {};
app.categories={};
app.status={};
app.base_url = '/advanced-server-side/cw2/api/';

function validateLoginForm() {
    var user = {
        'username': $("input#login-username").val(),
        'password': $("input#login-password").val()
    };
    if (!user.username|| !user.password) {return false; }
    return user;
}
function validateRegisterForm() {
    var user = {
        'username': $("input#reg-username").val(),
        'password': $("input#reg-password").val(),
        'rpt_password': $("input#rpt-password").val(),
        'list_name': $("input#list-name").val(),
        'list_description': $("textarea#description").val(),
    };
    if (!user.username|| !user.password) {return false; }
    return user;
}
$(document).ready(function() {
    app.appRouter = new app.routers.AppRouter();
    $(function () {
        Backbone.history.start();
    });
});
