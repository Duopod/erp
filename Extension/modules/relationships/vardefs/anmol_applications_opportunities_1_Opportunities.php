<?php
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
