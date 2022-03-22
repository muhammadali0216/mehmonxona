<div>
    <a href="{{ route('service.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Xizmat qo'shish</a>
    @if($services->all())
    <table class="table table-success table-striped">
        <thead>
            <tr>
               <th>Rasim</th>
                <th>Xizmat turi</th>
                <th>Malumotlar</th>
                <th>O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>                
                      <div class="img-box-a">
                        <img width="100px" src="/assets/img/{{ $service->photo }}" alt="service" class="img-a img-fluid">
                      </div>
                    </td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        <a href="{{ route('service.edit', $id=$service->id) }}"  class="btn btn-info"> O'zgartirish </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger" wire:click="deleteservice({{ $service->id }})" > O'chirish </a>          
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $service->links() }} --}}
    @else
    <br>
    Xozircha xizmatlar mavjud emas !!!
    @endif
</div>
