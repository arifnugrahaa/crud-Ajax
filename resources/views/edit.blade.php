<div class="p2">
    <div class="form-group">
        <label for="name">Product</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Product" value="{{ $data->name }}">
    </div>
    <div class="form-group">
        <button class="btn btn-success mt-2" onclick="update({{ $data->id }})">Update Product</button>
    </div>
</div>