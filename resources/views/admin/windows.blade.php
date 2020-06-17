@extends('admin.components.show_photos')
@section('title', 'Металопластикові вікна')
@section('show_photos')
@foreach ($photos as $photo)
<tr>
    <th scope="row">{{ $loop->iteration }}</th>
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
                <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#edit_form_modal">
                    Редагувати
                </button>
            </a>
        </div>
    </td>
</tr>
@endforeach
@endsection
