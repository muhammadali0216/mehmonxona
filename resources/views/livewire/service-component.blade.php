<div>
    <a href="{{ route('service.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Xizmat qo'shish</a>
    @if($services->all())
    <table class="table table-success table-striped">
        <thead>
            <tr>
               <th>Rasim</th>
                <th>Xizmat turi UZ</th>
                <th>Xizmat turi EN</th>
                <th>Xizmat turi RU</th>
                <th>Malumotlar UZ</th>
                <th>Malumotlar EN</th>
                <th>Malumotlar RU</th>
                <th>O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>                
                      <div class="img-box-a">
                        <img width="100%" src="/assets/img/{{ $service->photo }}" alt="service" class="img-a img-fluid">
                      </div>
                    </td>
                    <td>{{ $service->titleUz }}</td>
                    <td>{{ $service->titleEn }}</td>
                    <td>{{ $service->titleRu }}</td>
                    <td>{{ $service->descriptionUz }}</td>
                    <td>{{ $service->descriptionEn }}</td>
                    <td>{{ $service->descriptionRu }}</td>
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
