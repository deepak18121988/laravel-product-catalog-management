<!-- Edit Category Modal -->

<div class="modal fade"
     id="editCategoryModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form id="editCategoryForm">

                @csrf

                @method('PUT')

                <input type="hidden"
                       id="editCategoryId">

                <div class="modal-header">

                    <h5 class="modal-title">

                        Edit Category

                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Category Name
                        </label>

                        <input
                            type="text"
                            id="editCategoryName"
                            name="name"
                            class="form-control">

                        <small
                            class="text-danger edit-error-name">
                        </small>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-success">

                        Update Category

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>