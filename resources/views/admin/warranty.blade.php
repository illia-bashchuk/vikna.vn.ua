@extends('admin.layouts.layout')
@section('title', 'Металопластикові вікна')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
                        Додати фото
                    </button>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Завантаженно</th>
                                <th scope="col">Видалити</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($photos as $photo)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ asset($photo->url) }}" alt="" height="50px"> </td>
                                <td>{{ $photo->created_at }}</td>
                                <td>
                                    <form action="{{ route('edit-warranty.destroy', ['id' => $photo->id]) }}"  method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Видалити">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Додати фото</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('edit-warranty.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">

                        <label for="File1">Підтримуванні формати: jpeg, jpg, png</label>
                        <input type="file" name="photo" class="form-control-file" id="File1" required>
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
@endsection
