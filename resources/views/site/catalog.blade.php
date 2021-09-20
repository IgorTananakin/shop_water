@extends('layout')
@section('content')




    <!-- Home -->


<div class="main_content d-flex flex-row justify-content-start flex-wrap">
@foreach ($data as $el)

    <div class="cart_product ">
        <h3 class="name_product">{{ $el->name_product }}</h3>
        <img class="img_cart" src="{{ asset(url($el->img)) }} " alt="{{ $el->img }}">

        
        <p class="price">Цена {{ $el->price }}руб</p>
       <form action="{{ route('basket.add', ['id' => $el->id]) }}"
          method="post" class="form-inline">
        @csrf
        <label for="input-quantity">Количество</label>
        <input type="text" name="quantity" id="input-quantity" value="1"
               class="form-control mb-1">
        <button type="submit" class="btn btn-success">Добавить в корзину</button>
    </form>
            
       
       
    </div>


@endforeach
</div>
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script>
   




    
        // $(document).ready(function () {
            
        //     $('.cart_button').click(function (event) {
               
        //         event.preventDefault()
        //         addToCart()
        //     });
        // });
        // function addToCart() {
        
        //     $.ajax({
        //         url: "{{ route('addToCart') }}",
        //         type: "GET",
        //         data: {
        //             id:"sfvdsvdsvsdvsdvsddv fvsdv"
        //         },
        //         success:function(data){
        //             console.log(data)
        //         },
        //         error: function (data) {

        //             alert('Ошибка');

        //         }
        //     });


        //     





            
        }
    </script>
@endsection