@extends('master.common')

@push('style')

@endpush

@section('content')

<div id="content-wrapper-parent">
    <div id="content-wrapper">       
        <!-- Content -->
        <div id="content" class="clearfix">                
            <div id="breadcrumb" class="breadcrumb">
                <div itemprop="breadcrumb" class="container">
                    <div class="row">
                        <div class="col-md-24">
                            <a href="{{ route('welcome') }}" class="homepage-link" title="Back to the frontpage">Home</a>
                            <span>/</span>
                            <span class="page-title">Order now</span>
                        </div>
                    </div>
                </div>
            </div>                
            <section class="content">        
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <hr>
                            @if(Session::has('message'))
                            <div class="alert {{ Session::get('class') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            {!! Form::open(['route' => 'order.now']) !!}
                            
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name', 'Name') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email', 'Email address') !!}
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>

                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    {!! Form::label('mobile', 'Mobile') !!}
                                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                </div>

                                

                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    {!! Form::label('message', 'Address') !!}
                                    {!! Form::textarea('message', null, ['class' => 'form-control','rows'=>'5']) !!}
                                    <small class="text-danger">{{ $errors->first('message') }}</small>
                                </div>

                                <div class="btn-group pull-right">
                                    {{-- {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!} --}}
                                    {!! Form::submit("Order Now", ['class' => 'btn btn-success']) !!}
                                </div>
                            
                            {!! Form::close() !!}

                             
                        </div>
                    </div>
                </div>
            </section>        
        </div>
    </div>
</div>

@stop


@push('script')

@endpush