@extends('admin.layouts.layout')
@section('title', 'Фото')
@section('previous_url', url("/admin/edit?page={$photo->page}") )
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
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
                            <tr>
                                <th scope="row"></th>
                                <td width="300px">
                                    {{-- <img src="{{ asset("thumbnail/$photo->path") }}" alt="" >  --}}
                                </td>
                                <td width="300px">{{ $photo->photo_name }}</td>
                                <td width="300px">{{ $photo->created_at }}</td>
                                <td width="300px">
                                    <div class="row">
                                        <form action="{{ route('edit.destroy', ['id' => $photo->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger m-1" type="submit" value="Видалити">
                                        </form>
                                        <a href="{{ url("admin/edit/{$photo->id}/edit?page={$photo->page}") }}">
                                            <button type="button" class="btn btn-primary m-1" data-toggle="modal"
                                                data-target="#edit_form_modal">
                                                Редагувати
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <img src="{{ asset("photo/$photo->path") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
