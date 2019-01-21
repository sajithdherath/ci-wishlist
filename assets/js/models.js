var base_url = "http://localhost/advanced-server-side/cw2/";

var User = Backbone.Model.extend({
    url: function () {
        var url = base_url+"user/login";
        return url;
    },
    defaults: {
        username: null,
        password: null,
        user_id: null
    }
});


var user = new User();

var Item = Backbone.Model.extend({
    defaults: {
        id: null,
        price: null,
        url: null,
        category_id: null,
        status_id: null,
        title: null,
        description: null
    }
});
var Items = Backbone.Collection.extend({

    url: base_url+"item?user="+user.get("user_id"),

});



