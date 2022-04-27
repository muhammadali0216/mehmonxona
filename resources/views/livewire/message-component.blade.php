<div>
    @if($messages->all())
    <table class="table table-success table-striped">
       <thead>
           <tr>
               <th>Xona Raqami</th>
               <th>Mijozning Ismi</th>
               <th>Mijozning Familyasi </th>
               <th>Band qilin muddat</th>
               <th>TEL Raqmi</th>
               <th>Qabul qilish</th>
               <th>Delete</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($messages as $message)
               <tr>  
                   <td>{{ $message->room }}</td>
                   <td>{{ $message->name }}</td>
                   <td>{{ $message->surname }}</td>
                   <td>{{ $message->forstday }}dan {{ $message->lastday }} gacha</td>
                   <td>{{ $message->phone }}</td>
                   <td>
                        @if (empty($message->check))
                           <a href="{{ route('zakaz', $message)}}"  class="btn btn-info">Qbul qilish</a>    
                        @endif
                   </td>
                   <td>
                       <a wire:click="deletemessage({{ $message->id }})" class="btn btn-danger" > O'chirish </a>      
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
   {{ $messages->links() }}
   @else 
    <h2>Xozircha Murojatlar mavjud emas</h2>
   @endif
</div>
