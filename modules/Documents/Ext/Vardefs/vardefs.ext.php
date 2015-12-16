<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-29 17:09:46
$dictionary["Document"]["fields"]["users_documents_1"] = array(
    'name' => 'users_documents_1',
    'type' => 'link',
    'relationship' => 'users_documents_1',
    'source' => 'non-db',
    'module' => 'Users',
    'bean_name' => 'User',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
    'id_name' => 'users_documents_1users_ida',
);
$dictionary["Document"]["fields"]["users_documents_1_name"] = array(
    'name' => 'users_documents_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
    'save' => true,
    'id_name' => 'users_documents_1users_ida',
    'link' => 'users_documents_1',
    'table' => 'users',
    'module' => 'Users',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["users_documents_1users_ida"] = array(
    'name' => 'users_documents_1users_ida',
    'type' => 'link',
    'relationship' => 'users_documents_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-08-30 13:03:38
$dictionary["Document"]["fields"]["anmol_applications_documents_1"] = array(
    'name' => 'anmol_applications_documents_1',
    'type' => 'link',
    'relationship' => 'anmol_applications_documents_1',
    'source' => 'non-db',
    'module' => 'anmol_Applications',
    'bean_name' => 'anmol_Applications',
    'vname' => 'LBL_ANMOL_APPLICATIONS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONS_TITLE',
    'id_name' => 'anmol_applications_documents_1anmol_applications_ida',
);
$dictionary["Document"]["fields"]["anmol_applications_documents_1_name"] = array(
    'name' => 'anmol_applications_documents_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_APPLICATIONS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONS_TITLE',
    'save' => true,
    'id_name' => 'anmol_applications_documents_1anmol_applications_ida',
    'link' => 'anmol_applications_documents_1',
    'table' => 'anmol_applications',
    'module' => 'anmol_Applications',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["anmol_applications_documents_1anmol_applications_ida"] = array(
    'name' => 'anmol_applications_documents_1anmol_applications_ida',
    'type' => 'link',
    'relationship' => 'anmol_applications_documents_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2015-08-29 17:04:07
$dictionary["Document"]["fields"]["documents_users_1"] = array(
    'name' => 'documents_users_1',
    'type' => 'link',
    'relationship' => 'documents_users_1',
    'source' => 'non-db',
    'module' => 'Users',
    'bean_name' => 'User',
    'side' => 'right',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_USERS_TITLE',
);


// created: 2015-08-29 16:37:35
$dictionary['Document']['fields']['active_date']['required'] = false;
$dictionary['Document']['fields']['active_date']['inline_edit'] = true;
$dictionary['Document']['fields']['active_date']['merge_filter'] = 'disabled';
$dictionary['Document']['fields']['active_date']['enable_range_search'] = false;


// created: 2015-09-08 17:22:07
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1"] = array(
    'name' => 'anmol_applicationss_documents_1',
    'type' => 'link',
    'relationship' => 'anmol_applicationss_documents_1',
    'source' => 'non-db',
    'module' => 'anmol_Applicationss',
    'bean_name' => 'anmol_Applicationss',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
    'id_name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
);
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1_name"] = array(
    'name' => 'anmol_applicationss_documents_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
    'save' => true,
    'id_name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
    'link' => 'anmol_applicationss_documents_1',
    'table' => 'anmol_applicationss',
    'module' => 'anmol_Applicationss',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1anmol_applicationss_ida"] = array(
    'name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
    'type' => 'link',
    'relationship' => 'anmol_applicationss_documents_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


$dictionary['Document']['fields']['SecurityGroups'] = array(
    'name' => 'SecurityGroups',
    'type' => 'link',
    'relationship' => 'securitygroups_documents',
    'module' => 'SecurityGroups',
    'bean_name' => 'SecurityGroup',
    'source' => 'non-db',
    'vname' => 'LBL_SECURITYGROUPS',
);


$dictionary["Document"]["fields"]["aos_contracts"] = array(
    'name' => 'aos_contracts',
    'type' => 'link',
    'relationship' => 'aos_contracts_documents',
    'source' => 'non-db',
    'module' => 'AOS_Contracts',
);

?>