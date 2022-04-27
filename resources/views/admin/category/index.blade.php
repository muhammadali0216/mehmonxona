@extends('layouts.adminLayout')

@section('title')
      Admin.About
@endsection
  

@section('content')

    <a href="{{ route('category.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Category qo'shish</a>
    @if($categories->all())
    <table class="table table-success table-striped">
        <thead>
            <tr>
               <th>Tur nomlari UZ </th>
               <th>Tur nomlari EN</th>
               <th>Tur nomlari RU</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>            
                <td>{{ $item->nameUz }}</td>
                <td>{{ $item->nameEn }}</td>
                <td>{{ $item->nameRu }}</td>
                <td>
                    <form action="{{ route('category.destroy', $id=$item->id) }}" method="POST">
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