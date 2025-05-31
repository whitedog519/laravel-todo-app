<div class="modal fade" id="deleteProjectModal{{ $project->id }}" tabindex="-1" aria-labelledby="deleteProjectModalLabel{{ $project->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProjectModalLabel{{ $project->id }}">「{{ $project->title }}」を削除してもよろしいですか？</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <div class="modal-footer">
                <form action="{{ route('projects.destroy', $project) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">削除</button>
                </form>
            </div>
        </div>
    </div>
</div>