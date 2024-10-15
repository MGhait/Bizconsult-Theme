<form method="POST" action="{{ $href}}" id="form-delete-{{ $id }}" class="d-inline" onclick="confirmDelete({{ $id }})">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-sm btn-danger">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>