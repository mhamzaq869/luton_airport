<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dutch (nl-NL) - Booking
    |--------------------------------------------------------------------------
    |
    | Used in booking frontend.
    |
    */

    'page_title' => 'Boeking',
    'page_title_availability' => 'Beschikbaarheid',
    'page' => [
        'pay' => [
            'page_title' => 'Nu betalen',
            'title' => 'Betalen met krediet- of debetkaart via :name.',
            'desc' => "U wordt doorgestuurd naar de beveiligde betalingspagina om uw boeking te voltooien.\r\nKlik op de onderstaande knop om verder te gaan met uw boeking.",
            'total' => 'Totaal',
            'btn_pay_now' => 'Nu betalen',
            'errors' => [
                'no_transactions' => 'Geen transacties.',
                'no_payment' => 'Geen betaalmethode.',
                'no_booking' => 'Geen boeking.',
                'no_config' => 'Geen configuratie.',
            ],
        ],
        'finish' => [
            'page_title' => 'Bedankt',
            'header' => 'Bedankt om voor :company_name te kiezen',
            'request_title' => 'Uw boeking :ref_number werd ontvangen.',
            'request_desc' => "Sta ons :time toe om uw reservatie te bevestigen.\r\nWe bedanken u voor u geduld en nemen spoedig contact met u op.",
            'quote_title' => 'Uw offerteaanvraag :ref_number werd ontvangen.',
            'quote_desc' => 'Wij danken u voor uw geduld en zullen spoedig contact met u opnemen.',
            'confirm_title' => 'Uw boeking :ref_number werd ontvangen.',
            'confirm_desc' => 'Wij danken u voor het gebruik van onze service en hopen dat u in de toekomst opnieuw gebruik van ons maakt.',
            'footer' => "Een bevestigingsemail werd verzonden naar uw e-mailadres. Om ervoor te zorgen dat u onze e-mail ontvangt, dient u ons e-mailadres :company_email toe te voegen aan uw adresboek.\r\nZorg ervoor dat u uw spammappen controleert als u de bevestiging niet hebt ontvangen in uw inbox.",
            'btn_contact' => 'ons bellen',
            'btn_payment_history' => 'Toon betalingsgeschiedenis',
            'btn_create' => 'Maak nog een boeking',
            'errors' => [
                'no_bookings' => 'Geen boekingen.',
                'no_booking' => 'Geen boeking.',
                'no_config' => 'Geen configuratie.',
            ],
        ],
        'cancel' => [
            'page_title' => 'Annuleren',
            'title' => 'Betaling boeking :ref_number werd geannuleerd.',
            'desc' => 'Neem contact met ons op als u hulp nodig heeft bij het doen van een online betaling.',
            'btn_create' => 'Nieuwe Boeking Aanmaken',
            'btn_cancel' => 'Betaling annuleren',
            'errors' => [
                'no_bookings' => 'Geen boekingen.',
            ],
        ],
        'error' => [
            'page_title' => 'Fout',
            'message' => 'Er traden een aantal fouten op tijdens het verwerken van uw boeking.',
            'btn_details' => 'Toon details',
        ],
        'terms' => [
            'page_title' => 'Voorwaarden',
            'button' => [
                'download' => 'Downloaden',
            ],
        ],
    ],
    'errors' => [
        'booking_disallow' => 'Het spijt ons, maar we zijn niet actief in deze regio.',
        'booking_quote' => 'De prijs voor deze reis kan niet worden weergegeven, maar u kunt nog steeds een offerte aanvragen.',
    ],
    'transaction' => [
        'full_amount' => 'Volledige bedrag',
        'balance' => 'Balans',
        'deposit' => 'Storting',
    ],
    'calendar' => [
        'booked' => 'Geboekt',
        'base_to_start' => 'Tijd om bij u te komen',
        'start_to_end' => 'Uw reservering',
        'end_to_base' => 'Retour van de bestuurder',
    ],
    'navigate' => 'Navigeren',
    'navigate_to_pickup' => 'Navigeer naar ophaallocatie',
    'navigate_to_dropoff' => 'Navigeer naar bestemming',
    'navigate_to_via' => 'Navigeer naar via',
    'from' => 'Ophaallocatie',
    'to' => 'Bestemming',
    'via' => 'Via',
    'date' => 'Datum & tijd',
    'one_way' => 'Heen',
    'return' => 'Terug',
    'ref_number' => 'Referentie-ID',
    'vehicle' => 'Voertuig',
    'lead_passenger_name' => 'Naam',
    'lead_passenger_email' => 'E-mail',
    'lead_passenger_mobile' => 'Telefoonnummer',
    'passengers' => 'Passagiers',
    'child_seats' => 'Kinderzitjes',
    'baby_seats' => 'Stoelverhogers',
    'infant_seats' => 'Peuterzitjes',
    'wheelchair' => 'Rolstoelen',
    'luggage' => 'Koffers',
    'hand_luggage' => 'Handbagage',
    'full_address' => 'Volledig adres',
    'flight_number' => 'Vluchtnummer',
    'flight_landing_time' => 'Vluchtlandingstijd',
    'departure_city' => 'Komt aan van',
    'departure_flight_number' => 'Flight departure number',
    'departure_flight_time' => 'Flight departure time',
    'departure_flight_city' => 'Flight departure to',
    'waiting_time' => 'Wachttijd',
    'waiting_time_after' => ':time minuten na de landing',
    'meet_and_greet' => 'Meet & Greet',
    'meet_and_greet_required' => 'Vereist',
    'meeting_point' => 'Ontmoetingspunt',
    'requirements' => 'Reacties',
    'contact_name' => 'Naam',
    'contact_email' => 'E-mail',
    'contact_mobile' => 'Telefoonnummer',
    'ref_number_quoted' => 'Offerte-ID',
    'created_date' => 'Boekingsdatum',
    'created_date_quoted' => 'Ingediend op',
    'summary' => 'Samenvatting',
    'price' => 'Reisprijs',
    'journey_type' => 'Reistype',
    'payments' => 'Betalingen',
    'payment_method' => 'Betalingsmethode',
    'payment_price' => 'Betalingskosten',
    'discount_code' => 'Kortingscode',
    'discount_price' => 'Korting',
    'total_price' => 'Totaal',
    'deposit' => 'Storting',
    'status' => 'Status',
    'service_type' => 'Servicetype',
    'service_duration' => 'Duur',
    'heading' => [
        'journey' => 'Reis',
        'customer' => 'Klant',
        'customers' => 'Passagiers',
        'lead_passenger' => 'Hoofdpassagier',
        'reservation' => 'Reservatie',
        'general' => 'Algemeen',
        'booking' => 'Boeking',
        'driver' => 'Bestuurder',
        'vehicle' => 'Voertuig',
    ],
    'summary_types' => [
        'journey' => 'Reis',
        'ticket' => 'Ticket',
        'parking' => 'Parkeren',
        'stopover' => 'Stopover',
        'meet_and_greet' => 'Meet & Greet',
        'child_seat' => 'Kinderzitje',
        'baby_seat' => 'Stoelverhoger',
        'infant_seat' => 'Peuterzitje',
        'wheelchair' => 'Rolstoel',
        'waiting_time' => 'Wachttijd',
        'luggage' => 'Koffer',
        'hand_luggage' => 'Handbagage',
        'other' => 'Aanrekening',
    ],
    'buttons' => [
        'more' => 'More',
        'less' => 'Less',
    ],
    'other' => 'Andere',
    'bookingAddressPlaceholder' => 'Adres of postcode',
    'bookingServiceSelect' => 'Selecteer service',
    'bookingLocationTitle' => 'Adres of postcode',
    'bookingLocationTooltip' => 'Locatie',
    'bookingLocationSectionLabel' => 'Locaties',
    'bookingVehicleAmount' => 'Bedrag',
    'bookingDistanceDurationSectionLabel' => 'Details afstand en duur',
    'bookingItemsSectionLabel' => 'Add-ons',
    'bookingItemsFormLabel' => 'Add-on toevoegen',
    'bookingItemsToooltip' => 'Add-on',
    'bookingItemsPricePlaceholder' => 'Prijs',
    'bookingItemsNamePlaceholder' => 'Naam overschrijven',
    'bookingVehiclePlaceholderOption' => 'Voertuig toewijzen',
    'bookingCustommerSectionLabel' => 'Klantenaccount selecteren',
    'bookingCustommerSummaryLabel' => 'Klant',
    'bookingPassengerSectionLabel' => 'Passagier',
    'bookingCustomerCreateNewButton' => 'Nieuwe aanmaken',
    'bookingCustommerPassengerPlaceholder' => 'Voeg toe als passagier',
    'bookingDriverSectionLabel' => 'Selecteer bestuurder',
    'bookingDriverVehiclePlaceholder' => 'U moet een voertuig selecteren.',
    'bookingDriverVehicleSectionLabel' => 'Selecteer een voertuig voor de bestuurder.',
    'bookingRequirementSectionLabel' => 'Extra\'s',
    'bookingPassengerLeadPlaceholder' => 'Passagier is hoofdpassagier',
    'bookingSourceDetailsPlaceholder' => 'Bron details',
    'bookingOperatorNotesPlaceholder' => 'Aantekeningen operator',
    'bookingWhenPlaceholder' => 'Nu',
    'bookingPricingSectionLabel' => 'Tarieven',
    'bookingServiceDurationSectionLabel' => 'Serviceduur',
    'bookingFlightDetailsSectionLabel' => 'Vluchtdetails',
    'bookingWaitingTimeAfterLandingPlaceholder' => 'Wachttijd na landing',
    'bookingVehicleTypePlaceholder' => 'Voertuigsoort',
    'bookingCustommerPassengerYesPlaceholder' => 'Ja, aanmaken',
    'errorBookingAddress' => 'Adres of postcode is vereist',
    'errorBookingItem' => 'U moet een addon selecteren.',
    'errorBookingCustommer' => 'U moet een klant selecteren',
    'errorBookingDriver' => 'U moet een bestuurder selecteren.',
    'errorBookingStatus' => 'U moet een status selecteren.',
    'errorBookingSource' => 'U moet een bron selecteren.',
    'errorBookingFeedbackMin' => 'Vul alle vereiste velden in',
    'successBookingSaved' => 'Boeking werd succesvol opgeslagen',
    'booking_unassigned' => 'Niet-toegewezen',
    'bookingStatusNotes' => 'Annuleringsreden',
    'bookingPassengerTitle' => 'Passagier',
    'bookingRequirementHelp' => 'bv. hoeveel kinderzitjes er nodig zijn, inclusief de leeftijd van de kinderen, enz',
    'bookingGeolocationButtonTooltip' => 'Geolocatie',
    'bookingAdvanceButtonTooltip' => 'Voorschot',
    'bookingSwapButtonTooltip' => 'Wisselen',
    'bookingAddButtonTooltip' => 'Toevoegen',
    'bookingCloseFieldsButtonTooltip' => 'Verbergen',
    'bookingNotificationsSummary' => 'Meldingen',
    'bookingNotificationsEmailPlaceholder' => 'Verzend boekingsgegevens naar',
    'bookingNotificationsPlaceholder' => 'Stuur geen melding',
    'bookingNotificationsInvoicePlaceholder' => 'Stuur een factuur naar de klant',
    'bookingNotificationsPreferLanguagePlaceholder' => 'Voorkeurtaal meldingen',
    'bookingNotificationsCommentPlaceholder' => 'Extra bericht bij e-mailmelding...',
    'bookingNotificationsButtonSetCommentPlaceholder' => 'Bericht toevoegen',
    'isRequired' => 'Dit veld is vereist.',
    'createdPassenger' => 'Passagier werd aangemaakt.',
    'uniqueId' => 'Unieke ID',
    'useThisPrice' => 'Gebruik deze prijs',
    'autoCalculated' => 'Automatisch berekend',
    'routeNotFound' => 'De route kon niet worden gevonden. Corrigeer de locatiegegevens en probeer het opnieuw.',
    'default' => 'Standaard',
    'showTransaction' => 'Toon transactie',
    'hideTransaction' => 'Transacties verbergen',

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