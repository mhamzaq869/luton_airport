<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Italian (it-IT) - Frontend
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

    'bookingField_Fare' => 'Tariffa',
    'bookingField_Ref' => 'ID di riferimento',
    'bookingField_From' => 'Partenza',
    'bookingField_To' => 'Destinazione',
    'bookingField_Via' => 'Via',
    'bookingField_Date' => 'Data e Ora',
    'bookingField_Vehicle' => 'Veicolo',
    'bookingField_Passengers' => 'Viaggiatori',
    'bookingField_ChildSeats' => 'Seggiolini per bambini',
    'bookingField_BabySeats' => 'Seggiolone',
    'bookingField_InfantSeats' => 'Posti per bambini',
    'bookingField_Wheelchair' => 'Sedie a rotelle',
    'bookingField_Luggage' => 'Valigie',
    'bookingField_HandLuggage' => 'Bagaglio a mano',
    'bookingField_LeadPassenger' => 'Passeggero Principale',
    'bookingField_Yes' => 'Sì',
    'bookingField_No' => 'No',
    'bookingField_Return' => 'Rimborso',
    'bookingField_OneWay' => 'Senso unico',
    'bookingMsg_NoBookings' => 'Non sono state trovate prenotazioni.',
    'bookingMsg_NoBooking' => 'La prenotazione non esiste.',
    'bookingMsg_InvoiceDisabled' => 'Spiacenti, ma le fatture non sono disponibili al momento.',
    'bookingMsg_SendingFailure' => 'Errore nell\'invio di email.',
    'bookingMsg_CanceledSuccess' => 'La prenotazione <b>{refNumber}</b> è stata annullata con successo.',
    'bookingMsg_CanceledFailure' => 'La prenotazione <b>{refNumber}</b> non può essere annullata.',

    'userMsg_NoUser' => 'L\'account non esiste.',
    'userMsg_SendingFailure' => 'Errore nell\'invio di email.',
    'userMsg_ProfileUpdateSuccess' => 'Il tuo profilo è stato aggiornato con successo.',
    'userMsg_RegisterNotAvailable' => 'La registrazione non è disponibile al momento. Ti preghiamo di riprovare tra un po\'.',
    'userMsg_LoginNotAvailable' => 'L\'accesso non è disponibile al momento. Ti preghiamo di riprovare tra un po\'.',
    'userMsg_Resend' => 'Il tuo account è stato creato con successo. <br />Prima di provare ad effettuare il login, attivalo prima, ti abbiamo inviato un link di attivazione alla tua casella di posta <b> {userEmail} </ b>. <a href="{resendLink}" target="_blank">Invia di nuovo</a>',
    'userMsg_RegisterSuccess' => 'Il tuo account è stato creato con successo. Puoi accedere ora!',
    'userMsg_RegisterFailure' => 'Non è stato possibile creare il tuo account.',
    'userMsg_ActivationDone' => 'Il tuo account è già stato attivato. Puoi accedere ora!',
    'userMsg_ActivationSuccess' => 'Il tuo account è stato attivato con successo. Puoi accedere ora!',
    'userMsg_ActivationUnfinished' => 'Il tuo account non è stato ancora attivato. Controlla la tua casella di posta per il link di attivazione.',
    'userMsg_Blocked' => 'Il tuo account è stato bloccato.',
    'userMsg_LoginSuccess' => 'Hai effettuato l\'accesso con successo.',
    'userMsg_LoginFailure' => 'Email e password non corrispondono o non hai ancora un account.',
    'userMsg_PasswordReset' => 'Ti abbiamo inviato un gettone per la reimpostazione della password al tuo indirizzo email.',
    'userMsg_PasswordUpdateSuccess' => 'La tua password è stata aggiornata con successo. Puoi accedere ora!',
    'userMsg_LogoutSuccess' => 'Sei stato disconnesso con successo!',
    'userMsg_LogoutFailure' => 'Impossibile disconnettersi. Per favor riprova.',
    'userMsg_TitleRequired' => 'Il titolo è richiesto.',
    'userMsg_FirstNameRequired' => 'Il nome è richiesto.',
    'userMsg_LastNameRequired' => 'Il cognome è richiesto.',
    'userMsg_MobileNumberRequired' => 'Il numero di cellulare è richiesto.',
    'userMsg_TelephoneNumberRequired' => 'Il numero di telefono è richiesto.',
    'userMsg_EmergencyNumberRequired' => 'Il numero di emergenza è richiesto.',
    'userMsg_AddressRequired' => 'L\'indirizzo è richiesto.',
    'userMsg_CityRequired' => 'La città è richiesta.',
    'userMsg_PostcodeRequired' => 'Il codice postale è richiesto.',
    'userMsg_CountyRequired' => 'Il paese è richiesto.',
    'userMsg_CountryRequired' => 'Il paese è richiesto.',
    'userMsg_EmailRequired' => 'L\'indirizzo email è richiesto.',
    'userMsg_EmailInvalid' => 'Il valore non è un indirizzo email valido.',
    'userMsg_EmailTaken' => 'L\'indirizzo email è già stato usato.',
    'userMsg_PasswordRequired' => 'La password è richiesta.',
    'userMsg_PasswordLength' => 'La password deve essere più lunga di {passwordLengthMin} e inferiore a {passwordLengthMax}.',
    'userMsg_PasswordSameAsEmail' => 'La password non può essere uguale all\'indirizzo email.',
    'userMsg_ConfirmPasswordRequired' => 'La password di conferma è richiesta.',
    'userMsg_ConfirmPasswordNotEqual' => 'La password di conferma deve essere uguale alla password.',
    'userMsg_TermsAndConditionsRequired' => 'Devi accettare i nostri termini e condizioni.',
    'userMsg_TokenRequired' => 'Il gettone è richiesto.',
    'userMsg_TokenInvalid' => 'Il gettone è invalido.',
    'userMsg_CompanyNameRequired' => 'Il nome della azienda è richiesto.',
    'userMsg_CompanyNumberRequired' => 'Il numero della azienda è richiesto.',
    'userMsg_CompanyTaxNumberRequired' => 'Il numero di partita IVA della azienda è richiesto.',

    'js' => [
        'bookingTitleCancel' => 'Are you sure you want to cancel?',
        'bookingMsgCancel' => 'Please see {link}terms{/link}',
        'bookingMsgEdit' => 'To change the booking, please contact us at {email} or call us on {phone}.',
        'bookingYes' => 'Yes',
        'bookingNo' => 'No',
        'bookingDepartureFlightTimeWarning' => 'Pickup date and time has been changed to allow enough time to get to the airport before your flight is due.',
        'bookingTimePickerMinutes' => 'Pickup in {time} minutes',
        'bookingHeading_Step1Mini' => 'Quote & Book',
        'bookingMemberBenefits' => 'Registrati e beneficia di',
        'accountBenefits' => "Prenotazione rapida e semplice\r\nPriorità sui non membri\r\nIn grado di tracciare le tue prenotazioni\r\nIn grado di recuperare i dettagli della tua prenotazione precedente\r\nÈ Gratuito come membro", // Sconto istantaneo del 5% su tutte le prenotazioni
        'bookingFlightMsg' => 'Landing flight id number',
        'bookingDepartureFlightMsg' => 'Departure flight id number',
        'bookingFlightExample' => 'eg. IO 222',
        'bookingOptional' => 'Optional',
        'bookingField_MoreOption' => 'More Options',
        'bookingBookByPhone' => 'Book by phone here',
        'bookingNoVehiclesAvailable' => 'None of the vehicles are available matching your search criteria. Please try again by adjusting your choice.',
        'bookingPayDeposit' => 'Pagare solo la cauzione',
        'bookingPayFullAmount' => 'Pagare l\'intero importo',
        'bookingVehicle_NotAvailable' => 'Non disponibile',
        'bookingVehicle_Booked' => 'Prenotato',
        'bookingVehicle_LinkEnquire' => 'Informarsi ora',
        'bookingVehicle_LinkAvailability' => 'Verificare la disponibilità',
        'bookingField_ChildSeatsNeeded' => 'Richiedo il seggiolino per bambini',
        'bookingField_Services' => 'Tipo di Servizio',
        'bookingField_ServicesDuration' => 'Durata',
        'bookingField_ServicesSelect' => 'Tipo di Servizio',
        'bookingField_ServicesDurationSelect' => 'Durata',
        'ERROR_SERVICES_EMPTY' => 'Per favore scegliere il tipo di servizio',
        'ERROR_SERVICES_DURATION_EMPTY' => 'Per favore scegliere la durata',

        'print_Heading' => 'Dettagli della prenotazione',
        'button_Close' => 'Chiudere',
        'panel_Hello' => 'Ciao!',
        'panel_Dashboard' => 'Dashboard',
        'panel_Bookings' => 'Prenotazioni',
        'panel_NewBooking' => 'Nuova Prenotazione',
        'panel_Profile' => 'Profilo',
        'panel_Logout' => 'Disconnettersi',
        'bookingField_ClearBtn' => 'Cancella',
        'bookingField_Today' => 'Vai a oggi',
        'bookingField_Clear' => 'Cancella selezione',
        'bookingField_Close' => 'Chiudere il selettore',
        'bookingField_SelectMonth' => 'Selezionare mese',
        'bookingField_PrevMonth' => 'Mese precedente',
        'bookingField_NextMonth' => 'Mese prossimo',
        'bookingField_SelectYear' => 'Seleziona anno',
        'bookingField_PrevYear' => 'Anno precedente',
        'bookingField_NextYear' => 'Anno prossimo',
        'bookingField_SelectDecade' => 'Seleziona decennio',
        'bookingField_PrevDecade' => 'Decennio precedente',
        'bookingField_NextDecade' => 'Decennio prossimo',
        'bookingField_PrevCentury' => 'Secolo precedente',
        'bookingField_NextCentury' => 'Secolo prossimo',
        'bookingField_ButtonToday' => 'Oggi',
        'bookingField_ButtonNow' => 'Ora',
        'bookingField_ButtonOK' => 'OK',
        'userProfile_Heading' => 'Profilo',
        'userEdit_Heading' => 'Profilo / Modifica',
        'userRegister_Heading' => 'Crea un account',
        'userLogin_Heading' => 'Accedi / Registrati',
        'userLostPassword_Heading' => 'Hai perso la password?',
        'userNewPassword_Heading' => 'Inserisci la tua nuova password',
        'userField_Name' => 'Nome e cognome',
        'userField_Title' => 'Titolo',
        'userField_FirstName' => 'Nome di battesimo',
        'userField_LastName' => 'Cognome',
        'userField_Email' => 'Email',
        'userField_MobileNumber' => 'Numero di cellulare',
        'userField_MobileNumberPlaceholder' => 'incl. Prefisso internazionale',
        'userField_TelephoneNumber' => 'Numero di telefono',
        'userField_EmergencyNumber' => 'Numero di emergenza',

        'userField_CompanyName' => 'Nome della Azienda',
        'userField_CompanyNumber' => 'Numero della Azienda',
        'userField_CompanyTaxNumber' => 'Numero di partita IVA della azienda',
        'userField_ProfileTypePrivate' => 'Privato',
        'userField_ProfileTypeCompany' => 'Azienda',
        'userMsg_CompanyNameRequired' => 'Il nome della azienda è richiesto.',
        'userMsg_CompanyNumberRequired' => 'Il numero della azienda è richiesto.',
        'userMsg_CompanyTaxNumberRequired' => 'Il numero di partita IVA della azienda è richiesto.',
        'userField_Departments' => 'Departments',
        'userButton_AddDepartment' => 'Add department',
        'userField_Avatar' => 'Upload avatar',
        'userField_DeleteAvatar' => 'Delete avatar',

        'userField_Address' => 'Indirizzo',
        'userField_City' => 'Città',
        'userField_Postcode' => 'Codice Postale',
        'userField_County' => 'Paese',
        'userField_Country' => 'Paese',
        'userField_CreatedDate' => 'Registrato in',
        'userField_Password' => 'Password',
        'userField_ConfirmPassword' => 'Conferma Password',
        'userField_Agree' => 'Sono d\'accordo con',
        'userField_TermsAndConditions' => 'Termini e Condizioni',
        'userField_Token' => 'Gettone',
        'userButton_Edit' => 'Modifica',
        'userButton_Save' => 'Salva',
        'userButton_Cancel' => 'Annulla',
        'userButton_Register' => 'Registrati',
        'userButton_Login' => 'Accedi',
        'userButton_LostPassword' => 'Hai perso la password?',
        'userButton_Reset' => 'Ripristina',
        'userButton_Update' => 'Aggiorna',
        'userMsg_NotLoggedIn' => 'Non hai iniziato sessione!',
        'userMsg_RegisterNotAvailable' => 'La registrazione non è disponibile al momento. Ti preghiamo di riprovare tra un po\'.',
        'userMsg_LoginNotAvailable' => 'L\'accesso non è disponibile al momento. Ti preghiamo di riprovare tra un po\'.',
        'userMsg_TitleRequired' => 'Il titolo è richiesto.',
        'userMsg_FirstNameRequired' => 'Il nome è richiesto.',
        'userMsg_LastNameRequired' => 'Il cognome è richiesto.',
        'userMsg_MobileNumberRequired' => 'Il numero di cellulare è richiesto.',
        'userMsg_TelephoneNumberRequired' => 'Il numero di telefono è richiesto.',
        'userMsg_EmergencyNumberRequired' => 'Il numero di emergenza è richiesto.',
        'userMsg_AddressRequired' => 'L\'indirizzo è richiesto.',
        'userMsg_PostcodeRequired' => 'Il codice postale è richiesto.',
        'userMsg_CityRequired' => 'La città è richiesta.',
        'userMsg_CountyRequired' => 'Il paese è richiesto.',
        'userMsg_CountryRequired' => 'Il paese è richiesto.',
        'userMsg_EmailRequired' => 'L\'indirizzo email è richiesto.',
        'userMsg_EmailInvalid' => 'Il valore non è un indirizzo email valido.',
        'userMsg_EmailTaken' => 'L\'indirizzo email è già stato usato.',
        'userMsg_PasswordRequired' => 'La password è richiesta.',
        'userMsg_PasswordLength' => 'La password deve essere più lunga di {passwordLengthMin} e inferiore a {passwordLengthMax}.',
        'userMsg_PasswordSameAsEmail' => 'La password non può essere uguale all\'indirizzo email.',
        'userMsg_ConfirmPasswordRequired' => 'La password di conferma è richiesta.',
        'userMsg_ConfirmPasswordNotEqual' => 'La password di conferma deve essere uguale alla password.',
        'userMsg_TermsAndConditionsRequired' => 'Devi accettare i nostri termini e condizioni.',
        'userMsg_TokenRequired' => 'Il gettone è richiesto.',
        'userMsg_TokenInvalid' => 'Il gettone è invalido.',
        'bookingList_Heading' => 'Prenotazioni',
        'bookingInvoice_Heading' => 'Prenotazione / Fattura',
        'bookingDetails_Heading' => 'Prenotazione / Dettagli',
        'bookingHeading_JourneyDetails' => 'Dettagli del viaggio',
        'bookingHeading_YourDetails' => 'I tuoi dettagli',
        'bookingHeading_Passengers' => 'Viaggiatori',
        'bookingHeading_LeadPassenger' => 'Passeggero Principale',
        'bookingHeading_LuggugeRequirement' => 'Requisito del Bagaglio',
        'bookingHeading_ReservationDetails' => 'Dettagli della prenotazione',
        'bookingHeading_SpecialInstructions' => 'Istruzioni speciali',
        'bookingHeading_GeneralDetails' => 'Dettagli Generali della Prenotazione',
        'bookingHeading_CheckoutType' => 'Cosa ti piacerebbe fare dopo?',
        'bookingHeading_CheckoutTypeGuest' => 'Prenota senza registrarti',
        'bookingHeading_CheckoutTypeRegister' => 'Registrati e continua con la tua prenotazione',
        'bookingHeading_CheckoutTypeLogin' => 'Già registrato? Accedi e continua',
        'bookingHeading_Login' => 'Accedi e continua',
        'bookingHeading_Register' => 'Crea un account',
        'bookingHeading_Driver' => 'Dettagli del driver',
        'bookingHeading_Vehicle' => 'Dettagli del veicolo',
        'bookingField_DriverName' => 'Nome',
        'bookingField_DriverAvatar' => 'Foto',
        'bookingField_DriverPhone' => 'Telefono',
        'bookingField_DriverLicence' => 'Licenza',
        'bookingField_VehicleRegistrationMark' => 'Numero di registrazione',
        'bookingField_VehicleMake' => 'Marca',
        'bookingField_VehicleModel' => 'Modello',
        'bookingField_VehicleColour' => 'Colore',
        'bookingField_Ref' => 'ID di riferimento',
        'bookingField_From' => 'Partenza',
        'bookingField_To' => 'Destinazione',
        'bookingField_Via' => 'Via',
        'bookingField_Date' => 'Data e Ora',
        'bookingField_FlightNumber' => 'Numero di Volo',
        'bookingField_FlightLandingTime' => 'Tempo di atterraggio del volo',
        'bookingField_DepartureCity' => 'Città di partenza',
        'bookingField_DepartureFlightNumber' => 'Flight departure number',
        'bookingField_DepartureFlightTime' => 'Flight departure time',
        'bookingField_DepartureFlightCity' => 'Flight departure to',
        'bookingField_WaitingTime' => 'Tempo di attesa',
        'bookingField_WaitingTimeAfterLanding' => 'minuti dopo l\'atterraggio',
        'bookingField_MeetAndGreet' => 'Incontro',
        'bookingField_MeetingPoint' => 'Punto d\'incontro',
        'bookingField_Vehicle' => 'Veicolo',
        'bookingField_Name' => 'Nome e cognome',
        'bookingField_Email' => 'Email',
        'bookingField_PhoneNumber' => 'Numero di cellulare',
        'bookingField_Department' => 'Department',
        'bookingField_Passengers' => 'Viaggiatori',
        'bookingField_ChildSeats' => 'Seggiolini per bambini',
        'bookingField_BabySeats' => 'Seggiolone',
        'bookingField_InfantSeats' => 'Posti per bambini',
        'bookingField_Wheelchair' => 'Sedie a rotelle',
        'bookingField_Luggage' => 'Valigie',
        'bookingField_HandLuggage' => 'Bagaglio a mano',
        'bookingField_JourneyType' => 'Tipo di Viaggio',
        'bookingField_PaymentMethod' => 'Metodo di Pagamento',
        'bookingField_PaymentCharge' => 'Addebito di Pagamento',
        'bookingField_DiscountCode' => 'Codice di Sconto',
        'bookingField_DiscountPrice' => 'Prezzo Scontato',
        'bookingField_Deposit' => 'Cauzione',
        'bookingField_CreatedDate' => 'Data di Prenotazione',
        'bookingField_Status' => 'Stato',
        'bookingField_Summary' => 'Sommario',
        'bookingField_Price' => 'Prezzo del Viaggio',
        'bookingField_Total' => 'Totale',
        'bookingField_PaymentPrice' => 'Addebito di Pagamento',
        'bookingField_Payments' => 'Pagamenti',
        'bookingField_TypeAddress' => 'oppure seleziona un suggerimento rapido dall\'elenco:',
        'bookingField_FromPlaceholder' => 'Partenza dall\'Aeroporto. Indirizzo o Codice Postale',
        'bookingField_ToPlaceholder' => 'Consegna nell\'Aeroporto. Indirizzo o Codice Postale.',
        'bookingField_ViaPlaceholder' => 'Via Aeroporto. Indirizzo o Codice Postale.',
        'bookingField_SelectAirportPlaceholder' => 'Seleziona aeroporto',
        'bookingField_DatePlaceholder' => 'Seleziona data',
        'bookingField_TimePlaceholder' => 'Seleziona ora',
        'bookingField_RequiredOn' => 'Data',
        'bookingField_PickupTime' => 'Ora',
        'bookingField_Waypoint' => 'Riferimento',
        'bookingField_WaypointAddress' => 'Indirizzo del punto di riferimento',
        'bookingField_Route' => 'Itinerario',
        'bookingField_Distance' => 'Distanza',
        'bookingField_Time' => 'Tempo',
        'bookingField_EstimatedDistance' => 'Distanza stimata',
        'bookingField_Miles' => 'miglia',
        'bookingField_EstimatedTime' => 'Tempo stimato',
        'bookingField_Minutes' => 'minuti',
        'bookingField_ReturnEnable' => 'Viaggio di ritorno?',
        'bookingField_OneWay' => 'Solo andata',
        'bookingField_Return' => 'Ritorno',
        'bookingField_Mr' => 'Sig',
        'bookingField_Mrs' => 'Sig.ra',
        'bookingField_Miss' => 'Signorina',
        'bookingField_Ms' => 'Signorina',
        'bookingField_Dr' => 'Dott.',
        'bookingField_Sir' => 'Signore',
        'bookingButton_Details' => 'Dettagli',
        'bookingButton_More' => 'Opzioni di prenotazione',
        'bookingButton_PayNow' => 'Paga ora',
        'bookingButton_Invoice' => 'Fattura',
        'bookingButton_Download' => 'Scaricare',
        'bookingButton_Cancel' => 'Annulla',
        'bookingButton_Delete' => 'Elimina',
        'bookingButton_Feedback' => 'Lascia un feedback',
        'bookingButton_NewBooking' => 'Nuova Prenotazione',
        'booking_button_show_on_map' => 'Tracking history',
        'bookingButton_Back' => 'Torna indietro',
        'bookingButton_Print' => 'Stampa',
        'bookingButton_CustomerAccount' => 'Il mio account',
        'bookingButton_RequestQuote' => 'Richiedi un preventivo',
        'bookingButton_ManualQuote' => 'Preventivo Manuale',
        'bookingButton_Next' => 'Prossimo',
        'bookingButton_BookNow' => 'Prenota Ora',
        'bookingButton_ShowMap' => 'Mostra una mappa',
        'bookingButton_HideMap' => 'Nascondi mappa',
        'bookingButton_Edit' => 'Modifica',
        'bookingMsg_NoBookings' => 'Non hai ancora nessuna prenotazione.',
        'bookingMsg_NoBooking' => 'La prenotazione non esiste.',
        'bookingMsg_RequestQuoteInfo' => 'La via non è stata trovata, ma puoi ancora',
        'bookingMsg_NoAddressFound' => 'Impossibile trovare qualsiasi indirizzo corrispondente alla consultazione',
        'ROUTE_RETURN' => ' ',
        'ROUTE_ADDRESS_START' => 'Indirizzo completo della partenza',
        'ROUTE_ADDRESS_END' => 'Indirizzo completo della destinazione',
        'ROUTE_WAYPOINTS' => 'Via',
        'ROUTE_DATE' => 'Quando',
        'ROUTE_FLIGHT_NUMBER' => 'Numero di Volo',
        'ROUTE_FLIGHT_LANDING_TIME' => 'Tempo di atterraggio del volo',
        'ROUTE_DEPARTURE_CITY' => 'Arriva da',
        'ROUTE_DEPARTURE_FLIGHT_NUMBER' => 'Flight departure number',
        'ROUTE_DEPARTURE_FLIGHT_TIME' => 'Flight departure time',
        'ROUTE_DEPARTURE_FLIGHT_CITY' => 'Flight departure to',
        'ROUTE_MEETING_POINT' => 'Punto d\'incontro',
        'ROUTE_MEETING_POINT_INFO' => 'Sala Arrivi',
        'ROUTE_WAITING_TIME' => 'Quanti minuti dopo l\'atterraggio?',
        'ROUTE_MEET_AND_GREET' => 'Incontro',
        'ROUTE_REQUIREMENTS' => 'Istruzioni speciali',
        'ROUTE_REQUIREMENTS_INFO' => '(ad esempio, età e peso del bambino)',
        'ROUTE_ITEMS' => 'Supplementari',
        'ROUTE_VEHICLE' => 'Veicolo',
        'ROUTE_PASSENGERS' => 'Viaggiatori',
        'ROUTE_LUGGAGE' => 'Valigie',
        'ROUTE_HAND_LUGGAGE' => 'Bagaglio a mano',
        'ROUTE_CHILD_SEATS' => 'Seggiolini per bambini',
        'ROUTE_CHILD_SEATS_INFO' => ' ',
        'ROUTE_BABY_SEATS' => 'Seggiolone',
        'ROUTE_BABY_SEATS_INFO' => ' ',
        'ROUTE_INFANT_SEATS' => 'Posti per bambini',
        'ROUTE_INFANT_SEATS_INFO' => ' ',
        'ROUTE_WHEELCHAIR' => 'Sedie a rotelle',
        'ROUTE_WHEELCHAIR_INFO' => ' ',
        'ROUTE_EXTRA_CHARGES' => 'Sommario',
        'ROUTE_TOTAL_PRICE' => 'Totale',
        'ROUTE_TOTAL_PRICE_EMPTY' => 'Per favore, scegli Partenza, Destinazione, Quando e Veicolo per vedere il prezzo.',
        'CONTACT_TITLE' => 'Titolo',
        'CONTACT_NAME' => 'Nome e cognome',
        'CONTACT_EMAIL' => 'Email',
        'CONTACT_MOBILE' => 'Numero di cellulare',
        'LEAD_PASSENGER_YES' => 'Sto prenotanto per me stesso',
        'LEAD_PASSENGER_NO' => 'Sto prenotanto per qualcun altro',
        'LEAD_PASSENGER_TITLE' => 'Titolo',
        'LEAD_PASSENGER_NAME' => 'Nome e cognome',
        'LEAD_PASSENGER_EMAIL' => 'Email',
        'LEAD_PASSENGER_MOBILE' => 'Numero di cellulare',
        'PAYMENT_TYPE' => 'Tipo di Pagamento',
        'EXTRA_CHARGES' => 'Altre spese extra',
        'TOTAL_PRICE' => 'Prezzo Totale',
        'TOTAL_PRICE_EMPTY' => 'Per favore, scegli Partenza, Destinazione, Quando e Veicolo per vedere il prezzo.',
        'BUTTON_MINIMAL_RESET' => 'Cancella',
        'BUTTON_MINIMAL_SUBMIT' => 'Calcola Prezzo',
        'BUTTON_COMPLETE_RESET' => 'Cancella',
        'BUTTON_COMPLETE_QUOTE_STEP1' => 'Calcola Prezzo',
        'BUTTON_COMPLETE_QUOTE_STEP2' => 'Prenota Ora',
        'BUTTON_COMPLETE_QUOTE_STEP3' => 'Ottieni un preventivo',
        'BUTTON_COMPLETE_SUBMIT' => 'Prenota Ora',
        'SELECT' => '-- Seleziona --',
        'VEHICLE_SELECT' => 'Seleziona',
        'ROUTE_RETURN_NO' => 'Solo andata',
        'ROUTE_RETURN_YES' => 'Ritorno',
        'TITLE_GEOLOCATION' => 'Ottieni la mia posizione attuale',
        'TITLE_REMOVE_WAYPOINTS' => 'Rimuovere',
        'VEHICLE_PASSENGERS' => 'Numero Massimo di Passeggeri',
        'VEHICLE_LUGGAGE' => 'Numero Massimo di Valigie',
        'VEHICLE_HAND_LUGGAGE' => 'Numero Massimo di Bagaglio a Mano',
        'VEHICLE_CHILD_SEATS' => 'Numero Massimo di Seggiolini per Bambini',
        'VEHICLE_BABY_SEATS' => 'Numero Massimo di Seggioloni',
        'VEHICLE_INFANT_SEATS' => 'Numero Massimo di Posti per Bambini',
        'VEHICLE_WHEELCHAIR' => 'Numero Massimo di Sedie a Rotelle',
        'TERMS' => 'Seleziona la casella per accettare i <a href="{terms-conditions}" target="_blank" class="jcepopup" rel="{handler: \'iframe\'}">termini e condizioni</a>.',
        'MEET_AND_GREET_OPTION_NO' => 'No. Grazie',
        'MEET_AND_GREET_OPTION_YES' => 'Sì',
        'DISCOUNT_CODE' => 'Codice di Sconto',
        'TITLE_JOURNEY_FROM' => 'Viaggio da',
        'TITLE_JOURNEY_TO' => 'Viaggio a',
        'TITLE_AIPORT' => 'Aeroporto',
        'TITLE_CRUISE_PORT' => 'Porto di crociera',
        'TITLE_PICKUP_FROM' => 'Partenza',
        'TITLE_DROPOFF_TO' => 'Destinazione',
        'STEP1_BUTTON' => 'Modifica Viaggio',
        'STEP2_BUTTON' => 'Seleziona tariffa',
        'STEP3_BUTTON' => 'Prenota e Paga Online',
        'STEP1_BUTTON_TITLE' => 'Step 1',
        'STEP2_BUTTON_TITLE' => 'Step 2',
        'STEP3_BUTTON_TITLE' => 'Step 3',
        'BTN_RESERVE' => 'Reserve now',
        'STEP3_SECTION1' => 'I tuoi dettagli',
        'STEP3_SECTION2' => 'Viaggiatori',
        'STEP3_SECTION3' => 'Requisito del Bagaglio',
        'STEP3_SECTION4' => 'Dettagli del viaggio',
        'STEP3_SECTION5' => 'Dettagli del viaggio di ritorno',
        'STEP3_SECTION6' => 'Prenota e Paga',
        'STEP3_SECTION7' => 'Passeggero Principale',
        'STEP2_INFO1' => 'Chiamaci su {telefono} o e-mail {email} se hai esigenze particolari o eccessive per il bagaglio.',
        'STEP2_INFO2' => ' ',
        'STEP3_INFO1' => 'Se si dispone di bagagli di grandi dimensioni, si prega di telefonare o inviare e-mail con i dettagli delle dimensioni.',
        'GEOLOCATION_UNDEFINED' => 'Il tuo browser non supporta l\'API di geolocalizzazione',
        'GEOLOCATION_UNABLE' => 'Impossibile recuperare il tuo indirizzo.',
        'GEOLOCATION_ERROR' => 'Errore',
        'ERROR_EMPTY_FIELDS' => 'Si prega di compiòare tutti I campi vuoti',
        'ERROR_RETURN_EMPTY' => 'Si prega di scegliere il ritorno',
        'ERROR_ROUTE_CATEGORY_START_EMPTY' => 'Si prega di scegliere la partenza',
        'ERROR_ROUTE_LOCATION_START_EMPTY' => 'Per favore, indica la partenza',
        'ERROR_ROUTE_CATEGORY_END_EMPTY' => 'Per favore, scegli la destinazione',
        'ERROR_ROUTE_LOCATION_END_EMPTY' => 'Per favore, indica la destinazione',
        'ERROR_ROUTE_WAYPOINT_EMPTY' => 'Il punto di riferimento non può essere vuoto',
        'ERROR_ROUTE_WAYPOINT_COMPLETE_EMPTY' => 'L\'indirizzo completo del punto di riferimento non può essere vuoto',
        'ERROR_ROUTE_VEHICLE_EMPTY' => 'Per favore, scegli il veicolo',
        'ERROR_ROUTE_DATE_EMPTY' => 'Per favore, indica data e ora',
        'ERROR_ROUTE_DATE_INCORRECT' => 'Per favore, indica data e ora nel formato corretto',
        'ERROR_ROUTE_DATE_PASSED' => 'Non puoi prenotare questo viaggio di ritorno in tempo!',
        'ERROR_ROUTE_DATE_LIMIT' => 'Per favore, consenti almeno {numero} ora / e per le prenotazioni online. Si prega di contattarci per un preventivo o prenotazione',
        'ERROR_ROUTE_DATE_RETURN' => 'La data del viaggio di ritorno deve essere maggiore o uguale alla data di andata',
        'ERROR_ROUTE_FLIGHT_NUMBER_EMPTY' => 'Per favore, indica il numero del volo',
        'ERROR_ROUTE_FLIGHT_LANDING_TIME_EMPTY' => 'Si prega di inserire il tempo di atterraggio del volo',
        'ERROR_ROUTE_DEPARTURE_CITY_EMPTY' => 'Per favore, indica arrivo da',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_NUMBER_EMPTY' => 'Please enter flight departure number',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_TIME_EMPTY' => 'Please enter flight departure time',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_CITY_EMPTY' => 'Please enter flight departure to',
        'ERROR_ROUTE_WAITING_TIME_EMPTY' => 'Per favore, indica tempo di attesa',
        'ERROR_ROUTE_MEET_AND_GREET_EMPTY' => 'Per favore, indica il punto d\'incontro',
        'ERROR_ROUTE_PASSENGERS_EMPTY' => 'Per favore, scegli numero di passeggeri',
        'ERROR_ROUTE_PASSENGERS_INCORRECT' => 'Per favore, scegli numero di passeggeri',
        'ERROR_ROUTE_LUGGAGE_EMPTY' => 'Per favore, scegli numero di valigie',
        'ERROR_ROUTE_HANDLUGGAGE_EMPTY' => 'Per favore, scegli numero di bagaglio a mano',
        'ERROR_ROUTE_CHILDSEATS_EMPTY' => 'Per favore, scegli numero di seggiolini per bambini',
        'ERROR_ROUTE_BABYSEATS_EMPTY' => 'Per favore, scegli numero di seggioloni',
        'ERROR_ROUTE_INFANTSEATS_EMPTY' => 'Per favore, scegli numero di posti per bambini',
        'ERROR_ROUTE_WHEELCHAIR_EMPTY' => 'Per favore, scegli numero di sedie a rotelle',
        'ERROR_ROUTE_ADDRESS_START_COMPLETE_EMPTY' => 'Per favore, indica l\'indirizzo completo della partenza',
        'ERROR_ROUTE_ADDRESS_END_COMPLETE_EMPTY' => 'Per favore, indica l\'indirizzo completo della destinazione',
        'ERROR_CONTACT_TITLE_EMPTY' => 'Per favore, indica titolo',
        'ERROR_CONTACT_NAME_EMPTY' => 'Per favore, indica nome e cognome',
        'ERROR_CONTACT_EMAIL_EMPTY' => 'Per favore, indica email',
        'ERROR_CONTACT_EMAIL_INCORRECT' => 'Per favore, indica un indirizzo email valido',
        'ERROR_CONTACT_MOBILE_EMPTY' => 'Per favore, indica un numero di cellulare',
        'ERROR_CONTACT_MOBILE_INCORRECT' => 'Per favore, indica un numero di cellulare valido',
        'ERROR_LEAD_PASSENGER_TITLE_EMPTY' => 'Per favore, indica il titolo del passeggero principale',
        'ERROR_LEAD_PASSENGER_NAME_EMPTY' => 'Per favore, indica nome e cognome del passeggero principale',
        'ERROR_LEAD_PASSENGER_EMAIL_EMPTY' => 'Per favore, indica email del passeggero principale',
        'ERROR_LEAD_PASSENGER_EMAIL_INCORRECT' => 'Per favore, indica un indirizzo email valido del passeggero principale',
        'ERROR_LEAD_PASSENGER_MOBILE_EMPTY' => 'Per favore, indica il numero di cellulare del passeggero principale',
        'ERROR_LEAD_PASSENGER_MOBILE_INCORRECT' => 'Per favore, indica un numeri di cellulare del passeggero principale valido',
        'ERROR_PAYMENT_EMPTY' => 'Per favore, scegli il tipo di pagamento',
        'ERROR_TERMS_EMPTY' => 'Per favore, accetta termini e condizioni'
    ],

    'old' => [
        'quote_Route' => 'Itinerario',
        'quote_From' => 'Da',
        'quote_To' => 'A',
        'quote_Distance' => 'Distanza',
        'quote_Time' => 'Tempo',
        'quote_EstimatedDistance' => 'Distanza stimata',
        'quote_Miles' => 'miglia',
        'quote_Kilometers' => 'km',
        'quote_EstimatedTime' => 'Tempo stimato',
        'quote_Format_LessThanASecond' => 'Meno di un secondo',
        'quote_Format_Day' => 'giorno',
        'quote_Format_Days' => 'giorni',
        'quote_Format_Hour' => 'ora',
        'quote_Format_Hours' => 'ore',
        'quote_Format_Minute' => 'minuto',
        'quote_Format_Minutes' => 'minuti',
        'quote_Format_Second' => 'secondo',
        'quote_Format_Seconds' => 'seconde',
        'quote_Fare' => 'tariffa',
        'quote_DiscountExpired' => 'Il codice sconto inserito è già scaduto e non è valido.',
        'quote_DiscountInvalid' => 'Il codice sconto inserito non è valido.',
        'quote_DiscountApplied' => 'Lo sconto di <b>{amount}</b> è stato applicato con successo.',
        'quote_AccountDiscountApplied' => '<b>{amount}</b> dello sconto account è stato applicato con successo.',
        'quote_ReturnDiscountApplied' => '<b>{amount}</b> dello sconto sul viaggio di ritorno è stato applicato con successo.',

        'API' => [
            'PAYMENT_INFO' => 'Per favore, attendi mentre sei reindirizzato alla pagina di pagamento <br />Se non si viene reindirizzati dopo 10 secondi, fare clic sul pulsante sottostante.',
            'PAYMENT_BUTTON' => 'Paga ora',
            'PAYMENT_CHARGE_NOTE' => 'Addebito di Pagamento',
            'ERROR_NO_CONFIG' => 'Nessuna configurazione trovata!',
            'ERROR_NO_LANGUAGE' => 'Nessuna lingua trovata!',
            'ERROR_NO_CATEGORY' => 'Nessuna categoria trovata!',
            'ERROR_NO_VEHICLE' => 'Nessun veicolo trovato!',
            'ERROR_NO_PAYMENT' => 'Nessu pagamento trovato!',
            'ERROR_NO_LOCATION' => 'Nessuna posizione trovata!',
            'ERROR_CATEGORY_EMPTY' => 'La serie di categorie è vuota!',
            'ERROR_CATEGORY_FILTERED_EMPTY' => 'Le categorie filtrate sono vuote!',
            'ERROR_NO_BOOKING' => 'Nessuna prenotazione trovata!',
            'ERROR_NO_BOOKING_DATA' => 'Non ci sono dati di prenotazione!',
            'ERROR_BOOKING_NOT_SAVED' => 'Spiacenti, la prenotazione non può essere salvata!',
            'ERROR_NO_CHARGE' => 'Nessun addebito trovato!',
            'ERROR_NO_ROUTE1' => 'L\'itinerario non può essere trovato, per favore riprova.',
            'ERROR_NO_ROUTE2' => 'L\'itinerario non può essere trovato, per favore riprova.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_START' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo luogo di partenza, contatta il nostro ufficio per maggiori informazioni.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_END' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo luogo di destinazione, contatta il nostro ufficio per maggiori informazioni.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_START' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo luogo di partenza, contatta il nostro ufficio per maggiori informazioni.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_END' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo luogo di destinazione, contatta il nostro ufficio per maggiori informazioni.',
            'ERROR_NO_ROUTE1_EXCLUDED_ROUTE' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo percorso, ti preghiamo di contattare il nostro ufficio per maggiori informazioni.',
            'ERROR_NO_ROUTE2_EXCLUDED_ROUTE' => 'Spiacenti, ma non siamo in grado di prenotare il tuo viaggio online per questo percorso, ti preghiamo di contattare il nostro ufficio per maggiori informazioni.',
            'ERROR_POSTCODE_MATCH' => 'If you are using the software outside of the UK we recommend disable setting "Better use of postcode based Fixed Price system" located in Settings -> Google.',
        ]
    ]

];