<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-05 15:59:00
$dictionary['anmol_marketing_campaigns']['fields']['name_of_event_c']['inline_edit'] = '1';
$dictionary['anmol_marketing_campaigns']['fields']['name_of_event_c']['labelValue'] = 'Name of Event';


// created: 2015-09-05 16:00:50
$dictionary['anmol_marketing_campaigns']['fields']['name']['required'] = false;
$dictionary['anmol_marketing_campaigns']['fields']['name']['inline_edit'] = true;
$dictionary['anmol_marketing_campaigns']['fields']['name']['duplicate_merge'] = 'disabled';
$dictionary['anmol_marketing_campaigns']['fields']['name']['duplicate_merge_dom_value'] = '0';
$dictionary['anmol_marketing_campaigns']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['anmol_marketing_campaigns']['fields']['name']['unified_search'] = false;



// created: 2015-09-05 14:48:06
$dictionary["anmol_marketing_campaigns"]["fields"]["anmol_marketing_campaigns_anmol_marketing_activities"] = array(
    'name' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'source' => 'non-db',
    'module' => 'anmol_Marketing_activities',
    'bean_name' => 'anmol_Marketing_activities',
    'side' => 'right',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_ACTIVITIES_TITLE',
);


// created: 2015-09-05 15:49:32
$dictionary['anmol_marketing_campaigns']['fields']['campaign_type_c']['inline_edit'] = '1';
$dictionary['anmol_marketing_campaigns']['fields']['campaign_type_c']['labelValue'] = 'Campaign Type';


// created: 2015-12-04 07:04:19
$dictionary["anmol_marketing_campaigns"]["fields"]["anmol_marketing_campaigns_leads_1"] = array(
    'name' => 'anmol_marketing_campaigns_leads_1',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_leads_1',
    'source' => 'non-db',
    'module' => 'Leads',
    'bean_name' => 'Lead',
    'side' => 'right',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_LEADS_1_FROM_LEADS_TITLE',
);

?>