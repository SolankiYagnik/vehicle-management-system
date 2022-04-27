<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('customer.layouts.head')
        @yield('css')
    </head>

    <body class="wp-automobile">
        <div class="wrapper"> 
            @include('customer.layouts.header-content')
            
            <div class="content-wrapper">
                @include('customer.layouts.main-content')

                @yield('content')

            </div>  

            @include('customer.layouts.footer-content')
            
        </div>
    </body>
    @include('customer.layouts.footer')
</html>