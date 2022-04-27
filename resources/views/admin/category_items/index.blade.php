@extends('layouts.adminLayout')

@section('title')
      Admin.About
@endsection
  

@section('content')

    <a href="{{ route('item.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Item qo'shish</a>
    @if($items->all())
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Tur Uz</th>
                <th>Tur En</th>
                <th>Tur Ru</th>
                <th>Tur nomi</th>
                <th>O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($items as $item)
                <tr> 
                    <td>{{ $item->nameUz }} </td>
                    <td>{{ $item->nameEn }} </td>
                    <td>{{ $item->nameRu }} </td>
                    <td>{{ $item->category->nameUz }}</td>
                    <td><a class="btn btn-success" href="{{ route('item.edit', $id=$item->id) }}">O'zgartirish </a>
                    </td>
                    <td>
                        <form action="{{ route('item.destroy', $id=$item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"> O'chirish </button>
                        </form>
                     </td>
                </tr> 
             @endforeach
        </tbody>
    </table>
    @else
    <br>
    Xozircha Malumot mavjud emas !!!
    @endif


@endsection