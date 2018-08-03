<div class="white-popup mfp-with-anim mfp-hide form-id" id="call">
    <div class="white-popup__wrap">
        <div class="white-popup__top">
            <div class="white-popup__logo-wrap">
                <img src="/img/dark_logo.png" alt="Жилой комплекс Центральный" class="white-popup__logo">
            </div>
        </div>
        <div class="white-popup__main-con-wrap">
            <h4 class="white-popup__title">МЫ С РАДОСТЬЮ<br> ВАМ ПЕРЕЗВОНИМ</h4>
            <p class="white-popup__sub-title">Оставьте ваши контакты, и&nbsp;наши менеджеры
                ответят на все ваши вопросы.</p>
            <div class="white-popup__form feedback-form">
                {{--Передача Названия формы--}}
                <input type="hidden" name="form" class="form-input" value="call">

                <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--name"><span class="feedbacks-input__label-text">Имя</span></label>
                        <input type="text" name="client_name" required class="form-row__input form-input feedbacks-input__input">
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip form-row__tooltip--border">Как к вам обращаться</p></div>
                    </div>
                </div>

                <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--tel"><span class="feedbacks-input__label-text">+7</span></label>
                        <input type="tel" class="form-row__input form-input feedbacks-input__input" maxlength="25" data-mask="(000) 000-00-00" name="phone">
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                    </div>
                </div>

                <div class="feedback-form__row form-row feedback-form__row--center-flag">
                    <input type="submit" value="Перезвонить мне" class="form-row__send-form form-row__send-form--popup send-form">
                </div>
            </div>
            <div class="white-popup__thanks-message">
                <h4 class="white-popup__title">Спасибо!</h4>
                <p class="white-popup__sub-title">Мы очень скоро свяжемся с вами.</p>
            </div>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close mfp-close--visible">×</button>
    </div>
</div>