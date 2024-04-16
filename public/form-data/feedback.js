toastr.options = {
    "positionClass": "toast-bottom-left",
    "timeOut": "5000", // 5 seconds
    "extendedTimeOut": "1000", // 1 second
    "progressBar": true
};
$(document).ready(function() {
    var baseURL = $("meta[name='baseURL']").attr('content');
    $('#nsg_add_feedback_submit').click(function(e) {
        e.preventDefault();
        var formData = $('#feedback_add_form').serialize();
        $.ajax({
            type: 'POST',
            url:  baseURL + 'feedback-save',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    toastr.success(response.message);
                    // Optionally, reset the form after successful submission
                    $('#feedback_add_form')[0].reset();
                } else {
                    toastr.error('Failed to save data');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response and display validation errors if any
                var errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    toastr.error(value);
                    //alert(key);
                });
            }
        });
    });
});