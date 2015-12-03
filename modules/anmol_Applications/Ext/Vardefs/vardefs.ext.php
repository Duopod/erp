<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-30 13:03:38
$dictionary["anmol_Applications"]["fields"]["anmol_applications_documents_1"] = array(
    'name' => 'anmol_applications_documents_1',
    'type' => 'link',
    'relationship' => 'anmol_applications_documents_1',
    'source' => 'non-db',
    'module' => 'Documents',
    'bean_name' => 'Document',
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-08-30 13:15:31
$dictionary["anmol_Applications"]["fields"]["anmol_applications_opportunities_1"] = array(
    'name' => 'anmol_applications_opportunities_1',
    'type' => 'link',
    'relationship' => 'anmol_applications_opportunities_1',
    'source' => 'non-db',
    'module' => 'Opportunities',
    'bean_name' => 'Opportunity',
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


// created: 2015-08-28 22:49:14
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1"] = array(
    'name' => 'anmol_course_search_anmol_applications_1',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applications_1',
    'source' => 'non-db',
    'module' => 'anmol_course_search',
    'bean_name' => 'anmol_course_search',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'id_name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
);
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1_name"] = array(
    'name' => 'anmol_course_search_anmol_applications_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'save' => true,
    'id_name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
    'link' => 'anmol_course_search_anmol_applications_1',
    'table' => 'anmol_course_search',
    'module' => 'anmol_course_search',
    'rname' => 'name',
);
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1anmol_course_search_ida"] = array(
    'name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applications_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_APPLICATIONS_TITLE',
);


// created: 2015-08-28 22:42:45
$dictionary["anmol_Applications"]["fields"]["anmol_university_list_anmol_applications_1"] = array(
    'name' => 'anmol_university_list_anmol_applications_1',
    'type' => 'link',
    'relationship' => 'anmol_university_list_anmol_applications_1',
    'source' => 'non-db',
    'module' => 'anmol_University_list',
    'bean_name' => 'anmol_University_list',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
    'id_name' => 'anmol_univ049aty_list_ida',
);
$dictionary["anmol_Applications"]["fields"]["anmol_university_list_anmol_applications_1_name"] = array(
    'name' => 'anmol_university_list_anmol_applications_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
    'save' => true,
    'id_name' => 'anmol_univ049aty_list_ida',
    'link' => 'anmol_university_list_anmol_applications_1',
    'table' => 'anmol_university_list',
    'module' => 'anmol_University_list',
    'rname' => 'name',
);
$dictionary["anmol_Applications"]["fields"]["anmol_univ049aty_list_ida"] = array(
    'name' => 'anmol_univ049aty_list_ida',
    'type' => 'link',
    'relationship' => 'anmol_university_list_anmol_applications_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_FROM_ANMOL_APPLICATIONS_TITLE',
);


$dictionary['anmol_Applications']['fields']['anmol_course_search_anmol_applications_1_name']['required'] = true;


$dictionary['anmol_Applications']['fields']['assigned_user_name']['disabled'] = true;

// created: 2015-09-08 15:36:15
$dictionary['anmol_Applications']['fields']['checkbox_1_c']['inline_edit'] = '1';
$dictionary['anmol_Applications']['fields']['checkbox_1_c']['labelValue'] = 'checkbox 1';



// created: 2015-08-29 20:10:59
$dictionary['anmol_Applications']['fields']['name']['required'] = false;
$dictionary['anmol_Applications']['fields']['name']['inline_edit'] = true;
$dictionary['anmol_Applications']['fields']['name']['duplicate_merge'] = 'disabled';
$dictionary['anmol_Applications']['fields']['name']['duplicate_merge_dom_value'] = '0';
$dictionary['anmol_Applications']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['anmol_Applications']['fields']['name']['unified_search'] = false;



// created: 2015-08-29 02:15:19
$dictionary['anmol_Applications']['fields']['uni_name_c']['inline_edit'] = '1';
$dictionary['anmol_Applications']['fields']['uni_name_c']['labelValue'] = 'University';


?>