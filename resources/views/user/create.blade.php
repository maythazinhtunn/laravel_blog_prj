@extends('layouts.pagelayout') @section('content')
<div class="container">
    <h1 class="mt-4 mb-4 text-center">Create Post</h1>
    <form class="border border-light p-5" action="{{ route('addPost')}}" action="post">
        <div class="form-outline mb-4">
            <input
                type="text"
                id="form1Example1"
                class="form-control"
                placeholder="title"
            />
            <label class="form-label" for="form1Example1">Title</label>
        </div>

        <label for="form1Example2">Photo</label>
        <div class="form-outline mb-4">
            <input type="file" id="form1Example2" class="form-control" />
        </div>

        <div class="form-outline mb-4">
            <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                class="form-control"
            ></textarea>
            <label class="form-label" for="form1Example2">Content</label>
        </div>

        <!-- Add post button -->
        <button type="submit" class="btn btn-primary btn-block">Add Post</button>
    </form>
</div>
@endsection
