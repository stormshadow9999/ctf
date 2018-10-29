@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 7</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p> </p>
            </div>
        </div>


        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <h3>Packet Filtering</h3>
                <p>After travelling all around the world, they were tired. So, Jon and Khaleesi stooped to have a break. After finding a cave to sleep in for the night, they found some cave paintings drawn on the walls. The most interesting thing that caught their eyes was a drawing with a saying called "http rule!." </p>
                <a href="/mel.pcap" class="btn btn-info">Download</a>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel8" method="GET">
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