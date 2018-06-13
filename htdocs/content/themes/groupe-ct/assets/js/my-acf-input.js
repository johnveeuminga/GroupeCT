jQuery(document).ready(function($) {
    $('#acf-field_592083096efff').on('change', function() {
        var data = {
            'action': 'load_field_group',
            'val': $(this).val()
        };

        $.post(ajaxurl, data, function(response) {
            console.log(response);
        });
    });
});