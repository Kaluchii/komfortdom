@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => ' Слайдер'])
    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля</h3>
        </div>

        <div class="box-body">

            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$gallery->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="gallery"
                       data-id="0">
            </div>

        </div>
    </div>
    <div class="box box-info group-item-widget"
         data-block="slider">
        <div class="box-header with-border">
            <h3 class="box-title"> Изображения в слайдере (jpg, png 980×560 пикселей) </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($gallery->slider_group as $item)
                    @include('back.groups.slider.slider_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection