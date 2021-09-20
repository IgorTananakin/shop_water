
<!-- * * * * * * Header * * * * * * -->
<div class="header-wrapper">
    <div class="header-panel d-flex flex-row justify-content-between">
        
            <div>
                <i class="fa fa-map-marker"></i> г. Ростов-на-Дону пер. Островского 96/6
            </div>
            <div>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>Звоните с 9.00 - 21.00</span>
            </div> 
            <div>
                <i class="fa fa-phone"></i>
                <a href="tel:87422228888">8(918)-523-10-62</a>
            </div>                      
            <div>
                <a href="tel:87422229999">8(919)-895-10-81</a>
            </div>   
        
    </div>
    <!-- <div class="d-flex"> -->
        
            <div class="d-flex flex-row">
                <h1 class="title-h1" >Вода Ростова</h1>
            </div>

            <div class="table-cell">
                            <div class="top-menu">
                            <h1 class="title-h1" >Вода Ростова</h1>
                                <ul class="">
                                    <li class="">
                                        
                                    </li>
                                    <li class="">
                                        <a href="{{ url('/')}}">Каталог</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('company/')}}">Компания</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact/')}}">Контакты</a>
                                    </li>
                                    <li>
                                        @if(isset(Auth::user()->name))
                                        
                                            <a href="{{ url('home/')}}">
                                                {{ Auth::user()->name }}</a>
                                            
                                            
                                                @endif  
                                        @if(!isset(Auth::user()->name))
                                        <a href="{{ url('login/')}}">Войти</a>
                                        @endif
                                    </li>
                                    @if(!isset(Auth::user()->name))
                                    <li>
                                        <a href="{{ url('register/')}}">Регистрация</a>
                                    </li>
                                    @endif
                                    <li class="last">
                                        <a href="#"><i class="fa fa-shopping-basket"></i>Корзина</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            <!-- * * * * * * Top menu * * * * * * -->
                
            
        <!-- </div> -->
    </div>
</div>
<hr class="text-danger">
