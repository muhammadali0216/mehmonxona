<div>
     @if($contacts->all())
     <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Tel raqam</th>
                <th>O'zgartirish</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr> 
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $id=$contact->id) }}"  class="btn btn-info"> O'zgartirish </a>
                    </td>
                    <td>
                        <a wire:click="deletecontact({{ $contact->id }})" class="btn btn-danger" > O'chirish </a>          
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else 
        <a href="{{ route('contact.create') }}" class="btn btn-primary" data-widget="pushmenu" style="margin: 2px" >Manzil qo'shish</a>
    @endif
</div>
