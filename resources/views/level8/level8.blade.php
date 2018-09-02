@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 8</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p>KLFB</p>
            </div>
        </div>


        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default"
                     style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel9" method="GET">
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

        <div class="row" style="margin-top: 20px">
            <div class="col-md-6 col-md-offset-3">
                <form action="/searchlevel8" method="GET">
                    <div class="form-group">
                        <input type="text" name="key" class="form-control" placeholder="Search...">
                    </div>
                    <div align="center">
                        <input type="submit" value="Search" class="btn btn-info" style="width: 100px">
                    </div>
                </form>
            </div>
        </div>

        <div class="row" style="margin-top: 20px; color: #000000; background: #ffffff">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @if(isset($data))
                        @foreach($data as $value)
                            <tr>
                                <td>{{$value->emp_name}}</td>
                                <td>{{$value->email}}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>

@endsection