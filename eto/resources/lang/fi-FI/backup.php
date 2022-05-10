<?php

return [
    'page_title' => 'Backups',
    'settings' => 'Backup settings',
    'parentInfo' => 'This backup is a copy',
    'remoteDisk' => 'Remote disk configuration',
    'driverBackup' => 'Backup place',
    'driverLocal' => 'Local',
    'backup' => 'Backup',
    'types' => 'Types',
    'newbackup' => 'New backup',
    'free_space' => 'Free space',
    'connectionFail' => 'Error connecting to the server, please try again.',
    'backupCreated' => 'The backup has been successfully completed, the page will be reloaded in a moment.',
    'backupCopied' => 'Backup has been copied.',
    'lackOfDiskSpace' => 'Insufficient disk space, please delete older backups, or increase disk space to be able to perform a new backup.',
    'deleteMessage' => 'Are you sure you want to delete this backup?',
    'recoveryMessage' => 'Are you sure you would like to recover this backup? All current data will be lost and you wont be able to recover it later on.',
    'enter_license_key' => 'Enter license key',
    'button' => [
        'generate' => 'Backup',
        'reset' => 'Reset',
        'close' => 'Close',
        'delete' => 'Delete',
        'download' => 'Download',
        'recovery' => 'Recovery',
        'copyToDriver' => 'Copy to another disk',
        'copy' => 'Copy',
        'create' => 'New backup',
        'move' => 'Move',
        'moveToDriver' => 'Move to another disk',
    ],
    'type' => [
        'full' => 'Full',
        'db' => 'Database',
        'files' => 'Files',
        'custom' => 'Custom',
        'system' => 'System',
        'subscription' => 'Subscription',
    ],
    'typeColor' => [
        'full' => '#006600',
        'db' => '#ff9900',
        'files' => '#ff3300',
        'custom' => '#0000ff',
        'system' => '#000',
        'subscription' => '#0000ff',
    ],
    'input' => [
        'name' => 'Name',
        'comments' => 'Comments',
        'type' => 'Type',
        'norequired' => 'Optional',
        'directories' => 'Select directories',
        'files' => 'Select files',
        'protocol' => 'Protocol',
        'host' => 'Host',
        'username' => 'Username',
        'password' => 'Password',
        'port' => 'Port',
        'root' => 'Root',
        'timeout' => 'Timeout',
        'passive' => 'Passive mode',
        'ssl' => 'SSL connection',
        'privateKey' => 'Private key (only SFTP)',
        'protocolNone' => 'Unused',
        'driverBackup' => 'Select disk',
    ],
    'status' => [
        0 => 'Fail',
        1 => 'Success',
        'file_not_exists' => 'Backup file does not exists',
    ],
    'statusColor' => [
        0 => '#f41d1d',
        1 => '#00a80e',
    ],
    'recovery' => [
        'extracting' => 'Extracting the archive',
        'startRecovery' => 'Starting the restoration process',
        'recoveryFiles' => 'Files are being restored',
        'recoveryDb' => 'Database are being restored',
        'recoveryFailExtract' => 'An error occurred while unpacking files, try again, or contact support. Error message:',
        'recoveryFailRecoveryFiles' => 'An error occurred while copying files, the application can not be properly started. The recovery process ended with an error. go to :url to run the diagnostic and repair tools.',
        'recoveryFailRecoveryDb' => 'An error occurred while rebuilding the database, the application can not be properly started. The recovery process ended with an error. go to :url to run the diagnostic and repair tools.',
        'recoveryComplite' => 'The restoration has been completed, the page will be reloaded in a moment',
    ],
    'new' => [
        'bd_backup' => 'Creating a copy of the database',
        'app_files_backup' => 'Creating a copy of the app files',
        'vendor_backup' => 'Creating a copy of the vendor files',
        'termination_process' => 'Termination of the process...',
        'completed' => 'The backup was completed successfully, the page will be reloaded in a moment',
        'not_completed' => 'Backup was not successful, please try again or contact support',
    ],
];
