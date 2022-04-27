@extends('layouts.adminLayout')

@section('title')
    View
@endsection

@section('content')
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Xona raqami</th>
                <th>Rasimlar</th>
                <th>SarlavxaUZ</th>
                <th>SarlavxaEN</th>
                <th>SarlavxaRU</th>
                <th>MalumotlarUZ</th>
                <th>MalumotlarEN</th>
                <th>MalumotlarRU</th>
                <th>Narxlar</th>
                @foreach ($room->category as $item)
                    <th>{{ $item->category->nameUz }}</th>
                @endforeach
                <th>Checkbox</th>
                <th>Up/Del</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $room->number }}</td>
                <td>                
                    <div class="img-box-a">
                        @foreach ($room->photos as $photo)
                        <img width="200px" style="margin: 3px" src="/assets/img/{{ $photo->photos }}" alt="Room" class="img-a img-fluid">
                        @endforeach
                    </div>
                </td>
                <td>{{ $room->titleUz }}</td>
                <td>{{ $room->titleEn }}</td>
                <td>{{ $room->titleRu }}</td>
                <td>{{ $room->bodyUz }}</td>
                <td>{{ $room->bodyEn }}</td>
                <td>{{ $room->bodyRu }}</td>
                <td>{{ $room->price }} So'm</td>
                @foreach ($room->category as $item)
                    <td>{{ $item->nameUz }}</td>
                @endforeach
                <td>{{ $room->checkbox }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('room.edit', $id=$room->id) }}">O'zgartirish </a>
                    
                    <form action="{{ route('room.destroy', $id=$room->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger"> O'chirish </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection