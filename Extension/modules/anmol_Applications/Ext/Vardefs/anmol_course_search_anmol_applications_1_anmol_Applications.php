<?php
// created: 2015-08-28 22:49:14
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1"] = array(
    'name' => 'anmol_course_search_anmol_applications_1',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applications_1',
    'source' => 'non-db',
    'module' => 'anmol_course_search',
    'bean_name' => 'anmol_course_search',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'id_name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
);
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1_name"] = array(
    'name' => 'anmol_course_search_anmol_applications_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'save' => true,
    'id_name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
    'link' => 'anmol_course_search_anmol_applications_1',
    'table' => 'anmol_course_search',
    'module' => 'anmol_course_search',
    'rname' => 'name',
);
$dictionary["anmol_Applications"]["fields"]["anmol_course_search_anmol_applications_1anmol_course_search_ida"] = array(
    'name' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
    'type' => 'link',
    'relationship' => 'anmol_course_search_anmol_applications_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_APPLICATIONS_TITLE',
);
