@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 4</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p> <B>Jon and Khaleesi went dumpster diving. After 20 hours of searching, they found a magazine that looks somewhat suspicious. However, it is unreadble. can you help them find what it is about?
                    </B></p>
            </div>

        </div>


        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <h1></h1>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                    <ul>
                        <li><a href="{{asset('img/Capture-2.PNG')}}">Download</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel5" method="GET">
                            <div class="form-group">
                                <input type="text" name="flag" class="form-control" placeholder="flag...">
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