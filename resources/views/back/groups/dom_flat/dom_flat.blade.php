@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Квартиры'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Название квартир</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->dom_flat_name_field}}"
                       data-name="dom_flat_name"
                       data-type="string"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Название квартиры в единственном числе</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->singularly_field}}"
                       data-name="singularly"
                       data-type="string"
                       data-block="dom_flat"
                       data-id="{{$item->id_field}}">
            </div>
        </div>

    </div>

    <div class="box box-info group-item-widget"
         data-block="layout">
        <div class="box-header with-border">
            <h3 class="box-title"> Список квартир </h3>
            <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($item->layout_group as $layout_item)
                    @include('back.groups.layout.layout_box', ['item' => $layout_item])
                @endforeach
            </div>
        </div>
    </div>

@endsection