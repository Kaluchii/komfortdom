@extends('back.layout')
@section('content')

@include('back.content-top', ['title' => 'Виды квартир'])

<div class="box box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Поля для редактирования</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$flats->block_title_field}}"
                   data-name="block_title"
                   data-type="string"
                   data-block="flats"
                   data-id="0">
        </div>
        <div class="form-group">
            <label>Текст под заголовком</label>
            <textarea class="form-control text"
                      data-name="text"
                      data-type="text"
                      data-block="flats"
                      data-id="0">{{$flats->text_field}}</textarea>
        </div>
        <div class="form-group">
            <label>Планы этажей</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">

                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <p style="font-size: 120px;"><i class="fa fa-file-pdf-o "></i></p>
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text"
                                               class="form-control title"
                                               data-block="flats"
                                               data-name="title"
                                               data-type="file"
                                               value="{{$flats->layouts_field->title}}"
                                               data-id="0"
                                               placeholder="Имя файла при скачивании">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group-btn">
                <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                <div tabindex="500" class="btn btn-primary btn-file">
                    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                    <span class="hidden-xs">Выбрать …</span>
                    <input type="file" class="form-control files"
                           data-block="flats"
                           data-name="layouts"
                           data-type="file"
                           data-id="0">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box table-widget">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Этажи
                </h3>
                <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                <div class="col-xs-5 pull-right">
                    <input type="text" class="form-control add-item"
                           data-name="dom_flat_name"
                           data-block="dom_flat"
                            placeholder="Название элемента"
                    >
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                       aria-describedby="example2_info"
                       data-block="flats">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-sort="ascending"
                            aria-label="">Название</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Дата</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Статус публикации</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                            colspan="1" aria-label="">Порядок выдачи</th>
                        <th  tabindex="0"  rowspan="1"
                             colspan="1" aria-label="">Удаление</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($flats->dom_flat_group as $item)
                        @include('back.groups.dom_flat.dom_flat_row',['item' => $item])
                    @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>

@endsection