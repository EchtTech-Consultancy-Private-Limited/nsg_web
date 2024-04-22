toastr.options = {
    "positionClass": "toast-bottom-left",
    "timeOut": "5000", // 5 seconds
    "extendedTimeOut": "1000", // 1 second
    "progressBar": true
};
$(document).ready(function() {
    var baseURL = $("meta[name='baseURL']").attr('content');
    $('#nsg_add_registerforncnc_submit').click(function(e) {
        e.preventDefault();
        //var formData = $('#registerforncnc_add_form').serialize();
        var formData = new FormData($('#registerforncnc_add_form')[0]);
        $.ajax({
            type: 'POST',
            url:  baseURL + 'register-for-ncnc-save',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    toastr.success(response.message);
                    // Optionally, reset the form after successful submission
                    $('#registerforncnc_add_form')[0].reset();
                } else {
                    toastr.error('Failed to save data');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response and display validation errors if any
                var errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    toastr.error(value);
                });
            }
        });
    });
});