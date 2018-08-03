@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Цены'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Курс доллара на сегодня</label>
                <input class="form-control float"
                       type="text" placeholder=""
                       value="{{$course->dollar_field}}"
                       data-name="dollar"
                       data-type="float"
                       data-block="prices"
                       data-id="0"
                       disabled>
            </div>
        </div>
    </div>
@endsection