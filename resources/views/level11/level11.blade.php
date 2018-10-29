@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 11</code></h1>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <h3>Level 11</h3>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p>Khaleesi has send a secret message to jon snow regarding a second war with Night King.
                    message remind jon about their last battle which is kind a prologue.Last battle with
                    Night king was lost but Khaleesi managed to ROT white walkers using her dragons.It's
                    said that they been ROT there for 13 days.But here the problem is night King of the white walkers
                    seems to have intercept the khaleesi's message and change the war path and battle location to frozen
                    lake near the Watchers wall.It's clearly a trap and jon have to find what is it and find who originate it.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <a href="/SHADOW.zip" target="_blank" class="btn btn-primary">Download</a>
            </div>
        </div>


        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel12" method="GET">
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