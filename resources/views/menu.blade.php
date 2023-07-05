<div class="d-flex">
    <a href="{{ route('barang.edit', ['barang' => $listbarang->id]) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('barang.destroy', ['barang' => $listbarang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
