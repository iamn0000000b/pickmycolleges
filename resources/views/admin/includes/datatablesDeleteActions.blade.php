<form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger delete-confirmation" title="{{ __('Delete') }}"><i class="fas fa-trash"></i></button>
</form>
