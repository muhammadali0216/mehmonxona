@extends('layouts.adminLayout')

@section('title')
      Admin.Home
@endsection
{{-- @livewire('index-livewire',['filters'=>$filters]) --}}
@section('content')
    <div>
        <div style="display: flex; align-items:center; justify-content:space-between; ">
            
                <a href="{{ route('room.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px; display: inline-block;" >Xona qo'shish</a>
            
            
                <form action="{{ route('room.index') }}" method="GET">
                    <div style="display: inline-block">
                    <div class="form-group">
                        @foreach ($categories as $category)
                            <div >
                                @foreach ($category->items as $item)
                                <div class="form-check" style="margin: 10px; display: inline-block;">
                                    <input class="form-check-input" name="category[]" type="checkbox" value="{{ $item->id }}" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{ $item->nameUz }}
                                    </label>
                                </div>
                                
                                @endforeach
                            </div>
                        @endforeach
                    
                    </div>
                    </div>
                    <button class="btn btn-primary" >Saralash</button>
                </form>
            
        </div>
    </div>
    @if ( count($rooms) >= 1 )
        <table class="table table-success table-striped" style="margin-top:15px" >
        <thead>
            <tr>
                <th>Xona raqami</th>
                <th>Rasimlar</th>
                <th>Narxlar</th>
                @foreach ($categories as $item)
                    <th> {{ $item->name }}</th>
                @endforeach
                <th>Checkbox</th>
                <th> View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
                    <tr>
                        <td>
                        {{ $room->number }}
                        </td>  
                        <td>  
                            <div class="img-box-a">
                            @foreach ($room->photos as $photo)
                            <img width="200px" style="margin: 3px" src="/assets/img/{{ $photo->photos}}" alt="Room" class="img-a img-fluid">
                            @endforeach
                            </div>
                        </td>
                        <td>{{ $room->price}} So'm</td>
                        @foreach ($room->category as $item)
                            <td>{{ $item->nameUZ }}</td>
                        @endforeach
                        <td>{{ $room->checkbox }}</td>
                        <td>
                            <a href="{{ route('room.show', $id=$room->id) }}"  class="btn btn-info"> Batafsil </a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('room.edit', $id=$room->id) }}">O'zgartirish </a>
                            <form action="{{ route('room.destroy', $id=$room->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"> O'chirish </button>
                            </form>
                        </td>
                    </tr>
                
            @endforeach
        </tbody>
    </table>
    {{ $rooms->links('admin.rooms.paginate') }}

    @endif

@endsection