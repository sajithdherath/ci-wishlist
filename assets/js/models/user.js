var app = app || {};
app.models.User = Backbone.Model.extend({
    urlRoot: '/advanced-server-side/cw2/user',
    defaults: {
        username: null,
        password: null,
        user_id: null,
        list_name:null,
        list_description:null
    },
    url:'/advanced-server-side/cw2/user',
});