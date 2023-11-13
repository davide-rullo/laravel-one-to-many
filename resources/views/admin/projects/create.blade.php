@extends('layouts.admin')

@section('content')

<h1>Add project</h1>


@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif


<form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror " placeholder="Add your project title" aria-describedby="helpId" value="{{old('title')}}">
        <small id="helpTitle" class="text-muted">Help text</small>
    </div>

    @error('title')
    <div class="text-danger">{{$message}}</div>
    @enderror

    <div class="mb-3">
        <label for="cover_image" class="form-label">Choose file</label>
        <input type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" id="cover_image" placeholder="" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Add an image</div>
    </div>

    @error('cover_image')
    <div class="text-danger">{{$message}}</div>
    @enderror

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description')}}</textarea>
    </div>

    @error('description')
    <div class="text-danger">{{$message}}</div>
    @enderror


    <div class="mb-3">
        <label for="github_link" class="form-label">github_link</label>
        <input type="text" name="github_link" id="github_link" class="form-control @error('github_link') is-invalid @enderror " placeholder="Add your project github_link" aria-describedby="helpId" value="{{old('github_link')}}">
        <small id="helpgithub_link" class="text-muted">Help text</small>
    </div>

    @error('github_link')
    <div class="text-danger">{{$message}}</div>
    @enderror


    <div class="mb-3">
        <label for="online_link" class="form-label">online_link</label>
        <input type="text" name="online_link" id="online_link" class="form-control @error('online_link') is-invalid @enderror " placeholder="Add your project online_link" aria-describedby="helpId" value="{{old('online_link')}}">
        <small id="helponline_link" class="text-muted">Help text</small>
    </div>

    @error('online_link')
    <div class="text-danger">{{$message}}</div>
    @enderror


    <button class="btn btn-primary" type="submit">Create</button>

</form>


@endsection