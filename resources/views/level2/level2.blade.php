@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 2</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p><strong>Are you a fan of super heros?? guess what in this level you got find them.But some super heros are hard to find.But i bet you can find them.All super heros got secret codes.If you a really a fan of them you know Sometimes they humiliate ecah others just for fun.So who is the real super hero?</strong></p>
            </div>
        </div>


        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <ul>
                    <li><a href="{{asset('img/stegno/1.png')}}">Download</a></li>
                    <li><a href="{{asset('img/stegno/2.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegno/3.png')}}">Download</a></li>
                    <li><a href="{{asset('img/stegno/4.png')}}">Download</a></li>
                    <li><a href="{{asset('img/stegno/5.jpg')}}">Download</a></li>
                    <li><a href="{{asset('img/stegno/6.png')}}">Download</a></li>
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