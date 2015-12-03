<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:23
 */
$dictionary['anmol_application_stages']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url'] = array(
    'name' => 'file_url',
    'vname' => 'LBL_FILE_URL',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename'] = array(
    'name' => 'filename',
    'vname' => 'LBL_FILENAME',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

/* UC Upload

$dictionary['anmol_application_stages']['fields']['file_mime_type1'] = array(
    'name' => 'file_mime_type1',
    'vname' => 'LBL_FILE_MIME_TYPE1',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url1'] = array(
    'name' => 'file_url1',
    'vname' => 'LBL_FILE_URL1',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename1'] = array(
    'name' => 'filename1',
    'vname' => 'LBL_FILENAME1',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

// C Upload

$dictionary['anmol_application_stages']['fields']['file_mime_type2'] = array(
    'name' => 'file_mime_type2',
    'vname' => 'LBL_FILE_MIME_TYPE2',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url2'] = array(
    'name' => 'file_url2',
    'vname' => 'LBL_FILE_URL2',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename2'] = array(
    'name' => 'filename2',
    'vname' => 'LBL_FILENAME2',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

// Financial Docs Upload

$dictionary['anmol_application_stages']['fields']['file_mime_type3'] = array(
    'name' => 'file_mime_type3',
    'vname' => 'LBL_FILE_MIME_TYPE3',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url3'] = array(
    'name' => 'file_url3',
    'vname' => 'LBL_FILE_URL3',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename3'] = array(
    'name' => 'filename3',
    'vname' => 'LBL_FILENAME3',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

// COE Upload

$dictionary['anmol_application_stages']['fields']['file_mime_type4'] = array(
    'name' => 'file_mime_type4',
    'vname' => 'LBL_FILE_MIME_TYPE4',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url4'] = array(
    'name' => 'file_url4',
    'vname' => 'LBL_FILE_URL4',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename4'] = array(
    'name' => 'filename4',
    'vname' => 'LBL_FILENAME4',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

// Update Pendency, this field get emptied when selected

$dictionary['anmol_application_stages']['fields']['file_mime_type5'] = array(
    'name' => 'file_mime_type5',
    'vname' => 'LBL_FILE_MIME_TYPE5',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['file_url5'] = array(
    'name' => 'file_url5',
    'vname' => 'LBL_FILE_URL5',
    'type' => 'function',
    'function_class' => 'UploadFile',
    'function_name' => 'get_upload_url1',
    'function_params' => array('$this'),
    'source' => 'function',
    'reportable' => false,
    'importable' => false,
);
$dictionary['anmol_application_stages']['fields']['filename5'] = array(
    'name' => 'filename5',
    'vname' => 'LBL_FILENAME5',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);*/


