@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Этап строительства'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Название этапа</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->dom_stages_name_field}}"
                       data-name="dom_stages_name"
                       data-type="string"
                       data-block="dom_stages"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text"
                          data-name="text" data-reg="true"
                          data-type="text"
                          data-block="dom_stages"
                          data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
            </div>
        </div>

    </div>

    <div class="box box-info group-item-widget"
         data-block="stage_images">
        <div class="box-header with-border">
            <h3 class="box-title"> Слайды (jpg, png 820×490 пикселей) </h3>
            <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($item->stage_images_group as $stage_images_item)
                    @include('back.groups.stage_images.stage_images_box', ['item' => $stage_images_item])
                @endforeach
            </div>
        </div>
    </div>

@endsection