<div>
    @if($coments->all())
    <table class="table table-success table-striped">
       <thead>
           <tr>
               <th>Mijozning Ismi</th>
               <th>TEL Raqmi</th>
               <th>Email</th>
               <th>Xabar</th>
               <th>Delete</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($coments as $coment)
               <tr>  
                   <td>{{ $coment->name }}</td>
                   <td>{{ $coment->phone }}</td>
                   <td>{{ $coment->email }}</td>
                   <td>{{ $coment->description }}</td>
                   <td>
                       <a wire:click="deletecoment({{ $coment->id }})" class="btn btn-danger" > O'chirish </a>          
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
   {{ $coments->links() }}
   @else 
    <h2>Xozircha xabar mavjud emas</h2>
   @endif
</div>
