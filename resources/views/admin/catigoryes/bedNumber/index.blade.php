@extends('layouts.adminLayout')

@section('title')
      Admin.About
@endsection
  

@section('content')

    <a href="{{ route('bed.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Xizmat qo'shish</a>
    @if($beds->all())
    <table class="table table-success table-striped">
        <thead>
            <tr>
               <th>Divanlar soni bo'yicha turlar</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beds as $bed)
                <tr>
                    <td>{{ $bed->number }} ta </td>
                    <td>
                        <form action="{{ route('bed.destroy', $id=$bed->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"  > O'chirish </button>
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