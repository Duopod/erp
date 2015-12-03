<?php
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
