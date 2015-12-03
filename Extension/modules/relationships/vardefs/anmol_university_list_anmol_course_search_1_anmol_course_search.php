<?php
// created: 2015-01-06 02:00:25
$dictionary["anmol_course_search"]["fields"]["anmol_university_list_anmol_course_search_1"] = array(
    'name' => 'anmol_university_list_anmol_course_search_1',
    'type' => 'link',
    'relationship' => 'anmol_university_list_anmol_course_search_1',
    'source' => 'non-db',
    'module' => 'anmol_University_list',
    'bean_name' => 'anmol_University_list',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
    'id_name' => 'anmol_univf5d9ty_list_ida',
);
$dictionary["anmol_course_search"]["fields"]["anmol_university_list_anmol_course_search_1_name"] = array(
    'name' => 'anmol_university_list_anmol_course_search_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
    'save' => true,
    'id_name' => 'anmol_univf5d9ty_list_ida',
    'link' => 'anmol_university_list_anmol_course_search_1',
    'table' => 'anmol_university_list',
    'module' => 'anmol_University_list',
    'rname' => 'name',
);
$dictionary["anmol_course_search"]["fields"]["anmol_univf5d9ty_list_ida"] = array(
    'name' => 'anmol_univf5d9ty_list_ida',
    'type' => 'link',
    'relationship' => 'anmol_university_list_anmol_course_search_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
);
