@extends('layouts.app')



@section('title', 'Projects')

@section('content')

    <header>
        <h1>Projects</h1>
    </header>

    <main>
        <div class="project-wrapper d-flex flex-wrap justify-content-center bg-dark">
            @foreach ($projects as $project)
                <div class="card" style="width: 20rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p> --}}
                        @if ($project->image)
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="my-2">
                        @endif
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach


        </div>
    </main>
@endsection
