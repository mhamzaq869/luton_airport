<?php

return [
    'page_title' => 'Export',
    'description' => 'Export',
    'columns' => 'Columns',
    'selectFilter' => 'Select filters',
    'editParams' => 'Edit params',
    'declared_filters' => 'Available filters',
    'add_filters' => 'Add filters',
    'filter_name' => 'Filter name',
    'enter_name' => 'Enter name!!',
    'generate_csv' => 'CSV',
    'generate_xls' => 'MS Excel XLS',
    'generate_xlsx' => 'MS Excel XLSx',
    'generate_pdf' => 'PDF',
    'download' => 'Download',
    'thead' => [
        'section' => 'Section',
        'filters' => 'Filters',
    ],
    'section' => [
        'bookings' => 'Bookings',
        'users' => 'Users',
        'customers' => 'Customers',
        'feedback' => 'Feedback',
        'fixedprices' => 'Fixed Prices',
        'vehicletypes' => 'Vehicle Types',
        'vehicles' => 'Vehicles',
        'all' => 'Select all',
    ],
    'help' => [
        'editFilter' => 'Edit filters',
    ],
    'filter' => [
        'selectSavedFilter' => 'Select saved filters',
        'latest' => 'Latest',
        'completed' => 'Completed',
        'canceled' => 'Canceled',
        'status' => 'Status',
        'source' => 'Source',
        'service' => 'Service',
        'payment' => 'Payment method',
        'payment_status' => 'Payment status',
        'driver' => 'Driver',
        'customer' => 'Customer',
        'date_type' => 'Date type',
        'from' => 'From',
        'to' => 'To',
        'date' => 'Journey Date',
        'created_date' => 'Created Date',
        'modified_date' => 'Modified Date',
        'profile_type' => 'Profile type',
        'profile_created_from' => 'Profile created from',
        'profile_created_to' => 'Profile created to',
        'feedback_created_from' => 'Feedback created from',
        'feedback_created_to' => 'Feedback created to',
        'role' => 'User Role',
        'direction' => 'Direction',
        'is_zone' => 'Type of calculation',
        'is_backend' => 'Display',
        'capacity' => 'Capacity',
        'factor_type' => 'Factor type',
        'type' => 'Type',
    ],
    'column' => [
        'bookings' => [
            'created_date' => 'Created at',
            'ref_number' => 'Reference number',
            'status' => 'status',
            'contact_name' => 'Passenger',
            'date' => 'Journey Date',
            'flight_number' => 'Flight number',
            'flight_landing_time' => 'Flight landing time',
            'departure_city' => 'Arriving from',
            'departure_flight_number' => 'Flight departure number',
            'departure_flight_time' => 'Flight departure time',
            'departure_flight_city' => 'Flight departure to',
            'contact_mobile' => 'Phone number',
            'address_start' => 'From',
            'address_end' => 'To',
            'waypoints' => 'Waypoints',
            'total' => 'Total',
            'total_price' => 'Journey price',
            'discount' => 'Discount',
            'discount_code' => 'Discount code',
            'driver_name' => 'Driver',
            'vehicle_name' => 'Driver vehicle',
            'vehicle' => 'Vehicle type',
            'commission' => 'Driver income',
            'cash' => 'Passenger charge',
            'waiting_time' => 'Waiting time',
            'route' => 'Route',
            'contact_email' => 'Email',
            'meet_and_greet' => 'Meet & greet',
            'source' => 'Source',
            'user_name' => 'Customer',
            'lead_passenger_name' => 'Lead passenger',
            'lead_passenger_email' => 'Lead passenger email',
            'lead_passenger_mobile' => 'Lead phone number',
            'modified_date' => 'Updated at',
            'service_type' => 'Service type',
            'duration' => 'Duration',
            'scheduled_route' => 'Scheduled route',
            'id' => 'ID',
            'user_id' => 'Customer ID',
            'driver_id' => 'Driver ID',
            'vehicle_id' => 'Vehicle ID',
            'site_id' => 'Site ID',
            'service_duration' => 'Duration',
        ],
        'users' => [
            'id' => 'User ID',
            'roles' => 'Roles',
            'name' => 'Name',
            'username' => 'Username',
            'email' => 'Email',
            'avatar' => 'Avatar',
            'activated' => 'Activated',
            'status' => 'Status',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'accuracy' => 'Accuracy',
            'heading' => 'Heading',
            'last_seen_at' => 'Last seen Date',
            'created_at' => 'Created Date',
            'updated_at' => 'Modified Date',
            'profile' => [
                'id' => 'User profile ID',
                'title' => 'Title',
                'first_name' => 'First name',
                'last_name' => 'Last name',
                'date_of_birth' => 'Date of birth',
                'mobile_no' => 'Mobile number',
                'telephone_no' => 'Telephone number',
                'emergency_no' => 'Emergency number',
                'address' => 'Address',
                'city' => 'City',
                'postcode' => 'Postcode',
                'state' => 'County',
                'country' => 'Country',
                'profile_type' => 'Profile type',
                'company_name' => 'Company name',
                'company_number' => 'Company number',
                'company_tax_number' => 'Company VAT number',
                'national_insurance_no' => 'National insurance number',
                'bank_account' => 'Bank account details',
                'unique_id' => 'Unique ID',
                'commission' => 'Commission',
                'availability' => 'Availability',
                'availability_status' => 'Availability status',
                'insurance' => 'Insurance',
                'insurance_expiry_date' => 'Insurance expiry date',
                'driving_licence' => 'Driving licence',
                'driving_licence_expiry_date' => 'Driving licence expiry date',
                'pco_licence' => 'PCO licence',
                'pco_licence_expiry_date' => 'PCO licence expiry date',
                'phv_licence' => 'PHV licence',
                'phv_licence_expiry_date' => 'PHV licence expiry date',
                'description' => 'Description',
                'created_at' => 'Created profile date',
                'updated_at' => 'Modified profile date',
            ],
        ],
        'customers' => [
            'id' => 'User ID',
            'site' => 'Site',
            'roles' => 'Roles',
            'name' => 'Name',
            'username' => 'Username',
            'email' => 'Email',
            'ip' => 'IP',
            'activated' => 'Activated',
            'status' => 'Status',
            'created_at' => 'Created Date',
            'profile' => [
                'title' => 'Title',
                'first_name' => 'First name',
                'last_name' => 'Last name',
                'mobile_no' => 'Mobile number',
                'telephone_no' => 'Telephone number',
                'emergency_no' => 'Emergency number',
                'address' => 'Address',
                'city' => 'City',
                'postcode' => 'Postcode',
                'state' => 'County',
                'country' => 'Country',
                'company_name' => 'Company name',
                'company_number' => 'Company number',
                'company_tax_number' => 'Company VAT number',
            ],
        ],
        'feedback' => [
            'type' => 'Type',
            'name' => 'Name',
            'description' => 'Description',
            'ref_number' => 'Reference number',
            'email' => 'Email',
            'phone' => 'Phone',
            'params' => 'Params',
            'additional_files' => 'Additional Files',
            'id' => 'ID',
            'status' => 'Status',
            'created_at' => 'Created Date',
        ],
        'fixedprices' => [
            'is_zone' => 'Type of calculation',
            'start_postcode' => 'From',
            'end_postcode' => 'To',
            'direction' => 'Direction',
            'price' => 'Price',
            'deposit' => 'Deposit',
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'id' => 'ID',
            'status' => 'Status',
            'type' => 'Type',
            'service_ids' => 'Services',
            'modified_date' => 'Modified Date',
        ],
        'vehicletypes' => [
            'site' => 'Site',
            'services_ids' => 'Services',
            'hourly_rate' => 'Hourly rate',
            'name' => 'Name',
            'description' => 'Description',
            'driver' => 'Driver',
            'disable_info' => 'Enquire button',
            'image' => 'Image',
            'max_amount' => 'Vehicles',
            'passengers' => 'Passengers',
            'luggage' => 'Luggage',
            'hand_luggage' => 'Hand luggage',
            'child_seats' => 'Child seats',
            'baby_seats' => 'Booster seats',
            'infant_seats' => 'Infant seats',
            'wheelchair' => 'Wheelchair',
            'factor_type' => 'Factor type',
            'price' => 'Price',
            'default' => 'Default',
            'status' => 'Status',
            'is_backend' => 'Display',
            'id'=>'ID',
        ],
        'vehicles' => [
            'name' => 'Name',
            'driver' => 'Driver',
            'image' => 'Image',
            'mot' => 'MOT',
            'mot_expiry_date' => 'MOT expiry date',
            'make' => 'Make',
            'model' => 'Model',
            'colour' => 'Colour',
            'body_type' => 'Body type',
            'no_of_passengers' => 'Passenger capacity',
            'registered_keeper_name' => 'Registered keeper name',
            'registered_keeper_address' => 'Registered keeper address',
            'description' => 'Description',
            'status' => 'Status',
            'selected' => 'Primary',
            'created_at' => 'Created Date',
            'updated_at' => 'Modified Date',
            'id'=>'ID',
        ],
        'all' => 'Select all columns',
    ],
    'fields' => [
        'direction' => [
            'both_ways' => 'Both Ways',
            'from_to' => 'From -> To',
        ],
        'is_zone' => [
            'zones' => 'Zones',
            'postcodes' => 'Postcodes',
        ],
        'published' => [
            'active' => 'Active',
            'inactive' => 'Inactive',
        ],
        'factor_type' => [
            'flat' => 'Flat',
            'multiply' => 'Multiply',
        ],
        'is_backend' => [
            'backend' => 'Backend',
            'backend_frontend' => 'Frontend & Backend',
        ],
        'default' => [
            'yes' => 'Yes',
            'no' => 'No',
        ],
        'availability' => [
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'available_date' => 'Available date',
        ],
        'availability_status' => [
            'available' => 'Available',
            'inaccessible' => 'Inaccessible',
        ],
    ],
];
