<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-29 17:04:07
$dictionary["User"]["fields"]["documents_users_1"] = array(
    'name' => 'documents_users_1',
    'type' => 'link',
    'relationship' => 'documents_users_1',
    'source' => 'non-db',
    'module' => 'Documents',
    'bean_name' => 'Document',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_DOCUMENTS_TITLE',
    'id_name' => 'documents_users_1documents_ida',
);
$dictionary["User"]["fields"]["documents_users_1_name"] = array(
    'name' => 'documents_users_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_DOCUMENTS_TITLE',
    'save' => true,
    'id_name' => 'documents_users_1documents_ida',
    'link' => 'documents_users_1',
    'table' => 'documents',
    'module' => 'Documents',
    'rname' => 'document_name',
);
$dictionary["User"]["fields"]["documents_users_1documents_ida"] = array(
    'name' => 'documents_users_1documents_ida',
    'type' => 'link',
    'relationship' => 'documents_users_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_USERS_TITLE',
);


// created: 2015-09-04 11:17:10
$dictionary["User"]["fields"]["fp_event_locations_users_1"] = array(
    'name' => 'fp_event_locations_users_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_users_1',
    'source' => 'non-db',
    'module' => 'FP_Event_Locations',
    'bean_name' => 'FP_Event_Locations',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id_name' => 'fp_event_locations_users_1fp_event_locations_ida',
);
$dictionary["User"]["fields"]["fp_event_locations_users_1_name"] = array(
    'name' => 'fp_event_locations_users_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'save' => true,
    'id_name' => 'fp_event_locations_users_1fp_event_locations_ida',
    'link' => 'fp_event_locations_users_1',
    'table' => 'fp_event_locations',
    'module' => 'FP_Event_Locations',
    'rname' => 'name',
);
$dictionary["User"]["fields"]["fp_event_locations_users_1fp_event_locations_ida"] = array(
    'name' => 'fp_event_locations_users_1fp_event_locations_ida',
    'type' => 'link',
    'relationship' => 'fp_event_locations_users_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_USERS_TITLE',
);


// created: 2014-06-20 12:06:29
$dictionary["User"]["fields"]["project_users_1"] = array(
    'name' => 'project_users_1',
    'type' => 'link',
    'relationship' => 'project_users_1',
    'source' => 'non-db',
    'module' => 'Project',
    'bean_name' => 'Project',
    'vname' => 'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE',
);


$dictionary['Users']['fields']['fp_event_locations_users_1_name']['required'] = true;




$dictionary["User"]["fields"]["SecurityGroups"] = array(
    'name' => 'SecurityGroups',
    'type' => 'link',
    'relationship' => 'securitygroups_users',
    'source' => 'non-db',
    'module' => 'SecurityGroups',
    'bean_name' => 'SecurityGroup',
    'vname' => 'LBL_SECURITYGROUPS',
);

$dictionary["User"]["fields"]['securitygroup_noninher_fields'] = array(
    'name' => 'securitygroup_noninher_fields',
    'rname' => 'id',
    'relationship_fields' => array('id' => 'securitygroup_noninherit_id',
        'noninheritable' => 'securitygroup_noninheritable',
        'primary_group' => 'securitygroup_primary_group'),
    'vname' => 'LBL_USER_NAME',
    'type' => 'relate',
    'link' => 'SecurityGroups',
    'link_type' => 'relationship_info',
    'source' => 'non-db',
    'Importable' => false,
    'duplicate_merge' => 'disabled',

);


$dictionary["User"]["fields"]['securitygroup_noninherit_id'] = array(
    'name' => 'securitygroup_noninherit_id',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_securitygroup_noninherit_id',
);

$dictionary["User"]["fields"]['securitygroup_noninheritable'] = array(
    'name' => 'securitygroup_noninheritable',
    'type' => 'bool',
    'source' => 'non-db',
    'vname' => 'LBL_SECURITYGROUP_NONINHERITABLE',
);

$dictionary["User"]["fields"]['securitygroup_primary_group'] = array(
    'name' => 'securitygroup_primary_group',
    'type' => 'bool',
    'source' => 'non-db',
    'vname' => 'LBL_PRIMARY_GROUP',
);




// created: 2015-08-29 17:16:19
$dictionary['User']['fields']['address_c']['inline_edit'] = '1';
$dictionary['User']['fields']['address_c']['labelValue'] = 'address';



 // created: 2015-09-14 00:21:13
$dictionary['User']['fields']['pushbullet_token_c']['inline_edit']=1;

 

// created: 2015-08-29 17:09:46
$dictionary["User"]["fields"]["users_documents_1"] = array(
    'name' => 'users_documents_1',
    'type' => 'link',
    'relationship' => 'users_documents_1',
    'source' => 'non-db',
    'module' => 'Documents',
    'bean_name' => 'Document',
    'side' => 'right',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);

?>