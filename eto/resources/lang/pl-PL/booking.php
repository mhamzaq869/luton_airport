<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Polish (pl-PL) - Booking
    |--------------------------------------------------------------------------
    |
    | Used in booking frontend.
    |
    */

    'page_title' => 'Rezerwacja',
    'page_title_availability' => 'Dostępność',

    'page' => [
        'pay' => [
            'page_title' => 'Pay now',
            'title' => 'Pay by Credit or Debit Card via :name.',
            'desc' => "You will be passed over to secure payment page to complete your booking.\r\nClick the button below to proceed with your booking.",
            'total' => 'Total',
            'btn_pay_now' => 'Pay now',
            'errors' => [
                'no_transactions' => 'No transactions.',
                'no_payment' => 'No payment method.',
                'no_booking' => 'No booking.',
                'no_config' => 'No config.',
            ],
        ],
        'finish' => [
            'page_title' => 'Thank you',
            'header' => 'Thank you for choosing :company_name',
            'request_title' => 'Your booking :ref_number has been received.',
            'request_desc' => "Please allow us :time to confirm your reservation.\r\nWe thank you for your patience and we will contact you shortly.",
            'quote_title' => 'Your quote request :ref_number has been received.',
            'quote_desc' => "We thank you for your patience and we will contact you shortly.",
            'confirm_title' => 'Your booking :ref_number has been received.',
            'confirm_desc' => "We thank you for using our service and welcome you to do so again.",
            'footer' => "A confirmation email has been sent to your email address. To make sure you receive our email, please add our email address :company_email to your address book.\r\nPlease make sure to check your spam and junk folders if you have not received the confirmation in your inbox.",
            'btn_contact' => 'calling us',
            'btn_payment_history' => 'Show payment history',
            'btn_create' => 'Make another booking',
            'errors' => [
                'no_bookings' => 'No bookings.',
                'no_booking' => 'No booking.',
                'no_config' => 'No config.',
            ],
        ],
        'cancel' => [
            'page_title' => 'Cancel',
            'title' => 'Your booking :ref_number payment has been cancelled.',
            'desc' => 'Please contact us if you need help with making online payment.',
            'btn_create' => 'Make new booking',
            'errors' => [
                'no_bookings' => 'No bookings.',
            ],
        ],
        'error' => [
            'page_title' => 'Error',
            'message' => 'Some errors occurred while processing your booking.',
            'btn_details' => 'Show details',
        ],
    ],
    'errors' => [
        'booking_disallow' => 'We are sorry, but we do not serve in this area.',
        'booking_quote' => 'The price for this journey could not be displayed, but you still can request a quote.',
    ],

    'transaction' => [
        'full_amount' => 'Cała kwota',
        'balance' => 'Pozostała kwota',
        'deposit' => 'Wpłata',
    ],
    'calendar' => [
        'booked' => 'Zarezerwowany',
        'base_to_start' => 'Czas dojazdu',
        'start_to_end' => 'Twoja rezerwacja',
        'end_to_base' => 'Podróż powrotna kierowcy',
    ],
    'navigate' => 'Prowadź do',
    'navigate_to_pickup' => 'Prowadź do punktu początkowego',
    'navigate_to_dropoff' => 'Prowadź do punktu docelowego',
    'navigate_to_via' => 'Prowadź do śródcelu',
    'from' => 'Punkt odbioru',
    'to' => 'Punkt docelowy',
    'via' => 'Przez',
    'date' => 'Data i czas',
    'one_way' => 'W jedną stronę',
    'return' => 'Powrót',
    'ref_number' => 'Numer referencyjny',
    'vehicle' => 'Samochód',
    'lead_passenger_name' => 'Imię',
    'lead_passenger_email' => 'Email',
    'lead_passenger_mobile' => 'Numer telefonu',
    'passengers' => 'Pasażerowie',
    'child_seats' => 'Fotelik dla dzieci',
    'baby_seats' => 'Siedzisko dla dzieci',
    'infant_seats' => 'Nosidełko dla niemowlaków',
    'wheelchair' => 'Wózki inwalidzkie',
    'luggage' => 'Walizki',
    'hand_luggage' => 'Bagaż podręczny',
    'full_address' => 'Pełny adres',
    'flight_number' => 'Numer lotu',
    'flight_landing_time' => 'Czas lądowania samolotu',
    'departure_city' => 'Przylot z',
    'departure_flight_number' => 'Flight departure number',
    'departure_flight_time' => 'Flight departure time',
    'departure_flight_city' => 'Flight departure to',
    'waiting_time' => 'Czas oczekiwania',
    'waiting_time_after' => ':time minut po lądowaniu',
    'meet_and_greet' => 'Przywitanie na lotnisku',
    'meet_and_greet_required' => 'Wymagane',
    'meeting_point' => 'Punkt spotkania',
    'requirements' => 'Dodatkowe wskazania',
    'contact_name' => 'Imię',
    'contact_email' => 'E-mail',
    'contact_mobile' => 'Numer telefonu',
    'ref_number_quoted' => 'ID wyceny',
    'created_date' => 'Data rezerwacji',
    'created_date_quoted' => 'Wysłane dnia',
    'summary' => 'Podsumowanie',
    'price' => 'Koszt podróży',
    'journey_type' => 'Typ podróży',
    'return' => 'Powrót',
    'payments' => 'Płatności',
    'payment_method' => 'Metoda płatności',
    'payment_price' => 'Opłata manipulacyjna',
    'discount_code' => 'Kod zniżkowy',
    'discount_price' => 'Zniżka',
    'total_price' => 'Suma',
    'deposit' => 'Wpłata',
    'status' => 'Status',
    'service_type' => 'Typ usługi',
    'service_duration' => 'Czas trwania',
    'heading' => [
        'journey' => 'Szczegóły podróży',
        'customer' => 'Dane klienta',
        'lead_passenger' => 'Dane głównego pasażera',
        'reservation' => 'Szczegóły rezerwacji',
        'general' => 'Ogólne dane',
        'booking' => 'Rezerwacja',
        'driver' => 'Kierowca',
        'vehicle' => 'Samochód',
    ],
    'summary_types' => [
        'journey' => 'Podróż',
        'parking' => 'Parking',
        'stopover' => 'Przerwa w podróży',
        'meet_and_greet' => 'Przywitanie na lotnisku',
        'child_seat' => 'Fotelik dla dzieci',
        'baby_seat' => 'Siedzisko dla dzieci',
        'infant_seat' => 'Nosidełko dla niemowlaków',
        'wheelchair' => 'Wózek inwalidzki',
        'waiting_time' => 'Czas oczekiwania',
        'luggage' => 'Walizka',
        'hand_luggage' => 'Bagaż podręczny',
        'other' => 'Opłata',
    ],
    'buttons' => [
        'more' => 'More',
        'less' => 'Less',
    ],

    // Added
    'other' => 'Other',
    'bookingAddressPlaceholder' => 'Address or Postcode',
    'bookingServiceSelect' => 'Select service',
    'bookingLocationTitle' => 'Address or Postcode',
    'bookingLocationTooltip' => 'Location',
    'bookingLocationSectionLabel' => 'Locations',
    'bookingVehicleAmount' => 'Amount',
    'bookingDistanceDurationSectionLabel' => 'Distance and Duration details',
    'bookingItemsSectionLabel' => 'Addons',
    'bookingItemsFormLabel' => 'Add addon',
    'bookingItemsToooltip' => 'Addon',
    'bookingItemsPricePlaceholder' => 'Price',
    'bookingItemsNamePlaceholder' => 'Override name',
    'bookingVehiclePlaceholderOption' => 'Assign vehicle',
    'bookingCustommerSectionLabel' => 'Choose customer account',
    'bookingCustommerSummaryLabel' => 'Account',
    'bookingPassengerSection' => 'Passengers',
    'bookingPassengerSectionLabel' => 'Passenger',
    'bookingCustomerCreateNewButton' => 'Create new',
    'bookingCustommerPassengerPlaceholder' => 'Add as passenger',
    'bookingDriverSectionLabel' => 'Select Driver',
    'bookingDriverVehiclePlaceholder' => 'You need to select Vehicle.',
    'bookingDriverVehicleSectionLabel' => 'Select Vehicle for Driver.',
    'bookingRequirementSectionLabel' => 'Customer requirements',
    'bookingPassengerLeadPlaceholder' => 'Passenger is Lead',
    'bookingSourceDetailsPlaceholder' => 'Source details',
    'bookingOperatorNotesPlaceholder' => 'Note for Driver',
    'bookingWhenPlaceholder' => 'Now',
    'bookingPricingSectionLabel' => 'Pricing',
    'bookingServiceDurationSectionLabel' => 'Service Duration',
    'bookingFlightDetailsSectionLabel' => 'Flight details',
    'bookingWaitingTimeAfterLandingPlaceholder' => 'Waiting time after landing',
    'bookingVehicleTypePlaceholder' => 'Vehicle type',
    'bookingCustommerPassengerYesPlaceholder' => 'Yes, create',
    'errorBookingAddress' => 'Address or Postcode is required',
    'errorBookingItem' => 'You need to select addon.',
    'errorBookingCustommer' => 'You need to select Customer.',
    'errorBookingDriver' => 'You need to select Driver.',
    'errorBookingStatus' => 'You need to select Status.',
    'errorBookingSource' => 'You need to select Source.',
    'errorBookingFeedbackMin' => 'Please fill in all required fields',
    'successBookingSaved' => 'Booking has been successfully saved',
    'booking_unassigned' => 'Unassigned',
    'bookingStatusNotes' => 'Cancellation Reason',
    'bookingPassengerTitle' => 'Passenger',
    'bookingRequirementHelp' => 'e.g. how many child seat required including the children ages, etc',
    'bookingGeolocationButtonTooltip' => 'Geolocation',
    'bookingAdvanceButtonTooltip' => 'Advance',
    'bookingSwapButtonTooltip' => 'Swap',
    'bookingAddButtonTooltip' => 'Add',
    'bookingCloseFieldsButtonTooltip' => 'Hide',
    'bookingNotificationsSummary' => 'Notifications',
    'bookingNotificationsEmailPlaceholder' => 'Send booking details to',
    'bookingNotificationsPlaceholder' => 'Send notification',
    'bookingNotificationsInvoicePlaceholder' => 'Send invoice to Customer',
    'bookingNotificationsPreferLanguagePlaceholder' => 'Preferred notification language',
    'bookingNotificationsCommentPlaceholder' => 'Note for Customer',
    'bookingNotificationsButtonSetCommentPlaceholder' => 'Add message',
    'isRequired' => 'This field is required.',
    'createdPassenger' => 'Passenger has been created.',
    'uniqueId' => 'Unique ID',
    'useThisPrice' => 'Use this price',
    'autoCalculated' => 'Auto calculated',
    'routeNotFound' => 'The route could not be found, please correct location details and try again.',
    'default' => 'Default',
    'showTransaction' => 'Show transaction',
    'hideTransaction' => 'Hide transactions',
    'paymentAdnDriver' => 'Payment & Driver',
    'advance' => 'Advance',
    'bookingAddItemButton' => 'Add item',
    'formSettings' => 'Settings',
    'passengerCharge' => 'Passenger charge',
    'settingAdvanceOpen' => 'Auto open advanced section',
    'settingAmountsViewPassenger' => 'Enable options "Passenger amount"',
    'settingAmountsViewSuitcase' => 'Enable options "Suitcase"',
    'settingAmountsViewCarryOn' => 'Enable options "Carry-on"',
    'settingWaitingTime' => 'Enable option "Waiting time after landing" in flight details',
    'show_inactive_drivers' => 'Display unavailable drivers',
    'instantDispatchColorSystem' => 'Instant dispatch color system',
    'customPlaceholder' => 'Custom field',
    'custom_field_name' => 'Custom field',
    'custom_field_display' => 'Display custom field in booking form',
    'custom_field_info' => 'Here you can enter the name of additional field that admin can use for different purposes, e.g. placing additonal information about booking. This option will be dispalyed only to admin in booking form, listing, detail page and calendar.',
    'addVehicleButton' => 'Multi vehicle types',
    'passenger_amount' => 'Passengers',
    'status_color_settings' => 'Change status colors',
    'charges_excluded' => 'The calculated amount does not include:',
    'ical_journey_tile' => 'Journey',
    'ical_journey_filename' => 'Journey details',
    'passenger_finder' => 'Find passenger',
    'tracking' => [
        'no_status_coordinates' => 'The status coordinates are not available',
        'no_data' => 'The journey does not exist or it has already been completed',
        'access_link' => 'View driver on map',
    ],
    'assign_department' => 'Assign department',
    'departments' => 'Departments',
    'department' => 'Department',
    'customer_deleted' => 'Customer deleted',
];
