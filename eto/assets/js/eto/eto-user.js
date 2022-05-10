/*
Copyright (c) 2020 by EasyTaxiOffice - All Rights Reserved
Website: https://easytaxioffice.com
Email: support@easytaxioffice.com
*/

ETO.User = function() {
    var etoFn = {};

    etoFn.config = {
        init: [],
        lang: ['user']
    };

    etoFn.init = function(config) {
        ETO.extendConfig(this, config, 'user');
    };

    etoFn.getUsers = function(params) {
        var result = {};
        params = $extend(true, {}, params);

        ETO.ajax('etov2?apiType=backend', {
            data: {
                task: 'bookings',
                action: 'destroy',
                id: id,
                bookingChildren: bookingChildren
            },
            success: function(response) {
                if (response.success) {
                    result = response
                }
                else { alert('The booking could not be deleted!'); }
            },
        });
    };

    return etoFn;
}();
