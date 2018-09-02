@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 2</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p><strong>Are you a fan of Game of Thrones?? guess what in this level you got find them.But some are hard to find.But i bet you can find them.here they got secret codes..
                        everyone wants to rule the kingdoms .So who is it gonna be?</strong></p>
            </div>
        </div>


        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <ul>
                    <li><a href="{{asset('img/stegnoctf/6.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegnoctf/4.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegnoctf/3.png')}}">Download</a></li>
                    <li><a href="{{asset('img/stegnoctf/21.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegnoctf/5.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegnoctf/1.jpg')}}">Download</a></li>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel3" method="GET">
                            <div class="form-group">
                                <input type="text" name="flag" class="form-control" placeholder="flag..." required>
                            </div>
                            <div align="center">
                                <input type="submit" value="submit" class="btn btn-success" style="width: 100px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection