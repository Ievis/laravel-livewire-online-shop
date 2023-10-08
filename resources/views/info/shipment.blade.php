@extends('app')

@section('shipment')
    <div class="mx-auto w-2/3 mt-8 space-y-3 max-w-6xl mb-4">
        <h1 class="text-green-200 font-semibold md:font-bold border-b border-b-green-900">ОПЛАТА</h1>

        <p class="text-green-200 text-sm md:text-base">
            Оплатить покупку в нашем интернет-магазине вы можете с помощью банковской карты через систему Юкасса.
            К оплате принимаются карты VISA, MasterCard, МИР.
        </p>

        <p class="text-green-200 text-sm md:text-base">
            На странице для ввода данных банковской карты потребуется ввести номер карты, имя владельца карты, срок
            действия карты, трёхзначный код безопасности (CVV2 для VISA, CVC2 для MasterCard, Код Дополнительной
            Идентификации для МИР). Все необходимые данные пропечатаны на самой карте. Трёхзначный код безопасности —
            это три цифры, находящиеся на обратной стороне карты.
        </p class="text-green-200 text-sm md:text-base">

        <p class="text-green-200 text-sm md:text-base">
            Далее вы будете перенаправлены на страницу Вашего банка для ввода кода безопасности, который придет вам по
            СМС. Если код безопасности не пришел, следует обратиться в банк, который выдал вам карту.
        </p>

        <p class="text-green-200 text-sm md:text-base">
            Предоставляемая вами персональная информация (адрес, телефон, e-mail, номер банковской карты) является
            конфиденциальной и не подлежит разглашению. Данные вашей кредитной карты передаются только в зашифрованном
            виде и не сохраняются на нашем web-сервере.
        </p>

        <ul class="text-green-200 text-sm md:text-base">
            <li>
                Причины отказа в совершении платежа:
            </li>
            <li>
                - банковская карта не предназначена для совершения онлайн-платежей, о чем можно узнать, обратившись в
                банк, выдавший вам карту;
            </li>
            <li>
                - на банковской карте недостаточно средств для оплаты;
            </li>
            <li>
                - данные банковской карты введены неверно;
            </li>
            <li>
                - истек срок действия банковской карты. Срок действия карты, как правило, указан на лицевой стороне
                карты
                (это месяц и год, до которого действительна карта).
            </li>
        </ul>

        <p class="text-green-200 text-sm md:text-base">
            По вопросам оплаты с помощью банковской карты и другим вопросам, связанным с работой сайта, вы можете
            обращаться по телефону:
            <div class="text-green-200 text-sm md:text-base">
            +7(902)-055-48-10
        </div>
        </p>

        <h1 class="text-green-200 font-semibold md:font-bold border-b border-b-green-900">ДОСТАВКА</h1>

        <p class="text-green-200 text-sm md:text-base">
            Доставка осуществляется после 100% оплаты на сайте.
        </p>

        <p class="text-green-200 text-sm md:text-base">
            Отправка происходит в течение 3-4 рабочих дней с момента оформления заказа. После оплаты заказа вам придет
            письмо с дальнейшими инструкциями.
        </p>

        <ul class="text-green-200 text-sm md:text-base">
            <li>
                Способы доставки:
            </li>
            <li>
                - Почтой России: 299 руб.
            </li>
            <li>
                - Самовывоз (Владивосток): 0 руб.
            </li>
        </ul>

    </div>
@endsection