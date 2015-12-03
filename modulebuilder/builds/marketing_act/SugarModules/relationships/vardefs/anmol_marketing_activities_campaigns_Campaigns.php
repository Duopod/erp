<?php
// created: 2015-09-05 13:49:15
$dictionary["Campaign"]["fields"]["anmol_marketing_activities_campaigns"] = array(
    'name' => 'anmol_marketing_activities_campaigns',
    'type' => 'link',
    'relationship' => 'anmol_marketing_activities_campaigns',
    'source' => 'non-db',
    'module' => 'anmol_Marketing_activities',
    'bean_name' => false,
    'vname' => 'LBL_ANMOL_MARKETING_ACTIVITIES_CAMPAIGNS_FROM_ANMOL_MARKETING_ACTIVITIES_TITLE',
    'id_name' => 'anmol_marke08aivities_ida',
);
$dictionary["Campaign"]["fields"]["anmol_marketing_activities_campaigns_name"] = array(
    'name' => 'anmol_marketing_activities_campaigns_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_MARKETING_ACTIVITIES_CAMPAIGNS_FROM_ANMOL_MARKETING_ACTIVITIES_TITLE',
    'save' => true,
    'id_name' => 'anmol_marke08aivities_ida',
    'link' => 'anmol_marketing_activities_campaigns',
    'table' => 'anmol_marketing_activities',
    'module' => 'anmol_Marketing_activities',
    'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["anmol_marke08aivities_ida"] = array(
    'name' => 'anmol_marke08aivities_ida',
    'type' => 'link',
    'relationship' => 'anmol_marketing_activities_campaigns',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_MARKETING_ACTIVITIES_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
);
