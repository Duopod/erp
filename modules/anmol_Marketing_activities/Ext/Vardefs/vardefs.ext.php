<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-09-05 19:17:51
$dictionary['anmol_Marketing_activities']['fields']['marketing_activity_type_c']['inline_edit'] = '1';
$dictionary['anmol_Marketing_activities']['fields']['marketing_activity_type_c']['labelValue'] = 'Marketing Activity Type';



// created: 2015-09-05 14:48:06
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_marketing_campaigns_anmol_marketing_activities"] = array(
    'name' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'source' => 'non-db',
    'module' => 'anmol_marketing_campaigns',
    'bean_name' => false,
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
    'id_name' => 'anmol_mark980bmpaigns_ida',
);
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_marketing_campaigns_anmol_marketing_activities_name"] = array(
    'name' => 'anmol_marketing_campaigns_anmol_marketing_activities_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
    'save' => true,
    'id_name' => 'anmol_mark980bmpaigns_ida',
    'link' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'table' => 'anmol_marketing_campaigns',
    'module' => 'anmol_marketing_campaigns',
    'rname' => 'name',
);
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_mark980bmpaigns_ida"] = array(
    'name' => 'anmol_mark980bmpaigns_ida',
    'type' => 'link',
    'relationship' => 'anmol_marketing_campaigns_anmol_marketing_activities',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_ACTIVITIES_TITLE',
);

?>