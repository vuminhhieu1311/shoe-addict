// Delete button clicked
$('.delete-btn').click((e) => {
    const urlRequest = $(e.target).data('url');
    const productId = $(e.target).data('id');
    Swal.fire({
        title: 'Are you sure you want to delete?',
        icon: 'warning',
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Delete',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-light',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url: urlRequest,
                success: function(data) {
                    $(`#product-item-${productId}`).remove();
                    toastr.success('Delete successfully!');
                },
                error: function() {}
            });
        }
    });
});
