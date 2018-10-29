@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 14</code></h1>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <h3>Level 14</h3>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p>Description here: PCAP LEVEL</p>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <a href="/mel2.pcap" target="_blank" class="btn btn-primary">Download</a>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel15" method="GET">
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