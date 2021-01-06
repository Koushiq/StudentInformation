@extends('components/layout')
@section('pagetitle', 'Page Title')



@section('content')
        <div class="container" >
            <div class="row">
                <div class="col-sm">
               
                </div>
                <div class="col-sm" style="background-color:rgb(242, 242, 242);">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                        <span id="err_user" style="color:red;">{{$errors->first('username')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                        <span id="err_user" style="color:red;">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group" style="color:red;">{{session('error')}}</div>
                    <div class="form-group" style="color:red;">{{session('invalidUserType')}}</div>
                   <input type="submit" class="btn btn-primary" value="login" id="login">
                </form>
                </div>
                <div class="col-sm">
               
                </div>
            </div>

        </div>
@endsection