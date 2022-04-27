<div>
    <a href="{{ route('agents.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Xodim qo'shish</a>

    @if($agents->all())
            <table  class="table table-success table-striped">
        <thead>
            <tr>
                <th>Rasimlar</th>
                <th>Ismi Familya</th>
                <th>Status</th>
                <th>Tel Raqami</th>
                <th>Email</th>
                <th>O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents->all() as $agent)
                <tr>
                    <td>                
                      <div class="img-box-a">
                        <img width="100px" src="/assets/img/{{ $agent->photos }}" alt="agent" class="img-a img-fluid">
                      </div>
                    </td>
                    <td>{{ $agent->name}} <br>
                    {{ $agent->surname }}</td>
                    <td>{{ $agent->status }}</td>
                    <td>{{ $agent->phone }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>
                        <a href="{{ route('agents.edit', $id=$agent->id) }}" class="btn btn-info"> O'zgartirish </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger" wire:click="deleteagent({{ $agent->id }})" > O'chirish </a>          
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $agents->links() }}
    @endif

</div>
