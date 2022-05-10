<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Portuguese (pt-BR) - Frontend
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

    'bookingField_Fare' => 'Tarifa',
    'bookingField_Ref' => 'ID reserva',
    'bookingField_From' => 'Pegar',
    'bookingField_To' => 'Deixar',
    'bookingField_Via' => 'Via',
    'bookingField_Date' => 'Data & Hora',
    'bookingField_Vehicle' => 'Veículo',
    'bookingField_Passengers' => 'Passageiros',
    'bookingField_ChildSeats' => 'Caderinha de criança',
    'bookingField_BabySeats' => 'Caderinha de bebé',
    'bookingField_InfantSeats' => 'Assentos infantis',
    'bookingField_Wheelchair' => 'Cadeiras de rodas',
    'bookingField_Luggage' => 'Malas grandes',
    'bookingField_HandLuggage' => 'Mala de mão',
    'bookingField_LeadPassenger' => 'Passageiros adicional',
    'bookingField_Yes' => 'Sim',
    'bookingField_No' => 'Não',
    'bookingField_Return' => 'Retorno',
    'bookingField_OneWay' => 'Só ida',
    'bookingMsg_NoBookings' => 'Nenhuma reserva foi encontrada.',
    'bookingMsg_NoBooking' => 'Reserva não existe.',
    'bookingMsg_InvoiceDisabled' => 'Lamentamos, mas facturas não estão disponíveis no momento.',
    'bookingMsg_SendingFailure' => 'Erro ao enviar e-mail',
    'bookingMsg_CanceledSuccess' => 'Reserva <b>{refNumber}</b> foi cancelada com sucesso.',
    'bookingMsg_CanceledFailure' => 'Reserva <b>{refNumber}</b> não poderia ser cancelada.',

    'userMsg_NoUser' => 'A conta não existe.',
    'userMsg_SendingFailure' => 'Erro ao enviar e-mail',
    'userMsg_ProfileUpdateSuccess' => 'Seu perfil foi atualizado com sucesso.',
    'userMsg_RegisterNotAvailable' => 'Atualmente o registo não está disponível. Por favor, tente novamente mais tarde.',
    'userMsg_LoginNotAvailable' => 'Login não disponivel no momento. Por favor, tente novamente mais tarde.',
    'userMsg_Resend' => 'Sua conta foi criada com sucesso.<br />Antes de tentar iniciar o login, por favor confira sua caixa email, enviamos um email para confirmacão com um link para ativar sua conta <b>{userEmail}</b>. <a href="{resendLink}" target="_blank">Reenviar</a>',
    'userMsg_RegisterSuccess' => 'Sua conta foi criada com sucesso. Você pode acessar agora!',
    'userMsg_RegisterFailure' => 'Sua conta não pôde ser criada.',
    'userMsg_ActivationDone' => 'Sua conta já está ativada. Você pode acessar agora!',
    'userMsg_ActivationSuccess' => 'Sua conta foi ativada com sucesso. Você pode acessar agora!',
    'userMsg_ActivationUnfinished' => 'Sua conta ainda não foi ativada. Por favor, verifique sua caixa de email para o link de ativação.',
    'userMsg_Blocked' => 'A sua conta foi bloqueada.',
    'userMsg_LoginSuccess' => 'Vocé foi conectado com sucesso.',
    'userMsg_LoginFailure' => 'E-mail e senha não correspondem ou você não tem uma conta ainda.',
    'userMsg_PasswordReset' => 'Enviámos-lhe um token de redefinição de senha para o seu endereço de e-mail. Por favor, verifique sua caixa de email.',
    'userMsg_PasswordUpdateSuccess' => 'Sua senha foi atualizada com sucesso. Você pode acessar agora!',
    'userMsg_LogoutSuccess' => 'Você foi desconectado com sucesso!',
    'userMsg_LogoutFailure' => 'Falha ao encerrar a sessão. Por favor tente novamente.',
    'userMsg_TitleRequired' => 'Título é necessário.',
    'userMsg_FirstNameRequired' => 'Primeiro nome é obrigatório.',
    'userMsg_LastNameRequired' => 'O sobrenome é obrigatório.',
    'userMsg_MobileNumberRequired' => 'Número de celular é necessário.',
    'userMsg_TelephoneNumberRequired' => 'Número de telefone é necessário.',
    'userMsg_EmergencyNumberRequired' => 'Número de emergência é necessário.',
    'userMsg_AddressRequired' => 'Endereço é necessário.',
    'userMsg_CityRequired' => 'Cidade é necessário.',
    'userMsg_PostcodeRequired' => 'Código Postal é necessário.',
    'userMsg_CountyRequired' => 'Estado é necessário.',
    'userMsg_CountryRequired' => 'País é necessário.',
    'userMsg_EmailRequired' => 'O e-mail é necessário.',
    'userMsg_EmailInvalid' => 'O email não é um endereço de email válido.',
    'userMsg_EmailTaken' => 'Este endereço de e-mail já está sendo usado.',
    'userMsg_PasswordRequired' => 'A senha é necessário.',
    'userMsg_PasswordLength' => 'A senha deve ser mais do que {passwordLengthMin} E menos de {passwordLengthMax} caracteres.',
    'userMsg_PasswordSameAsEmail' => 'A senha não pode ser o mesmo que o endereço de e-mail.',
    'userMsg_ConfirmPasswordRequired' => 'É necessário confirmar a senha.',
    'userMsg_ConfirmPasswordNotEqual' => 'Confirma a mesma senha.',
    'userMsg_TermsAndConditionsRequired' => 'Concordar com os nossos termos e condições.',
    'userMsg_TokenRequired' => 'Token é requerido',
    'userMsg_TokenInvalid' => 'O token é inválido.',
    'userMsg_CompanyNameRequired' => 'O nome da empresa é obrigatório.',
    'userMsg_CompanyNumberRequired' => 'O número da empresa é obrigatório.',
    'userMsg_CompanyTaxNumberRequired' => 'O número de IVA da empresa é obrigatório.',

    'js' => [
        'bookingTitleCancel' => 'Are you sure you want to cancel?',
        'bookingMsgCancel' => 'Please see {link}terms{/link}',
        'bookingMsgEdit' => 'To change the booking, please contact us at {email} or call us on {phone}.',
        'bookingYes' => 'Yes',
        'bookingNo' => 'No',
        'bookingDepartureFlightTimeWarning' => 'Pickup date and time has been changed to allow enough time to get to the airport before your flight is due.',
        'bookingTimePickerMinutes' => 'Pickup in {time} minutes',
        'bookingHeading_Step1Mini' => 'Citação e livro',
        'bookingMemberBenefits' => 'Member benefits',
        'accountBenefits' => "Quick reservation\r\nBooking priority\r\nTrack reservations\r\nPast booking details\r\nFree registration", // 5% price discount
        'bookingFlightMsg' => 'Landing flight id number',
        'bookingDepartureFlightMsg' => 'Departure flight id number',
        'bookingFlightExample' => 'eg. IO 222',
        'bookingOptional' => 'Optional',
        'bookingField_MoreOption' => 'More Options',
        'bookingBookByPhone' => 'Book by phone here',
        'bookingNoVehiclesAvailable' => 'None of the vehicles are available matching your search criteria. Please try again by adjusting your choice.',
        'bookingPayDeposit' => 'Pay deposit only',
        'bookingPayFullAmount' => 'Pay full amount',
        'bookingVehicle_NotAvailable' => 'Não disponível',
        'bookingVehicle_Booked' => 'Reservado',
        'bookingVehicle_LinkEnquire' => 'Pergunte agora',
        'bookingVehicle_LinkAvailability' => 'Verificar disponibilidade',
        'bookingField_ChildSeatsNeeded' => 'Solicito assento infantil',
        'bookingField_Services' => 'Tipo de serviço',
        'bookingField_ServicesDuration' => 'Duração',
        'bookingField_ServicesSelect' => 'Tipo de serviço',
        'bookingField_ServicesDurationSelect' => 'Duração',
        'ERROR_SERVICES_EMPTY' => 'Escolha o tipo de serviço',
        'ERROR_SERVICES_DURATION_EMPTY' => 'Escolha a duração',

        'print_Heading' => 'Dados da reserva',
        'button_Close' => 'Fechar',
        'panel_Hello' => 'Olá',
        'panel_Dashboard' => 'Painel de controle',
        'panel_Bookings' => 'Reservas',
        'panel_NewBooking' => 'Reservas novas',
        'panel_Profile' => 'Perfil',
        'panel_Logout' => 'Sair',
        'bookingField_ClearBtn' => 'Remover',
        'bookingField_Today' => 'Ir para hoje',
        'bookingField_Clear' => 'Seleção clara',
        'bookingField_Close' => 'Fechar o seletor',
        'bookingField_SelectMonth' => 'Selecione o mês',
        'bookingField_PrevMonth' => 'Mês anterior',
        'bookingField_NextMonth' => 'Próximo mês',
        'bookingField_SelectYear' => 'Selecione o ano',
        'bookingField_PrevYear' => 'Ano anterior',
        'bookingField_NextYear' => 'Próximo ano',
        'bookingField_SelectDecade' => 'Seleccionar década',
        'bookingField_PrevDecade' => 'Década anterior',
        'bookingField_NextDecade' => 'Próxima década',
        'bookingField_PrevCentury' => 'Século anterior',
        'bookingField_NextCentury' => 'Próximo século',
        'bookingField_ButtonToday' => 'Hoje',
        'bookingField_ButtonNow' => 'Agora',
        'bookingField_ButtonOK' => 'OK',
        'userProfile_Heading' => 'Perfil',
        'userEdit_Heading' => 'Perfil / Modificar',
        'userRegister_Heading' => 'Criar uma conta',
        'userLogin_Heading' => 'Bem-vindo!',
        'userLostPassword_Heading' => 'Perdeu sua senha?',
        'userNewPassword_Heading' => 'Digite sua nova senha',
        'userField_Name' => 'Nome',
        'userField_Title' => 'Título',
        'userField_FirstName' => 'Primeiro nome',
        'userField_LastName' => 'Sobrenome',
        'userField_Email' => 'Email',
        'userField_MobileNumber' => 'Número de celular',
        'userField_MobileNumberPlaceholder' => 'incl. código de discagem internacional',
        'userField_TelephoneNumber' => 'Número de telefone',
        'userField_EmergencyNumber' => 'Número de emergência',

        'userField_CompanyName' => 'Razão social',
        'userField_CompanyNumber' => 'Número da empresa',
        'userField_CompanyTaxNumber' => 'Número de IVA da empresa',
        'userField_ProfileTypePrivate' => 'Privado',
        'userField_ProfileTypeCompany' => 'Empresa',
        'userMsg_CompanyNameRequired' => 'O nome da empresa é obrigatório.',
        'userMsg_CompanyNumberRequired' => 'O número da empresa é obrigatório.',
        'userMsg_CompanyTaxNumberRequired' => 'O número de IVA da empresa é obrigatório.',
        'userField_Departments' => 'Departments',
        'userButton_AddDepartment' => 'Add department',
        'userField_Avatar' => 'Upload avatar',
        'userField_DeleteAvatar' => 'Delete avatar',

        'userField_Address' => 'Endereço',
        'userField_City' => 'Cidade',
        'userField_Postcode' => 'CEP',
        'userField_County' => 'Estado',
        'userField_Country' => 'País',
        'userField_CreatedDate' => 'Registrado em',
        'userField_Password' => 'Senha',
        'userField_ConfirmPassword' => 'Confirmar senha',
        'userField_Agree' => 'Concordo com o',
        'userField_TermsAndConditions' => 'Termos e Condições',
        'userField_Token' => 'Token',
        'userButton_Edit' => 'Editar',
        'userButton_Save' => 'Salvar',
        'userButton_Cancel' => 'Cancelar',
        'userButton_Register' => 'Registrar',
        'userButton_Login' => 'Login',
        'userButton_LostPassword' => 'Perdeu sua senha?',
        'userButton_Reset' => 'Restabelecer',
        'userButton_Update' => 'Atualizar',
        'userMsg_NotLoggedIn' => 'Você não está logado!',
        'userMsg_RegisterNotAvailable' => 'O registo é indisponível no momento. Por favor, tente novamente mais tarde.',
        'userMsg_LoginNotAvailable' => 'Login esta indisponível no momento. Por favor, tente novamente mais tarde.',
        'userMsg_TitleRequired' => 'Título é necessário.',
        'userMsg_FirstNameRequired' => 'Primeiro nome é obrigatório.',
        'userMsg_LastNameRequired' => 'O Sobrenome é obrigatório.',
        'userMsg_MobileNumberRequired' => 'Número de celular é necessário.',
        'userMsg_TelephoneNumberRequired' => 'Número de telefone é necessário.',
        'userMsg_EmergencyNumberRequired' => 'Número de emergência é necessário.',
        'userMsg_AddressRequired' => 'Endereço é necessário.',
        'userMsg_PostcodeRequired' => 'CEP é necessário.',
        'userMsg_CityRequired' => 'Cidade é necessário.',
        'userMsg_CountyRequired' => 'Estado é necessário.',
        'userMsg_CountryRequired' => 'País é necessário.',
        'userMsg_EmailRequired' => 'O e-mail é necessário.',
        'userMsg_EmailInvalid' => 'O endereço de email não e válido.',
        'userMsg_EmailTaken' => 'Este endereço de e-mail já está sendo usado.',
        'userMsg_PasswordRequired' => 'A senha é necessária.',
        'userMsg_PasswordLength' => 'A senha tem ser mais que {passwordLengthMin} e menos que {passwordLengthMax} caracteres.',
        'userMsg_PasswordSameAsEmail' => 'A senha não pode ser o mesmo que o endereço de e-mail.',
        'userMsg_ConfirmPasswordRequired' => 'Confirmar a senha.',
        'userMsg_ConfirmPasswordNotEqual' => 'Confirmar senha deve ser a mesma senha.',
        'userMsg_TermsAndConditionsRequired' => 'Concordar com os nossos termos e condições.',
        'userMsg_TokenRequired' => 'Token é requerido',
        'userMsg_TokenInvalid' => 'O token é inválido.',
        'bookingList_Heading' => 'Reservas',
        'bookingInvoice_Heading' => 'Reservas / Fatura',
        'bookingDetails_Heading' => 'Reservas / Informações',
        'bookingHeading_JourneyDetails' => 'Detalhes da viagem',
        'bookingHeading_YourDetails' => 'Os seus dados',
        'bookingHeading_Passengers' => 'Passageiros',
        'bookingHeading_LeadPassenger' => 'Passageiros adicional',
        'bookingHeading_LuggugeRequirement' => 'Requisito de bagagem',
        'bookingHeading_ReservationDetails' => 'Detalhes da reserva',
        'bookingHeading_SpecialInstructions' => 'Instruções especiais',
        'bookingHeading_GeneralDetails' => 'Dados geral da reserva',
        'bookingHeading_CheckoutType' => 'O que você gostaria de fazer agora?',
        'bookingHeading_CheckoutTypeGuest' => 'Reservar, sem registrar',
        'bookingHeading_CheckoutTypeRegister' => 'Cadastre-se e continuar a sua reserva',
        'bookingHeading_CheckoutTypeLogin' => 'Já está registado? Login e continuar',
        'bookingHeading_Login' => 'Login e continuar',
        'bookingHeading_Register' => 'Criar uma conta',
        'bookingHeading_Driver' => 'Detalhes do motorista',
        'bookingHeading_Vehicle' => 'Detalhes do veículo',
        'bookingField_DriverName' => 'Nome',
        'bookingField_DriverAvatar' => 'Foto',
        'bookingField_DriverPhone' => 'Telefone',
        'bookingField_DriverLicence' => 'Licença',
        'bookingField_VehicleRegistrationMark' => 'Número de registro',
        'bookingField_VehicleMake' => 'Marca',
        'bookingField_VehicleModel' => 'Modelo',
        'bookingField_VehicleColour' => 'Cor',
        'bookingField_Ref' => 'ID reserva',
        'bookingField_From' => 'Pegar',
        'bookingField_To' => 'Deixar',
        'bookingField_Via' => 'Via',
        'bookingField_Date' => 'Data & Hora',
        'bookingField_FlightNumber' => 'Número do vôo',
        'bookingField_FlightLandingTime' => 'Tempo de pouso',
        'bookingField_DepartureCity' => 'Cidade de partida',
        'bookingField_DepartureFlightNumber' => 'Flight departure number',
        'bookingField_DepartureFlightTime' => 'Flight departure time',
        'bookingField_DepartureFlightCity' => 'Flight departure to',
        'bookingField_WaitingTime' => 'Tempo de espera',
        'bookingField_WaitingTimeAfterLanding' => 'minutos após o desembarque',
        'bookingField_MeetAndGreet' => 'Gostaria de uma placa com seu nome',
        'bookingField_MeetingPoint' => 'Ponto de encontro',
        'bookingField_Vehicle' => 'Veículo',
        'bookingField_Name' => 'Nome',
        'bookingField_Email' => 'Email',
        'bookingField_PhoneNumber' => 'Número de telefone',
        'bookingField_Department' => 'Department',
        'bookingField_Passengers' => 'Passageiros',
        'bookingField_ChildSeats' => 'Caderinha de criança',
        'bookingField_BabySeats' => 'Caderinha de bebé',
        'bookingField_InfantSeats' => 'Assentos infantis',
        'bookingField_Wheelchair' => 'Cadeiras de rodas',
        'bookingField_Luggage' => 'Malas grandes',
        'bookingField_HandLuggage' => 'Mala de mão',
        'bookingField_JourneyType' => 'Tipo de viagem',
        'bookingField_PaymentMethod' => 'Método de pagamento',
        'bookingField_PaymentCharge' => 'Valor',
        'bookingField_DiscountCode' => 'Código para desconto',
        'bookingField_DiscountPrice' => 'Preço com desconto',
        'bookingField_Deposit' => 'Depósito',
        'bookingField_CreatedDate' => 'Data da reserva',
        'bookingField_Status' => 'Estado',
        'bookingField_Summary' => 'Resumo',
        'bookingField_Price' => 'Journey price',
        'bookingField_Total' => 'Total',
        'bookingField_PaymentPrice' => 'Payment charge',
        'bookingField_Payments' => 'Payments',
        'bookingField_TypeAddress' => 'ou selecione uma sugestão rápida da lista:',
        'bookingField_FromPlaceholder' => 'Escolha local de retirada',
        'bookingField_ToPlaceholder' => 'Escolha cair fora localização',
        'bookingField_ViaPlaceholder' => 'Escolha através do local de',
        'bookingField_SelectAirportPlaceholder' => 'Select Airport',
        'bookingField_DatePlaceholder' => 'Escolher data',
        'bookingField_TimePlaceholder' => 'Escolha o tempo',
        'bookingField_RequiredOn' => 'Data',
        'bookingField_PickupTime' => 'Tempo',
        'bookingField_Waypoint' => 'Ponto adicional',
        'bookingField_WaypointAddress' => 'Ponto adicional endereço',
        'bookingField_Route' => 'Rota',
        'bookingField_Distance' => 'Distância',
        'bookingField_Time' => 'Tempo',
        'bookingField_EstimatedDistance' => 'Distância estimada',
        'bookingField_Miles' => 'milhas',
        'bookingField_EstimatedTime' => 'Tempo estimado',
        'bookingField_Minutes' => 'minutos',
        'bookingField_ReturnEnable' => 'Retorno?',
        'bookingField_OneWay' => 'Só ida',
        'bookingField_Return' => 'Retorno',
        'bookingField_Mr' => 'Sr.',
        'bookingField_Mrs' => 'Sra.',
        'bookingField_Miss' => ' ',
        'bookingField_Ms' => ' ',
        'bookingField_Dr' => ' ',
        'bookingField_Sir' => ' ',
        'bookingButton_Details' => 'Detalhes',
        'bookingButton_More' => 'Opções de reserva',
        'bookingButton_PayNow' => 'Pagar agora',
        'bookingButton_Invoice' => 'Fatura',
        'bookingButton_Download' => 'Baixar',
        'bookingButton_Cancel' => 'Cancelar',
        'bookingButton_Delete' => 'Excluir',
        'bookingButton_Feedback' => 'Deixar comentario',
        'bookingButton_NewBooking' => 'Nova reserva',
        'booking_button_show_on_map' => 'Tracking history',
        'bookingButton_Back' => 'Voltar',
        'bookingButton_Print' => 'Imprimir',
        'bookingButton_CustomerAccount' => 'Minha conta',
        'bookingButton_RequestQuote' => 'Pedir um orçamento',
        'bookingButton_ManualQuote' => 'Cotacão manual',
        'bookingButton_Next' => 'Próximo',
        'bookingButton_BookNow' => 'Reserve agora',
        'bookingButton_ShowMap' => 'Mostrar o mapa e detalhes de viagem',
        'bookingButton_HideMap' => 'Ocultar mapa e os detalhes da viagem',
        'bookingButton_Edit' => 'Editar',
        'bookingMsg_NoBookings' => 'Você não tem nenhuma reservas ainda.',
        'bookingMsg_NoBooking' => 'Essa reserva não existe.',
        'bookingMsg_RequestQuoteInfo' => 'A rota não pôde ser encontrado, mas você ainda pode',
        'bookingMsg_NoAddressFound' => 'Não foi possivel encontrar o endereço que correspondem a consulta atual',
        'ROUTE_RETURN' => ' ',
        'ROUTE_ADDRESS_START' => 'Pegar endereço completo',
        'ROUTE_ADDRESS_END' => 'Deixar endereço completo',
        'ROUTE_WAYPOINTS' => 'Adicionar um local',
        'ROUTE_DATE' => 'Quando',
        'ROUTE_FLIGHT_NUMBER' => 'Número do vôo',
        'ROUTE_FLIGHT_LANDING_TIME' => 'Tempo de pouso',
        'ROUTE_DEPARTURE_CITY' => 'Chegando de',
        'ROUTE_DEPARTURE_FLIGHT_NUMBER' => 'Flight departure number',
        'ROUTE_DEPARTURE_FLIGHT_TIME' => 'Flight departure time',
        'ROUTE_DEPARTURE_FLIGHT_CITY' => 'Flight departure to',
        'ROUTE_MEETING_POINT' => 'Ponto de encontro',
        'ROUTE_MEETING_POINT_INFO' => 'Sagão de desembarque',
        'ROUTE_WAITING_TIME' => 'Quantos minutos após o pouso?',
        'ROUTE_MEET_AND_GREET' => 'Gostaria de uma placa em seu nome',
        'ROUTE_REQUIREMENTS' => 'Instruções especiais',
        'ROUTE_REQUIREMENTS_INFO' => '(Por exemplo idade da criança e peso)',
        'ROUTE_ITEMS' => 'Add-ons',
        'ROUTE_VEHICLE' => 'Veículo',
        'ROUTE_PASSENGERS' => 'Passageiros',
        'ROUTE_LUGGAGE' => 'Malas grandes',
        'ROUTE_HAND_LUGGAGE' => 'Mala de mão',
        'ROUTE_CHILD_SEATS' => 'Caderinha de criança',
        'ROUTE_CHILD_SEATS_INFO' => ' ',
        'ROUTE_BABY_SEATS' => 'Caderinha de bebé',
        'ROUTE_BABY_SEATS_INFO' => ' ',
        'ROUTE_INFANT_SEATS' => 'Assentos infantis',
        'ROUTE_INFANT_SEATS_INFO' => ' ',
        'ROUTE_WHEELCHAIR' => 'Cadeiras de rodas',
        'ROUTE_WHEELCHAIR_INFO' => ' ',
        'ROUTE_EXTRA_CHARGES' => 'Resumo',
        'ROUTE_TOTAL_PRICE' => 'Total',
        'ROUTE_TOTAL_PRICE_EMPTY' => 'Por favor, escolha ponto de partida, destino, data e veiculo, para ver o preço.',
        'CONTACT_TITLE' => 'Título',
        'CONTACT_NAME' => 'Nome',
        'CONTACT_EMAIL' => 'Email',
        'CONTACT_MOBILE' => 'Número de telefone',
        'LEAD_PASSENGER_YES' => 'Estou reservando para mim',
        'LEAD_PASSENGER_NO' => 'Estou reservando para outra pessoa',
        'LEAD_PASSENGER_TITLE' => 'Título',
        'LEAD_PASSENGER_NAME' => 'Nome',
        'LEAD_PASSENGER_EMAIL' => 'Email',
        'LEAD_PASSENGER_MOBILE' => 'Número de telefone',
        'PAYMENT_TYPE' => 'Tipo de pagamento',
        'EXTRA_CHARGES' => 'Outros custos adicionais',
        'TOTAL_PRICE' => 'Preço total',
        'TOTAL_PRICE_EMPTY' => 'Por favor, escolha ponto de partida, destino, data e veiculo, para ver o preço.',
        'BUTTON_MINIMAL_RESET' => 'Limpar',
        'BUTTON_MINIMAL_SUBMIT' => 'Calcular a rota',
        'BUTTON_COMPLETE_RESET' => 'Limpar',
        'BUTTON_COMPLETE_QUOTE_STEP1' => 'Calcular a rota',
        'BUTTON_COMPLETE_QUOTE_STEP2' => 'Reserve agora',
        'BUTTON_COMPLETE_QUOTE_STEP3' => 'Obter cotação',
        'BUTTON_COMPLETE_SUBMIT' => 'Reserve agora',
        'SELECT' => '-- Selecionar --',
        'VEHICLE_SELECT' => 'Selecionar',
        'ROUTE_RETURN_NO' => 'Só ida',
        'ROUTE_RETURN_YES' => 'Retorno',
        'TITLE_GEOLOCATION' => 'Pega a minha localização actual',
        'TITLE_REMOVE_WAYPOINTS' => 'Remover',
        'VEHICLE_PASSENGERS' => 'Maximo de passageiros',
        'VEHICLE_LUGGAGE' => 'Maximo malas',
        'VEHICLE_HAND_LUGGAGE' => 'Maximo bagagem de mão',
        'VEHICLE_CHILD_SEATS' => 'Maximo caderinha de criança',
        'VEHICLE_BABY_SEATS' => 'Maximo caderinha de bebé',
        'VEHICLE_INFANT_SEATS' => 'Maximo assentos infantis',
        'VEHICLE_WHEELCHAIR' => 'Máximo cadeiras de rodas',
        'TERMS' => 'Selecione o box para aceitar os <a href="{terms-conditions}" target="_blank" class="jcepopup" rel="{handler: \'iframe\'}">Termos e Condições</a>.',
        'MEET_AND_GREET_OPTION_NO' => 'Não, obrigado',
        'MEET_AND_GREET_OPTION_YES' => 'Sim',
        'DISCOUNT_CODE' => 'Codigo desconto',
        'TITLE_JOURNEY_FROM' => 'Ponto de partida',
        'TITLE_JOURNEY_TO' => 'Destino',
        'TITLE_AIPORT' => 'Aeroporto',
        'TITLE_CRUISE_PORT' => 'Porto',
        'TITLE_PICKUP_FROM' => 'Ponto de partida',
        'TITLE_DROPOFF_TO' => 'Destino',
        'STEP1_BUTTON' => 'Editar percurso',
        'STEP2_BUTTON' => 'Selecionar Veículo',
        'STEP3_BUTTON' => 'Reserva',
        'STEP1_BUTTON_TITLE' => 'Step 1',
        'STEP2_BUTTON_TITLE' => 'Step 2',
        'STEP3_BUTTON_TITLE' => 'Step 3',
        'BTN_RESERVE' => 'Reserve now',
        'STEP3_SECTION1' => 'Os seus dados',
        'STEP3_SECTION2' => 'Passageiros',
        'STEP3_SECTION3' => 'Requerimento de bagagem',
        'STEP3_SECTION4' => 'Detalhes da viagem',
        'STEP3_SECTION5' => 'Detalhes sobre retorno da viagem',
        'STEP3_SECTION6' => 'Reserve e pague',
        'STEP3_SECTION7' => 'Passageiros',
        'STEP2_INFO1' => 'Por favor, ligue para {phone} ou e-mail {email} se você tem alguma necessidade especial ou bagagem de grandes dimensões.',
        'STEP2_INFO2' => ' ',
        'STEP3_INFO1' => 'Se você tiver qualquer bagagem de grandes dimensões, por favor contacte-nos ou envie um email com detalhes de dimensão.',
        'GEOLOCATION_UNDEFINED' => 'Seu navegador não suporta a API de Geolocalização',
        'GEOLOCATION_UNABLE' => 'Não é possível recuperar o seu endereço',
        'GEOLOCATION_ERROR' => 'Erro',
        'ERROR_EMPTY_FIELDS' => 'Por favor, preencha todos os campos vazios',
        'ERROR_RETURN_EMPTY' => 'Por favor, escolha o retorno',
        'ERROR_ROUTE_CATEGORY_START_EMPTY' => 'Por favor, escolha o ponto de partida',
        'ERROR_ROUTE_LOCATION_START_EMPTY' => 'Por favor, indique o ponto de partida',
        'ERROR_ROUTE_CATEGORY_END_EMPTY' => 'Por favor, escolha o destino',
        'ERROR_ROUTE_LOCATION_END_EMPTY' => 'Por favor, indique o destino',
        'ERROR_ROUTE_WAYPOINT_EMPTY' => 'Ponto adicional não pode estar vazio',
        'ERROR_ROUTE_WAYPOINT_COMPLETE_EMPTY' => 'Endereço de ponto adicional não pode estar vazio',
        'ERROR_ROUTE_VEHICLE_EMPTY' => 'Por favor, escolha do veículo',
        'ERROR_ROUTE_DATE_EMPTY' => 'Por favor, indique Data & Hora',
        'ERROR_ROUTE_DATE_INCORRECT' => 'Por favor, indique data e hora no formato correto',
        'ERROR_ROUTE_DATE_PASSED' => 'Você não pode reservar a retorno de volta no mesmo tempo!',
        'ERROR_ROUTE_DATE_LIMIT' => 'E preciso pelo menos {number} hora para reservas on-line. Por favor, ligue para uma cotação e reserva.',
        'ERROR_ROUTE_DATE_RETURN' => 'Data de viagem de retorno têm que ser maior do que uma data caminho',
        'ERROR_ROUTE_FLIGHT_NUMBER_EMPTY' => 'Por favor, indique o número de voo',
        'ERROR_ROUTE_FLIGHT_LANDING_TIME_EMPTY' => 'Por favor insira o tempo de pouso',
        'ERROR_ROUTE_DEPARTURE_CITY_EMPTY' => 'Por favor, indique que onde vem',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_NUMBER_EMPTY' => 'Please enter flight departure number',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_TIME_EMPTY' => 'Please enter flight departure time',
        'ERROR_ROUTE_DEPARTURE_FLIGHT_CITY_EMPTY' => 'Please enter flight departure to',
        'ERROR_ROUTE_WAITING_TIME_EMPTY' => 'Por favor, escolha o tempo de espera',
        'ERROR_ROUTE_MEET_AND_GREET_EMPTY' => 'Por favor indique se quer uma placa em seu nome',
        'ERROR_ROUTE_PASSENGERS_EMPTY' => 'Por favor, escolha o numero de passageiros',
        'ERROR_ROUTE_PASSENGERS_INCORRECT' => 'Por favor, escolha o numero de passageiros',
        'ERROR_ROUTE_LUGGAGE_EMPTY' => 'Por favor, escolha o numero de malas grandes',
        'ERROR_ROUTE_HANDLUGGAGE_EMPTY' => 'Por favor, escolha o numero de bagagem de mão',
        'ERROR_ROUTE_CHILDSEATS_EMPTY' => 'Por favor, escolha o numero caderinha de criança',
        'ERROR_ROUTE_BABYSEATS_EMPTY' => 'Por favor, escolha o numero de caderinha de bebé',
        'ERROR_ROUTE_INFANTSEATS_EMPTY' => 'Por favor, escolha o numero assentos infantis',
        'ERROR_ROUTE_WHEELCHAIR_EMPTY' => 'Por favor, escolha o numero de cadeiras de rodas',
        'ERROR_ROUTE_ADDRESS_START_COMPLETE_EMPTY' => 'Por favor insira um endereço completo de partida',
        'ERROR_ROUTE_ADDRESS_END_COMPLETE_EMPTY' => 'Por favor, indique o endereço completo do destino',
        'ERROR_CONTACT_TITLE_EMPTY' => 'Por favor, indique título',
        'ERROR_CONTACT_NAME_EMPTY' => 'Por favor insira o nome',
        'ERROR_CONTACT_EMAIL_EMPTY' => 'Por favor, digite seu e-mail',
        'ERROR_CONTACT_EMAIL_INCORRECT' => 'Por favor, indique um email válido',
        'ERROR_CONTACT_MOBILE_EMPTY' => 'Por favor, indique o número de telefone de contato',
        'ERROR_CONTACT_MOBILE_INCORRECT' => 'Por favor insira um número de telefone de contato válido',
        'ERROR_LEAD_PASSENGER_TITLE_EMPTY' => 'Por favor, indique o título do passageiros',
        'ERROR_LEAD_PASSENGER_NAME_EMPTY' => 'Por favor, indique o nome do passageiro',
        'ERROR_LEAD_PASSENGER_EMAIL_EMPTY' => 'Por favor, digite e-mail do passageiro',
        'ERROR_LEAD_PASSENGER_EMAIL_INCORRECT' => 'Por favor, indique um email do passageiro válido',
        'ERROR_LEAD_PASSENGER_MOBILE_EMPTY' => 'Por favor, indique o número do celular do passageiro',
        'ERROR_LEAD_PASSENGER_MOBILE_INCORRECT' => 'Por favor, indique um número de celular do passageiro válido',
        'ERROR_PAYMENT_EMPTY' => 'Escolha por favor tipo de pagamento',
        'ERROR_TERMS_EMPTY' => 'Por favor, aceite os termos e condições'
    ],

    'old' => [
        'quote_Route' => 'Rota',
        'quote_From' => 'De',
        'quote_To' => 'Para',
        'quote_Distance' => 'Distância',
        'quote_Time' => 'Tempo',
        'quote_EstimatedDistance' => 'Distância estimada',
        'quote_Miles' => 'milhas',
        'quote_Kilometers' => 'km',
        'quote_EstimatedTime' => 'Tempo estimado',
        'quote_Format_LessThanASecond' => 'Menos de um segundo',
        'quote_Format_Day' => 'dia',
        'quote_Format_Days' => 'dias',
        'quote_Format_Hour' => 'hora',
        'quote_Format_Hours' => 'horas',
        'quote_Format_Minute' => 'minuto',
        'quote_Format_Minutes' => 'minutos',
        'quote_Format_Second' => 'segundo',
        'quote_Format_Seconds' => 'segundos',
        'quote_Fare' => 'Tarifa',
        'quote_DiscountExpired' => 'Código de desconto já expirou ou é inválido.',
        'quote_DiscountInvalid' => 'O código de desconto não é válido.',
        'quote_DiscountApplied' => 'Desconto de <b>{amount}</b> tem sido aplicado com sucesso.',
        'quote_AccountDiscountApplied' => '<b>{amount}</b> do desconto da conta foi aplicado com sucesso.',
        'quote_ReturnDiscountApplied' => '<b>{amount}</b> of return journey discount has been successfully applied.',

        'API' => [
            'PAYMENT_INFO' => 'Por favor aguarde enquanto você é redirecionado para a página de pagamento.<br />Se você não for redirecionado depois de 10 segundos, por favor clique no botão abaixo.',
            'PAYMENT_BUTTON' => 'Pagar agora',
            'PAYMENT_CHARGE_NOTE' => 'Valor',
            'ERROR_NO_CONFIG' => 'Configuração não foi encontrada!',
            'ERROR_NO_LANGUAGE' => 'Nenhuma linguagem foi encontrada!',
            'ERROR_NO_CATEGORY' => 'Nenhuma categoria foi encontrada!',
            'ERROR_NO_VEHICLE' => 'Nenhum veículo foi encontrado!',
            'ERROR_NO_PAYMENT' => 'Nenhum pagamento foi encontrado!',
            'ERROR_NO_LOCATION' => 'Nenhum local foi encontrado!',
            'ERROR_CATEGORY_EMPTY' => 'Categorias matriz está vazia!',
            'ERROR_CATEGORY_FILTERED_EMPTY' => 'Matriz categorias de filtro está vazio!',
            'ERROR_NO_BOOKING' => 'Nenhuma reserva foi encontrada!',
            'ERROR_NO_BOOKING_DATA' => 'Não existem dados de reserva!',
            'ERROR_BOOKING_NOT_SAVED' => 'Lamentamos, mas a reserva não poderia ser salva!',
            'ERROR_NO_CHARGE' => 'Nenhum preç foi encontrado!',
            'ERROR_NO_ROUTE1' => 'A rota não pôde ser encontrada. Por favor tente novamente.',
            'ERROR_NO_ROUTE2' => 'A rota não pôde ser encontrada. Por favor tente novamente.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_START' => 'Desculpe, mas não podemos reservar a sua viagem on-line para este local informado, por favor, entre em contato com nosso escritório para mais informações.',
            'ERROR_NO_ROUTE1_EXCLUDED_POSTCODE_END' => 'Desculpe, mas não podemos reservar a sua viagem on-line para este local, entre em contato com nosso escritório para mais informações.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_START' => 'Desculpe, mas não podemos reservar a sua viagem on-line para este local informado, por favor, entre em contato com nosso escritório para mais informações.',
            'ERROR_NO_ROUTE2_EXCLUDED_POSTCODE_END' => 'Desculpe, mas não podemos reservar a sua viagem on-line para este local, entre em contato com nosso escritório para mais informações.',
            'ERROR_NO_ROUTE1_EXCLUDED_ROUTE' => 'Desculpe, mas não podemos reservar a sua viagem on-line para esta rota, entre em contato com nosso escritório para mais informações.',
            'ERROR_NO_ROUTE2_EXCLUDED_ROUTE' => 'Desculpe, mas não podemos reservar a sua viagem on-line para esta rota, entre em contato com nosso escritório para mais informações.',
            'ERROR_POSTCODE_MATCH' => 'If you are using the software outside of the UK we recommend disable setting "Better use of postcode based Fixed Price system" located in Settings -> Google.',
        ]
    ]

];