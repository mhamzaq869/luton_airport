<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hungarian (hu-HU) - Frontend
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

    'bookingField_Fare' => 'Viteldíj',
    'bookingField_Ref' => 'Referenciaszám',
    'bookingField_From' => 'Utasfelvétel',
    'bookingField_To' => 'Uticél',
    'bookingField_Via' => 'Keresztül',
    'bookingField_Date' => 'Sátum és Idő',
    'bookingField_Vehicle' => 'Jármű',
    'bookingField_Passengers' => 'Utasok',
    'bookingField_ChildSeats' => 'Gyermekülés',
    'bookingField_BabySeats' => 'Ülésmagasító',
    'bookingField_InfantSeats' => 'Csecsemőülés',
    'bookingField_Wheelchair' => 'Tolókocsi',
    'bookingField_Luggage' => 'Bőröndök',
    'bookingField_HandLuggage' => 'Kabin csomag',
    'bookingField_LeadPassenger' => 'Vezető utas',
    'bookingField_Yes' => 'Igen',
    'bookingField_No' => 'Nem',
    'bookingField_Return' => 'Retur',
    'bookingField_OneWay' => 'Oda',
    'bookingMsg_NoBookings' => 'Nem találtunk foglalást.',
    'bookingMsg_NoBooking' => 'Nem létező foglalás.',
    'bookingMsg_InvoiceDisabled' => 'Sajnáljuk, de a számla most nem elérhető.',
    'bookingMsg_SendingFailure' => 'Hiba a küldésben',
    'bookingMsg_CanceledSuccess' => 'Foglalás <b>{refNumber}</b> sikeresen törölve.',
    'bookingMsg_CanceledFailure' => 'Foglalás <b>{refNumber}</b> nem tudtuk törölni.',

    'userMsg_NoUser' => 'Nem létező fiók.',
    'userMsg_SendingFailure' => 'Hiba a küldésben',
    'userMsg_ProfileUpdateSuccess' => 'A profilod sikeresen frissült.',
    'userMsg_RegisterNotAvailable' => 'Jelenleg nem tud regisztrálni. Kérjük próbálja újra később.',
    'userMsg_LoginNotAvailable' => 'Jelenleg nem tud belépni. Kérjük próbálja újra később.',
    'userMsg_Resend' => 'A fiókja sikeresen létrejött.<br />Belépés előtt kérjük aktiválja a linkre kattintva amit e-mailben elküldtünk Önnek <b>{userEmail}</b>. <a href="{resendLink}" target="_blank">Újraküldése</a>',
    'userMsg_RegisterSuccess' => 'A fiókja sikeresen létrejött, már be tud jelentkezni.',
    'userMsg_RegisterFailure' => 'Fiókját nem tudjuk létrehozni.',
    'userMsg_ActivationDone' => 'A fiókját sikeresen aktiválta, már be tud jelentkezni.',
    'userMsg_ActivationSuccess' => 'A fiókját sikeresen aktiválta, kérjük jelentkezzen be.',
    'userMsg_ActivationUnfinished' => 'A fiókja még nem lett aktiválva. Kérjük ellenőrizze le, hogy az aktiváló e-mail megérkezett-e?',
    'userMsg_Blocked' => 'A fiókját zároltuk.',
    'userMsg_LoginSuccess' => 'Sikeresen belépett.',
    'userMsg_LoginFailure' => 'Az email cím és a jelszó nem egyezik meg, vagy Önnek még nincs fiókja.',
    'userMsg_PasswordReset' => 'Küldtünk egy visszaállító jelszó token-t az email címére. Kérjük ellenőrizze email fiókját.',
    'userMsg_PasswordUpdateSuccess' => 'Jelszavát sikeresen frissítette, már be tud jelentkezni.',
    'userMsg_LogoutSuccess' => 'Sikeresen kilépett!',
    'userMsg_LogoutFailure' => 'A kilépés sikertelen. Kérjük próbálja újra.',
    'userMsg_TitleRequired' => 'Cím szükséges.',
    'userMsg_FirstNameRequired' => 'Vezetéknév szükséges.',
    'userMsg_LastNameRequired' => 'Családnév szükséges.',
    'userMsg_MobileNumberRequired' => 'Mobil szám szükséges.',
    'userMsg_TelephoneNumberRequired' => 'Telefonszám szükséges.',
    'userMsg_EmergencyNumberRequired' => 'Másodlagos telefonszám szükséges.',
    'userMsg_AddressRequired' => 'Cím szükséges.',
    'userMsg_CityRequired' => 'Város szükséges.',
    'userMsg_PostcodeRequired' => 'Irányítószám szükséges.',
    'userMsg_CountyRequired' => 'Megye szükséges.',
    'userMsg_CountryRequired' => 'Ország szükséges.',
    'userMsg_EmailRequired' => 'E-mail cím szükséges.',
    'userMsg_EmailInvalid' => 'Az email cím helytelen.',
    'userMsg_EmailTaken' => 'Ez az email cím már használatban van.',
    'userMsg_PasswordRequired' => 'Jelszó szükséges.',
    'userMsg_PasswordLength' => 'A jelszó tübb legyen mint {passwordLengthMin} és kevesebb mint {passwordLengthMax} karakter.',
    'userMsg_PasswordSameAsEmail' => 'A jelszó nem egyezhet meg az e-mail címmel.',
    'userMsg_ConfirmPasswordRequired' => 'Kérjük erősítse meg jelszavát.',
    'userMsg_ConfirmPasswordNotEqual' => 'A megerősítő jelszónak meg kell egyeznie az eredeti jelszóval.',
    'userMsg_TermsAndConditionsRequired' => 'Kérjük fogadja el a felhasználói feltételeket.',
    'userMsg_TokenRequired' => 'Token szükséges.',
    'userMsg_TokenInvalid' => 'A token érvénytelen.',
    'userMsg_CompanyNameRequired' => 'Cég név szükséges.',
    'userMsg_CompanyNumberRequired' => 'Cég regisztrációs száma szükséges.',
    'userMsg_CompanyTaxNumberRequired' => 'Cég ÁFA száma szükséges.',

    'js' => [
        'bookingTitleCancel' => 'Are you sure you want to cancel?',
        'bookingMsgCancel' => 'Please see {link}terms{/link}',
        'bookingMsgEdit' => 'To change the booking, please contact us at {email} or call us on {phone}.',
        'bookingYes' => 'Yes',
        'bookingNo' => 'No',
        'bookingDepartureFlightTimeWarning' => 'Pickup date and time has been changed to allow enough time to get to the airport before your flight is due.',
        'bookingTimePickerMinutes' => 'Pickup in {time} minutes',
        'bookingHeading_Step1Mini' => 'Quote & Book',
        'bookingMemberBenefits' => 'Regisztráljon és élvezze a kedvezményeket',
        'accountBenefits' => "Gyors és könnyű a foglalás menete\r\nElsőbbség a tagoknak a nem tagokkal szemben\r\nKövetheti foglalásait\r\nMegnézheti a korábbi foglalásait\r\nIngyenes csatlakozás", // Azonnali 5% kedvezmény minden foglalásból
        'bookingFlightMsg' => 'Járat száma',
        'bookingDepartureFlightMsg' => 'Departure flight id number',
        'bookingFlightExample' => 'pl. W6 2201',
        'bookingOptional' => 'Választható',
        'bookingField_MoreOption' => 'Gyermekülés választás',
        'bookingBookByPhone' => 'Book by phone here',
        'bookingNoVehiclesAvailable' => 'None of the vehicles are available matching your search criteria. Please try again by adjusting your choice.',
        'bookingPayDeposit' => 'Csak előleges fizet.',
        'bookingPayFullAmount' => 'A teljes összeget kifizeti.',
        'bookingVehicle_NotAvailable' => 'Nem elérhető.',
        'bookingVehicle_Booked' => 'Foglalt',
        'bookingVehicle_LinkEnquire' => 'Érdeklődjön most',
        'bookingVehicle_LinkAvailability' => 'Ellenőrizze az elérhetőséget',
        'bookingField_ChildSeatsNeeded' => 'Kérek gyermekülést',
        'bookingField_Services' => 'A szolgáltatás típusa',
        'bookingField_ServicesDuration' => 'Időtartam',
        'bookingField_ServicesSelect' => 'A szolgáltatás típusa',
        'bookingField_ServicesDurationSelect' => 'Időtartam',
        'ERROR_SERVICES_EMPTY' => 'Kérjük válasszon szolgáltatási típust',
        'ERROR_SERVICES_DURATION_EMPTY' => 'Kérjük válasszon időtartamot',

        'print_Heading' => 'Foglalás részletei',
        'button_Close' => 'Bezár',
        'panel_Hello' => 'Hello',
        'panel_Dashboard' => 'Felhasználó felület',
        'panel_Bookings' => 'Foglalások',
        'panel_NewBooking' => 'Új Foglalás',
        'panel_Profile' => 'Profil',
        'panel_Logout' => 'Kilépés',
        'bookingField_ClearBtn' => 'Kitöröl',
        'bookingField_Today' => 'Menjen a mai naphoz',
        'bookingField_Clear' => 'Törölje a kiválasztást',
        'bookingField_Close' => 'Zárja be a választót',
        'bookingField_SelectMonth' => 'Válasszon hónapot',
        'bookingField_PrevMonth' => 'Előző hónap',
        'bookingField_NextMonth' => 'Következő hónap',
        'bookingField_SelectYear' => 'Válasszon évet',
        'bookingField_PrevYear' => 'Előző év',
        'bookingField_NextYear' => 'Következő év',
        'bookingField_SelectDecade' => 'Válasszon évet',
        'bookingField_PrevDecade' => 'Előző év',
        'bookingField_NextDecade' => 'Következő év',
        'bookingField_PrevCentury' => 'Előző évszázad',
        'bookingField_NextCentury' => 'Következő évszázad',
        'bookingField_ButtonToday' => 'Ma',
        'bookingField_ButtonNow' => 'Most',
        'bookingField_ButtonOK' => 'OK',
        'userProfile_Heading' => 'Profil',
        'userEdit_Heading' => 'Profil / Szerkesztés',
        'userRegister_Heading' => 'Fiók létrehozása',
        'userLogin_Heading' => 'Belépés / Regisztráció',
        'userLostPassword_Heading' => 'Elfelejtette a jelszavát?',
        'userNewPassword_Heading' => 'Írja be az új jelszavát',
        'userField_Name' => 'Teljes név',
        'userField_Title' => 'Cím',
        'userField_FirstName' => 'Keresztnév',
        'userField_LastName' => 'Vezetéknév',
        'userField_Email' => 'E-mail cím',
        'userField_MobileNumber' => 'Mobil szám',
        'userField_MobileNumberPlaceholder' => 'Beleértve a nemzetközi hívószámot is',
        'userField_TelephoneNumber' => 'Telefonszám',
        'userField_EmergencyNumber' => 'Másodlagos telefonszám',

        'userField_CompanyName' => 'Cég név',
        'userField_CompanyNumber' => 'Cég regisztrációs száma',
        'userField_CompanyTaxNumber' => 'Cég ÁFA száma',
        'userField_ProfileTypePrivate' => 'Privát',
        'userField_ProfileTypeCompany' => 'Cég',
        'userMsg_CompanyNameRequired' => 'Cég név szükséges.',
        'userMsg_CompanyNumberRequired' => 'Cég regisztrációs száma szükséges.',
        'userMsg_CompanyTaxNumberRequired' => 'Cég ÁFA száma szükséges.',
        'userField_Departments' => 'Departments',
        'userButton_AddDepartment' => 'Add department',
        'userField_Avatar' => 'Upload avatar',
        'userField_DeleteAvatar' => 'Delete avatar',

        'userField_Address' => 'Cím',
        'userField_City' => 'Város',
        'userField_Postcode' => 'Irányítószám',
        'userField_County' => 'Megye',
        'userField_Country' => 'Ország',
        'userField_CreatedDate' => 'Regisztráció ideje',
        'userField_Password' => 'Jelszó',
        'userField_ConfirmPassword' => 'Erősítse meg jelszavát.',
        'userField_Agree' => 'Elfogadom a ',
        'userField_TermsAndConditions' => 'Felhasználó feltételek',
        'userField_Token' => 'Token',
        'userButton_Edit' => 'Szerkesztés',
        'userButton_Save' => 'Mentés',
        'userButton_Cancel' => 'Visszavon',
        'userButton_Register' => 'Regisztrál',
        'userButton_Login' => 'Belépés',
        'userButton_LostPassword' => 'Elfelejtette a jelszavát?',
        'userButton_Reset' => 'Visszaállít',
        'userButton_Update' => 'Frissít',
        'userMsg_NotLoggedIn' => 'Ön nincs belépve!',
        'userMsg_RegisterNotAvailable' => 'Jelenleg nem tud regisztrálni. Kérjük próbálja újra később.',
        'userMsg_LoginNotAvailable' => 'Jelenleg nem tud belépni. Kérjük próbálja újra később.',
        'userMsg_TitleRequired' => 'Cím szükséges.',
        'userMsg_FirstNameRequired' => 'Keresztnév szükséges.',
        'userMsg_LastNameRequired' => 'Vezetéknév szükséges.',
        'userMsg_MobileNumberRequired' => 'Mobil szám szükséges.',
        'userMsg_TelephoneNumberRequired' => 'Telefonszám szükséges.',
        'userMsg_EmergencyNumberRequired' => 'Másodlagos telefonszám szükséges.',
        'userMsg_AddressRequired' => 'Cím szükséges.',
        'userMsg_PostcodeRequired' => 'Irányítószám szükséges.',
        'userMsg_CityRequired' => 'Város szükséges.',
        'userMsg_CountyRequired' => 'Megye szükséges.',
        'userMsg_CountryRequired' => 'Ország szükséges.',
        'userMsg_EmailRequired' => 'E-mail cím szükséges.',
        'userMsg_EmailInvalid' => 'Az email cím helytelen.',
        'userMsg_EmailTaken' => 'Ez az e-mail cím már használatban van.',
        'userMsg_PasswordRequired' => 'Jelszó szükséges.',
        'userMsg_PasswordLength' => 'A jelszó több legyen mint {passwordLengthMin} és kevesebb mint {passwordLengthMax} karakter.',
        'userMsg_PasswordSameAsEmail' => 'A jelszó nem egyezhet meg az e-mail címmel.',
        'userMsg_ConfirmPasswordRequired' => 'Kérjük erősítse meg jelszavát.',
        'userMsg_ConfirmPasswordNotEqual' => 'A megerősítő jelszónak meg kell egyeznie az eredeti jelszóval.',
        'userMsg_TermsAndConditionsRequired' => 'Kérjük fogadja el a felhasználói feltételeket.',
        'userMsg_TokenRequired' => 'Token szükséges.',
        'userMsg_TokenInvalid' => 'A token érvénytelen.',
        'bookingList_Heading' => 'Foglalások',
        'bookingInvoice_Heading' => 'Foglalás / Számla',
        'bookingDetails_Heading' => 'Foglalás / Részletek',
        'bookingHeading_JourneyDetails' => 'Utazás részletei',
        'bookingHeading_YourDetails' => 'Az Ön adatai',
        'bookingHeading_Passengers' => 'Utasok',
        'bookingHeading_LeadPassenger' => 'Vezető utas',
        'bookingHeading_LuggugeRequirement' => 'Csomag követelmény',
        'bookingHeading_ReservationDetails' => 'Foglalás részletei',
        'bookingHeading_SpecialInstructions' => 'speciális instrukciók',
        'bookingHeading_GeneralDetails' => 'Általános foglalási adatok',
        'bookingHeading_CheckoutType' => 'Mi a következő lépés?',
        'bookingHeading_CheckoutTypeGuest' => 'Foglalás regisztráció nélkül',
        'bookingHeading_CheckoutTypeRegister' => 'Regisztráljon és folytassa a foglalást',
        'bookingHeading_CheckoutTypeLogin' => 'Már van fiókja? Lépjen be és folytassa',
        'bookingHeading_Login' => 'Lépjen be és folytassa',
        'bookingHeading_Register' => 'Hozzon lérte egy fiókot',
        'bookingHeading_Driver' => 'Vezető adatai',
        'bookingHeading_Vehicle' => 'Jármű adatai',
        'bookingField_DriverName' => 'Név',
        'bookingField_DriverAvatar' => 'Fénykép',
        'bookingField_DriverPhone' => 'Telefon',
        'bookingField_DriverLicence' => 'Engedély',
        'bookingField_VehicleRegistrationMark' => 'Regisztrációs szám',
        'bookingField_VehicleMake' => 'Márka',
        'bookingField_VehicleModel' => 'Modell',
        'bookingField_VehicleColour' => 'Szín',
        'bookingField_Ref' => 'Referenciaszám',
        'bookingField_From' => 'Felvétel',
        'bookingField_To' => 'Uticél',
        'bookingField_Via' => 'keresztül',
        'bookingField_Date' => 'Dátum és Idő',
        'bookingField_FlightNumber' => 'Járatszám',
        'bookingField_FlightLandingTime' => 'Repülési idő',
        'bookingField_DepartureCity' => 'Kiindulási város',
        'bookingField_DepartureFlightNumber' => 'Flight departure number',
        'bookingField_DepartureFlightTime' => 'Flight departure time',
        'bookingField_DepartureFlightCity' => 'Flight departure to',
        'bookingField_WaitingTime' => 'Várakozási idő',
        'bookingField_WaitingTimeAfterLanding' => 'perccel a leszállás után',
        'bookingField_MeetAndGreet' => 'Találkozás a terminálban',
        'bookingField_MeetingPoint' => 'Találkozási pont',
        'bookingField_Vehicle' => 'Jármű',
        'bookingField_Name' => 'Teljes név',
        'bookingField_Email' => 'E-mail cím',
        'bookingField_PhoneNumber' => 'Telefonszám',
        'bookingField_Department' => 'Department',
        'bookingField_Passengers' => 'Utasok',
        'bookingField_ChildSeats' => 'Gyermekülés',
        'bookingField_BabySeats' => 'Ülésmagasító',
        'bookingField_InfantSeats' => 'Csecsemőülés',
        'bookingField_Wheelchair' => 'Tolókocsi',
        'bookingField_Luggage' => 'Bőröndök',
        'bookingField_HandLuggage' => 'Fedélzeti csomag',
        'bookingField_JourneyType' => 'Fuvar típus',
        'bookingField_PaymentMethod' => 'Fizetési mód',
        'bookingField_PaymentCharge' => 'Fizetési díj',
        'bookingField_DiscountCode' => 'Kedvezményes kód',
        'bookingField_DiscountPrice' => 'Kedvezményes fuvardíj',
        'bookingField_Deposit' => 'Előleg',
        'bookingField_CreatedDate' => 'Foglalás napja',
        'bookingField_Status' => 'Státus',
        'bookingField_Summary' => 'Összefoglalás',
        'bookingField_Price' => 'Fuvardíj',
        'bookingField_Total' => 'Összesen',
        'bookingField_PaymentPrice' => 'Fizetési díj',
        'bookingField_Payments' => 'Fizetések',
        'bookingField_TypeAddress' => 'vagy válasszon a listából:',
        'bookingField_FromPlaceholder' => 'HONNAN (irányítószám vagy reptér neve)',
        'bookingField_ToPlaceholder' => 'HOVA (irányítószám vagy reptér neve)',
        'bookingField_ViaPlaceholder' => 'Repülőtéren keresztül, irányítószám',
        'bookingField_SelectAirportPlaceholder' => 'Válasszon repülőteret',
        'bookingField_DatePlaceholder' => 'Válasszon dátumot',
        'bookingField_TimePlaceholder' => 'Válasszon időt',
        'bookingField_RequiredOn' => 'Dátum',
        'bookingField_PickupTime' => 'Idő',
        'bookingField_Waypoint' => 'Keresztül',
        'bookingField_WaypointAddress' => 'Teljes cím',
        'bookingField_Route' => 'Útvonal',
        'bookingField_Distance' => 'Távolság',
        'bookingField_Time' => 'Idő',
        'bookingField_EstimatedDistance' => 'Becsült távolság',
        'bookingField_Miles' => 'mérföld',
        'bookingField_EstimatedTime' => 'Becsült idő',
        'bookingField_Minutes' => 'percek',
        'bookingField_ReturnEnable' => 'Visszaút?',
        'bookingField_OneWay' => 'Oda',
        'bookingField_Return' => 'Visszaút',
        'bookingField_Mr' => 'Mr',
        'bookingField_Mrs' => 'Mrs',
        'bookingField_Miss' => 'Miss',
        'bookingField_Ms' => 'Ms',
        'bookingField_Dr' => 'Dr',
        'bookingField_Sir' => 'Sir',
        'bookingButton_Details' => 'Részletek',
        'bookingButton_More' => 'Foglalási lehetőségek',
        'bookingButton_PayNow' => 'Fizetés most',
        'bookingButton_Invoice' => 'Számla',
        'bookingButton_Download' => 'Letöltés',
        'bookingButton_Cancel' => 'Visszavon',
        'bookingButton_Delete' => 'Töröl',
        'bookingButton_Feedback' => 'Hagyjon véleményt',
        'bookingButton_NewBooking' => 'Új foglalás',
        'booking_button_show_on_map' => 'Tracking history',
        'bookingButton_Back' => 'Vissza',
        'bookingButton_Print' => 'Nyomtatás',
        'bookingButton_CustomerAccount' => 'A fiókom',
        'bookingButton_RequestQuote' => 'Árajánlatkérés',
        'bookingButton_ManualQuote' => 'Kézi árajánlat',
        'bookingButton_Next' => 'Következő',
        'bookingButton_BookNow' => 'Foglaljon most',
        'bookingButton_ShowMap' => 'Mutassa a térképet',
        'bookingButton_HideMap' => 'Térkép elrejtése',
        'bookingButton_Edit' => 'Szerkesztés',
        'bookingMsg_NoBookings' => 'Nincs még foglalása.',
        'bookingMsg_NoBooking' => 'Nem létező foglalás.',
        'bookingMsg_RequestQuoteInfo' => 'Az útvonal nem található, de lehet',
        'bookingMsg_NoAddressFound' => 'Nem sikerült olyan címet találni, amely megfelel az aktuális lekérdezésnek',
        'ROUTE_RETURN' => ' ',
        'ROUTE_ADDRESS_START' => 'Felvétel címe',
        'ROUTE_ADDRESS_END' => 'Célállomás címe',
        'ROUTE_SWAP_LOCATIONS' => 'Megcseréli a címeket',
        'ROUTE_WAYPOINTS' => 'Keresztül',
        'ROUTE_DATE' => 'Mikor',
        'ROUTE_FLIGHT_NUMBER' => 'Járatszám',
        'ROUTE_FLIGHT_LANDING_TIME' => 'Repülési idő',
        'ROUTE_DEPARTURE_CITY' => 'Honnan érkezik',
        'ROUTE_DEPARTURE_FLIGHT_NUMBER' => 'Flight departure number',
        'ROUTE_DEPARTURE_FLIGHT_TIME' => 'Flight departure time',
        'ROUTE_DEPARTURE_FLIGHT_CITY' => 'Flight departure to',
        'ROUTE_MEETING_POINT' => 'Találkozási pont',
        'ROUTE_MEETING_POINT_INFO' => 'Érkezési terem',
        'ROUTE_WAITING_TIME' => 'Hány perccel érkezés után?',
        'ROUTE_MEET_AND_GREET' => 'Találkozás a terminálban',
        'ROUTE_REQUIREMENTS' => 'Speciális instrukciók',
        'ROUTE_REQUIREMENTS_INFO' => '(gyermek kora, súlya stb.)',
        'ROUTE_ITEMS' => 'Hozzáad',
        'ROUTE_VEHICLE' => 'Jármű',
        'ROUTE_PASSENGERS' => 'Utasok',
        'ROUTE_LUGGAGE' => 'Bőröndök',
        'ROUTE_HAND_LUGGAGE' => 'Kabin bőrönd',
        'ROUTE_CHILD_SEATS' => 'Gyermekülés',
        'ROUTE_CHILD_SEATS_INFO' => ' ',
        'ROUTE_BABY_SEATS' => 'Ülésmagasító',
        'ROUTE_BABY_SEATS_INFO' => ' ',
        'ROUTE_INFANT_SEATS' => 'Csecsemőülés',
        'ROUTE_INFANT_SEATS_INFO' => ' ',
        'ROUTE_WHEELCHAIR' => 'Tolókocsi',
        'ROUTE_WHEELCHAIR_INFO' => ' ',
        'ROUTE_EXTRA_CHARGES' => 'Összefoglalás',
        'ROUTE_TOTAL_PRICE' => 'Összesen',
        'ROUTE_TOTAL_PRICE_EMPTY' => 'Kérjük válasszon felvételi pontot, célállomást, autót és mikor utazik, hogy az árat ki tudjuk kalkulálni.',
        'CONTACT_TITLE' => 'Cím',
        'CONTACT_NAME' => 'Teljes név',
        'CONTACT_EMAIL' => 'E-mail cím',
        'CONTACT_MOBILE' => 'Telefonszám',
        'LEAD_PASSENGER_YES' => 'Saját részre foglalok',
        'LEAD_PASSENGER_NO' => 'Más részére foglalok',
        'LEAD_PASSENGER_TITLE' => 'Cím',
        'LEAD_PASSENGER_NAME' => 'Teljes név',
        'LEAD_PASSENGER_EMAIL' => 'E-mail cím',
        'LEAD_PASSENGER_MOBILE' => 'Telefonszám',
        'PAYMENT_TYPE' => 'Fizetési mód',
        'EXTRA_CHARGES' => 'Egyéb díjak',
        'TOTAL_PRICE' => 'Fuvardíj összesen',
        'TOTAL_PRICE_EMPTY' => 'Kérjük válasszon felvételi pontot, célállomást, autót és mikor utazik, hogy az árat ki tudjuk kalkulálni.',
        'BUTTON_MINIMAL_RESET' => 'Töröl',
        'BUTTON_MINIMAL_SUBMIT' => 'Fuvardíj',
        'BUTTON_COMPLETE_RESET' => 'Töröl',
        'BUTTON_COMPLETE_QUOTE_STEP1' => 'Fuvardíj',
        'BUTTON_COMPLETE_QUOTE_STEP2' => 'Foglalás',
        'BUTTON_COMPLETE_QUOTE_STEP3' => 'Árajánlatkérés',
        'BUTTON_COMPLETE_SUBMIT' => 'Foglalás',
        'SELECT' => '-- Választás --',
        'VEHICLE_SELECT' => 'Választás',
        'ROUTE_RETURN_NO' => 'Egyirányú',
        'ROUTE_RETURN_YES' => 'Retur',
        'TITLE_GEOLOCATION' => 'Keresse meg a jelenlegi helyemet',
        'TITLE_REMOVE_WAYPOINTS' => 'Eltávolít',
        'VEHICLE_PASSENGERS' => 'Utasok száma max',
        'VEHICLE_LUGGAGE' => 'Bőröndök száma max',
        'VEHICLE_HAND_LUGGAGE' => 'Kabin csomagok száma max',
        'VEHICLE_CHILD_SEATS' => 'Gyerekülés maximális száma',
        'VEHICLE_BABY_SEATS' => 'Ülésmagasító maximális száma',
        'VEHICLE_INFANT_SEATS' => 'Csecsemőülés maximális száma',
        'VEHICLE_WHEELCHAIR' => 'Tolókocsi maximális száma',
        'TERMS' => 'Kérjük, jelölje be a négyzetet, hogy elfogadja a <a href="{terms-conditions}" target="_blank" class="jcepopup" rel="{handler: \'iframe\'}">Felhasználói feltételeket</a>.',
        'MEET_AND_GREET_OPTION_NO' => 'Nem, Köszönöm',
        'MEET_AND_GREET_OPTION_YES' => 'Igen',
        'DISCOUNT_CODE' => 'Kedvezmény kód',
        'TITLE_JOURNEY_FROM' => 'Utazás innét',
        'TITLE_JOURNEY_TO' => 'Utazás ide',
        'TITLE_AIPORT' => 'Repülőtér',
        'TITLE_CRUISE_PORT' => 'Hajó kikötő',
        'TITLE_PICKUP_FROM' => 'Utasfelvétel helye',
        'TITLE_DROPOFF_TO' => 'Célállomás',
        'STEP1_BUTTON' => 'Útvonal szerkesztés',
        'STEP2_BUTTON' => 'Válassza ki az autót',
        'STEP3_BUTTON' => 'Foglaljon  online',
        'STEP1_BUTTON_TITLE' => 'Lépés 1',
        'STEP2_BUTTON_TITLE' => 'Lépés 2',
        'STEP3_BUTTON_TITLE' => 'Lépés 3',
        'BTN_RESERVE' => 'Foglaljon most',
        'STEP3_SECTION1' => 'Adatai',
        'STEP3_SECTION2' => 'Utasok',
        'STEP3_SECTION3' => 'Csomag követelmény',
        'STEP3_SECTION4' => 'Utazás részletei',
        'STEP3_SECTION5' => 'Visszaút részletei',
        'STEP3_SECTION6' => 'FOGLALÁS ÉS FIZETÉS',
        'STEP3_SECTION7' => 'Vezető Utas',
        'STEP2_INFO1' => 'Kérjük hívjon a {phone} számon vagy írjon e-mailt a {email} címre ha a csomagok mérete eltér a standard méretektől.',
        'STEP2_INFO2' => ' ',
        'STEP3_INFO1' => 'Amennyiben nem standard méretű pogyásszal utazik, kérjük hívja irodánkat vagy e-mailben jelezze a méreteket.',
        'GEOLOCATION_UNDEFINED' => 'Az Ön böngészője nem támogatja a Geolocation API-t',
        'GEOLOCATION_UNABLE' => 'Nem sikerült lekérni a címét',
        'GEOLOCATION_ERROR' => 'Hiba',
        'ERROR_EMPTY_FIELDS' => 'Kérjük töltse ki az üres mezőket',
        'ERROR_RETURN_EMPTY' => 'Kérjük válassza ki a visszautat',
        'ERROR_ROUTE_CATEGORY_START_EMPTY' => 'Kérjük válassza ki a felvételi pontot',
        'ERROR_ROUTE_LOCATION_START_EMPTY' => 'Kérjük írja be a felvételi pontot',
        'ERROR_ROUTE_CATEGORY_END_EMPTY' => 'Kérjük válasszon uticélt',
        'ERROR_ROUTE_LOCATION_END_EMPTY' => 'Kérjük írja be az uticélt',
        'ERROR_ROUTE_WAYPOINT_EMPTY' => 'Waypoint nem lehet üres',
        'ERROR_ROUTE_WAYPOINT_COMPLETE_EMPTY' => 'Waypoint cím nem lehet üres',
        'ERROR_ROUTE_VEHICLE_EMPTY' => 'Kérjük válasszon járművet',
        'ERROR_ROUTE_DATE_EMPTY' => 'Kérjük írja be a dátumot és az időt',
        'ERROR_ROUTE_DATE_INCORRECT' => 'Kérjük írja be a dátumot és az időt a megfelelő formátumban',
        'ERROR_ROUTE_DATE_PASSED' => 'Nem tudja lefoglalni ezt az utat időben!',
        'ERROR_ROUTE_DATE_LIMIT' => 'Kérjük hagyjon legalább {number} órát internetes foglalásnál. Kérjük HÍVJON minket árajánlat és foglalás ügyében.',
        'ERROR_ROUTE_DATE_RETURN' => 'A visszaút csak később lehet mint az eredeti foglalás.',
        'ERROR_ROUTE_FLIGHT_NUMBER_EMPTY' => 'Kérjük írja be a járatszámot',
        'ERROR_ROUTE_FLIGHT_LANDING_TIME_EMPTY' => 'Kérjük, adja meg a repülés indulási idejét',
        'ERROR_ROUTE_DEPARTURE_CITY_EMPTY' => 'Kérjük írja be honnét utazik',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_NUMBER_EMPTY' => 'Please enter flight departure number',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_TIME_EMPTY' => 'Please enter flight departure time',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_CITY_EMPTY' => 'Please enter flight departure to',
        'ERROR_ROUTE_WAITING_TIME_EMPTY' => 'Kérjük írja be a várakozási időt',
        'ERROR_ROUTE_MEET_AND_GREET_EMPTY' => 'Kérjük írja be amennyiben igényli, hogy a sofőr táblával a terminálban várja.',
        'ERROR_ROUTE_PASSENGERS_EMPTY' => 'Kérjük válassza ki az utasok számát.',
        'ERROR_ROUTE_PASSENGERS_INCORRECT' => 'Kérjük válassza ki az utasok számát.',
        'ERROR_ROUTE_LUGGAGE_EMPTY' => 'Kérjük válassza ki a bőröndök számát.',
        'ERROR_ROUTE_HANDLUGGAGE_EMPTY' => 'Kérjük válassza ki a kabin bőröndök számát',
        'ERROR_ROUTE_CHILDSEATS_EMPTY' => 'Kérjük válassza ki a gyermekülések számát',
        'ERROR_ROUTE_BABYSEATS_EMPTY' => 'Kérjük válassz aki az ülésmagasítók számát',
        'ERROR_ROUTE_INFANTSEATS_EMPTY' => 'Kérjük válassz aki a csecsemőülések számát',
        'ERROR_ROUTE_WHEELCHAIR_EMPTY' => 'Kérjük válassz aki a tolókocsik számát',
        'ERROR_ROUTE_ADDRESS_START_COMPLETE_EMPTY' => 'Kérjük írja be a felvételi hely teljes címét',
        'ERROR_ROUTE_ADDRESS_END_COMPLETE_EMPTY' => 'Kérjük írja be a végállomás teljes címét',
        'ERROR_CONTACT_TITLE_EMPTY' => 'Kérjük írja be a címet',
        'ERROR_CONTACT_NAME_EMPTY' => 'Kérjük írja be a teljes nevét',
        'ERROR_CONTACT_EMAIL_EMPTY' => 'Kérjük írja be az e-mail címét',
        'ERROR_CONTACT_EMAIL_INCORRECT' => 'Kérjük írjon be egy létező e-mail címet',
        'ERROR_CONTACT_MOBILE_EMPTY' => 'Kérjük írjon be egy telefonszámot',
        'ERROR_CONTACT_MOBILE_INCORRECT' => 'Kéjük írjon be egy létező telefonszámot',
        'ERROR_LEAD_PASSENGER_TITLE_EMPTY' => 'Kéjük írjon be egy létező mobil számot',
        'ERROR_LEAD_PASSENGER_NAME_EMPTY' => 'Kérjük írja be a vezető utas címét',
        'ERROR_LEAD_PASSENGER_EMAIL_EMPTY' => 'Kérjük, írja be a vezető utas e-mail címét',
        'ERROR_LEAD_PASSENGER_EMAIL_INCORRECT' => 'Kérjük, adjon meg egy érvényes e-mail címet a vezető utasnak',
        'ERROR_LEAD_PASSENGER_MOBILE_EMPTY' => 'Kérjük írja be a vezető utas mobil számát',
        'ERROR_LEAD_PASSENGER_MOBILE_INCORRECT' => 'Kéjük írjon be egy létező mobil számot',
        'ERROR_PAYMENT_EMPTY' => 'Kérjük válasszon fizetési módot.',
        'ERROR_TERMS_EMPTY' => 'Kérjük fogadja el a felhasználási feltételeket.'
    ],

    'old' => [
        'quote_Route' => 'Útvonal',
        'quote_From' => 'Honnan',
        'quote_To' => 'Hova',
        'quote_Distance' => 'Távolság',
        'quote_Time' => 'Idő',
        'quote_EstimatedDistance' => 'Becsült távolság',
        'quote_Miles' => 'mérföld',
        'quote_Kilometers' => 'km',
        'quote_EstimatedTime' => 'Becsült idő',
        'quote_Format_LessThanASecond' => 'Kevesebb mint egy másodperc',
        'quote_Format_Day' => 'nap',
        'quote_Format_Days' => 'napok',
        'quote_Format_Hour' => 'óra',
        'quote_Format_Hours' => 'órák',
        'quote_Format_Minute' => 'perc',
        'quote_Format_Minutes' => 'percek',
        'quote_Format_Second' => 'másodperc',
        'quote_Format_Seconds' => 'másodpercek',
        'quote_Fare' => 'Fuvardíj',
        'quote_DiscountExpired' => 'A beírt kedvezménykód már lejárt, vagy érvénytelen.',
        'quote_DiscountInvalid' => 'A beírt kedvezménykód érvénytelen.',
        'quote_DiscountApplied' => '<b>{amount}</b> kedvezmény sikeresen felhasználva.',
        'quote_AccountDiscountApplied' => '<b>{amount}</b> a számla kedvezményt sikeresen felhasználta.',
        'quote_ReturnDiscountApplied' => '<b>{amount}</b> kedvezmény a visszaút foglalására sikeresen felhasználta.',

        'API' => [
            'PAYMENT_INFO' => 'Kérjük várjon amíg átirányítjuk a fizetési oldalra.<br />Sikertelen átirányítás esetén, 10 másodperc után kérjük nyomja meg a lenti gombot.',
            'PAYMENT_BUTTON' => 'Fizessen most',
            'PAYMENT_CHARGE_NOTE' => 'Fizetés díja',
            'ERROR_NO_CONFIG' => 'Nincs beállítva konfiguráció!',
            'ERROR_NO_LANGUAGE' => 'Nem találtunk bőröndöt!',
            'ERROR_NO_CATEGORY' => 'Nem találtunk kategóriát!',
            'ERROR_NO_VEHICLE' => 'Nem találtunk járművet!',
            'ERROR_NO_PAYMENT' => 'Nem találtunk fizetést!',
            'ERROR_NO_LOCATION' => 'Nem találtunk címet!',
            'ERROR_CATEGORY_EMPTY' => 'Kategóriák tömb üres!',
            'ERROR_CATEGORY_FILTERED_EMPTY' => 'Szűrt kategóriák tömb üres!',
            'ERROR_NO_BOOKING' => 'Nem találtunk foglalást!',
            'ERROR_NO_BOOKING_DATA' => 'Nem találtunk foglalással kapcsolatos adatot!',
            'ERROR_BOOKING_NOT_SAVED' => 'Sajnáljuk, de a foglalást nem tudjuk elmenteni!',
            'ERROR_NO_CHARGE' => 'Nem találtunk díjat!',
            'ERROR_NO_ROUTE1' => 'Ez az útvonal nem található, kérjük próbálkozzon újra!',
            'ERROR_NO_ROUTE2' => 'Ez az útvonal nem található, kérjük próbálkozzon újra!',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_START' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_END' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_START' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_END' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_NO_ROUTE1_EXCLUDED_ROUTE' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_NO_ROUTE2_EXCLUDED_ROUTE' => 'Sajnáljuk, de ezt az útvonalat nem tudjuk online lefoglalni, ezért kérjük, lépjen kapcsolatba irodánkkal további információért.',
            'ERROR_POSTCODE_MATCH' => 'If you are using the software outside of the UK we recommend disable setting "Better use of postcode based Fixed Price system" located in Settings -> Google.',
        ]
    ]

];
