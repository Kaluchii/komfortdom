@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'О комплексе'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$about->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="about"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Текст рядом с заголовком</label>
                <textarea class="form-control text"
                          data-name="text" data-reg="true"
                          data-type="text"
                          data-block="about"
                          data-id="0">{{$about->text_field}}</textarea>
            </div>
        </div>
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> Список </h3>
        </div>
        <div class="box-body">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 1-ый блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title1_field}}"
                               data-name="title1"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text1" data-reg="true"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text1_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Изображение (jpg, png 400×340 пикселей)</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$about->image1_field->link}}?{{$about->image1_field->cache_index}}" class="kv-preview-data file-preview-image"
                                                     title="{{$about->image1_field->alt}}" alt="{{$about->image1_field->alt}}">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-footer-caption"
                                                     title="{{$about->image1_field->alt}}">{{$about->image1_field->name_field}}
                                                    <br> </div>
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" data-block="about"
                                                           data-type="images" data-id="0" data-name="alt"
                                                           value="{{$about->image1_field->alt}}">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                        class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                        class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать изображение …</span>
                                <input type="file" class="form-control file"
                                       data-block="about"
                                       data-name="image1"
                                       data-type="image"
                                       data-id="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 2-ой блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title2_field}}"
                               data-name="title2"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text2" data-reg="true"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text2_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Изображение (jpg, png 400×340 пикселей)</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$about->image2_field->link}}?{{$about->image2_field->cache_index}}" class="kv-preview-data file-preview-image"
                                                     title="{{$about->image2_field->alt}}" alt="{{$about->image2_field->alt}}">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-footer-caption"
                                                     title="{{$about->image2_field->alt}}">{{$about->image2_field->name_field}}
                                                    <br> </div>
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" data-block="about"
                                                           data-type="images" data-id="0" data-name="alt"
                                                           value="{{$about->image2_field->alt}}">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                        class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                        class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать изображение …</span>
                                <input type="file" class="form-control file"
                                       data-block="about"
                                       data-name="image2"
                                       data-type="image"
                                       data-id="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 3-ий блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title3_field}}"
                               data-name="title3"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text3" data-reg="true"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text3_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Изображение (jpg, png 400×340 пикселей)</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$about->image3_field->link}}?{{$about->image3_field->cache_index}}" class="kv-preview-data file-preview-image"
                                                     title="{{$about->image3_field->alt}}" alt="{{$about->image3_field->alt}}">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-footer-caption"
                                                     title="{{$about->image3_field->alt}}">{{$about->image3_field->name_field}}
                                                    <br> </div>
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" data-block="about"
                                                           data-type="images" data-id="0" data-name="alt"
                                                           value="{{$about->image3_field->alt}}">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                        class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                        class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать изображение …</span>
                                <input type="file" class="form-control file"
                                       data-block="about"
                                       data-name="image3"
                                       data-type="image"
                                       data-id="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection