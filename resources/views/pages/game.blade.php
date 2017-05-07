@extends('app')

@section('title', 'Game | FaceMash v1.0')

@section('content')
<div class="home">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
                <ul class="list-inline pull-right">
                  <li class="active"><a href="{{ url('game') }}" class="btn btn-sm btn-green">Play Game</a></li>
                  <li><a href="{{ url('images/stats') }}" class="btn btn-sm btn-orange">View Statistics</a></li>
                {{--<li><a href="{{ url('share') }}" class="btn btn-sm btn-cyan">Share</a></li>--}}
                 <li><a href="{{ url('/') }}" class="btn btn-sm btn-cyan">Home</a></li>               
                </ul>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">
              @if(count($images) >= 2)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  {!! Form::open(['method' => 'PATCH', 'action' => ['GameController@update', $images->first()->id], 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="winner" id="{{ $images->first()->id }}" value="{{ $images->first()->id }}"></input>
                        <input type="hidden" class="form-control" name="loser" id="{{ $images->last()->id }}" value="{{ $images->last()->id }}"></input>
                    </div>
                    <div id="left" class="animated bounceInLeft">
                        <a href="#" class="pickoption">
                        <div class="view view-first">
                            <img src="{{asset('img/models/' . $images->first()->filename) }}" alt="" width="600" class="img-responsive">
                            <div class="mask">
                                <h2>Rank: {{ $images->first()->rank }}</h2>
                                <p class="lead">Bio</p>
                                <table class="table bg-inherit text-center">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="font120">Won: {{ $images->first()->wins }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="font120">Lost: {{ $images->first()->losses }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="font120">Score: {{ $images->first()->score }}</span></td>
                                        </tr>
                                        
                                </table>
                            </div>
                         </div>
                     </div>
                  {!! Form::close() !!}
                </div>
 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  {!! Form::open(['method' => 'PATCH', 'action' => ['GameController@update', $images->last()->id], 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="winner" id="{{ $images->last()->id }}" value="{{ $images->last()->id }}"></input>
                        <input type="hidden" class="form-control" name="loser" id="{{ $images->first()->id }}" value="{{ $images->first()->id }}"></input>
                    </div>
                    <div id="right" class="animated bounceInRight">
                        <a href="#" class="pickoption">
                        <div class="view view-first">
                            <img src="{{asset('img/models/' . $images->last()->filename) }}" alt="" width="600" class="img-responsive">
                            <div class="mask">
                                <h2>Rank: {{ $images->first()->rank }}</h2>
                                <p class="lead">Bio</p>
                                <table class="table bg-inherit text-center">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="font120">Won: {{ $images->last()->wins }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="font120">Lost: {{ $images->last()->losses }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="font120">Score: {{ $images->last()->score }}</span></td>
                                        </tr>
                                        
                                </table>
                        </div>
                    </div>
                </div>
                  {!! Form::close() !!}
                </div>
            
              @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if(count($top6))
                <ul class="list-inline">
                    @foreach($top6 as $image)
                    <li class="col-lg-2">
                        <p><strong>Rank: {{ $image->rank }}</strong></p>
                        <img src="{{ asset('img/models/' .$image->filename) }}" alt="" width="150" class="img-responsive">
                            <ul class="list-inline list-unstyled margin-top-10 small">
                                <li><strong>Won: <span class="text-success">{{ $image->wins }}</span></strong></li>
                                <li><strong>Lost: <span class="text-success">{{ $image->losses }}</span></strong></li>
                                <li><strong>Score: <span class="text-success">{{ $image->score }}</span></strong></li>
                            </ul>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>


@stop