@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1><code>Level 5</code></h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="color: #000000;">
                <p> <B>Here's something to know about Jon snow. Jon is introduced in 1996's A Game of Thrones as the illegitimate son of Ned Stark, the honorable lord of Winterfell,
                    an ancient fortress in the North of the fictional continent of Westeros. Jon is described as having strong Stark features with a lean build, long face,
                    dark brown hair and grey eyes.Knowing his prospects are limited by his status, Jon joins the Night's Watch,
                    who guard the far northern borders from the wildlings who live beyond The Wall. Jon learns of their plans to invade Westeros in A Storm of Swords (2000),
                        and begins to fall in love with the fierce wildling woman Ygritte. Jon also has a pet which he really loves called ghost.</B></p>
            </div>
        </div>




        <div class="row" style="margin-top: 30px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background-color: rgba(223,222,222,0.29); border: none; padding: 20px">
                    <h3 style="color: #b21400"><strong>Flag</strong></h3>
                    <div class="panel-body">
                        <form action="/requestlevel6" method="get">
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