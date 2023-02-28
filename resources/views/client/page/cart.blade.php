@extends('client.share.master')
@section('content')
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(/assets_client/images/background/page-title.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Cart Page</h1>
            <ul class="bread-crumb clearfix">
                <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                <li>Cart Page</li>
            </ul>
        </div>
    </div>
</section>
<section class="cart-section cart-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>&nbsp;</th>
                                <th class="prod-column">Product Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="prod-column">
                                    <div class="column-box">
                                        <div class="remove-btn">
                                            <i class="flaticon-close"></i>
                                        </div>
                                        <div class="prod-thumb">
                                            <a href="#"><img src="/assets_client/images/resource/shop/cart-1.jpg" alt=""></a>
                                        </div>
                                        <div class="prod-title">
                                            Black Boys Shirt
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$50.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="quantity-spinner form-control" type="text" value="1" name="quantity" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button><button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button></span></div>
                                    </div>
                                </td>
                                <td class="sub-total">$50.00</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="prod-column">
                                    <div class="column-box">
                                        <div class="remove-btn">
                                            <i class="flaticon-close"></i>
                                        </div>
                                        <div class="prod-thumb">
                                            <a href="#"><img src="/assets_client/images/resource/shop/cart-2.jpg" alt=""></a>
                                        </div>
                                        <div class="prod-title">
                                            Girls Print Tops
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$50.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="quantity-spinner form-control" type="text" value="1" name="quantity" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button><button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button></span></div>
                                    </div>
                                </td>
                                <td class="sub-total">$50.00</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="prod-column">
                                    <div class="column-box">
                                        <div class="remove-btn">
                                            <i class="flaticon-close"></i>
                                        </div>
                                        <div class="prod-thumb">
                                            <a href="#"><img src="/assets_client/images/resource/shop/cart-3.jpg" alt=""></a>
                                        </div>
                                        <div class="prod-title">
                                            Baby Backpacks
                                        </div>
                                    </div>
                                </td>
                                <td class="price">$70.00</td>
                                <td class="qty">
                                    <div class="item-quantity">
                                        <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="quantity-spinner form-control" type="text" value="1" name="quantity" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button><button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button></span></div>
                                    </div>
                                </td>
                                <td class="sub-total">$70.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="othre-content clearfix">
            <div class="coupon-box pull-left clearfix">
                <input type="text" placeholder="Enter coupon code...">
                <button type="submit" class="theme-btn-two">Apply coupon<i class="flaticon-right-1"></i></button>
            </div>
            <div class="update-btn pull-right">
                <button type="submit" class="theme-btn-one">Update Cart<i class="flaticon-right-1"></i></button>
            </div>
        </div>
        <div class="cart-total">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                    <div class="total-cart-box clearfix">
                        <h4>Cart Totals</h4>
                        <ul class="list clearfix">
                            <li>Subtotal:<span>$150</span></li>
                            <li>Order Total:<span>$150</span></li>
                        </ul>
                        <a href="cart.html" class="theme-btn-two">Proceed to Checkout<i class="flaticon-right-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection
