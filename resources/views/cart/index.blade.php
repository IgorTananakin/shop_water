@extends('layout')

@section('title', 'Cart')


@section('content')

<script>
        // $(document).ready(function () {
        //     $('.cart_button').click(function (event) {
        //         event.preventDefault()
        //         addToCart()
        //     })
        // })
        // function addToCart() {
        //     let id = $('.details_name').data('id')
        //     let qty = parseInt($('#quantity_input').val())
        //     let total_qty = parseInt($('.cart-qty').text())
        //     total_qty += qty
        //     $('.cart-qty').text(total_qty)
        //     $.ajax({
        //         url: "{{route('addToCart')}}",
        //         type: "POST",
        //         data: {
        //             id: id,
        //             qty: qty,
        //         },
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         success: (data) => {
        //             console.log(data)
        //         },
        //         error: (data) => {
        //             console.log(data)
        //         }
        //     });
        // }
    </script>
<table class="table table-hover table-bordered">
                <thead>
                    <tr>
                       
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Сумма</th>
                        
                    </tr>
                </thead>
                <tbody id="cart">
                    <tr>
                        <td >
                            <div class="cart_item_name"><a href="#">Smart Phone Deluxe Edition</a></div>
                        </td>
                        <td >
                        <div class="cart_item_price">$790.90</div>
                        </td>
                        <td >
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix d-flex flex-row">
                                        <span></span>
                                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td >
                            <div class="cart_item_total">$790.90</div>
                        </td>

                    </tr>
                </tbody>
</table>
<div class="button clear_cart_button"><a href="#">Очистить корзину</a></div>

    

    <!-- Cart Info -->

    
@endsection
