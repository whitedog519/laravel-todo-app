<div class="modal fade" id="editProjectModal{{ $project->id }}" tabindex="-1" aria-labelledby="editProjectModalLabel{{ $project->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectModalLabel{{ $project->id }}">プロジェクトの編集</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('projects.update', $project) }}" method="post">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <input type="text" class="form-control" name="title" value="{{ $project->title }}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </form>
        </div>
    </div>
</div>