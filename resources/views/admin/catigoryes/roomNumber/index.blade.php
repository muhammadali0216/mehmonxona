@extends('layouts.adminLayout')

@section('title')
      Admin.coment
@endsection
  

@section('content')
    
<a href="{{ route('roomnumber.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Xizmat qo'shish</a>
@if($roomnumbers->all())
<table class="table table-success table-striped">
    <thead>
        <tr>
           <th>Divanlar soni bo'yicha turlar</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roomnumbers as $roomnumber)
            <tr>
                <td>{{ $roomnumber->number }} ta </td>
                <td>
                    <form action="{{ route('roomnumber.destroy', $id=$roomnumber->id) }}" method="POST">
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