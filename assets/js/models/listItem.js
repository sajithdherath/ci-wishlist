var app = app || {};

app.models.Item = Backbone.Model.extend({
    urlRoot: '/advanced-server-side/cw2/item/',
    defaults: {
        id: null,
        price: null,
        url: null,
        category_id: null,
        status_id: null,
        title: null,
        description: null
    },
    url: '/advanced-server-side/cw2/item/',
});

app.collections.ItemCollection = Backbone.Collection.extend({

    model: app.models.Item,

    url: '/advanced-server-side/cw2/item'
});
