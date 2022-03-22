<div>
    
    @if($infos->all())
     <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Description</th>
                <th> O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infos as $info)
               <tr>
                    <td>                
                        <div class="img-box-a">
                            <img width="100px" src="/assets/img/{{ $info->photo }}" alt="Room" class="img-a img-fluid">
                        </div>
                    </td>
                    <td>{{ $info->title }}</td>
                    <td>{{ $info->description }}</td>
                    <td>
                        <a href="{{ route('about.edit', $id=$info->id) }}"  class="btn btn-info">O'zgartirish </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger" wire:click="deleteabout({{ $info->id }})" > O'chirish </a>          
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
    @else
    <a href="{{ route('about.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Malumot qo'shish</a>
    @endif
</div>

