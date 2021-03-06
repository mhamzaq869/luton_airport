<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Czech (cs-CZ) - Booking
    |--------------------------------------------------------------------------
    |
    | Used in booking frontend.
    |
    */

    'page_title' => 'Rezervace',
    'page_title_availability' => 'Dostupnost',
    'page' => [
        'pay' => [
            'page_title' => 'Zaplatit nyní',
            'title' => 'Platba kreditní nebo debetní kartou prostřednictvím :name.',
            'desc' => "Budete přesměrováni na zabezpečenou platební stránku, kde můžete dokončit rezervaci.\r\nKlepnutím na tlačítko níže budete pokračovat v rezervaci.",
            'total' => 'Celkem',
            'btn_pay_now' => 'Zaplatit nyní',
            'errors' => [
                'no_transactions' => 'Žádné transakce.',
                'no_payment' => 'Žádná platební metoda.',
                'no_booking' => 'Žádná rezervace.',
                'no_config' => 'Žádné konfigurace.',
            ],
        ],
        'finish' => [
            'page_title' => 'Děkujeme',
            'header' => 'Děkujeme, že jste si vybrali :company_name',
            'request_title' => 'Vaše rezervace :ref_number byla přijata.',
            'request_desc' => 'Prosím, dovolte nám :time potvrdit Vaši rezervaci. Děkujeme Vám za Vaši trpělivost a zanedlouho Vás kontaktujeme.',
            'quote_title' => 'Vaše žádost o nabídku :ref_number byla obdržena.',
            'quote_desc' => 'Děkujeme za Vaši trpělivost a brzy vás budeme kontaktovat.',
            'confirm_title' => 'Vaše rezervace :ref_number byla obdržena.',
            'confirm_desc' => 'Děkujeme, že jste využili naše služby a budeme rádi, pokud se na nás obrátíte i příště.',
            'footer' => "Na vaši e-mailovou adresu byl odeslán potvrzující e-mail. Abyste zajistili, že od nás obdržíte e-mail, můžete přidat Vaši e-mailovou adresu :company_email do Vašeho adresáře.\r\nPokud jste neobdrželi e-mail, nezapomeňte zkontrolovat svou složku s nevyžádanou poštou.",
            'btn_contact' => 'volají nám',
            'btn_payment_history' => 'Zobrazit historii plateb',
            'btn_create' => 'Provést další rezervaci',
            'errors' => [
                'no_bookings' => 'Žádná rezervace.',
                'no_booking' => 'Žádná rezervace.',
                'no_config' => 'Žádné konfigurace.',
            ],
        ],
        'cancel' => [
            'page_title' => 'Zrušit',
            'title' => 'Platba :ref_number rezervace byla zrušena.',
            'desc' => 'Prosím, kontaktujte nás, pokud potřebujete pomoc při provádění online platby.',
            'btn_create' => 'Vytvořit novou rezervaci',
            'btn_cancel' => 'Zrušit platbu',
            'errors' => [
                'no_bookings' => 'Žádná rezervace.',
            ],
        ],
        'error' => [
            'page_title' => 'Chyba',
            'message' => 'Během zpracování rezervace došlo k chybě.',
            'btn_details' => 'Ukázat detaily',
        ],
        'terms' => [
            'page_title' => 'Obchodní podmínky',
            'button' => [
                'download' => 'Stáhnout',
            ],
        ],
    ],
    'errors' => [
        'booking_disallow' => 'Je nám líto, ale v této oblasti nespokytujeme služby.',
        'booking_quote' => 'Cena za tuto cestu nemohla být zobrazena, ale stále můžete požádat o cenovou nabídku.',
    ],
    'transaction' => [
        'full_amount' => 'Celková částka',
        'balance' => 'Zůstatek',
        'deposit' => 'Vklad',
    ],
    'calendar' => [
        'booked' => 'Rezervováno',
        'base_to_start' => 'Čas vyzvednutí',
        'start_to_end' => 'Vaše rezervace',
        'end_to_base' => 'Zpáteční cesta řidiče',
    ],
    'navigate' => 'Navigovat',
    'navigate_to_pickup' => 'Navigovat na místo vyzvednutí',
    'navigate_to_dropoff' => 'Navigovat na místo vysazení',
    'navigate_to_via' => 'Navigovat na Přes',
    'from' => 'Vyzvednutí',
    'to' => 'Vysazení',
    'via' => 'Přes',
    'date' => 'Datum a čas',
    'one_way' => 'Tam',
    'return' => 'Zpět',
    'ref_number' => 'Ref ID',
    'vehicle' => 'Vozidlo',
    'lead_passenger_name' => 'Jméno',
    'lead_passenger_email' => 'Email',
    'lead_passenger_mobile' => 'Telefonní číslo',
    'passengers' => 'Cestující',
    'child_seats' => 'Dětské sedačky',
    'baby_seats' => 'Podsedáky',
    'infant_seats' => 'Kolébky',
    'wheelchair' => 'Invalidní vozíky',
    'luggage' => 'Kufry',
    'hand_luggage' => 'Příruční zavazadla',
    'full_address' => 'Celá adresa',
    'flight_number' => 'Číslo letu',
    'flight_landing_time' => 'Čas přistání',
    'departure_city' => 'Přijíždí z',
    'departure_flight_number' => 'Flight departure number',
    'departure_flight_time' => 'Flight departure time',
    'departure_flight_city' => 'Flight departure to',
    'waiting_time' => 'Doba čekání',
    'waiting_time_after' => ':time minut po přistání',
    'meet_and_greet' => 'Setkat se',
    'meet_and_greet_required' => 'Vyžadováno',
    'meeting_point' => 'Místo setkání',
    'requirements' => 'Komentáře',
    'contact_name' => 'Jméno',
    'contact_email' => 'E-mail',
    'contact_mobile' => 'Telefonní číslo',
    'ref_number_quoted' => 'ID nabídky',
    'created_date' => 'Datum rezervace',
    'created_date_quoted' => 'Odesláno dne',
    'summary' => 'Shrnutí',
    'price' => 'Cena jízdy',
    'journey_type' => 'Typ cesty',
    'payments' => 'Platby',
    'payment_method' => 'Způsob platby',
    'payment_price' => 'Poplatek za platbu',
    'discount_code' => 'Slevový kód',
    'discount_price' => 'Sleva',
    'total_price' => 'Celkem',
    'deposit' => 'Vklad',
    'status' => 'Postavení',
    'service_type' => 'Typ služby',
    'service_duration' => 'Doba trvání',
    'heading' => [
        'journey' => 'Cesta',
        'customer' => 'Zákazník',
        'customers' => 'Cestující',
        'lead_passenger' => 'Vedoucí cestující',
        'reservation' => 'Rezervace',
        'general' => 'Všeobecné',
        'booking' => 'Rezervace',
        'driver' => 'Řidič',
        'vehicle' => 'Vozidlo',
    ],
    'summary_types' => [
        'journey' => 'Cesta',
        'ticket' => 'Lístek',
        'parking' => 'Parkování',
        'stopover' => 'Zastávka',
        'meet_and_greet' => 'Setkat se',
        'child_seat' => 'Dětská sedačka',
        'baby_seat' => 'Podsedák',
        'infant_seat' => 'Kolébky',
        'wheelchair' => 'Invalidní vozík',
        'waiting_time' => 'Doba čekání',
        'luggage' => 'Kufr',
        'hand_luggage' => 'Příruční zavazadla',
        'other' => 'Poplatek',
    ],
    'buttons' => [
        'more' => 'More',
        'less' => 'Less',
    ],

    // Added
    'other' => 'Ostatní',
    'bookingAddressPlaceholder' => 'Adresa nebo PSČ',
    'bookingServiceSelect' => 'Vybrat službu',
    'bookingLocationTitle' => 'Adresa nebo PSČ',
    'bookingLocationTooltip' => 'Poloha',
    'bookingLocationSectionLabel' => 'Polohy',
    'bookingVehicleAmount' => 'Množství',
    'bookingDistanceDurationSectionLabel' => 'Podrobnosti o vzdálenosti a době',
    'bookingItemsSectionLabel' => 'Doplňky',
    'bookingItemsFormLabel' => 'Přidat doplňky',
    'bookingItemsToooltip' => 'Doplněk',
    'bookingItemsPricePlaceholder' => 'Cena',
    'bookingItemsNamePlaceholder' => 'Přepsat jméno',
    'bookingVehiclePlaceholderOption' => 'Přiřadit vozidlo',
    'bookingCustommerSectionLabel' => 'Vybrat účet zákazníka',
    'bookingCustommerSummaryLabel' => 'Zákazník',
    'bookingPassengerSectionLabel' => 'Cestující',
    'bookingCustomerCreateNewButton' => 'Vytvořit nový',
    'bookingCustommerPassengerPlaceholder' => 'Přidat jako cestující',
    'bookingDriverSectionLabel' => 'Vybrat řidiče',
    'bookingDriverVehiclePlaceholder' => 'Musíte zvolit vozidlo.',
    'bookingDriverVehicleSectionLabel' => 'Zvolte vozidlo pro řidiče.',
    'bookingRequirementSectionLabel' => 'Požadavky',
    'bookingPassengerLeadPlaceholder' => 'Cestující je hlavním cestujícím',
    'bookingSourceDetailsPlaceholder' => 'Podrobnosti o zdroji',
    'bookingOperatorNotesPlaceholder' => 'Poznámky operátora',
    'bookingWhenPlaceholder' => 'Nyní',
    'bookingPricingSectionLabel' => 'Ceny',
    'bookingServiceDurationSectionLabel' => 'Doba služby',
    'bookingFlightDetailsSectionLabel' => 'Detaily letu',
    'bookingWaitingTimeAfterLandingPlaceholder' => 'Čekací doba po přistání',
    'bookingVehicleTypePlaceholder' => 'Typ vozidla',
    'bookingCustommerPassengerYesPlaceholder' => 'Ano, vytvořit',
    'errorBookingAddress' => 'Je vyžadována adresa nebo PSČ',
    'errorBookingItem' => 'Musíte vybrat doplněk.',
    'errorBookingCustommer' => 'Musíte vybrat Zákazníka',
    'errorBookingDriver' => 'Musíte vybrat Řidiče.',
    'errorBookingStatus' => 'Musíte zvolit Stav.',
    'errorBookingSource' => 'Musíte zvolit Zdroj.',
    'errorBookingFeedbackMin' => 'Prosím, vyplňte všechna požadovaná pole',
    'successBookingSaved' => 'Rezervace byla úspěšně uložena',
    'booking_unassigned' => 'Nepřiřazeno',
    'bookingStatusNotes' => 'Důvod zrušení',
    'bookingPassengerTitle' => 'Cestující',
    'bookingRequirementHelp' => 'např. kolik dětských sedaček je zapotřebí, včetně věku dětí, atd.',
    'bookingGeolocationButtonTooltip' => 'Geolokace',
    'bookingAdvanceButtonTooltip' => 'Dopředu',
    'bookingSwapButtonTooltip' => 'Vyměnit',
    'bookingAddButtonTooltip' => 'Přidat',
    'bookingCloseFieldsButtonTooltip' => 'Skrýt',
    'bookingNotificationsSummary' => 'Oznámení',
    'bookingNotificationsEmailPlaceholder' => 'Odeslat detaily rezervace',
    'bookingNotificationsPlaceholder' => 'Neodesílat oznámení',
    'bookingNotificationsInvoicePlaceholder' => 'Poslat fakturu zákazníkovi',
    'bookingNotificationsPreferLanguagePlaceholder' => 'Preferovaný jazyk oznámení',
    'bookingNotificationsCommentPlaceholder' => 'Dodatečná zpráva k e-mailu s oznámením...',
    'bookingNotificationsButtonSetCommentPlaceholder' => 'Přidat zprávu',
    'isRequired' => 'Toto pole je povinné.',
    'createdPassenger' => 'Cestující byl vytvořen.',
    'uniqueId' => 'Unikátní ID',
    'useThisPrice' => 'Použít tuto cenu',
    'autoCalculated' => 'Automaticky vypočítáno',
    'routeNotFound' => 'Cesta nebyla nalezena, opravte prosím podrobnosti o poloze a zkuste to znovu.',
    'default' => 'Výchozí nastavení',
    'showTransaction' => 'Zobrazit transakci',
    'hideTransaction' => 'Skrýt transakce',

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
