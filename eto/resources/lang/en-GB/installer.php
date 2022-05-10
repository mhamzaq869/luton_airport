<?php

return [
    'defaultConfig' => 'General',
    'databaseConfig' => 'Database',
    'emailConfig' => 'Email',
    'connectionOk' => 'The connection was established.',
    'connectionFail' => 'The connection could not be established, incorrect data has been entered.',
    'datatable_has_tables' => 'You have tables with :prefix, please change prefix.',

    'form' => [
        'send_welcome_mail' => 'Send welcome email to above email address',
        'autologin' => 'Login after installation',
        'errorTitle' => 'The Following errors occurred:',
        'name_required' => 'An environment name is required.',
        'app_url_schema' => 'URL Schema',
        'app_email_label' => 'Admin Email',
        'app_email_placeholder' => 'Admin Email',
        'app_password_label' => 'Admin Password',
        'app_password_placeholder' => 'Admin Password',
        'app_license_label' => 'License Key',
        'app_license_placeholder' => 'License Key',
        'app_name_label' => 'App Name',
        'app_name_placeholder' => 'App Name',
        'app_environment_label' => 'App Environment',
        'app_environment_label_local' => 'Local',
        'app_environment_label_developement' => 'Development',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'Production',
        'app_environment_label_other' => 'Other',
        'app_environment_placeholder_other' => 'Enter your environment...',
        'app_debug_label' => 'App Debug',
        'app_debug_label_true' => 'True',
        'app_debug_label_false' => 'False',
        'app_log_level_label' => 'App Log Level',
        'app_log_level_label_debug' => 'debug',
        'app_log_level_label_info' => 'info',
        'app_log_level_label_notice' => 'notice',
        'app_log_level_label_warning' => 'warning',
        'app_log_level_label_error' => 'error',
        'app_log_level_label_critical' => 'critical',
        'app_log_level_label_alert' => 'alert',
        'app_log_level_label_emergency' => 'emergency',
        'app_url_label' => 'App Url',
        'app_url_placeholder' => 'App Url',
        'db_connection_label' => 'Database Connection',
        'db_connection_label_mysql' => 'mysql',
        'db_connection_label_sqlite' => 'sqlite',
        'db_connection_label_pgsql' => 'pgsql',
        'db_connection_label_sqlsrv' => 'sqlsrv',
        'db_host_label' => 'Host',
        'db_host_placeholder' => 'Host',
        'db_port_label' => 'Port',
        'db_port_placeholder' => 'Port',
        'db_name_label' => 'Database Name',
        'db_name_placeholder' => 'Database Name',
        'db_prefix_label' => 'Prefix',
        'db_prefix_placeholder' => 'Prefix',
        'db_username_label' => 'Username',
        'db_username_placeholder' => 'Username',
        'db_password_label' => 'Password',
        'db_password_placeholder' => 'Password',

        'app_tabs' => [
            'more_info' => 'More Info',
            'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
            'broadcasting_label' => 'Broadcast Driver',
            'broadcasting_placeholder' => 'Broadcast Driver',
            'cache_label' => 'Cache Driver',
            'cache_placeholder' => 'Cache Driver',
            'session_label' => 'Session Driver',
            'session_placeholder' => 'Session Driver',
            'queue_label' => 'Queue Driver',
            'queue_placeholder' => 'Queue Driver',

            'mail_connection_type' => 'Connection type',
            'mail_sendmail' => 'Sendmail',
            'mail_smtp' => 'SMTP',
            'mail_sendmail_path' => 'Sendmail path',
            'mail_label' => 'Mail',
            'mail_driver_label' => 'Driver',
            'mail_driver_placeholder' => 'Driver',
            'mail_host_label' => 'Host',
            'mail_host_placeholder' => 'Host',
            'mail_port_label' => 'Port',
            'mail_port_placeholder' => 'Port',
            'mail_username_label' => 'Username',
            'mail_username_placeholder' => 'Username',
            'mail_password_label' => 'Password',
            'mail_password_placeholder' => 'Password',
            'mail_encryption_label' => 'Encryption',
            'mail_encryption_placeholder' => 'None',
        ],
        'buttons' => [
            'install' => 'Install',
            'check_connection' => 'Check Connection',
        ],
    ],

    'install' => 'Install',

    /**
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'EasyTaxiOffice Installer successfully INSTALLED on ',
        'update_success_log_message' => 'EasyTaxiOffice Installer successfully UPDATED on ',
    ],

    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Installation Finished',
        'templateTitle' => 'Installation Finished',
        'finished' => 'Application has been successfully installed.',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'env' => 'Final .env File:',
        'exit' => 'Click here to exit',
    ],

    'success' => 'Your config.php file settings have been saved.',
    'errors' => 'Unable to save the config.php file, Please create it manually.',
    'allready_installed' => 'The application has already been installed under this domain',
    'installation_limit_exceeded' => 'Installation limit for the indicated license has been exceeded',
    'invalid_license_key' => 'An incorrect license code has been provided',
    'license_expired' => 'Your license has expired',
    'btn_activation' => 'Activate',
    'license_activation' => 'Your license has been deactivated for the time the application is moved to the new location / domain. Activate the license in your current location / domain',
    'attention' => 'Attention!',
    'infoDeacivationlicense' => 'To deactivate the license you must provide the license key',
    'infoDeacivation' => 'Please note that when you deactivate the license the entire application will stop working, including mobile applications, until it is reactivated.',
    'bad_data' => 'Incorrect entries have been made, please correct.',
];
