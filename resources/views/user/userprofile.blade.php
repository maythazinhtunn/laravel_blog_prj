@extends('layouts.pagelayout') @section('content')
<div class="container">
    <h1 class="mt-4 mb-4 text-center">User Profile</h1>
    <form class="border border-light p-5" action="" method="post">
        <div class="form-outline mb-4">
            <input
                type="text"
                id="username"
                class="form-control"
                placeholder="UserName"
            />
            <label class="form-label" for="username">UserName</label>
        </div>

        <div class="form-outline mb-4">
            <input
                type="text"
                id="email"
                class="form-control"
                placeholder="Email"
            />
            <label class="form-label" for="email">Email</label>
        </div>

        <label for="photo">Photo</label>
        <div class="form-outline mb-4">
            <input type="file" id="photo" class="form-control" />
        </div>

        <div class="form-outline mb-4">
            <input
                type="text"
                id="old-password"
                class="form-control"
                placeholder="Old Password"
            />
            <label class="form-label" for="old-password">Old Password</label>
        </div>
        <div class="form-outline mb-4">
            <input
                type="text"
                id="new-password"
                class="form-control"
                placeholder="New Password"
            />
            <label class="form-label" for="new-password">New Password</label>
        </div>

        

        <!-- Add post button -->
        <button type="submt" class="btn btn-primary btn-block">Add Post</button>
    </form>
</div>
@endsection
