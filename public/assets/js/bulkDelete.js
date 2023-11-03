var delete_request_id = 0;
$(document).ready(function() {
    $('.delete-button').click(function() {
        var dataId = $(this).data('id');
        var confirmation = confirm('Are you sure you want to delete this record?');

        if (confirmation) {
            delete_request_id = Date.now();
            $.ajax({
                "url": "http://localhost:8080/mypcot/record/".concat(dataId),
                "method": "DELETE",
                "timeout": 0,
                "headers": {
                    "request_id": delete_request_id
                },
                success: function(response) {
                    // Remove the table row on success
                    $(this).closest('tr').remove();
                },
                error: function() {
                    alert('Failed to delete the record.');
                }
            });
        }
    });
});
/// deletes here for getting selected items
// const parts = inputString.split('_');
// const number = parts[1]; // Get the second part (index 1)
