<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-30 13:15:31
$dictionary["Opportunity"]["fields"]["anmol_applications_opportunities_1"] = array(
    'name' => 'anmol_applications_opportunities_1',
    'type' => 'link',
    'relationship' => 'anmol_applications_opportunities_1',
    'source' => 'non-db',
    'module' => 'anmol_Applications',
    'bean_name' => 'anmol_Applications',
    'vname' => 'LBL_ANMOL_APPLICATIONS_OPPORTUNITIES_1_FROM_ANMOL_APPLICATIONS_TITLE',
    'id_name' => 'anmol_applications_opportunities_1anmol_applications_ida',
);
$dictionary["Opportunity"]["fields"]["anmol_applications_opportunities_1_name"] = array(
    'name' => 'anmol_applications_opportunities_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_APPLICATIONS_OPPORTUNITIES_1_FROM_ANMOL_APPLICATIONS_TITLE',
    'save' => true,
    'id_name' => 'anmol_applications_opportunities_1anmol_applications_ida',
    'link' => 'anmol_applications_opportunities_1',
    'table' => 'anmol_applications',
    'module' => 'anmol_Applications',
    'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["anmol_applications_opportunities_1anmol_applications_ida"] = array(
    'name' => 'anmol_applications_opportunities_1anmol_applications_ida',
    'type' => 'link',
    'relationship' => 'anmol_applications_opportunities_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


$dictionary["Opportunity"]["fields"]["aos_quotes"] = array(
    'name' => 'aos_quotes',
    'type' => 'link',
    'relationship' => 'opportunity_aos_quotes',
    'module' => 'AOS_Quotes',
    'bean_name' => 'AOS_Quotes',
    'source' => 'non-db',
);

$dictionary["Opportunity"]["relationships"]["opportunity_aos_quotes"] = array(
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
);

$dictionary["Opportunity"]["fields"]["aos_contracts"] = array(
    'name' => 'aos_contracts',
    'type' => 'link',
    'relationship' => 'opportunity_aos_contracts',
    'module' => 'AOS_Contracts',
    'bean_name' => 'AOS_Contracts',
    'source' => 'non-db',
);

$dictionary["Opportunity"]["relationships"]["opportunity_aos_contracts"] = array(
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
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

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-09-2015
 * Time: 04:23
 */
$dictionary['Opportunities']['fields']['file_mime_type'] = array(
    'name' => 'file_mime_type',
    'vname' => 'LBL_FILE_MIME_TYPE',
    'type' => 'varchar',
    'len' => '100',
    'importable' => false,
);
$dictionary['Opportunities']['fields']['file_url'] = array(
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
$dictionary['Opportunities']['fields']['filename'] = array(
    'name' => 'filename',
    'vname' => 'LBL_FILENAME',
    'type' => 'file',
    'dbType' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'importable' => false,
);


$dictionary['Opportunity']['fields']['SecurityGroups'] = array(
    'name' => 'SecurityGroups',
    'type' => 'link',
    'relationship' => 'securitygroups_opportunities',
    'module' => 'SecurityGroups',
    'bean_name' => 'SecurityGroup',
    'source' => 'non-db',
    'vname' => 'LBL_SECURITYGROUPS',
);






 // created: 2015-09-16 11:24:19
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';

 

 // created: 2015-09-16 11:34:43
$dictionary['Opportunity']['fields']['application_stage_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['application_stage_c']['labelValue']='Application Stage';

 

// created: 2015-08-22 13:15:57
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit'] = 1;



// created: 2015-08-22 13:15:56
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit'] = 1;



// created: 2015-08-22 13:15:54
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit'] = 1;



// created: 2015-08-22 13:15:53
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit'] = 1;



 // created: 2015-09-16 11:24:43
$dictionary['Opportunity']['fields']['sales_stage']['default']='Prospecting';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['required']=false;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';

 
?>