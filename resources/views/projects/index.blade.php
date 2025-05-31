@extends('layouts.app')

@section('content')
<div class="container h-100">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- プロジェクトの追加用モーダル -->
    @include('modals.add_project')

    <div class="d-flex mb-3">
        <a href="#" class="link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#addProjectModal">
            <div class="d-flex align-items-center">
                <span class="fs-5 fw-bold">＋</span>&nbsp;プロジェクトの追加
            </div>
        </a>
    </div>

    <div class="row row-cols-1 row row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($projects as $project)
        
            <!-- プロジェクトの編集用モーダル -->
            @include('modals.edit_project')

            <!-- プロジェクトの削除用モーダル -->
            @include('modals.delete_project')

            <div class="col">
                <div class="card bg-light">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="card-title ms-1 mb-0">{{ $project->title }}</h4>
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle px-1 fs-5 fw-bold link-dark text-decoration-none" id="dropdownProjectMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">︙</a>
                                <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="dropdownProjectMenuLink">
                                    <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editProjectModal{{ $project->id }}">編集</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteProjectModal{{ $project->id }}">削除</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



</div>
@endsection