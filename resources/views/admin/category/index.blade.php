<x-backend-layout>

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>
            Category Management
        </h2>

        <!-- <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#createCategoryModal">

            Add Category

        </button> -->

        <button
            type="button"
            class="btn btn-primary"
            id="openCreateModal">
            Add Category

        </button>

    </div>

    <!-- Success Message Container -->
    <div id="successMessage"></div>

    <!-- Category Listing Card -->
    <div class="card">

        <div class="card-header">

            <h5 class="mb-0">
                Category List
            </h5>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead>

                <tr>

                    <th width="80">
                        ID
                    </th>

                    <th>
                        Category Name
                    </th>

                    <th>
                        Slug
                    </th>

                    <th width="180">
                        Actions
                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($categories as $category)

                    <tr>

                        <td>
                            {{ $category->id }}
                        </td>

                        <td>
                            {{ $category->name }}
                        </td>

                        <td>
                            {{ $category->slug }}
                        </td>

                        <td>

                            <!-- Edit Button -->
                            <button
                                type="button"
                                class="btn btn-warning btn-sm editCategory"
                                data-id="{{ $category->id }}">

                                Edit

                            </button>

                            <!-- Delete Button -->
                            <button
                                type="button"
                                class="btn btn-danger btn-sm deleteCategory"
                                data-id="{{ $category->id }}">

                                Delete

                            </button>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4"
                            class="text-center">

                            No Categories Found

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            <!-- Pagination Links -->
            <div class="mt-3">

                {{ $categories->links() }}

            </div>

        </div>

    </div>

</div>

<!-- Create Modal -->
@include('admin.category.create')

<!-- Edit Modal -->
@include('admin.category.edit')

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

    /**
     * Create Category
     */
    $('#createCategoryForm').on(
        'submit',
        function (e)
    {
        e.preventDefault();

        $('.error-name').html('');

        $.ajax({

            url: "{{ route('categories.store') }}",

            type: "POST",

            data: $(this).serialize(),

            success: function(response)
            {
                showSuccessToast(
                    'Category created successfully.'
                );

                setTimeout(function()
                {
                    location.reload();
                }, 1000);
            },

            error: function(xhr)
            {
                let errors = xhr.responseJSON.errors;

                if(errors && errors.name)
                {
                    $('.error-name')
                        .html(errors.name[0]);
                }
            }
        });

    });


    /**
     * Load Category Data For Edit
     */
    $(document).on(
        'click',
        '.editCategory',
        function ()
    {
        let id = $(this).data('id');

        $.ajax({

            url: '/admin/categories/' + id + '/edit',

            type: 'GET',

            success: function(response)
            {
                $('#editCategoryId')
                    .val(response.id);

                $('#editCategoryName')
                    .val(response.name);

                let editModal =
                    new bootstrap.Modal(
                        document.getElementById(
                            'editCategoryModal'
                        )
                    );

                editModal.show();
            }
        });

    });


    /**
     * Update Category
     */
    $('#editCategoryForm').on(
        'submit',
        function (e)
    {
        e.preventDefault();

        $('.edit-error-name').html('');

        let id =
            $('#editCategoryId').val();

        $.ajax({

            url:
            '/admin/categories/' + id,

            type: 'POST',

            data: {

                _token:
                "{{ csrf_token() }}",

                _method:
                'PUT',

                name:
                $('#editCategoryName')
                    .val()
            },

            success: function(response)
            {
                showSuccessToast(
                    'Category updated successfully.'
                );

                setTimeout(function()
                {
                    location.reload();
                }, 1000);
            },

            error: function(xhr)
            {
                $('.edit-error-name').html('');

                if(xhr.responseJSON.errors)
                {
                    let errors =
                        xhr.responseJSON.errors;

                    if(errors.name)
                    {
                        $('#editCategoryName')
                            .addClass('is-invalid');

                        $('.edit-error-name')
                            .html(errors.name[0]);
                    }
                }
            }
        });

    });


    /**
     * Delete Category
     */
    $(document).on(
    'click',
    '.deleteCategory',
    function ()
    {
        let id =
            $(this).data('id');

        Swal.fire({

            title:
            'Delete Category?',

            text:
            'This action cannot be undone.',

            icon:
            'warning',

            showCancelButton:
            true,

            confirmButtonText:
            'Yes, Delete',

            cancelButtonText:
            'Cancel'

        }).then((result) => {

            if(result.isConfirmed)
            {
                $.ajax({

                    url:
                    '/admin/categories/' + id,

                    type:
                    'POST',

                    data:
                    {
                        _token:
                        "{{ csrf_token() }}",

                        _method:
                        'DELETE'
                    },

                    success:
                    function ()
                    {
                        showSuccessToast(
                            'Category deleted successfully.'
                        );

                        setTimeout(
                            function()
                            {
                                location.reload();
                            },
                            1000
                        );
                    }
                });
            }

        });
    });
    /**
     * Open Create Category Modal
     */
    $('#openCreateModal').on(
        'click',
        function ()
    {
        $('#createCategoryForm')[0].reset();

        $('.error-name').html('');

        let modal =
            new bootstrap.Modal(
                document.getElementById(
                    'createCategoryModal'
                )
            );

        modal.show();
    });

    $('#editCategoryName').removeClass('is-invalid');
    $('.edit-error-name').html('');
</script>

</x-backend-layout>