<div>
    
    <a href="{{ route('room.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px; display: inline-block;" >Xona qo'shish</a>
    <div style="text-align: right; display: inline-block;" >
        <form class="form-select"  action="{{ route('room.index') }}" method='GET'>
            <select name="room" >
                <option value="">Hammasi</option>
                @foreach ($roomnumber as $room)
                    <option value="{{ $room->id }}">{{ $room->number }} xona</option>
                @endforeach
            </select>
            <select name="bed">
                <option value="">Hammasi</option>
                @foreach ($beds as $bed)
                    <option value="{{ $bed->id }}">{{ $bed->number }} ta divan</option>
                @endforeach
            </select>
            <button >Saralash</button>
        </form>
    </div>
    @if ($rooms->all())
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Xona raqami</th>
                <th>Rasimlar</th>
                <th>Narxlar</th>
                <th>Xonalar soni </th>
                <th>Checkbox</th>
                <th> View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms->all() as $room)
                <tr>
                    <td>
                        {{ $room->number }}
                    </td>
                    <td>                
                      <div class="img-box-a">
                        <img width="100px" src="/assets/img/{{ $room->photo1 }}" alt="Room" class="img-a img-fluid">
                      </div>
                    </td>
                    <td>{{ $room->price }} So'm</td>
                    <td>{{ $room->roomnumber->number }}</td>
                    <td>{{ $room->checkbox }}</td>
                    <td>
                        <a href="{{ route('room.show', $id=$room->id) }}"  class="btn btn-info"> Batafsil </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger" wire:click="deleteroom({{ $room->id }})" > O'chirish </a>          
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $rooms->links() }} --}}
   @endif
   
</div>
