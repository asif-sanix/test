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
                            <span class="page-title">Your Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>        
            
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div id="page-header" class="col-md-24">
                            <h1 id="page-title">Shopping Cart</h1>
                        </div>
                        <div id="col-main" class="col-md-24 cart-page content">
                            <form action="http://demo.designshopify.com/cart" method="post" id="cartform" class="clearfix">
                                <div class="row table-cart">
                                    <div class="wrap-table">
                                        <table class="cart-items haft-border">
                                        <colgroup>
                                        <col class="checkout-image">
                                        <col class="checkout-info">
                                        <col class="checkout-price">
                                        <col class="checkout-quantity">
                                        <col class="checkout-totals">
                                        </colgroup>
                                        <thead>
                                        <tr class="top-labels">
                                            <th>
                                                Items
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Qty
                                            </th>
                                            <th>
                                                SubTotal
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse(ShoppingCart::all() as $cp)
                                        <tr class="item donec-condime-fermentum">
                                            <td class="title text-left">
                                                <ul class="list-inline">
                                                    <li class="image">
                                                    <a href="#">
                                                    <img src="{{ $cp->image }}" alt="Donec condime fermentum" height="70">
                                                    </a>
                                                    </li>
                                                    <li class="link">
                                                    <a href="#">
                                                    <span class="title-5">{{ $cp->name }}</span>
                                                    </a>
                                                    <br>
                                                    {{-- <span class="variant_title">black / small</span> --}}
                                                    <br>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="title-1">
                                                <i class="fa fa-inr"></i> {{ $cp->price }}
                                            </td>
                                            <td>
                                                <input class="form-control input-1 replace" maxlength="5" size="5" id="updates_3947646083" name="qty" value="{{ $cp->qty }}">
                                            </td>
                                            <td class="total title-1">
                                                <i class="fa fa-inr"></i> {{ number_format($cp->price*$cp->qty,2) }}
                                            </td>
                                            <td class="action">
                                                <button type="button" onclick="window.location='{{ route('cart.item.remove',$cp->__raw_id) }}'"><i class="fa fa-times"></i>Remove</button>
                                            </td>
                                        </tr>
                                        @empty

                                        @endforelse
                                        </tbody>
                                        <tfoot>
                                        <tr class="bottom-summary">
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td class="update-quantities">
                                                <button type="submit" id="update-cart" class="btn btn-2" name="update">Update Qty</button>
                                            </td>
                                            <td class="subtotal title-1">
                                               <i class="fa fa-inr"></i> {{ number_format(ShoppingCart::total(),2) }}
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div id="checkout-proceed" class="last1 text-right">
                                        <a href="{{ route('checkout') }}" class="btn btn-sm btn-default">Process to checkout</a>
                                    </div>
                                </div>
                                
                            </form>
                           
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