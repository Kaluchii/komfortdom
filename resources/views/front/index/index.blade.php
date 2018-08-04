@extends('front.layout')
@section('content')
@include('front.index.objects')
@yield('objects')
    <section class="title-block" id="title">
        <header class="title-block__header header">
            <div class="header__logo-wrap">
                <img src="/img/logo_white.png" alt="Жилой комплекс Престиж" class="header__logo">
            </div>
            <nav class="header__nav-wrap js_nav_wrap">
                <ul class="header__nav-list">
                    <li class="header__nav-item"><a href="#about" class="js_goto_anchor header__nav-link"><span class="header__link-text">О комплексе</span></a></li>
                    <li class="header__nav-item"><a href="#gallery" class="js_goto_anchor header__nav-link"><span class="header__link-text">Галерея</span></a></li>
                    <li class="header__nav-item"><a href="#flats" class="js_goto_anchor header__nav-link"><span class="header__link-text">Планировки</span></a></li>
                    <li class="header__nav-item"><a href="#contacts" class="js_goto_anchor header__nav-link"><span class="header__link-text">Контакты</span></a></li>
                </ul>
            </nav>
            <div class="header__feedback-wrap">
                <p class="header__phone-number"><a href="tel:{{ $contacts->phone_field }}" class="header__phone-number-link js_top_phone">{{ $contacts->phone_field }}</a></p>
                <a href="#call" class="header__order-call button js_call_popup_open"><span class="header__btn-text">ЗАКАЗАТЬ ЗВОНОК</span></a>
            </div>
            <div class="header__menu-button menu-button js_menu">
                <div class="menu-button__rows-wrap">
                    <span class="menu-button__top"></span>
                    <span class="menu-button__middle"></span>
                    <span class="menu-button__bottom"></span>
                </div>
            </div>
        </header>
        <div class="title-block__text-wrap">
            <div class="title-block__col1">
                <h1 class="title-block__title">{{ $main_block->block_title_field }} <div class="title-block__title-from">ОТ ЗАСТРОЙЩИКА</div></h1>
                <p class="title-block__price-wrap">
                    <span class="title-block__price">{{ $main_block->price_field }}</span>
                    <span class="title-block__t-m"><span class="title-block__t">f</span><span class="title-block__m">м<sup>2</sup></span></span>
                </p>
                <p class="title-block__address"><span class="title-block__address-text">{{ $main_block->address_field }}</span></p>
            </div>
            <div class="title-block__col2">
                <p class="title-block__installment">Сдан в эксплуатацию<br><span class="title-block__installment-big">ДЕКАБРЬ 2016 ГОДА</span></p>
                <div class="title-block__popup title-popup">
                    <div class="title-popup__wrapper">
                        <p class="title-popup__parking">Парковочные<br>МЕСТА <span class="title-popup__parking-profit">по выгодным ценам</span></p>
                        <p class="title-popup__interest-text">ЗАИНТЕРЕСОВАЛИСЬ?</p>
                        <div class="title-popup__input-rows form-id" id="popup_call">
                            <input type="hidden" name="form" class="form-input" value="call">
                            <div class="title-popup__row form-row">
                                <div class="form-row__validation-wrap popup-input">
                                    <label class="popup-input__label popup-input__label--name" for="popup-client-name"><span class="popup-input__label-text">Имя</span></label>
                                    <input type="text" name="client_name" required id="popup-client-name" class="form-row__input form-input popup-input__input">
                                    <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Как к вам обращаться</p></div>
                                </div>
                            </div>

                            <div class="title-popup__row form-row">
                                <div class="form-row__validation-wrap popup-input">
                                    <input type="tel" data-require="true" id="popup-phone" class="form-row__input form-input popup-input__input popup-input__input--tel" maxlength="25" data-mask="(000) 000-00-00" name="phone">
                                    <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                                    <label class="popup-input__label popup-input__label--tel" for="popup-phone"><span class="popup-input__label-text">+7</span></label>
                                </div>
                            </div>
                            <div class="title-popup__row title-popup__row--btn">
                                <input type="submit" value="УЗНАТЬ ПОДРОБНЕЕ" class="title-popup__btn form-row__send-form button-tr send-form">
                            </div>
                        </div>
                        <div class="title-popup__close js_popup_close"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__wrapper">
            <div class="about__text-wrap">
                <h2 class="about__title" id="about">{{ $about->block_title_field }}</h2>
                <p class="about__text">{!! $about->text_field !!}</p>
            </div>
            <div class="about__in-detail in-detail">
                <div class="in-detail__item detail-item">
                    <div class="detail-item__img-wrap"><img src="{{$about->image1->link_field}}?{{$about->image1->cache_index}}" alt="{{$about->image1->alt_field}}" height="340" width="400" class="detail-item__img"></div>
                    <div class="detail-item__text-wrap">
                        <h3 class="detail-item__title">{!! $about->title1_field !!}</h3>
                        <p class="detail-item__text">{!! $about->text1_field !!}</p>
                    </div>
                </div>
                <div class="in-detail__item detail-item detail-item--right-align">
                    <div class="detail-item__text-wrap">
                        <h3 class="detail-item__title">{!! $about->title2_field !!}</h3>
                        <p class="detail-item__text">{!! $about->text2_field !!}</p>
                    </div>
                    <div class="detail-item__img-wrap"><img src="{{$about->image2->link_field}}?{{$about->image2->cache_index}}" alt="{{$about->image2->alt_field}}" height="340" width="400" class="detail-item__img"></div>
                </div>
                <div class="in-detail__item detail-item">
                    <div class="detail-item__img-wrap"><img src="{{$about->image3->link_field}}?{{$about->image3->cache_index}}" alt="{{$about->image3->alt_field}}" height="340" width="400" class="detail-item__img"></div>
                    <div class="detail-item__text-wrap">
                        <h3 class="detail-item__title">{!! $about->title3_field !!}</h3>
                        <p class="detail-item__text">{!! $about->text3_field !!}</p>
                        <div class="detail-item__places places">
                            <div class="places__item">
                                <div class="places__img-wrap">
                                    <img src="/img/to_place_1.png" alt="" class="places__img">
                                </div>
                                <div class="places__text-wrap">
                                    <p class="places__time">1 мин.</p>
                                    <div class="places__name">Бульварная зона отдыха</div>
                                </div>
                            </div>
                            <div class="places__item">
                                <div class="places__img-wrap">
                                    <img src="/img/to_place_2.png" alt="" class="places__img">
                                </div>
                                <div class="places__text-wrap">
                                    <p class="places__time">10 мин.</p>
                                    <div class="places__name">ТРЦ Mega Alma-Ata</div>
                                </div>
                            </div>
                            <div class="places__item">
                                <div class="places__img-wrap">
                                    <img src="/img/to_place_3.png" alt="" class="places__img">
                                </div>
                                <div class="places__text-wrap">
                                    <p class="places__time">10 мин.</p>
                                    <div class="places__name">Школа-гимназия №38</div>
                                </div>
                            </div>
                            <div class="places__item">
                                <div class="places__img-wrap">
                                    <img src="/img/to_place_4.png" alt="" class="places__img">
                                </div>
                                <div class="places__text-wrap">
                                    <p class="places__time">15 мин.</p>
                                    <div class="places__name">Супермаркет Magnum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="gallery__wrapper">
            <h2 class="gallery__title" id="gallery">{{ $gallery->block_title_field }}</h2>
            <div class="gallery__fotorama-wrap">
                <div class="gallery__fotorama js_gallery__fotorama fotorama"  data-auto="false" data-ratio="980/560"
                     data-nav="thumbs" data-allowfullscreen="true"
                     data-thumbmargin="15" data-loop="true"
                     data-thumbwidth="110" data-thumbheight="100" data-transition="crossfade">
                    <?php $slider_arr = [] ?>
                    @foreach($gallery->slider_group as $slide)
                        <a href="{{$slide->slide_field->link}}?{{$slide->slide_field->cache_index}}"></a>
                        <?php $slider_arr[] = $slide->slide_field->link.'?'.$slide->slide_field->cache_index ?>
                    @endforeach
                </div>
            </div>
            <div class="gallery__mobile-gallery mobile-gallery">
                <ul class="mobile-gallery__list">
                    @for($i = 0; $i < 9 && isset($slider_arr[$i]); $i++)
                        <li class="mobile-gallery__item"><img class="mobile-gallery__img js_open_fotorama" data-img="{{$i}}" src="{{ $slider_arr[$i] }}" alt=""></li>
                    @endfor
                </ul>
            </div>
        </div>
    </section>
    <section class="flats">
        <div class="flats__wrapper">
            <div class="flats__top-wrapper">
                <div class="flats__col1">
                    <h2 class="flats__title" id="flats">{{ $flats->block_title_field }}</h2>
                    <p class="flats__text">{{ $flats->text_field }}</p>
                </div>
                <div class="flats__col2 layout-choice">
                    <div class="layout-choice__btns-wrapper">
                        <p class="layout-choice__title">Этаж</p>
                        <ul class="layout-choice__btns-list">
                            @foreach($flats->dom_flat_group as $item)
                                @if($item->show_field == 1)
                                    <li class="layout-choice__btns-item"><button class="layout-choice__button js_rooms_btn" data-id="{{$item->id_field}}">{{$item->dom_flat_name_field}}</button></li>
                                @endif
                            @endforeach
                        </ul>
                        <a href="{{$flats->layouts->link}}" download="{{$flats->layouts->title}}" class="layout-choice__download-plan">Скачать планы этажей</a>
                    </div>
                    <div class="layout-choice__btns-wrapper">
                        <p class="layout-choice__title">Площадь</p>
                        <ul class="layout-choice__btns-list">
                            @foreach($flats->dom_flat_group as $item)
                                @foreach($item->layout_group as $layout_item)
                                    <li class="layout-choice__btns-item"><button class="layout-choice__button js_area_btn layout-choice__button--area flat{{$item->id_field}}" data-id="{{$layout_item->id_field}}">{{str_replace('.', ',', $layout_item->area_field)}} м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flats__layout layout">
                <div class="layout__img-wrapper">
                    <img src="" alt="" class="layout__img js_give_src">
                </div>
                <div class="layout__feedback-info-wrapper">
                    <div class="layout__info">
                        <p class="layout__flat-name"></p>
                        <div class="layout__info-row">
                            <div class="layout__row-item">
                                <p class="layout__info-title">Этаж</p>
                                <p class="layout__info-value js_give_floor"></p>
                            </div>
                            <div class="layout__row-item">
                                <p class="layout__info-title">Площадь</p>
                                <p class="layout__info-value"><span class="layout__info-value-text js_give_area"></span>м<sup class="layout__area-sup">2</sup></p>
                            </div>
                        </div>
                        <div class="layout__info-row">
                            <div class="layout__row-item">
                                <p class="layout__info-title">Стоимость от:</p>
                                <p class="layout__price js_give_price"></p>
                            </div>
                        </div>
                    </div>
                    <div class="layout__feedback layout-feedback">
                        <p class="layout-feedback__title">ПОНРАВИЛАСЬ КВАРТИРА?</p>
                        <p class="layout-feedback__text">Свяжитесь с нами и узнайте подробности</p>
                        <div class="layout-feedback__input-rows form-id" id="layout_call">
                            <input type="hidden" name="form" class="form-input" value="call">
                            <div class="layout-feedback__row form-row">
                                <div class="form-row__validation-wrap layout-feedback-input">
                                    <label class="layout-feedback-input__label layout-feedback-input__label--name" for="layout_name"><span class="layout-feedback-input__label-text">Имя</span></label>
                                    <input type="text" name="client_name" id="layout_name" autocomplete="false" required class="form-row__input form-input layout-feedback-input__input">
                                    <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Как к вам обращаться</p></div>
                                </div>
                            </div>

                            <div class="layout-feedback__row form-row">
                                <div class="form-row__validation-wrap layout-feedback-input">
                                    <input type="tel" data-require="true" id="layout_tel" class="form-row__input form-input layout-feedback-input__input layout-feedback-input__input--tel" maxlength="25" data-mask="(000) 000-00-00" name="phone">
                                    <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                                    <label class="layout-feedback-input__label layout-feedback-input__label--tel" for="layout_tel"><span class="layout-feedback-input__label-text layout-feedback-input__label-text--tel">+7</span></label>
                                </div>
                            </div>
                            <div class="layout-feedback__row layout-feedback__row--btn">
                                <input type="submit" value="УЗНАТЬ ПОДРОБНЕЕ" class="layout-feedback__btn form-row__send-form button-tr button-tr--yellow-br send-form">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="contacts__wrapper">
            <div class="contacts__contact-block">
                <div class="contacts__contact-block-wrapper">
                    <h2 class="contacts__title" id="contacts">{{ $contacts->block_title_field }}</h2>
                    <p class="contacts__address">{!! $contacts->address_field !!}</p>
                    <p class="contacts__phone">{{ $contacts->phone_field }}</p>
                    <p class="contacts__text">{!! $contacts->text_field !!}</p>
                    <div class="contacts__work-time">
                        <div class="contacts__work-time-title">График работы:</div>
                        <div class="contacts__work-time-text">{!! $contacts->work_time_field !!}</div>
                    </div>
                </div>
            </div>
            <div class="contacts__map-wrapper">
                <div class="contacts__map" id="map"></div>
                @include('front.index.map_init')
            </div>
        </div>
    </section>
    <a href="#title" class="to-top js_goto_anchor js-top-btn" title="Перейти наверх страницы" style="display: none">
        <span class="to-top__arrow"></span>
    </a>
    @include('front.index.meta')
@endsection
