<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        a {
           text-decoration: none;
           color: #000;
        }
        a:hover {
            color: #000;
        }
        ::-webkit-scrollbar {
          width: 10px;
          height: 10px;
        }
        ::-webkit-scrollbar-track {
          background-color: rgba(0, 0, 0, 0.01);
        }
        ::-webkit-scrollbar-thumb {
          background-color: #dddddd;
        }
    </style>
</head>

<?php
$fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;';

$style = [
    /* Layout ------------------------------ */

    'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F0F0F0;',
    'email-wrapper' => 'width: 100%; margin: 0; padding: 0;',

    /* Masthead ----------------------- */

    'email-masthead' => 'padding: 25px 0; text-align: center;',
    'email-masthead_name' => 'font-size: 22px; font-weight: 300; color: #000; text-decoration: none; text-shadow: 0 1px 0 white;',

    'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 0px solid #EDEFF2; border-bottom: 0px solid #EDEFF2;',
    'email-body_inner' => 'width: 95%; max-width: 800px; margin: 0 auto; padding: 0; background-color: #FFF; border: 1px #E8E8E8 solid; border-top: 5px #DCDCDC solid; border-radius: 5px;',
    'email-body_cell' => 'padding: 20px;',

    'email-footer' => 'width: 95%; max-width: 800px; margin: 0 auto; padding: 0; text-align: center;',
    'email-footer_cell' => 'color: #888; padding: 20px; text-align: center;',
    'email-footer_anchor' => 'color: #888; text-decoration:none;',
    'email-footer_title' => '',
    'email-footer_separator' => 'padding:0 5px;',

    'branding' => 'margin:0px 0px 20px 0px; text-align:center; font-size:10px; color:#888;',
    'branding_anchor' => 'color:#888;',

    /* Body ------------------------------ */

    'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
    'body_sub' => 'width: 100%; margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',

    /* Type ------------------------------ */

    'anchor' => 'color: '. config('site.styles_default_bg_color', '#185f96') .';',
    'header-1' => 'margin-top: 0; color: #000; font-size: 12px; font-weight: normal; text-align: left;',
    'paragraph' => 'margin-top: 0; color: #000; font-size: 12px; line-height: 1.5em;',
    'paragraph-sub' => 'margin-top: 0; color: #000; font-size: 12px; line-height: 1.5em;',
    'paragraph-center' => 'text-align: center;',
    'paragraph-footer' => 'margin-top: 0; margin-bottom: 0; color: #888; font-size: 12px; line-height: 1.5em;',

    /* Buttons ------------------------------ */

    'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: '. config('site.styles_default_bg_color', '#185f96') .'; border-radius: 3px; color: '. config('site.styles_default_text_color', '#ffffff') .'; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none; box-sizing: border-box;',

    'button--green' => 'background-color: #22BC66;',
    'button--red' => 'background-color: #dc4d2f;',
    'button--blue' => 'background-color: '. config('site.styles_default_bg_color', '#185f96') .'; color: '. config('site.styles_default_text_color', '#ffffff') .';',

];
?>

<body style="{{ $style['body'] }}">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td style="{{ $style['email-wrapper'] }}" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <!-- Logo -->
                    <tr>
                        <td style="{{ $style['email-masthead'] }}">
                            <a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="{{ config('site.url_home') ? config('site.url_home') : url('/') }}" target="_blank">
                                @if ( config('site.logo') )
                                    <img src="{{ asset_url('uploads','logo/'. config('site.logo')) }}" alt="{{ config('app.name') }}" style="max-width:300px;" />
                                @else
                                    {{ config('app.name') }}
                                @endif
                            </a>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="{{ $style['email-body'] }}" width="100%">
                            <table style="{{ $style['email-body_inner'] }}" align="center" width="800" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="{{ $fontFamily }} {{ $style['email-body_cell'] }}">
                                        @if (!empty($greeting))
                                          <!-- Greeting -->
                                          <h1 style="{{ $style['header-1'] }}">
                                              @if (! empty($greeting))
                                                  {{ $greeting }}
                                              @else
                                                  @if ($level == 'error')
                                                      {{ trans('notifications.greeting.error') }}
                                                  @else
                                                      {{ trans('notifications.greeting.default') }}
                                                  @endif
                                              @endif
                                          </h1>
                                        @endif

                                        <!-- Intro -->
                                        @foreach ($introLines as $line)
                                            <p style="{{ $style['paragraph'] }}">
                                                {!! $line !!}
                                            </p>
                                        @endforeach

                                        <!-- Action Button -->
                                        @if (isset($actionText))
                                            <table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="center">
                                                        @php
                                                        switch ($level) {
                                                            case 'success':
                                                                $actionColor = 'button--green';
                                                                break;
                                                            case 'error':
                                                                $actionColor = 'button--red';
                                                                break;
                                                            default:
                                                                $actionColor = 'button--blue';
                                                        }
                                                        @endphp

                                                        <a href="{{ $actionUrl }}"
                                                            style="{{ $fontFamily }} {{ $style['button'] }} {{ $style[$actionColor] }}"
                                                            class="button"
                                                            target="_blank">
                                                            {{ $actionText }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        @endif

                                        <!-- Outro -->
                                        @foreach ($outroLines as $line)
                                            <p style="{{ $style['paragraph'] }}">
                                                {!! $line !!}
                                            </p>
                                        @endforeach

                                        <!-- Salutation -->
                                        {{-- <p style="{{ $style['paragraph'] }}">
                                            {{ trans('notifications.salutation') }},<br>
                                            {{ config('app.name') }}
                                        </p> --}}

                                        <!-- Sub Copy -->
                                        @if (isset($actionText))
                                            <table style="{{ $style['body_sub'] }}">
                                                <tr>
                                                    <td style="{{ $fontFamily }}">
                                                        <p style="{{ $style['paragraph-sub'] }}">
                                                            {!! trans('notifications.sub_copy', [
                                                                'name' => $actionText
                                                            ]) !!}
                                                        </p>

                                                        <p style="{{ $style['paragraph-sub'] }}">
                                                            <a style="{{ $style['anchor'] }}" href="{{ $actionUrl }}" target="_blank">
                                                                {{ $actionUrl }}
                                                            </a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td>
                            <table style="{{ $style['email-footer'] }}" align="center" width="800" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                                        <p style="{{ $style['paragraph-footer'] }}">
                                            @if( config('site.company_name') )
                                                {{ config('site.company_name') }}
                                            @endif

                                            @if( config('site.company_telephone') )
                                                <span style="{{ $style['email-footer_separator'] }}">|</span>
                                                <span style="{{ $style['email-footer_title'] }}">{{ trans('notifications.footer.phone') }}:</span>
                                                <a href="tel:{{ config('site.company_telephone') }}" style="{{ $style['email-footer_anchor'] }}">{{ config('site.company_telephone') }}</a>
                                            @endif

                                            @if( config('site.company_email') )
                                                <span style="{{ $style['email-footer_separator'] }}">|</span>
                                                <span style="{{ $style['email-footer_title'] }}">{{ trans('notifications.footer.email') }}:</span>
                                                <a href="mailto:{{ config('site.company_email') }}" target="_blank" style="{{ $style['email-footer_anchor'] }}">{{ config('site.company_email') }}</a>
                                            @endif

                                            @if( config('site.url_home') )
                                                <span style="{{ $style['email-footer_separator'] }}">|</span>
                                                <span style="{{ $style['email-footer_title'] }}">{{ trans('notifications.footer.site') }}:</span>
                                                <a href="{{ config('site.url_home') ? config('site.url_home') : url('/') }}" target="_blank" style="{{ $style['email-footer_anchor'] }}">{{ config('site.url_home') ? config('site.url_home') : url('/') }}</a>
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                @if( config('site.branding') )
                    <div style="{{ $fontFamily }} {{ $style['branding'] }}">
                        {{ trans('common.powered_by') }} <a href="https://easytaxioffice.com" target="_blank" style="{{ $style['branding_anchor'] }}">EasyTaxiOffice</a>
                    </div>
                @endif

            </td>
        </tr>
    </table>
</body>
</html>
