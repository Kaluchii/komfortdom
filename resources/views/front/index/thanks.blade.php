<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="" type="image/gif">
        <title>Спасибо! Мы в скором времени позвоним вам</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="refresh" content="3; URL='/'" />
        @include('front.styles')
        @yield('styles')
        {!! $scripts->before_head_close_field !!}
    </head>

    <body>
        {!! $scripts->after_open_field !!}


        <section class="thanks">
            <div class="thanks__thanks-message">
                <h4 class="thanks__title">Спасибо!</h4>
                <p class="thanks__sub-title">Мы очень скоро свяжемся с вами.</p>
            </div>
        </section>


        @include('front.scripts')
        @yield('scripts')

        {!! $scripts->before_close_field !!}
    </body>
</html>