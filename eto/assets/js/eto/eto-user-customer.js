/*
Copyright (c) 2020 by EasyTaxiOffice - All Rights Reserved
Website: https://easytaxioffice.com
Email: support@easytaxioffice.com
*/

ETO.User.Customer = function() {
    var etoFn = {};

    etoFn.config = {
        init: [],
        lang: ['user'],
    };

    etoFn.init = function(config) {
        ETO.extendConfig(this, config, 'customer');
    };

    return etoFn;
}();
