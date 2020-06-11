@extends('admin.layouts.layout')
@section('title', 'Фото')

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
                                <td width="200px"><img src="{{ asset($photo->url) }}" alt="" height="100px"> </td>
                                <td width="300px">{{ $photo->photo_name }}</td>
                                <td width="300px">{{ $photo->created_at }}</td>
                                <td width="300px">
                                    <div class="row">
                                        <form action="{{ route('edit-windows.destroy', ['id' => $photo->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger m-1" type="submit" value="Видалити">
                                        </form>
                                        <a href="{{ route('edit-windows.edit', ['id' => $photo->id]) }}">
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
                        <img src="{{ asset($photo->url) }}" alt="">
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection


