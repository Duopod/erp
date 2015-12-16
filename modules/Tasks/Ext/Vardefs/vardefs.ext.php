<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-22 22:57:01
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1"] = array (
  'name' => 'anmol_applicationss_tasks_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_tasks_1',
  'source' => 'non-db',
  'module' => 'anmol_Applicationss',
  'bean_name' => 'anmol_Applicationss',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'id_name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
);
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1_name"] = array (
  'name' => 'anmol_applicationss_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'save' => true,
  'id_name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
  'link' => 'anmol_applicationss_tasks_1',
  'table' => 'anmol_applicationss',
  'module' => 'anmol_Applicationss',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1anmol_applicationss_ida"] = array (
  'name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_TASKS_TITLE',
);



$dictionary['Task']['fields']['SecurityGroups'] = array(
    'name' => 'SecurityGroups',
    'type' => 'link',
    'relationship' => 'securitygroups_tasks',
    'module' => 'SecurityGroups',
    'bean_name' => 'SecurityGroup',
    'source' => 'non-db',
    'vname' => 'LBL_SECURITYGROUPS',
);


/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:23
 */
$dictionary['Tasks']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['Tasks']['fields']['file_url'] = array(
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
$dictionary['Tasks']['fields']['filename'] = array(
    'name' => 'filename',
    'vname' => 'LBL_FILENAME',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);
?>