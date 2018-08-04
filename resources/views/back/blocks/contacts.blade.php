@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Контакты'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования контактных данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$contacts->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="contacts"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Адрес местоположения</label>
                <textarea class="form-control text textarea--small" data-reg="true"
                          data-name="address"
                          data-type="string"
                          data-block="contacts"
                          data-id="0">{{$contacts->address_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Телефон</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$contacts->phone_field}}"
                       data-name="phone"
                       data-type="string"
                       data-block="contacts"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text"
                          data-name="text"
                          data-type="text"
                          data-block="contacts"
                          data-id="0">{{$contacts->text_field}}</textarea>
            </div>
            <div class="form-group">
                <label>График работы</label>
                <textarea class="form-control text textarea--small" data-reg="true"
                          data-name="work_time"
                          data-type="string"
                          data-block="contacts"
                          data-id="0">{{$contacts->work_time_field}}</textarea>
            </div>
        </div>
    </div>
@endsection