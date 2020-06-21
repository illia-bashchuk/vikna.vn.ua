@extends('admin.layouts.layout')
@section('title', $title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                        data-target="#store_form_modal">
                        Додати фото
                    </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Назва</th>
                                <th scope="col">Завантаженно</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($photos as $photo)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td width="200px"><a href="{{ route('edit.show', ['id' => $photo->id]) }}"><img src="{{ asset($photo->url) }}" alt="" height="100px"></a> </td>
                                <td width="300px">{{ $photo->photo_name }}</td>
                                <td width="300px">{{ $photo->created_at }}</td>
                                <td width="300px">
                                    <div class="row">
                                        <form action="{{ route('edit.destroy', ['id' => $photo->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger m-1" type="submit" value="Видалити">
                                        </form>
                                        <a href="{{ route('edit.edit', ['id' => $photo->id]) }}">
                                            <button type="button" class="btn btn-primary m-1" data-toggle="modal"
                                                data-target="#edit_form_modal">
                                                Редагувати
                                            </button>
                                        </a>
                                    </div>
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
@include('admin.components.add_form')
@endsection
