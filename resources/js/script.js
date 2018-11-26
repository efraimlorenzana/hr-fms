$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

require('./components/_search');
require('./components/_upload');

require('./pages/_base');
require('./pages/_employee');
require('./pages/_file');
require('./pages/_setting');

