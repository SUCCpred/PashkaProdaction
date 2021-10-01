try {
    window.$ = window.jQuery = require('jquery');

    $(document).ready(function(){
        console.log('Success!');
    });
} catch (e) {}
