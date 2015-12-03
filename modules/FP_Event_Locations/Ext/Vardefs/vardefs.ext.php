<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-04-25 10:18:48
$dictionary["FP_Event_Locations"]["fields"]["fp_event_locations_fp_events_1"] = array(
    'name' => 'fp_event_locations_fp_events_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_fp_events_1',
    'source' => 'non-db',
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
);


// created: 2015-09-04 11:42:12
$dictionary["FP_Event_Locations"]["fields"]["fp_event_locations_leads_1"] = array(
    'name' => 'fp_event_locations_leads_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_leads_1',
    'source' => 'non-db',
    'module' => 'Leads',
    'bean_name' => 'Lead',
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_LEADS_TITLE',
);


// created: 2015-09-04 11:17:10
$dictionary["FP_Event_Locations"]["fields"]["fp_event_locations_users_1"] = array(
    'name' => 'fp_event_locations_users_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_users_1',
    'source' => 'non-db',
    'module' => 'Users',
    'bean_name' => 'User',
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_USERS_TITLE',
);


 // created: 2015-09-19 12:04:40
$dictionary['FP_Event_Locations']['fields']['address_city']['required']=false;
$dictionary['FP_Event_Locations']['fields']['address_city']['inline_edit']=true;

 

 // created: 2015-09-19 12:04:58
$dictionary['FP_Event_Locations']['fields']['address_postalcode']['required']=false;
$dictionary['FP_Event_Locations']['fields']['address_postalcode']['inline_edit']=true;

 

 // created: 2015-09-19 11:58:22
$dictionary['FP_Event_Locations']['fields']['branch_address_c']['inline_edit']='1';
$dictionary['FP_Event_Locations']['fields']['branch_address_c']['labelValue']='Branch Address';

 

 // created: 2015-09-19 11:56:12
$dictionary['FP_Event_Locations']['fields']['branch_city_c']['inline_edit']='1';
$dictionary['FP_Event_Locations']['fields']['branch_city_c']['labelValue']='Branch City';

 

 // created: 2015-09-19 12:01:41
$dictionary['FP_Event_Locations']['fields']['branch_email_c']['inline_edit']='';
$dictionary['FP_Event_Locations']['fields']['branch_email_c']['labelValue']='Branch Email';

 

 // created: 2015-09-19 12:02:36
$dictionary['FP_Event_Locations']['fields']['branch_phone_c']['inline_edit']='';
$dictionary['FP_Event_Locations']['fields']['branch_phone_c']['labelValue']='Branch Phone';

 

 // created: 2015-09-19 11:57:13
$dictionary['FP_Event_Locations']['fields']['branch_state_c']['inline_edit']='1';
$dictionary['FP_Event_Locations']['fields']['branch_state_c']['labelValue']='Branch State';

 

 // created: 2015-09-19 12:00:27
$dictionary['FP_Event_Locations']['fields']['office_type_c']['inline_edit']='';
$dictionary['FP_Event_Locations']['fields']['office_type_c']['labelValue']='Office Type';

 
?>