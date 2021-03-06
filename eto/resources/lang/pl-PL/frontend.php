<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Polish (pl-PL) - Frontend
    |--------------------------------------------------------------------------
    |
    | Booking form
    |
    */

    'bookingSummaryNote' => 'To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is no inappropriately lost, misused, accessed, disclosed, alerted or destroyed.',
    'bookingSummaryRoute1' => 'One Way Journey',
    'bookingSummaryRoute2' => 'Return Journey',
    'bookingSummaryDateTime' => 'Pickup Date & Time',
    'bookingSummaryDuration' => 'Duration',
    'bookingSummaryHeaderTitle' => 'Booking summary',

    'bookingField_Fare' => 'Przejazd',
    'bookingField_Ref' => 'Numer referencyjny',
    'bookingField_From' => 'Odbiór',
    'bookingField_To' => 'Punkt docelowy',
    'bookingField_Via' => 'Przez',
    'bookingField_Date' => 'Data i czas',
    'bookingField_Vehicle' => 'Pojazd',
    'bookingField_Passengers' => 'Pasażerowie',
    'bookingField_ChildSeats' => 'Fotelik dla dzieci',
    'bookingField_BabySeats' => 'Siedzisko dla dzieci',
    'bookingField_InfantSeats' => 'Nosidełko dla niemowlaków',
    'bookingField_Wheelchair' => 'Wózki inwalidzkie',
    'bookingField_Luggage' => 'Walizki',
    'bookingField_HandLuggage' => 'Bagaż podręczny',
    'bookingField_LeadPassenger' => 'Główny pasażer',
    'bookingField_Yes' => 'Tak',
    'bookingField_No' => 'Nie',
    'bookingField_Return' => 'Powrót',
    'bookingField_OneWay' => 'W jedną stronę',
    'bookingMsg_NoBookings' => 'Nie znaleziono żadnych rezerwacji.',
    'bookingMsg_NoBooking' => 'Rezerwacja nie istnieje.',
    'bookingMsg_InvoiceDisabled' => 'Przykro nam, ale faktury są teraz niedostępne.',
    'bookingMsg_SendingFailure' => 'Błąd podczas wysyłania emaila',
    'bookingMsg_CanceledSuccess' => 'Rezerwacja <b>{refNumber}</b> została skutecznie odwołana.',
    'bookingMsg_CanceledFailure' => 'Rezerwacja <b>{refNumber}</b> nie mogła zostać odwołana.',

    'userMsg_NoUser' => 'To konto nie istnieje.',
    'userMsg_SendingFailure' => 'Błąd podczas wysyłania emaila',
    'userMsg_ProfileUpdateSuccess' => 'Twój profil został uaktualniony.',
    'userMsg_RegisterNotAvailable' => 'Rejestracja jest obecnie niemożliwa. Spróbuj ponownie później.',
    'userMsg_LoginNotAvailable' => 'Obecnie nie można się zalogować. Spróbuj ponownie później.',
    'userMsg_Resend' => 'Twoje konto zostało utworzone <br />Zanim spróbujesz się zalogować, musisz aktywować konto za pomocą linka wysłanego na <b>{userEmail}</b>. <a href="{resendLink}" target="_blank">Wyślij ponownie</a>',
    'userMsg_RegisterSuccess' => 'Twoje konto zostało utworzone. Możesz się zalogować!',
    'userMsg_RegisterFailure' => 'Twoje konto nie mogło zostać utworzone.',
    'userMsg_ActivationDone' => 'Twoje konto zostało jest już aktywowane. Możesz się zalogować!',
    'userMsg_ActivationSuccess' => 'Twoje konto zostało aktywowane. Możesz się zalogować!',
    'userMsg_ActivationUnfinished' => 'Twoje konto nie zostało jeszcze aktywowane. Sprawdź swoją skrzynkę pocztową.',
    'userMsg_Blocked' => 'Twoje konto zostało zablokowane.',
    'userMsg_LoginSuccess' => 'Wylogowałeś się ze swojego konta.',
    'userMsg_LoginFailure' => 'E-mail i hasło nie są prawidłowo lub nie masz jeszcze konta.',
    'userMsg_PasswordReset' => 'Wysłaliśmy na Twój adres e-mail link do zresetowania hasła. Sprawdź swoją skrzynkę pocztową.',
    'userMsg_PasswordUpdateSuccess' => 'Twoje hasło zostało uaktualnione. Możesz się teraz zalogować!',
    'userMsg_LogoutSuccess' => 'Zostałeś wylogowany z systemu!',
    'userMsg_LogoutFailure' => 'Nie udało się wylogować, spróbuj ponownie.',
    'userMsg_TitleRequired' => 'Tytuł jest wymagany.',
    'userMsg_FirstNameRequired' => 'Imię jest wymagane.',
    'userMsg_LastNameRequired' => 'Nazwisko jest wymagane.',
    'userMsg_MobileNumberRequired' => 'Numer telefonu komórkowego jest wymagany.',
    'userMsg_TelephoneNumberRequired' => 'Numer telefonu jest wymagany.',
    'userMsg_EmergencyNumberRequired' => 'Numer awaryjny jest wymagany.',
    'userMsg_AddressRequired' => 'Adres jest wymagany.',
    'userMsg_CityRequired' => 'Miasto jest wymagane.',
    'userMsg_PostcodeRequired' => 'Kod pocztowy jest wymagany.',
    'userMsg_CountyRequired' => 'Województwo jest wymagane.',
    'userMsg_CountryRequired' => 'Kraj jest wymagane.',
    'userMsg_EmailRequired' => 'Adres e-mail jest wymagany.',
    'userMsg_EmailInvalid' => 'To nie jest prawidłowy adres e-mail.',
    'userMsg_EmailTaken' => 'Ten adres e-mail jest już zajęty.',
    'userMsg_PasswordRequired' => 'Hasło jest wymagane.',
    'userMsg_PasswordLength' => 'Hasło musi zawierać więcej niż {passwordLengthMin} i mniej niż {passwordLengthMax}.',
    'userMsg_PasswordSameAsEmail' => 'Hasło nie może być takie samo jak adres e-mail.',
    'userMsg_ConfirmPasswordRequired' => 'Potwierdzenie hasła jest wymagane.',
    'userMsg_ConfirmPasswordNotEqual' => 'Hasło i jego potwierdzenie muszą się zgadzać.',
    'userMsg_TermsAndConditionsRequired' => 'Musisz zgodzić się na nasze warunki i zasady.',
    'userMsg_TokenRequired' => 'Token jest wymagany.',
    'userMsg_TokenInvalid' => 'Token jest nieprawidłowy.',
    'userMsg_CompanyNameRequired' => 'Nazwa firmy jest wymagana.',
    'userMsg_CompanyNumberRequired' => 'Numer firmy jest wymagany.',
    'userMsg_CompanyTaxNumberRequired' => 'Numer VAT firmy jest wymagany.',

    'js' => [
        'bookingTitleCancel' => 'Are you sure you want to cancel?',
        'bookingMsgCancel' => 'Please see {link}terms{/link}',
        'bookingMsgEdit' => 'To change the booking, please contact us at {email} or call us on {phone}.',
        'bookingYes' => 'Yes',
        'bookingNo' => 'No',
        'bookingDepartureFlightTimeWarning' => 'Pickup date and time has been changed to allow enough time to get to the airport before your flight is due.',
        'bookingTimePickerMinutes' => 'Pickup in {time} minutes',
        'bookingHeading_Step1Mini' => 'Quote & Book',
        'bookingMemberBenefits' => 'Zarejestruj się, żeby skorzystać z',
        'accountBenefits' => "Szybkiego i łatwego systemu rezerwacji\r\nPrzewagi nad osobami bez konta\r\nŚledzenia swoich rezerwacji\r\nHistorii poprzednich rezerwacji\r\nDołączenie do nas nic nie kosztuje", // Zniżki 5% na wszystkie rezerwacje
        'bookingFlightMsg' => 'Landing flight id number',
        'bookingDepartureFlightMsg' => 'Departure flight id number',
        'bookingFlightExample' => 'eg. IO 222',
        'bookingOptional' => 'Optional',
        'bookingField_MoreOption' => 'Więcej opcji',
        'bookingBookByPhone' => 'Book by phone here',
        'bookingNoVehiclesAvailable' => 'None of the vehicles are available matching your search criteria. Please try again by adjusting your choice.',
        'bookingPayDeposit' => 'Wpłać tylko zaliczkę.',
        'bookingPayFullAmount' => 'Wpłać pełną kwotę.',
        'bookingVehicle_NotAvailable' => 'Niedostępne.',
        'bookingVehicle_Booked' => 'Zarezerwowane.',
        'bookingVehicle_LinkEnquire' => 'Zapytaj teraz',
        'bookingVehicle_LinkAvailability' => 'Sprawdź dostępność',
        'bookingField_ChildSeatsNeeded' => 'Proszę o fotelik dla dziecka',
        'bookingField_Services' => 'Typ usługi',
        'bookingField_ServicesDuration' => 'Czas trwania',
        'bookingField_ServicesSelect' => 'Typ usługi',
        'bookingField_ServicesDurationSelect' => 'Czas trwania',
        'ERROR_SERVICES_EMPTY' => 'Wybierz typ usługi',
        'ERROR_SERVICES_DURATION_EMPTY' => 'Wybierz czas trwania',

        'print_Heading' => 'Szczegóły rezerwacji',
        'button_Close' => 'Zamknij',
        'panel_Hello' => 'Cześć',
        'panel_Dashboard' => 'Panel',
        'panel_Bookings' => 'Rezerwacje',
        'panel_NewBooking' => 'Nowa rezerwacja',
        'panel_Profile' => 'Profil',
        'panel_Logout' => 'Wyloguj',
        'bookingField_ClearBtn' => 'Wyczyść',
        'bookingField_Today' => 'Przejdź do dzisiaj',
        'bookingField_Clear' => 'Wyczyść zaznaczenie',
        'bookingField_Close' => 'Zamknij kalendarz',
        'bookingField_SelectMonth' => 'Wybierz miesiąc',
        'bookingField_PrevMonth' => 'Poprzedni miesiąc',
        'bookingField_NextMonth' => 'Następny miesiąc',
        'bookingField_SelectYear' => 'Wybierz rok',
        'bookingField_PrevYear' => 'Poprzedni rok',
        'bookingField_NextYear' => 'Następny rok',
        'bookingField_SelectDecade' => 'Wybierz dekadę',
        'bookingField_PrevDecade' => 'Poprzednia dekada',
        'bookingField_NextDecade' => 'Następna dekada',
        'bookingField_PrevCentury' => 'Poprzedni wiek',
        'bookingField_NextCentury' => 'Następny wiek',
        'bookingField_ButtonToday' => 'Dzisiaj',
        'bookingField_ButtonNow' => 'Teraz',
        'bookingField_ButtonOK' => 'OK',
        'userProfile_Heading' => 'Profil',
        'userEdit_Heading' => 'Profil / Edycja',
        'userRegister_Heading' => 'Stwórz konto',
        'userLogin_Heading' => 'Zaloguj się / Zarejestruj',
        'userLostPassword_Heading' => 'Zapomniałeś hasła?',
        'userNewPassword_Heading' => 'Wprowadź swoje nowe hasło',
        'userField_Name' => 'Pełne imię i nazwisko',
        'userField_Title' => 'Tytuł',
        'userField_FirstName' => 'Imię',
        'userField_LastName' => 'Nazwisko',
        'userField_Email' => 'E-mail',
        'userField_MobileNumber' => 'Telefon komórkowy',
        'userField_MobileNumberPlaceholder' => 'wraz z kodem do połączeń międzynarodowych',
        'userField_TelephoneNumber' => 'Numer telefonu',
        'userField_EmergencyNumber' => 'Numer na wypadek sytuacji losowych',

        'userField_CompanyName' => 'Nazwa firmy',
        'userField_CompanyNumber' => 'Numer firmy',
        'userField_CompanyTaxNumber' => 'Numer VAT firmy',
        'userField_ProfileTypePrivate' => 'Prywatne',
        'userField_ProfileTypeCompany' => 'Firma',
        'userMsg_CompanyNameRequired' => 'Nazwa firmy jest wymagana.',
        'userMsg_CompanyNumberRequired' => 'Numer firmy jest wymagany.',
        'userMsg_CompanyTaxNumberRequired' => 'Numer VAT firmy jest wymagany.',
        'userField_Departments' => 'Departments',
        'userButton_AddDepartment' => 'Add department',
        'userField_Avatar' => 'Upload avatar',
        'userField_DeleteAvatar' => 'Delete avatar',

        'userField_Address' => 'Adres',
        'userField_City' => 'Miasto',
        'userField_Postcode' => 'Kod pocztowy',
        'userField_County' => 'Województwo',
        'userField_Country' => 'Kraj',
        'userField_CreatedDate' => 'Zarejestrowane dnia',
        'userField_Password' => 'Hasło',
        'userField_ConfirmPassword' => 'Potwierdź hasło',
        'userField_Agree' => 'Zgadzam się z',
        'userField_TermsAndConditions' => 'Warunkami umowy',
        'userField_Token' => 'Token',
        'userButton_Edit' => 'Edytuj',
        'userButton_Save' => 'Zapisz',
        'userButton_Cancel' => 'Anuluj',
        'userButton_Register' => 'Zarejestruj',
        'userButton_Login' => 'Zaloguj',
        'userButton_LostPassword' => 'Zapomniałeś hasła?',
        'userButton_Reset' => 'Zresetuj',
        'userButton_Update' => 'Aktualizuj',
        'userMsg_NotLoggedIn' => 'Nie jesteś zalogowany!',
        'userMsg_RegisterNotAvailable' => 'Rejestracja jest obecnie niemożliwa. Spróbuj ponownie później.',
        'userMsg_LoginNotAvailable' => 'Logowanie jest obecnie niemożliwe. Spróbuj ponownie później.',
        'userMsg_TitleRequired' => 'Tytuł jest wymagany.',
        'userMsg_FirstNameRequired' => 'Imię jest wymagane.',
        'userMsg_LastNameRequired' => 'Nazwisko jest wymagane.',
        'userMsg_MobileNumberRequired' => 'Numer telefonu komórkowego jest wymagany.',
        'userMsg_TelephoneNumberRequired' => 'Numer telefonu jest wymagany.',
        'userMsg_EmergencyNumberRequired' => 'Numer awaryjny jest wymagany.',
        'userMsg_AddressRequired' => 'Adres jest wymagany.',
        'userMsg_PostcodeRequired' => 'Kod pocztowy jest wymagany.',
        'userMsg_CityRequired' => 'Miasto jest wymagane.',
        'userMsg_CountyRequired' => 'Województwo jest wymagane.',
        'userMsg_CountryRequired' => 'Kraj jest wymagany.',
        'userMsg_EmailRequired' => 'E-mail jest wymagany.',
        'userMsg_EmailInvalid' => 'Podany adres e-mail jest nieprawidłowy.',
        'userMsg_EmailTaken' => 'Ten adres e-mail jest już zajęty.',
        'userMsg_PasswordRequired' => 'Hasło jest wymagane.',
        'userMsg_PasswordLength' => 'Hasło musi zawierać więcej niż {passwordLengthMin} i mniej niż {passwordLengthMax}.',
        'userMsg_PasswordSameAsEmail' => 'Hasło nie może być takie samo jak adres e-mail.',
        'userMsg_ConfirmPasswordRequired' => 'Potwierdzenie hasła jest wymagane.',
        'userMsg_ConfirmPasswordNotEqual' => 'Hasło i jego potwierdzenie muszą się zgadzać.',
        'userMsg_TermsAndConditionsRequired' => 'Musisz zgodzić się na nasze warunki i zasady.',
        'userMsg_TokenRequired' => 'Token jest wymagany.',
        'userMsg_TokenInvalid' => 'Token jest nieprawidłowy.',
        'bookingList_Heading' => 'Rezerwacje',
        'bookingInvoice_Heading' => 'Rezerwacje / Faktury',
        'bookingDetails_Heading' => 'Rezerwacje / Szczegóły',
        'bookingHeading_JourneyDetails' => 'Dane podróży',
        'bookingHeading_YourDetails' => 'Twoje dane',
        'bookingHeading_Passengers' => 'Pasażer',
        'bookingHeading_LeadPassenger' => 'Główny pasażer',
        'bookingHeading_LuggugeRequirement' => 'Wymagania względem bagażu',
        'bookingHeading_ReservationDetails' => 'Szczegóły rezerwacji',
        'bookingHeading_SpecialInstructions' => 'Specjalne instrukcje',
        'bookingHeading_GeneralDetails' => 'Ogólne dane rezerwacji',
        'bookingHeading_CheckoutType' => 'Co chciałbyś zrobić teraz?',
        'bookingHeading_CheckoutTypeGuest' => 'Zarezerwować bez rejestrowania',
        'bookingHeading_CheckoutTypeRegister' => 'Zarejestrować się i kontynuować proces rezerwacji',
        'bookingHeading_CheckoutTypeLogin' => 'Jesteś już zarejestrowany? Zaloguj się i kontynuuj',
        'bookingHeading_Login' => 'Zaloguj się i kontynuuj',
        'bookingHeading_Register' => 'Stwórz konto',
        'bookingHeading_Driver' => 'Szczegóły kierowcy',
        'bookingHeading_Vehicle' => 'Szczegóły pojazdu',
        'bookingField_DriverName' => 'Imię',
        'bookingField_DriverAvatar' => 'Zdjęcie',
        'bookingField_DriverPhone' => 'Telefon',
        'bookingField_DriverLicence' => 'Licencja',
        'bookingField_VehicleRegistrationMark' => 'Numer rejestracyjny',
        'bookingField_VehicleMake' => 'Marka',
        'bookingField_VehicleModel' => 'Model',
        'bookingField_VehicleColour' => 'Kolor',
        'bookingField_Ref' => 'Numer referencyjny',
        'bookingField_From' => 'Miejsce odbioru',
        'bookingField_To' => 'Miejsce docelowe',
        'bookingField_Via' => 'Przez',
        'bookingField_Date' => 'Data i czas',
        'bookingField_FlightNumber' => 'Numer lotu',
        'bookingField_FlightLandingTime' => 'Czas lądowania samolotu',
        'bookingField_DepartureCity' => 'Wylot z',
        'bookingField_DepartureFlightNumber' => 'Flight departure number',
        'bookingField_DepartureFlightTime' => 'Flight departure time',
        'bookingField_DepartureFlightCity' => 'Flight departure to',
        'bookingField_WaitingTime' => 'Czas oczekiwania',
        'bookingField_WaitingTimeAfterLanding' => 'minut po wylądowaniu',
        'bookingField_MeetAndGreet' => 'Odbiór na lotnisku',
        'bookingField_MeetingPoint' => 'Miejsce spotkania',
        'bookingField_Vehicle' => 'Samochód',
        'bookingField_Name' => 'Imię i nazwisko',
        'bookingField_Email' => 'E-mail',
        'bookingField_PhoneNumber' => 'Numer telefonu',
        'bookingField_Department' => 'Department',
        'bookingField_Passengers' => 'Pasażerowie',
        'bookingField_ChildSeats' => 'Fotelik dla dzieci',
        'bookingField_BabySeats' => 'Siedzisko dla dzieci',
        'bookingField_InfantSeats' => 'Nosidełko dla niemowlaków',
        'bookingField_Wheelchair' => 'Wózki inwalidzkie',
        'bookingField_Luggage' => 'Walizki',
        'bookingField_HandLuggage' => 'Bagaż podręczny',
        'bookingField_JourneyType' => 'Typ podróży',
        'bookingField_PaymentMethod' => 'Metoda płatności',
        'bookingField_PaymentCharge' => 'Opłata manipulacyjna',
        'bookingField_DiscountCode' => 'Kod zniżkowy',
        'bookingField_DiscountPrice' => 'Cena po żniżce',
        'bookingField_Deposit' => 'Zaliczka',
        'bookingField_CreatedDate' => 'Data rezerwacji',
        'bookingField_Status' => 'Status',
        'bookingField_Summary' => 'Podsumowanie',
        'bookingField_Price' => 'Cena podróży',
        'bookingField_Total' => 'Suma',
        'bookingField_PaymentPrice' => 'Opłata manipulacyjna',
        'bookingField_Payments' => 'Płatności',
        'bookingField_TypeAddress' => 'lub wybierz jedną z sugestii z tej listy:',
        'bookingField_FromPlaceholder' => 'Odbiór z lotniska, adres i kod pocztowy',
        'bookingField_ToPlaceholder' => 'Dowóz na lotnisko, adres i kod pocztowy',
        'bookingField_ViaPlaceholder' => 'Przez lotnisko, adres i kod pocztowy',
        'bookingField_SelectAirportPlaceholder' => 'Wybierz lotnisko',
        'bookingField_DatePlaceholder' => 'Wybierz datę',
        'bookingField_TimePlaceholder' => 'Wybierz godzinę',
        'bookingField_RequiredOn' => 'Data',
        'bookingField_PickupTime' => 'Czas',
        'bookingField_Waypoint' => 'Punkt na trasie',
        'bookingField_WaypointAddress' => 'Pełny adres punktu na trasie',
        'bookingField_Route' => 'Trasa',
        'bookingField_Distance' => 'Dystans',
        'bookingField_Time' => 'Czas',
        'bookingField_EstimatedDistance' => 'Szacowany dystans',
        'bookingField_Miles' => 'mil',
        'bookingField_EstimatedTime' => 'Szacowany czas',
        'bookingField_Minutes' => 'minut',
        'bookingField_ReturnEnable' => 'Podróż powrotna?',
        'bookingField_OneWay' => 'W jedną stronę',
        'bookingField_Return' => 'Powrót',
        'bookingField_Mr' => 'Pan',
        'bookingField_Mrs' => 'Pani',
        'bookingField_Miss' => 'Pani',
        'bookingField_Ms' => 'Pani',
        'bookingField_Dr' => 'Dr',
        'bookingField_Sir' => 'Pan',
        'bookingButton_Details' => 'Szczegóły',
        'bookingButton_More' => 'Opcje rezerwacji',
        'bookingButton_PayNow' => 'Zapłac teraz',
        'bookingButton_Invoice' => 'Faktura',
        'bookingButton_Download' => 'Pobierz',
        'bookingButton_Cancel' => 'Anuluj',
        'bookingButton_Delete' => 'Usuń',
        'bookingButton_Feedback' => 'Zostaw opinię',
        'bookingButton_NewBooking' => 'Nowa rezerwacja',
        'booking_button_show_on_map' => 'Tracking history',
        'bookingButton_Back' => 'Wróć',
        'bookingButton_Print' => 'Drukuj',
        'bookingButton_CustomerAccount' => 'Moje konto',
        'bookingButton_RequestQuote' => 'Poproś o wycenę',
        'bookingButton_ManualQuote' => 'Ręczna wycena',
        'bookingButton_Next' => 'Następny',
        'bookingButton_BookNow' => 'Zarezerwuj',
        'bookingButton_ShowMap' => 'Pokaż mapę',
        'bookingButton_HideMap' => 'Schowaj mapę',
        'bookingButton_Edit' => 'Edytuj',
        'bookingMsg_NoBookings' => 'Nie masz jeszcze żadnych rezerwacji.',
        'bookingMsg_NoBooking' => 'Rezerwacja nie istnieje.',
        'bookingMsg_RequestQuoteInfo' => 'Trasa nie została odnaleziona, ale nadal może',
        'bookingMsg_NoAddressFound' => 'Nie jesteśmy w stanie znaleźć adresu, odpowiadającego temu zapytaniu',
        'ROUTE_RETURN' => ' ',
        'ROUTE_ADDRESS_START' => 'Pełen adres odbioru',
        'ROUTE_ADDRESS_END' => 'Pełen adres punktu docelowego',
        'ROUTE_WAYPOINTS' => 'Przez',
        'ROUTE_DATE' => 'Kiedy',
        'ROUTE_FLIGHT_NUMBER' => 'Numer lotu',
        'ROUTE_FLIGHT_LANDING_TIME' => 'Czas lądowania samolotu',
        'ROUTE_DEPARTURE_CITY' => 'Przylot z',
        'ROUTE_DEPARTURE_FLIGHT_NUMBER' => 'Flight departure number',
        'ROUTE_DEPARTURE_FLIGHT_TIME' => 'Flight departure time',
        'ROUTE_DEPARTURE_FLIGHT_CITY' => 'Flight departure to',
        'ROUTE_MEETING_POINT' => 'Miejsce spotkania',
        'ROUTE_MEETING_POINT_INFO' => 'Hala przylotów',
        'ROUTE_WAITING_TIME' => 'Czas oczekiwania po lądowaniu',
        'ROUTE_MEET_AND_GREET' => 'Odbiór z lotniska',
        'ROUTE_REQUIREMENTS' => 'Dodatkowe instrukcje',
        'ROUTE_REQUIREMENTS_INFO' => '(np. wiek i waga dziecka)',
        'ROUTE_ITEMS' => 'Dodatki',
        'ROUTE_VEHICLE' => 'Samochód',
        'ROUTE_PASSENGERS' => 'Pasażerowie',
        'ROUTE_LUGGAGE' => 'Walizki',
        'ROUTE_HAND_LUGGAGE' => 'Bagaż podręczny',
        'ROUTE_CHILD_SEATS' => 'Fotelik dla dzieci',
        'ROUTE_CHILD_SEATS_INFO' => ' ',
        'ROUTE_BABY_SEATS' => 'Siedzisko dla dzieci',
        'ROUTE_BABY_SEATS_INFO' => ' ',
        'ROUTE_INFANT_SEATS' => 'Nosidełko dla niemowlaków',
        'ROUTE_INFANT_SEATS_INFO' => ' ',
        'ROUTE_WHEELCHAIR' => 'Wózki inwalidzkie',
        'ROUTE_WHEELCHAIR_INFO' => ' ',
        'ROUTE_EXTRA_CHARGES' => 'Podsumowanie',
        'ROUTE_TOTAL_PRICE' => 'Suma',
        'ROUTE_TOTAL_PRICE_EMPTY' => 'Proszę wybierz odbiór, miejsce docelowe, kiedy i samochód, żeby zobaczyć cenę.',
        'CONTACT_TITLE' => 'Tytuł',
        'CONTACT_NAME' => 'Imię i nazwisko',
        'CONTACT_EMAIL' => 'E-mail',
        'CONTACT_MOBILE' => 'Numer telefonu',
        'LEAD_PASSENGER_YES' => 'Dokonuję rezerwacji dla siebie',
        'LEAD_PASSENGER_NO' => 'Dokonuję rezerwacji dla kogoś innego',
        'LEAD_PASSENGER_TITLE' => 'Tytuł',
        'LEAD_PASSENGER_NAME' => 'Pełne imię i nazwisko',
        'LEAD_PASSENGER_EMAIL' => 'E-mail',
        'LEAD_PASSENGER_MOBILE' => 'Numer telefonu',
        'PAYMENT_TYPE' => 'Typ płatności',
        'EXTRA_CHARGES' => 'Inne dodatkowe opłaty',
        'TOTAL_PRICE' => 'Cena całkowita',
        'TOTAL_PRICE_EMPTY' => 'Proszę wybierz odbiór, miejsce docelowe, kiedy i samochód, żeby zobaczyć cenę.',
        'BUTTON_MINIMAL_RESET' => 'Wyczyść',
        'BUTTON_MINIMAL_SUBMIT' => 'Oblicz cenę',
        'BUTTON_COMPLETE_RESET' => 'Wyczyść',
        'BUTTON_COMPLETE_QUOTE_STEP1' => 'Oblicz cenę',
        'BUTTON_COMPLETE_QUOTE_STEP2' => 'Zarezerwuj teraz',
        'BUTTON_COMPLETE_QUOTE_STEP3' => 'Poproś o wycenę',
        'BUTTON_COMPLETE_SUBMIT' => 'Zarezerwuj teraz',
        'SELECT' => '-- Wybierz --',
        'VEHICLE_SELECT' => 'Wybierz',
        'ROUTE_RETURN_NO' => 'W jedną stronę',
        'ROUTE_RETURN_YES' => 'Powrót',
        'TITLE_GEOLOCATION' => 'Pobierz moją aktualną lokalizację',
        'TITLE_REMOVE_WAYPOINTS' => 'Usuń',
        'VEHICLE_PASSENGERS' => 'Maksymalna liczba pasażerów',
        'VEHICLE_LUGGAGE' => 'Maksymalna liczba walizek',
        'VEHICLE_HAND_LUGGAGE' => 'Maksymalnie bagażu podręcznego',
        'VEHICLE_CHILD_SEATS' => 'Maksymalnie fotelików dla dzieci',
        'VEHICLE_BABY_SEATS' => 'Maksymalnie siedziska dla dzieci',
        'VEHICLE_INFANT_SEATS' => 'Maksymalnie nosidełek dla niemowlaków',
        'VEHICLE_WHEELCHAIR' => 'Maksymalnie wózków inwalidzkich',
        'TERMS' => 'Zaznacz w tym miejscu, żeby potwierdzić, że zgadzasz się na <a href="{terms-conditions}" target="_blank" class="jcepopup" rel="{handler: \'iframe\'}">warunki korzystania z serwisu</a>.',
        'MEET_AND_GREET_OPTION_NO' => 'Nie, dziękuję',
        'MEET_AND_GREET_OPTION_YES' => 'Tak',
        'DISCOUNT_CODE' => 'Kod zniżkowy',
        'TITLE_JOURNEY_FROM' => 'Podróż z',
        'TITLE_JOURNEY_TO' => 'Podróż do',
        'TITLE_AIPORT' => 'Lotnisko',
        'TITLE_CRUISE_PORT' => 'Port',
        'TITLE_PICKUP_FROM' => 'Odbiór z',
        'TITLE_DROPOFF_TO' => 'Dowóz do',
        'STEP1_BUTTON' => 'Edytuj podróż',
        'STEP2_BUTTON' => 'Wybierz opłatę za przejazd',
        'STEP3_BUTTON' => 'Zarezerwuj i zapłac online',
        'STEP1_BUTTON_TITLE' => 'Step 1',
        'STEP2_BUTTON_TITLE' => 'Step 2',
        'STEP3_BUTTON_TITLE' => 'Step 3',
        'BTN_RESERVE' => 'Reserve now',
        'STEP3_SECTION1' => 'Twoje dane',
        'STEP3_SECTION2' => 'Pasażerowie',
        'STEP3_SECTION3' => 'Wymagania bagażowe',
        'STEP3_SECTION4' => 'Szczegóły podróży',
        'STEP3_SECTION5' => 'Wróć do szczegółów podróży',
        'STEP3_SECTION6' => 'Zarezerwuj i zapłać',
        'STEP3_SECTION7' => 'Główny pasażer',
        'STEP2_INFO1' => 'Prosimy o kontakt telefoniczny {phone} lub e-mailowy {email} w razie potrzeby transportu bagażu nietypowych rozmiarów.',
        'STEP2_INFO2' => ' ',
        'STEP3_INFO1' => 'Jeśli chcesz zabrać ze sobą bagaż w większym rozmiarze, zadzwoń do nas lub prześlij e-mail z wymiarami.',
        'GEOLOCATION_UNDEFINED' => 'Twoja przeglądarka nie udostępnia lokalizacji',
        'GEOLOCATION_UNABLE' => 'Nie możemy pobrać Twojego adresu',
        'GEOLOCATION_ERROR' => 'Błąd',
        'ERROR_EMPTY_FIELDS' => 'Wypełnij wszystkie puste pola',
        'ERROR_RETURN_EMPTY' => 'Wybierz powrót',
        'ERROR_ROUTE_CATEGORY_START_EMPTY' => 'Wybierz punkt odbioru',
        'ERROR_ROUTE_LOCATION_START_EMPTY' => 'Wpisz miejsce odbioru',
        'ERROR_ROUTE_CATEGORY_END_EMPTY' => 'Wybierz miejsce docelowe',
        'ERROR_ROUTE_LOCATION_END_EMPTY' => 'Wpisz miejsce docelowe',
        'ERROR_ROUTE_WAYPOINT_EMPTY' => 'Punkt na trasie nie może być pusty',
        'ERROR_ROUTE_WAYPOINT_COMPLETE_EMPTY' => 'Adres punktu na trasie nie może być pusty',
        'ERROR_ROUTE_VEHICLE_EMPTY' => 'Wybierz pojazd',
        'ERROR_ROUTE_DATE_EMPTY' => 'Wpisz datę i godzinę',
        'ERROR_ROUTE_DATE_INCORRECT' => 'Wpisz datę i godzinę w odpowiednim formacie',
        'ERROR_ROUTE_DATE_PASSED' => 'Nie możesz zarezerwować podróży w przeszłości',
        'ERROR_ROUTE_DATE_LIMIT' => 'Potrzebujemy co najmniej {number} godzin na potwierdzenie rezerwacji online. Prosimy ZADZWOŃ do nas z prośbą o wycenę lub szybszą rezerwację.',
        'ERROR_ROUTE_DATE_RETURN' => 'Data powrotu musi być późniejsza lub jednakowa jak data wyjazdu',
        'ERROR_ROUTE_FLIGHT_NUMBER_EMPTY' => 'Proszę podać numer lotu',
        'ERROR_ROUTE_FLIGHT_LANDING_TIME_EMPTY' => 'Proszę podać czas lądowania samolotu',
        'ERROR_ROUTE_DEPARTURE_CITY_EMPTY' => 'Proszę podać miejsce wylotu',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_NUMBER_EMPTY' => 'Please enter flight departure number',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_TIME_EMPTY' => 'Please enter flight departure time',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_CITY_EMPTY' => 'Please enter flight departure to',
        'ERROR_ROUTE_WAITING_TIME_EMPTY' => 'Proszę wybrać czas oczekiwania',
        'ERROR_ROUTE_MEET_AND_GREET_EMPTY' => 'Proszę wypełnić opcję odbioru z lotniska',
        'ERROR_ROUTE_PASSENGERS_EMPTY' => 'Proszę wybrać liczbę pasażerów',
        'ERROR_ROUTE_PASSENGERS_INCORRECT' => 'Proszę wybrać liczbę pasażerów',
        'ERROR_ROUTE_LUGGAGE_EMPTY' => 'Proszę wybrać liczbę walizek',
        'ERROR_ROUTE_HANDLUGGAGE_EMPTY' => 'Proszę wybrać liczbę bagażu podręcznego',
        'ERROR_ROUTE_CHILDSEATS_EMPTY' => 'Proszę wybrać liczbę fotelików dla dzieci',
        'ERROR_ROUTE_BABYSEATS_EMPTY' => 'Proszę wybrać liczbę siedziska dla dzieci',
        'ERROR_ROUTE_INFANTSEATS_EMPTY' => 'Porszę wybrać liczbę nosidełek dla niemowlaków',
        'ERROR_ROUTE_WHEELCHAIR_EMPTY' => 'Proszę wybrać liczbę wózków inwalidzkich',
        'ERROR_ROUTE_ADDRESS_START_COMPLETE_EMPTY' => 'Proszę wprowadzić pełny adres odbioru',
        'ERROR_ROUTE_ADDRESS_END_COMPLETE_EMPTY' => 'Proszę wprowadzić pełny adres miejsca docelowego',
        'ERROR_CONTACT_TITLE_EMPTY' => 'Proszę wprowadzić tytuł',
        'ERROR_CONTACT_NAME_EMPTY' => 'Proszę wprowadzić pełne imię i nazwisko',
        'ERROR_CONTACT_EMAIL_EMPTY' => 'Proszę wprowadzić e-mail',
        'ERROR_CONTACT_EMAIL_INCORRECT' => 'Proszę wprowadzić prawidłowy e-mail',
        'ERROR_CONTACT_MOBILE_EMPTY' => 'Proszę wprowadzić numer telefonu kontaktowego',
        'ERROR_CONTACT_MOBILE_INCORRECT' => 'Proszę podać prawidłowy numer kontaktowy',
        'ERROR_LEAD_PASSENGER_TITLE_EMPTY' => 'Proszę podać tytuł głównego pasażera',
        'ERROR_LEAD_PASSENGER_NAME_EMPTY' => 'Proszę podać imię i nazwisko głównego pasażera',
        'ERROR_LEAD_PASSENGER_EMAIL_EMPTY' => 'Proszę wprowadzić e-mail głównego pasażera',
        'ERROR_LEAD_PASSENGER_EMAIL_INCORRECT' => 'Proszę wprowadzić prawidłowy e-mail głównego pasażera',
        'ERROR_LEAD_PASSENGER_MOBILE_EMPTY' => 'Proszę podać numer telefonu komórkowego głównego pasażera',
        'ERROR_LEAD_PASSENGER_MOBILE_INCORRECT' => 'Proszę podać prawidłowy numer telefonu komórkowy głównego pasażera.',
        'ERROR_PAYMENT_EMPTY' => 'Proszę wprowadzić metodę płatności',
        'ERROR_TERMS_EMPTY' => 'Proszę zaakceptować warunki użytkowania serwisu'
    ],

    'old' => [
        'quote_Route' => 'Trasa',
        'quote_From' => 'Z',
        'quote_To' => 'Do',
        'quote_Distance' => 'Dystans',
        'quote_Time' => 'Czas',
        'quote_EstimatedDistance' => 'Szacowany dystans',
        'quote_Miles' => 'mil',
        'quote_Kilometers' => 'km',
        'quote_EstimatedTime' => 'Szacowany czas',
        'quote_Format_LessThanASecond' => 'Mniej niż sekundę',
        'quote_Format_Day' => 'dzień',
        'quote_Format_Days' => 'dni',
        'quote_Format_Hour' => 'godzinę',
        'quote_Format_Hours' => 'godziny',
        'quote_Format_Minute' => 'minutę',
        'quote_Format_Minutes' => 'minuty',
        'quote_Format_Second' => 'sekundę',
        'quote_Format_Seconds' => 'sekundy',
        'quote_Fare' => 'Opłata za przejazd',
        'quote_DiscountExpired' => 'Podany kod zniżkowy jest już nieaktywny lub nieprawidłowy.',
        'quote_DiscountInvalid' => 'Wprowadzony kod zniżkowy jest nieprawidłowy.',
        'quote_DiscountApplied' => 'Zniżka w wysokości <b>{amount}</b> została przyznana.',
        'quote_AccountDiscountApplied' => 'Zniżka w wysokości <b>{amount}</b> na konto została przyznana.',
        'quote_ReturnDiscountApplied' => 'Zniżka w wysokości <b>{amount}</b> na podróż powrotną została przyznana.',

        'API' => [
            'PAYMENT_INFO' => 'Proszę czekać aż zostaniesz przeniesiony na stronę płatności<br />Jeśli to nie wydarzy się po 10 sekundach, kliknij w przycisk poniżej.',
            'PAYMENT_BUTTON' => 'Zapłać teraz',
            'PAYMENT_CHARGE_NOTE' => 'Opłata manipulacyjna',
            'ERROR_NO_CONFIG' => 'Nie znaleziono ustawień!',
            'ERROR_NO_LANGUAGE' => 'Nie znaleziono języka!',
            'ERROR_NO_CATEGORY' => 'Kategoria nie została odnaleziona!',
            'ERROR_NO_VEHICLE' => 'Samochód nie został odnaleziony!',
            'ERROR_NO_PAYMENT' => 'Płatność nie została odnaleziona!',
            'ERROR_NO_LOCATION' => 'Lokalizacja nie została odnaleziona!',
            'ERROR_CATEGORY_EMPTY' => 'Ciąg kategorii jest pusty!',
            'ERROR_CATEGORY_FILTERED_EMPTY' => 'Szereg filtrów kategorii jest pusty!',
            'ERROR_NO_BOOKING' => 'Rezerwacja nie została znaleziona!',
            'ERROR_NO_BOOKING_DATA' => 'Data rezerwacji nie została znaleziona!',
            'ERROR_BOOKING_NOT_SAVED' => 'Przykro nam, ale rezerwacja nie mogła zostać zapisana!',
            'ERROR_NO_CHARGE' => 'Opłata nie została znaleziona!',
            'ERROR_NO_ROUTE1' => 'Trasa nie została znaleziona, podaj pełny adres.',
            'ERROR_NO_ROUTE2' => 'Trasa nie została znaleziona, podaj pełny adres.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_START' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online z tego miejsca odbioru. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_END' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online do tego miejsca docelowego. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_START' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online z tego miejsca odbioru. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_END' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online do tego miejsca docelowego. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_NO_ROUTE1_EXCLUDED_ROUTE' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online na tej trasie. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_NO_ROUTE2_EXCLUDED_ROUTE' => 'Przykro nam, ale nie jesteśmy w stanie zarezerwować podróży online na tej trasie. W celu otrzymania dodatkowych informacji, skontaktuj się z naszym biurem.',
            'ERROR_POSTCODE_MATCH' => 'If you are using the software outside of the UK we recommend disable setting "Better use of postcode based Fixed Price system" located in Settings -> Google.',
        ]
    ]

];
