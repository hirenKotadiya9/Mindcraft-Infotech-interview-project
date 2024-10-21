$(document).ready(function () {
    $('#addNewProduct').click(function () {
        $('#productModal').modal('show');
        $('#productForm')[0].reset();
        $('#productId').val('');
        $('#productModalLabel').text('Add Product');
    });

    $('#productForm').submit(function (e) {
        e.preventDefault();

        let formData = new FormData(this);
        $.ajax({
            url: $('#productId').val() ? `/products/update/${$('#productId').val()}` : '/products',
            type: $('#productId').val() ? 'POST' : 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#productModal').modal('hide');
                $('#productForm')[0].reset();
                $('#products').load(location.href + ' #products > *');
                alert('Product saved successfully!');
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
                    let errorMessage = '';
                    for (const key in errors) {
                        errorMessage += `${errors[key].join(', ')}\n`;
                    }
                    alert(errorMessage);
                } else {
                    console.error(xhr.responseText);
                    alert('Failed to save product. Please try again.');
                }
            }
        });
    });

    // Edit product functionality
    $(document).on('click', '.editBtn', function () {
        const productId = $(this).data('id');
        $.get(`/products/edit/${productId}`, function (data) {
            $('#productModal').modal('show');
            $('#productId').val(data.id);
            $('#name').val(data.name);
            $('#description').val(data.description);
            $('#status').val(data.status);
            $('#productModalLabel').text('Edit Product');
        });
    });
});
