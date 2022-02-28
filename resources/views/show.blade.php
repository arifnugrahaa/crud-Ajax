<table class="table">
    <tr>
        <th>Id</th>
        <th>Name Product</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <button class="btn btn-warning" onclick="edit({{ $item->id }})">EDIT</button>
                <button class="btn btn-danger" onclick="destroy({{ $item->id }})">HAPUS</button>
            </td>
        </tr>
    @endforeach
</table>