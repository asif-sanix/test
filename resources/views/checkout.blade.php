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
                            <span class="page-title">Checkout</span>
                        </div>
                    </div>
                </div>
            </div>                
            <section class="content">        
                <div class="container">
                    <div class="row">
                        <hr>
                        <div class="col-md-16">
                            {!! Form::open(['route' => 'checkout']) !!}
                        
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

                                <div class="form-group{{ $errors->has('aadhar') ? ' has-error' : '' }}">
                                    {!! Form::label('aadhar', 'Aadhar No.') !!}
                                    {!! Form::text('aadhar', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('aadhar') }}</small>
                                </div>


                                <div class="form-group">
                                    <label>Amount</label>
                                    <select class="form-control" name="amount">
                                        <option value="">Select Amount</option>
                                        <option value="10000">10000</option>
                                        <option value="25000">25000</option>
                                        <option value="50000">50000</option>
                                        <option value="100000">100000</option>
                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    {!! Form::label('address', 'Address') !!}
                                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('address') }}</small>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <label><input type="checkbox" name="policy"> Click here to accept the tearms and condition.</label>
                                    
                                </div>

                                <div class="btn-group">

                                    {{-- {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!} --}}
                                    {!! Form::submit("Checkout", ['class' => 'btn btn-info']) !!}
                                </div>
                            
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-8">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sn.</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Sub total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse(ShoppingCart::all() as $cp)
                                    <tr>
                                        <td>k</td>
                                        <td>{{ $cp->name }}</td>
                                        <td>{{ $cp->price }}</td>
                                        <td>{{ $cp->qty }}</td>
                                        <td>{{ number_format($cp->price*$cp->qty,2) }}</td>
                                    </tr>
                                    @empty

                                    @endforelse
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td><i class="fa fa-inr"></i> {{ number_format(ShoppingCart::total(),2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
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