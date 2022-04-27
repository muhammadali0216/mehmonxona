@extends('layouts.adminLayout')

@section('title')
      Admin.buyurtmalar
@endsection
  

@section('content')
<div>
    @if($zakazlar->all())
    <table class="table table-success table-striped">
       <thead>
           <tr>
               <th>Mijozning Ismi</th>
               <th>Band qilingan muddat</th>
               <th>TEL Raqmi</th>
               <th>Qabul qilish</th>
               <th>Delete</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($zakazlar as $zakaz)
               <tr>  
                   <td>{{ $zakaz->room }}</td>
                   <td>{{ $zakaz->name }}</td>
                   <td>{{ $zakaz->forstday }}dan {{ $zakaz->lastday }} gacha</td>
                   <td>
                       <a href=" {{ route('delzakaz', $zakaz->id) }}" class="btn btn-danger" > O'chirish </a>      
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
   {{ $zakazlar->links() }}
   @else 
    <h2>Xozircha Buyurtma mavjud emas</h2>
   @endif
</div>
@endsection