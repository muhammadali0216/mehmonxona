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
                <th>Sarlavxa</th>
                <th>Malumotlar</th>
                <th>Narxlar</th>
                <th>Xonalar soni </th>
                <th>Divanlar</th>
                <th>Turi</th>
                <th>Checkbox</th>
                <th>Up/Del</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $room->number }}</td>
                <td>                
                    <div class="img-box-a">
                        <img width="100px" src="/assets/img/{{ $room->photo1 }}" alt="Room" class="img-a img-fluid">
                        <img width="100px" src="/assets/img/{{ $room->photo2 }}" alt="Room" class="img-a img-fluid">
                        <img width="100px" src="/assets/img/{{ $room->photo3 }}" alt="Room" class="img-a img-fluid">
                    </div>
                </td>
                <td>{{ $room->title }}</td>
                <td>{{ $room->body }}</td>
                <td>{{ $room->price }} So'm</td>
                <td>{{ $room->roomnumber->number }}</td>
                <td>{{ $room->bednumber->number }}</td>
                {{-- <td>{{ $room->catigory->name }}</td> --}}
                <td>{{ $room->checkbox }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('room.edit', $id=$room->id) }}">O'zgartirish </a>
                    <form action="{{ route('room.destroy', $id=$room->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger"  > O'chirish </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection