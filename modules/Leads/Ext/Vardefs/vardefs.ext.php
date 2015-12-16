<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-07 13:31:34
$dictionary['Lead']['fields']['lead_remark_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['lead_remark_c']['labelValue'] = 'Remark';


// created: 2015-09-05 12:20:12
$dictionary['Lead']['fields']['birthdate']['required'] = true;
$dictionary['Lead']['fields']['birthdate']['inline_edit'] = true;
$dictionary['Lead']['fields']['birthdate']['massupdate'] = '1';
$dictionary['Lead']['fields']['birthdate']['options'] = 'date_range_search_dom';
$dictionary['Lead']['fields']['birthdate']['comments'] = 'The birthdate of the contact';
$dictionary['Lead']['fields']['birthdate']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['birthdate']['enable_range_search'] = '1';


// created: 2015-08-22 13:15:38
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit'] = 1;


// created: 2015-09-15 22:08:42
$dictionary['Lead']['fields']['follow_up_date_c']['inline_edit'] = '';
$dictionary['Lead']['fields']['follow_up_date_c']['options'] = 'date_range_search_dom';
$dictionary['Lead']['fields']['follow_up_date_c']['labelValue'] = 'Follow up date';
$dictionary['Lead']['fields']['follow_up_date_c']['enable_range_search'] = '1';


// created: 2015-12-04 06:50:13
$dictionary['Lead']['fields']['experience_in_years_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['experience_in_years_c']['labelValue'] = 'Years';


// created: 2015-12-04 07:04:19
$dictionary["Lead"]["fields"]["anmol_marketing_campaigns_leads_1"] = array(
    'name' => 'anmol_marketing_campaigns_leads_1',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_leads_1',
    'source' => 'non-db',
    'module' => 'anmol_marketing_campaigns',
    'bean_name' => 'anmol_marketing_campaigns',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_LEADS_1_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
    'id_name' => 'anmol_marketing_campaigns_leads_1anmol_marketing_campaigns_ida',
);
$dictionary["Lead"]["fields"]["anmol_marketing_campaigns_leads_1_name"] = array(
    'name' => 'anmol_marketing_campaigns_leads_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_LEADS_1_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
    'save' => true,
    'id_name' => 'anmol_marketing_campaigns_leads_1anmol_marketing_campaigns_ida',
    'link' => 'anmol_marketing_campaigns_leads_1',
    'table' => 'anmol_marketing_campaigns',
    'module' => 'anmol_marketing_campaigns',
    'rname' => 'name',
);
$dictionary["Lead"]["fields"]["anmol_marketing_campaigns_leads_1anmol_marketing_campaigns_ida"] = array(
    'name' => 'anmol_marketing_campaigns_leads_1anmol_marketing_campaigns_ida',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_leads_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_LEADS_1_FROM_LEADS_TITLE',
);


// created: 2015-09-19 11:13:02
$dictionary['Lead']['fields']['course_level_preference_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['course_level_preference_c']['labelValue'] = 'Course Level Preference';


// created: 2015-09-07 13:30:40
$dictionary['Lead']['fields']['remark_history_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['remark_history_c']['labelValue'] = 'Remark History';


// created: 2015-09-06 20:43:58
$dictionary['Lead']['fields']['intake_year_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['intake_year_c']['labelValue'] = 'Intake Year';


// created: 2015-09-06 17:48:39
$dictionary['Lead']['fields']['marketing_activity_type_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['marketing_activity_type_c']['labelValue'] = 'Source';


// created: 2015-09-15 23:01:31
$dictionary['Lead']['fields']['re_assign_comment_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['re_assign_comment_c']['labelValue'] = 'Re-Assign Comment';


// created: 2015-09-06 19:17:44
$dictionary['Lead']['fields']['last_qualification_name_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['last_qualification_name_c']['labelValue'] = 'Last Qualification Name';


// created: 2015-09-06 21:12:43
$dictionary['Lead']['fields']['phone_mobile']['inline_edit'] = '';
$dictionary['Lead']['fields']['phone_mobile']['comments'] = 'Mobile phone number of the contact';
$dictionary['Lead']['fields']['phone_mobile']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['phone_mobile']['required'] = true;


// created: 2015-09-06 19:06:32
$dictionary['Lead']['fields']['last_year_of_qualification_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['last_year_of_qualification_c']['labelValue'] = 'Last Year Of Qualification';


// created: 2015-09-05 13:32:15
$dictionary['Lead']['fields']['lead_source']['inline_edit'] = true;
$dictionary['Lead']['fields']['lead_source']['comments'] = 'Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['lead_source']['required'] = false;




$dictionary['Lead']['fields']['SecurityGroups'] = array(
    'name' => 'SecurityGroups',
    'type' => 'link',
    'relationship' => 'securitygroups_leads',
    'module' => 'SecurityGroups',
    'bean_name' => 'SecurityGroup',
    'source' => 'non-db',
    'vname' => 'LBL_SECURITYGROUPS',
);


// created: 2015-08-22 13:15:40
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit'] = 1;



// created: 2015-09-06 20:31:41
$dictionary['Lead']['fields']['country_interested_in_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['country_interested_in_c']['labelValue'] = 'Country';




$dictionary['Lead']['fields']['e_invite_status_fields'] =
    array(
        'name' => 'e_invite_status_fields',
        'rname' => 'id',
        'relationship_fields' => array('id' => 'event_invite_id',
            'invite_status' => 'event_status_name'),
        'vname' => 'LBL_CONT_INVITE_STATUS',
        'type' => 'relate',
        'link' => 'fp_events_leads_1',
        'link_type' => 'relationship_info',
        'join_link_name' => 'fp_events_leads_1',
        'source' => 'non-db',
        'importable' => 'false',
        'duplicate_merge' => 'disabled',
        'studio' => false,
    );


$dictionary['Lead']['fields']['event_status_name'] =
    array(
        'massupdate' => false,
        'name' => 'event_status_name',
        'type' => 'enum',
        'studio' => 'false',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
        'options' => 'fp_event_invite_status_dom',
        'importable' => 'false',
    );
$dictionary['Lead']['fields']['event_invite_id'] =
    array(
        'name' => 'event_invite_id',
        'type' => 'varchar',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_INVITE_STATUS',
        'studio' => array('listview' => false),
    );


$dictionary['Lead']['fields']['e_accept_status_fields'] =
    array(
        'name' => 'e_accept_status_fields',
        'rname' => 'id',
        'relationship_fields' => array('id' => 'event_status_id',
            'accept_status' => 'event_accept_status'),
        'vname' => 'LBL_CONT_ACCEPT_STATUS',
        'type' => 'relate',
        'link' => 'fp_events_leads_1',
        'link_type' => 'relationship_info',
        'join_link_name' => 'fp_events_leads_1',
        'source' => 'non-db',
        'importable' => 'false',
        'duplicate_merge' => 'disabled',
        'studio' => false,
    );


$dictionary['Lead']['fields']['event_accept_status'] =
    array(
        'massupdate' => false,
        'name' => 'event_accept_status',
        'type' => 'enum',
        'studio' => 'false',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
        'options' => 'fp_event_status_dom',
        'importable' => 'false',
    );
$dictionary['Lead']['fields']['event_status_id'] =
    array(
        'name' => 'event_status_id',
        'type' => 'varchar',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_ACCEPT_STATUS',
        'studio' => array('listview' => false),
    );

// created: 2015-09-04 11:42:12
$dictionary["Lead"]["fields"]["fp_event_locations_leads_1"] = array(
    'name' => 'fp_event_locations_leads_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_leads_1',
    'source' => 'non-db',
    'module' => 'FP_Event_Locations',
    'bean_name' => 'FP_Event_Locations',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id_name' => 'fp_event_locations_leads_1fp_event_locations_ida',
);
$dictionary["Lead"]["fields"]["fp_event_locations_leads_1_name"] = array(
    'name' => 'fp_event_locations_leads_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'save' => true,
    'id_name' => 'fp_event_locations_leads_1fp_event_locations_ida',
    'link' => 'fp_event_locations_leads_1',
    'table' => 'fp_event_locations',
    'module' => 'FP_Event_Locations',
    'rname' => 'name',
);
$dictionary["Lead"]["fields"]["fp_event_locations_leads_1fp_event_locations_ida"] = array(
    'name' => 'fp_event_locations_leads_1fp_event_locations_ida',
    'type' => 'link',
    'relationship' => 'fp_event_locations_leads_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_LEADS_TITLE',
);


// created: 2015-08-22 13:15:40
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit'] = 1;



// created: 2015-08-28 19:54:23
$dictionary['Lead']['fields']['last_name']['required'] = false;
$dictionary['Lead']['fields']['last_name']['inline_edit'] = true;
$dictionary['Lead']['fields']['last_name']['comments'] = 'Last name of the contact';
$dictionary['Lead']['fields']['last_name']['merge_filter'] = 'disabled';


// created: 2015-09-06 19:29:55
$dictionary['Lead']['fields']['experience_in_months_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['experience_in_months_c']['labelValue'] = 'Months';


// created: 2015-08-28 19:58:43
$dictionary['Lead']['fields']['first_name']['required'] = true;
$dictionary['Lead']['fields']['first_name']['inline_edit'] = true;
$dictionary['Lead']['fields']['first_name']['comments'] = 'First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter'] = 'disabled';


// created: 2015-09-06 20:42:57
$dictionary['Lead']['fields']['intake_month_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['intake_month_c']['labelValue'] = 'Intake Month';


// created: 2015-08-28 19:59:34
$dictionary['Lead']['fields']['email1']['required'] = true;
$dictionary['Lead']['fields']['email1']['inline_edit'] = true;
$dictionary['Lead']['fields']['email1']['merge_filter'] = 'disabled';



// created: 2015-09-06 18:50:47
$dictionary['Lead']['fields']['lead_score_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['lead_score_c']['labelValue'] = 'Lead Score';


// created: 2015-09-06 19:00:32
$dictionary['Lead']['fields']['last_qualification_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['last_qualification_c']['labelValue'] = 'Last Qualification';



// created: 2015-09-06 20:20:48
$dictionary['Lead']['fields']['stream_interest_c']['inline_edit'] = '1';
$dictionary['Lead']['fields']['stream_interest_c']['labelValue'] = 'Course Stream';


// created: 2015-08-22 13:15:39
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit'] = 1;


?>