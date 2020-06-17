@extends('admin.layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#store_form_modal">
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
                            @yield('show_photos')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.components.add_form')
@endsection
