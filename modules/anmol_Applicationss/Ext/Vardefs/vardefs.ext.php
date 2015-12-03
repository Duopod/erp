<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-16 13:05:15
$dictionary["anmol_Applicationss"]["fields"]["anmol_applicationss_anmol_application_stages_1"] = array (
  'name' => 'anmol_applicationss_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'anmol_application_stages',
  'bean_name' => 'anmol_application_stages',
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);


// created: 2015-09-08 17:22:07
$dictionary["anmol_Applicationss"]["fields"]["anmol_applicationss_documents_1"] = array(
    'name' => 'anmol_applicationss_documents_1',
    'type' => 'link',
    'relationship' => 'anmol_applicationss_documents_1',
    'source' => 'non-db',
    'module' => 'Documents',
    'bean_name' => 'Document',
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-09-22 22:57:01
$dictionary["anmol_Applicationss"]["fields"]["anmol_applicationss_tasks_1"] = array (
  'name' => 'anmol_applicationss_tasks_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_TASKS_TITLE',
);


// created: 2015-09-08 17:45:17
$dictionary["anmol_Applicationss"]["fields"]["anmol_course_search_anmol_applicationss_2"] = array(
    'name' => 'anmol_course_search_anmol_applicationss_2',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applicationss_2',
    'source' => 'non-db',
    'module' => 'anmol_course_search',
    'bean_name' => 'anmol_course_search',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'id_name' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
);
$dictionary["anmol_Applicationss"]["fields"]["anmol_course_search_anmol_applicationss_2_name"] = array(
    'name' => 'anmol_course_search_anmol_applicationss_2_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'save' => true,
    'id_name' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
    'link' => 'anmol_course_search_anmol_applicationss_2',
    'table' => 'anmol_course_search',
    'module' => 'anmol_course_search',
    'rname' => 'name',
);
$dictionary["anmol_Applicationss"]["fields"]["anmol_course_search_anmol_applicationss_2anmol_course_search_ida"] = array(
    'name' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applicationss_2',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_APPLICATIONSS_TITLE',
);


// created: 2015-09-08 17:27:28
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1"] = array(
    'name' => 'contacts_anmol_applicationss_1',
    'type' => 'link',
    'relationship' => 'contacts_anmol_applicationss_1',
    'source' => 'non-db',
    'module' => 'Contacts',
    'bean_name' => 'Contact',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
    'id_name' => 'contacts_anmol_applicationss_1contacts_ida',
);
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1_name"] = array(
    'name' => 'contacts_anmol_applicationss_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
    'save' => true,
    'id_name' => 'contacts_anmol_applicationss_1contacts_ida',
    'link' => 'contacts_anmol_applicationss_1',
    'table' => 'contacts',
    'module' => 'Contacts',
    'rname' => 'name',
    'db_concat_fields' =>
        array(
            0 => 'first_name',
            1 => 'last_name',
        ),
);
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1contacts_ida"] = array(
    'name' => 'contacts_anmol_applicationss_1contacts_ida',
    'type' => 'link',
    'relationship' => 'contacts_anmol_applicationss_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
);


/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:33
 */
$dictionary['anmol_Applicationss']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 02:08
 */


$dictionary['anmol_Applicationss']['fields']['anmol_course_search_anmol_applicationss_2_name']['required'] = true;  /// Making it Required


/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:23
 */
$dictionary['anmol_Applicationss']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['anmol_Applicationss']['fields']['file_url'] = array(
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
$dictionary['anmol_Applicationss']['fields']['filename'] = array(
    'name' => 'filename',
    'vname' => 'LBL_FILENAME',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);

 // created: 2015-09-21 08:21:42
$dictionary['anmol_Applicationss']['fields']['conditional_offer_c']['inline_edit']='';
$dictionary['anmol_Applicationss']['fields']['conditional_offer_c']['labelValue']='Apply for a Conditional Offer';

 

 // created: 2015-09-14 01:14:39
$dictionary['anmol_Applicationss']['fields']['filename']['required']=true;
$dictionary['anmol_Applicationss']['fields']['filename']['inline_edit']=true;
$dictionary['anmol_Applicationss']['fields']['filename']['importable']='true';
$dictionary['anmol_Applicationss']['fields']['filename']['merge_filter']='disabled';
$dictionary['anmol_Applicationss']['fields']['filename']['audited']=true;

 

// created: 2015-09-08 17:50:18
$dictionary['anmol_Applicationss']['fields']['name']['required'] = false;
$dictionary['anmol_Applicationss']['fields']['name']['inline_edit'] = true;
$dictionary['anmol_Applicationss']['fields']['name']['duplicate_merge'] = 'disabled';
$dictionary['anmol_Applicationss']['fields']['name']['duplicate_merge_dom_value'] = '0';
$dictionary['anmol_Applicationss']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['anmol_Applicationss']['fields']['name']['unified_search'] = false;



 // created: 2015-09-23 01:54:31
$dictionary['anmol_Applicationss']['fields']['testf_c']['inline_edit']='';
$dictionary['anmol_Applicationss']['fields']['testf_c']['labelValue']='testf';

 

 // created: 2015-09-21 08:33:28
$dictionary['anmol_Applicationss']['fields']['unchecked_docs_c']['inline_edit']='';
$dictionary['anmol_Applicationss']['fields']['unchecked_docs_c']['labelValue']='Unchecked Docs';

 

// created: 2015-09-08 17:52:07
$dictionary['anmol_Applicationss']['fields']['uni_name_c']['inline_edit'] = '1';
$dictionary['anmol_Applicationss']['fields']['uni_name_c']['labelValue'] = 'University';


?>