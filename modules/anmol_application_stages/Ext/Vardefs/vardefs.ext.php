<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-17 17:21:23
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_subject_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_subject_c']['labelValue'] = 'pendency stage 0 subject';


// created: 2015-09-21 09:55:43
$dictionary['anmol_application_stages']['fields']['conditional_offer_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['conditional_offer_c']['labelValue'] = 'Conditional Offer?';


// created: 2015-09-17 17:22:57
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_subject_du__c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_subject_du__c']['labelValue'] = 'pendency stage 0 subject du';


// created: 2015-09-17 15:02:33
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_c']['labelValue'] = 'pendency stage 0';


// created: 2015-09-25 00:06:20
$dictionary['anmol_application_stages']['fields']['application_stage_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['application_stage_c']['labelValue'] = 'Application Stage';


// created: 2015-09-17 14:58:45
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_c']['labelValue'] = 'Enter Pendency Remark (Stg 1)';


// created: 2015-09-21 09:59:38
$dictionary['anmol_application_stages']['fields']['unchecked_docs_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['unchecked_docs_c']['labelValue'] = 'Pending Docs';


// created: 2015-09-17 17:10:58
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_subject_du_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_subject_du_c']['labelValue'] = 'pendency stage 1 subject du';


// created: 2015-09-25 12:22:43
$dictionary['anmol_application_stages']['fields']['email_subject_stage2_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['email_subject_stage2_c']['labelValue'] = 'email subject stage2';


// created: 2015-09-16 22:34:30
$dictionary['anmol_application_stages']['fields']['filename']['inline_edit'] = true;
$dictionary['anmol_application_stages']['fields']['filename']['importable'] = 'true';
$dictionary['anmol_application_stages']['fields']['filename']['merge_filter'] = 'disabled';


// created: 2015-09-16 15:21:32
$dictionary['anmol_application_stages']['fields']['application_stage_history_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['application_stage_history_c']['labelValue'] = 'Application History';


// created: 2015-09-22 22:34:04
$dictionary['anmol_application_stages']['fields']['app_sent_to_uni_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['app_sent_to_uni_c']['labelValue'] = 'app sent to uni';

 

// created: 2015-09-16 13:05:15
$dictionary["anmol_application_stages"]["fields"]["anmol_applicationss_anmol_application_stages_1"] = array (
  'name' => 'anmol_applicationss_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'anmol_Applicationss',
  'bean_name' => 'anmol_Applicationss',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'id_name' => 'anmol_appl021dationss_ida',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_applicationss_anmol_application_stages_1_name"] = array (
  'name' => 'anmol_applicationss_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'save' => true,
  'id_name' => 'anmol_appl021dationss_ida',
  'link' => 'anmol_applicationss_anmol_application_stages_1',
  'table' => 'anmol_applicationss',
  'module' => 'anmol_Applicationss',
  'rname' => 'name',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_appl021dationss_ida"] = array (
  'name' => 'anmol_appl021dationss_ida',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);


// created: 2015-12-16 12:20:06
$dictionary["anmol_application_stages"]["fields"]["fp_event_locations_anmol_application_stages_1"] = array(
    'name' => 'fp_event_locations_anmol_application_stages_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_anmol_application_stages_1',
    'source' => 'non-db',
    'module' => 'FP_Event_Locations',
    'bean_name' => 'FP_Event_Locations',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_ANMOL_APPLICATION_STAGES_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id_name' => 'fp_event_l5a9acations_ida',
);
$dictionary["anmol_application_stages"]["fields"]["fp_event_locations_anmol_application_stages_1_name"] = array(
    'name' => 'fp_event_locations_anmol_application_stages_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_ANMOL_APPLICATION_STAGES_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'save' => true,
    'id_name' => 'fp_event_l5a9acations_ida',
    'link' => 'fp_event_locations_anmol_application_stages_1',
    'table' => 'fp_event_locations',
    'module' => 'FP_Event_Locations',
    'rname' => 'name',
);
$dictionary["anmol_application_stages"]["fields"]["fp_event_l5a9acations_ida"] = array(
    'name' => 'fp_event_l5a9acations_ida',
    'type' => 'link',
    'relationship' => 'fp_event_locations_anmol_application_stages_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);


// created: 2015-09-24 15:35:09
$dictionary["anmol_application_stages"]["fields"]["anmol_application_stages_anmol_docscollection_1"] = array (
  'name' => 'anmol_application_stages_anmol_docscollection_1',
  'type' => 'link',
  'relationship' => 'anmol_application_stages_anmol_docscollection_1',
  'source' => 'non-db',
  'module' => 'anmol_DocsCollection',
  'bean_name' => 'anmol_DocsCollection',
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATION_STAGES_ANMOL_DOCSCOLLECTION_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
);


// created: 2015-09-22 21:58:40
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_dummy_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_dummy_c']['labelValue'] = 'pendency stage 1 dummy';

 

// created: 2015-09-24 16:00:34
$dictionary["anmol_application_stages"]["fields"]["anmol_docscollection_anmol_application_stages_1"] = array (
  'name' => 'anmol_docscollection_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'anmol_docscollection_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'anmol_DocsCollection',
  'bean_name' => 'anmol_DocsCollection',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
  'id_name' => 'anmol_docs1beelection_ida',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_docscollection_anmol_application_stages_1_name"] = array (
  'name' => 'anmol_docscollection_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
  'save' => true,
  'id_name' => 'anmol_docs1beelection_ida',
  'link' => 'anmol_docscollection_anmol_application_stages_1',
  'table' => 'anmol_docscollection',
  'module' => 'anmol_DocsCollection',
  'rname' => 'name',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_docs1beelection_ida"] = array (
  'name' => 'anmol_docs1beelection_ida',
  'type' => 'link',
  'relationship' => 'anmol_docscollection_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);


// created: 2015-09-24 10:16:50
$dictionary['anmol_application_stages']['fields']['pendency_state_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['pendency_state_c']['labelValue'] = 'pendency state';


// created: 2015-09-16 21:49:21
$dictionary['anmol_application_stages']['fields']['uni_email_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['uni_email_c']['labelValue'] = 'University Email';

 

// created: 2015-09-21 22:38:54
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1"] = array (
  'name' => 'contacts_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'contacts_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_anmol_application_stages_1contacts_ida',
);
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1_name"] = array (
  'name' => 'contacts_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_anmol_application_stages_1contacts_ida',
  'link' => 'contacts_anmol_application_stages_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1contacts_ida"] = array (
  'name' => 'contacts_anmol_application_stages_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);


/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:33
 */
$dictionary['anmol_application_stages']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);

// created: 2015-09-17 17:09:35
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_subject_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_1_subject_c']['labelValue'] = 'pendency stage 1 subject';


// created: 2015-09-21 22:51:22
$dictionary['anmol_application_stages']['fields']['email_subject_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['email_subject_c']['labelValue'] = 'Email Subject';


// created: 2015-09-17 16:51:01
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_dummy_c']['inline_edit'] = '1';
$dictionary['anmol_application_stages']['fields']['pendency_stage_0_dummy_c']['labelValue'] = 'pendency stage 0 dummy';

 

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


// created: 2015-09-24 11:19:58
$dictionary['anmol_application_stages']['fields']['uni_email_save_c']['inline_edit'] = '';
$dictionary['anmol_application_stages']['fields']['uni_email_save_c']['labelValue'] = 'uni email save';

 

 // created: 2015-09-16 21:54:18
$dictionary['anmol_application_stages']['fields']['email_body_c']['inline_edit']='1';
$dictionary['anmol_application_stages']['fields']['email_body_c']['labelValue']='Email Body';

 

 // created: 2015-09-25 11:44:40
$dictionary['anmol_application_stages']['fields']['email_body_stage2_c']['inline_edit']='';
$dictionary['anmol_application_stages']['fields']['email_body_stage2_c']['labelValue']='email body stage2';

 
?>