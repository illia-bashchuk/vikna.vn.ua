<div class="modal fade" id="store_form_modal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Додати фото</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ $add_form_url }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="formGroupExampleInput">Назва фото</label>
                        <input type="text" name="photo_name" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="File1">Підтримуванні формати: jpeg, jpg, png</label>
                        <input type="file" name="photo" class="form-control-file" id="" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Скасувати</button>
                <input class="btn btn-primary" type="submit" value="Додати">
                </form>
            </div>
        </div>
    </div>
</div>
