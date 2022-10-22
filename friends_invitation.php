<?php include "header.php" ?>
    <header class="header_invite position-fixed w-100 ">
        <div class="px-3 py-3  ">

            <img class="chevron-left" src="img/left_back.png" alt="" style="float: left;">
            <div class="text-center text-white fw-bold">
                <span>Promotion reward</span>
            </div>
        </div>
    </header>
    <div class="header_top_invitation  w-100 ">
    </div>
    <div class="vh_top "></div>
    <section class="section_invitation">
        <div class="container-fluid px-0 text-center">
            <div class="qr_box bg-white rounded-3 px-3 pt-3 pb-5">
                <div id="qr2">
                </div>

                <div class="m-auto w-50 text-center pb-4">
                    <button class="position-absolute text-primary  text-white py-2   rounded-pill fw-bold fs-5">
                        Save the QR code </button>
                </div>

            </div>
            <div class="qr_code_box pt-4">
                <strong>
                    <h1 class="fs-5"> Invitation code: 0j1d9d </h1>
                </strong>
                <button class="btn fs-3 rounded-pill text-white fw-bold">copy</button>
            </div>
            <div class="qr_link_box pt-4">
                <strong class="d-block">
                    <h1 class="fs-5 m-0"> Invitation link: 0j1d9d </h1>
                </strong>
                <strong class="">
                    <h1 class="fs-5"> http .com.gmail.</h1>
                </strong>
                <button class="btn fs-3  rounded-pill text-white fw-bold ">copy</button>
            </div>
        </div>
    </section>
    <div class="vh_top mt-5"></div>

<script>

    $(document).ready(function () {

        $("#qr2").ClassyQR({
            create: true,
            type: 'text',
            text: 'This is the text to embed',


            'url': 'https://www.jqueryscript.net', // users will be redirected tothis URL when scanning the QR-Code

            'width': 300,

            'height': 300,

            'qrsize': 100

        });
    });
</script>

<script>
    /*!
 * jQuery ClassyQR library
 * www.class.pm
 *
 * Written by Marius Stanciu - Sergiu <marius@class.pm>
 * Licensed under the MIT license www.class.pm/LICENSE-MIT
 * Version 1.2.0
 *
 */
    (function ($) {
        $.fn.extend({
            ClassyQR: function (x) {
                var c = {
                    baseUrl: 'http://chart.apis.google.com/chart?cht=qr&chs=',
                    size: 230,
                    create: false,
                    number: null,
                    email: null,
                    subject: null,
                    latitude: null,
                    longitude: null,
                    address: null,
                    name: null,
                    url: null,
                    alt: 'QR code',
                    note: null,
                    encoding: 'UTF-8',
                    type: 'text',
                    text: 'Welcome to ClassPM'
                };
                var b = $.extend(c, x);
                return this.each(function () {
                    var d = $(this);
                    var url = b.baseUrl + b.size + 'x' + b.size + '&choe=' + b.encoding + '&chl=';
                    switch (b.type) {
                        case 'contact':
                            url = url + 'MECARD:N:' + b.name + ';TEL:' + b.number + ';URL:' + b.url + ';EMAIL:' + b.email + ';ADR:' + b.address + ';NOTE:' + b.note + ';';
                            break;
                        case 'wifi':
                            url = url + 'WIFI:S:' + b.ssid + ';T:' + b.auth + ';P:' + b.password + ';';
                            break;
                        case 'location':
                            url = url + 'geo:' + b.latitude + ',' + b.longitude;
                            break;
                        case 'call':
                            url = url + 'tel:' + b.number;
                            break;
                        case 'email':
                            url = url + 'mailto:' + b.email + ':' + b.subject + ':' + b.text;
                            break;
                        case 'sms':
                            url = url + 'smsto:' + b.number + ':' + b.text;
                            break;
                        case 'url':
                            url = url + b.url;
                            break;
                        case 'text':
                        default:
                            url = url + b.text;
                            break;
                    }
                    if (b.create) {
                        d.append('<img src="' + url + '" alt="' + b.alt + '" />');
                    }
                    else {
                        d.attr('src', url);
                    }
                });
            }
        });
    })(jQuery);
</script>