@extends('admin.layouts.layout')
@section('title', 'Редагувати фото')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
               <div class="modal-body">
                <form action="{{ $update_url }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="formGroupExampleInput">Назва фото</label>
                        <input type="text" name="photo_name" class="form-control" id=""
                        placeholder="" value="{{ $photo->photo_name }}">
                    </div>
                    <img src="{{ asset("thumbnail/$photo->path") }}" alt="" height="100px">
                    <div class="form-group">

                        <label for="File1">Підтримуванні формати: jpeg, jpg, png</label>
                        <input type="file" name="photo" class="form-control-file" id="" >
                    </div>
                    <input type="hidden" name="page" value="{{ $photo->page }}" >

            </div>
            <div class="modal-footer">
                <a href="{{ url()->previous() }}">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Скасувати</button>
                </a>

                <input class="btn btn-primary" type="submit" value="Змінити">
                </form>
            </div>

            </div>
        </div>
    </div>
</div>

@endsection


