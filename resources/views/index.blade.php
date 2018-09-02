@extends('layouts.app')

@section('content')
    <div class="container login-form" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p><strong>Jon Snow and Daenerys Targaryen aka Khaleesi has entered to the 21st century. They are here to find whaite walkers, which each carries a flag that has come to destroy the world.
                        Your task, uncover the truth, find the white walkers and show it to the world. Set the truth free.


                        The first thing that meets in their journey is a robot. It talks, it waves, it moves and everything. Will they be able to obtain the flag from him?</strong></p>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <h2>Please Login</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="/attemptlogin" method="POST">
                            {{csrf_field()}}
                            <div class="input-group" style="margin-bottom: 20px; width: 330px">
                                <input id="txtUser" type="text" class="form-control" name="username" placeholder="Username" autofocus>
                            </div>
                            <div class="input-group" style="margin-bottom: 20px; width: 330px;">
                                <input id="txtPassword" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div align="center">
                                <input type="submit" class="btn btn-primary" value="Login" align="center" style="width: 100px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection