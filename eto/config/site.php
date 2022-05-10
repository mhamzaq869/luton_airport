<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site settings
    |--------------------------------------------------------------------------
    */

    'site_id' => 0,
    'site_key' => '',
    'document_warning' => 7, // days
    'document_expired' => 0, // days (remove it!!)
    'branding' => 0,
    'embed' => 0,
    'date_format' => 'd/m/Y',
    'time_format' => 'H:i',
    'start_of_week' => 1,
    'force_https' => 0,
    'logo' => '',
    'url_locales' => [],
    'url_home' => '',
    'url_booking' => '',
    'url_customer' => '',
    'url_driver' => '',
    'url_contact' => '',
    'url_feedback' => '',
    'url_terms' => '',
    'feedback_type' => 1,
    'terms_type' => 0,
    'terms_text' => '',
    'terms_email' => 0,
    'terms_download' => 0,
    'terms_enable' => 1,
    'ref_format' => '{rand6}',
    'currency_symbol' => '£',
    'currency_code' => '',
    'booking_distance_unit' => 0, // 0 = mi | 1 = km
    'booking_return_as_oneway' => 1,
    'booking_postcode_match' => 1,
    'booking_manual_quote_enable' => 0,
    'booking_hide_vehicle_without_price' => 0,
    'booking_hide_vehicle_not_available_message' => 1,
    'booking_pricing_mode' => 0,
    'booking_display_book_by_phone' => 0,
    'booking_attach_ical' => 1,
    'booking_show_preferred' => 0,
    'booking_show_second_passenger' => 1,
    'booking_time_picker_steps' => 5,
    'booking_time_picker_by_minute' => 0,
    'booking_required_address_complete_from' => 0,
    'booking_required_address_complete_to' => 0,
    'booking_required_address_complete_via' => 0,
    'booking_force_home_address' => 0,
    'booking_show_requirements' => 1,
    'booking_service_dropdown' => 1,
    'booking_service_display_mode' => 'tabs',
    'booking_location_search_min' => 5,
    'booking_display_widget_header' => 0,
    'booking_display_return_journey' => 1,
    'booking_display_via' => 1,
    'booking_display_swap' => 1,
    'booking_display_geolocation' => 1,
    'booking_display_book_button' => 1,
    'booking_member_benefits' => '',
    'booking_member_benefits_enable' => 1,
    'booking_hide_cash_payment_if_airport' => 0,
    'booking_allow_account_payment' => 1,
    'booking_show_more_options' => 0,
    'booking_allow_guest_checkout' => 1,
    'booking_summary_display_mode' => 'over_map',
    'booking_vehicle_display_mode' => 'inline',
    'booking_scroll_to_top_enable' => 0,
    'booking_scroll_to_top_offset' => 0,
    'booking_advanced_geocoding' => 0,
    'booking_price_status' => 1,
    'booking_price_status_on' => 1,
    'booking_price_status_on_enquiry' => 0,
    'booking_price_status_off' => 0,
    'booking_request_enable' => 0,
    'booking_request_time' => '00:00',
    'booking_auto_confirm_time' => '00:00',
    'booking_base_action' => 'disallow',
    'booking_base_calculate_type' => 'from',
    'booking_base_calculate_type_enable' => 0,
    'booking_exclude_driver_journey_from_fixed_price' => 1,
    'booking_listing_refresh_type' => 1,
    'booking_listing_refresh_interval' => 60,
    'booking_listing_refresh_counter' => 0,
    'booking_summary_enable' => 1,
    'fixed_prices_priority' => 1,
    'fixed_prices_deposit_enable' => 0,
    'fixed_prices_deposit_type' => 0,
    'user_show_company_name' => 1,
    'customer_allow_company_number' => 0,
    'customer_require_company_number' => 0,
    'customer_allow_company_tax_number' => 0,
    'customer_require_company_tax_number' => 0,
    'driver_show_total' => 0,
    'driver_show_unique_id' => 1,
    'driver_show_edit_profile_button' => 1,
    'driver_show_edit_profile_insurance' => 1,
    'driver_show_edit_profile_driving_licence' => 1,
    'driver_show_edit_profile_pco_licence' => 1,
    'driver_show_edit_profile_phv_licence' => 1,
    'driver_show_reject_button' => 1,
    'driver_show_onroute_button' => 1,
    'driver_show_arrived_button' => 1,
    'driver_show_onboard_button' => 1,
    'driver_allow_cancel' => 0,
    'booking_meeting_board_enabled' => 1,
    'booking_meeting_board_attach' => 0,
    'booking_meeting_board_font_size' => 90,
    'booking_meeting_board_header' => 1,
    'booking_meeting_board_footer' => 1,
    'driver_show_restart_button' => 0,
    'driver_show_passenger_phone_number' => 1,
    'driver_show_passenger_email' => 0,
    'driver_attach_booking_details_to_email' => 1,
    'driver_attach_booking_details_to_sms' => 0,
    'driver_calendar_show_ref_number' => 0,
    'driver_calendar_show_from' => 1,
    'driver_calendar_show_to' => 1,
    'driver_calendar_show_via' => 0,
    'driver_calendar_show_vehicle_type' => 0,
    'driver_calendar_show_estimated_time' => 1,
    'driver_calendar_show_actual_time_slot' => 0,
    'driver_calendar_show_passengers' => 0,
    'driver_calendar_show_custom' => 0,
    'customer_attach_booking_details_to_sms' => 0,
    'customer_attach_booking_details_access_link' => 1,
    'customer_attach_booking_details_access_link_auto_lock' => 24, // h
    'customer_show_only_lead_passenger' => 0,
    'admin_booking_listing_highlight' => 0,
    'admin_calendar_show_ref_number' => 0,
    'admin_calendar_show_name_passenger' => 0,
    'admin_calendar_show_name_customer' => 0,
    'admin_calendar_show_service_type' => 0,
    'admin_calendar_show_from' => 1,
    'admin_calendar_show_to' => 1,
    'admin_calendar_show_via' => 0,
    'admin_calendar_show_vehicle_type' => 0,
    'admin_calendar_show_estimated_time' => 1,
    'admin_calendar_show_actual_time_slot' => 0,
    'admin_default_page' => 'dispatch',
    'language' => '',
    'company_name' => '',
    'company_address' => '',
    'company_number' => '',
    'company_tax_number' => '',
    'company_email' => '',
    'company_telephone' => '',
    'invoice_enabled' => 1,
    'invoice_display_details' => 1,
    'invoice_display_logo' => 1,
    'invoice_display_payments' => 1,
    'invoice_display_custom_field' => 0,
    'invoice_display_company_number' => 0,
    'invoice_display_company_tax_number' => 0,
    'invoice_info' => '',
    'invoice_bill_from' => '',
    'invoice_styles_default_bg_color' => '#3b8cc1',
    'invoice_styles_default_text_color' => '#ffffff',
    'invoice_styles_active_bg_color' => '#2f75a8',
    'invoice_styles_active_text_color' => '#ffffff',
    'tax_name' => '',
    'tax_percent' => 0,
    'styles_border_radius' => 0,
    'styles_default_bg_color' => '#1c70b1',
    'styles_default_border_color' => '#1c70b1',
    'styles_default_text_color' => '#ffffff',
    'styles_active_bg_color' => '#185f96',
    'styles_active_border_color' => '#185f96',
    'styles_active_text_color' => '#ffffff',
    'custom_css' => '',
    'mobile_app_styles_border_radius' => 0,
    'mobile_app_styles_default_bg_color' => '#1c70b1',
    'mobile_app_styles_default_border_color' => '#1c70b1',
    'mobile_app_styles_default_text_color' => '#ffffff',
    'mobile_app_styles_active_bg_color' => '#185f96',
    'mobile_app_styles_active_border_color' => '#185f96',
    'mobile_app_styles_active_text_color' => '#ffffff',
    'mobile_app_custom_css' => '',
    'code_head' => '',
    'code_body' => '',
    'google_cache_expiry_time' => 0,
    'google_cache_runtime' => 2,
    'google_maps_javascript_api_key' => eto_config('SITE_GOOGLE_MAPS_JAVASCRIPT_API_KEY', ''),
    'google_maps_embed_api_key' => eto_config('SITE_GOOGLE_MAPS_EMBED_API_KEY', ''),
    'google_maps_directions_api_key' => eto_config('SITE_GOOGLE_MAPS_DIRECTIONS_API_KEY', ''),
    'google_maps_geocoding_api_key' => eto_config('SITE_GOOGLE_MAPS_GEOCODING_API_KEY', ''),
    'google_places_api_key' => eto_config('SITE_GOOGLE_PLACES_API_KEY', ''),
    'google_analytics_tracking_id' => eto_config('SITE_GOOGLE_ANALYTICS_TRACKING_ID', ''),
    'google_adwords_conversion_id' => eto_config('SITE_GOOGLE_ADWORDS_CONVERSION_ID', ''),
    'google_adwords_conversions' => '',
    'callerid_type' => '',

    'allow_driver_availability' => 1,
    'allow_fixed_prices_import' => eto_config('SITE_ALLOW_FIXED_PRICES_IMPORT', 0),
    'allow_services' => 1,
    'allow_dispatch' => 1,
    'expiry_dispatch' => null,
    'allow_customer_app' => 1,
    'allow_driver_app' => 0,
    'expiry_driver_app' => null,

    'notifications' => json_decode(json_encode([
        'booking_pending' => [
            'admin' => ['email'],
            'customer' => ['email', 'push'],
        ],
        'booking_quote' => [
            'admin' => ['email'],
            'customer' => ['email', 'push'],
        ],
        'booking_requested' => [
            'admin' => ['email'],
            'customer' => ['email', 'push'],
        ],
        'booking_confirmed' => [
            'customer' => ['email', 'push'],
        ],
        'booking_assigned' => [
            'driver' => ['email', 'push'],
        ],
        'booking_auto_dispatch' => [
            'driver' => ['email', 'push'],
        ],
        'booking_accepted' => [
            'admin' => ['email'],
        ],
        'booking_rejected' => [
            'admin' => ['email'],
        ],
        'booking_onroute' => [
            'customer' => ['email', 'push'],
        ],
        'booking_arrived' => [
            'customer' => ['email', 'push'],
        ],
        'booking_onboard' => [],
        'booking_completed' => [
            'admin' => ['email'],
            'customer' => ['email', 'push'],
        ],
        'booking_canceled' => [
            'admin' => ['email'],
            'driver' => ['email', 'push'],
            'customer' => ['email', 'push'],
        ],
        'booking_unfinished' => [
            'admin' => ['email'],
        ],
        'booking_incomplete' => [],
    ])),
    'notification_booking_pending_info' => '',
    'notification_test_email' => '',
    'notification_test_phone' => '',

    'image_dimensions' => [
        'avatar' => [
            'width' => 200,
            'height' => 200
        ],
        'logo' => [
            'width' => 300,
            'height' => 200
        ],
        'payment' => [
            'width' => 200,
            'height' => 200
        ],
        'vehicle' => [
            'width' => 200,
            'height' => 200
        ],
        'vehicle_type' => [
            'width' => 200,
            'height' => 200
        ],
    ],

    // 'site_urls' => [
    //     1 => 'https://example.com/eto/',
    // ],

];