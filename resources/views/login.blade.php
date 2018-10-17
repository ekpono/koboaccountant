@extends('layouts.app')

@section('content')
<div  class="container mt-5 pt-5">
    @include('error')
    <div class="row">
        <div class="col-md-5 mt-5 ">
            <h1>Login</h1>
            <form method="post" action="/login">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection