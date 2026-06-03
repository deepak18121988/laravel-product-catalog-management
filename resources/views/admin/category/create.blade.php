<!-- Create Category Modal -->

<div class="modal fade"
     id="createCategoryModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form id="createCategoryForm">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">

                        Create Category

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

                        <input type="text"
                               name="name"
                               class="form-control">

                        <small class="text-danger error-name">
                        </small>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-primary">

                        Save Category

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>