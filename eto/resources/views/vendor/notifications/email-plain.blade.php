<?php

if (! empty($greeting)) {
    echo $greeting, "\n\n";
} else {
    echo $level == 'error' ? trans('notifications.greeting.error') : trans('notifications.greeting.default'), "\n\n";
}

if (! empty($introLines)) {
    $introLines = preg_replace([
        '/\<table/',
        '/\<\/td\>.?\<\/tr\>/',
        '/\<br\s+\/\>/',
    ], [
        "\n<table",
        "\n</td></tr>",
        "\n<br />",
    ], $introLines);

    $introLines = implode("\n", $introLines);
    $introLines = strip_tags($introLines);
    $introLines = explode("\n", $introLines);
    $introLines = preg_replace('/\s+/', ' ', $introLines);
    $introLines = array_map('trim', $introLines);
    $introLines = implode("\n", $introLines);
    $introLines = preg_replace("/[\r\n]{2,}/", "\n\n", $introLines);
    echo $introLines ."\n\n";

    // echo strip_tags(implode("\n", $introLines)), "\n\n";
}

if (isset($actionText)) {
    echo "{$actionText}: {$actionUrl}", "\n\n";
}

if (! empty($outroLines)) {
    echo strip_tags(implode("\n", $outroLines)), "\n\n";
}

// echo trans('notifications.salutation'), "\n";
// echo config('app.name'), "\n";

if( config('site.company_name') ) {
    echo config('site.company_name') ."\n";
}
if( config('site.company_telephone') ) {
    echo trans('notifications.footer.phone') .": ". config('site.company_telephone') ."\n";
}
if( config('site.company_email') ) {
    echo trans('notifications.footer.email') .": ". config('site.company_email') ."\n";
}
// if( config('site.url_home') ) {
    echo trans('notifications.footer.site') .": ". config('site.url_home') ? config('site.url_home') : url('/') ."\n";
// }

if( config('site.branding') ) {
    echo "\n". trans('common.powered_by') ." EasyTaxiOffice | https://easytaxioffice.com";
}
