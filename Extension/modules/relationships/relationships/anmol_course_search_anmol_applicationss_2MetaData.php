<?php
// created: 2015-09-08 17:45:17
$dictionary["anmol_course_search_anmol_applicationss_2"] = array(
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' =>
        array(
            'anmol_course_search_anmol_applicationss_2' =>
                array(
                    'lhs_module' => 'anmol_course_search',
                    'lhs_table' => 'anmol_course_search',
                    'lhs_key' => 'id',
                    'rhs_module' => 'anmol_Applicationss',
                    'rhs_table' => 'anmol_applicationss',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'anmol_course_search_anmol_applicationss_2_c',
                    'join_key_lhs' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
                    'join_key_rhs' => 'anmol_course_search_anmol_applicationss_2anmol_applicationss_idb',
                ),
        ),
    'table' => 'anmol_course_search_anmol_applicationss_2_c',
    'fields' =>
        array(
            0 =>
                array(
                    'name' => 'id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            1 =>
                array(
                    'name' => 'date_modified',
                    'type' => 'datetime',
                ),
            2 =>
                array(
                    'name' => 'deleted',
                    'type' => 'bool',
                    'len' => '1',
                    'default' => '0',
                    'required' => true,
                ),
            3 =>
                array(
                    'name' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array(
                    'name' => 'anmol_course_search_anmol_applicationss_2anmol_applicationss_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array(
            0 =>
                array(
                    'name' => 'anmol_course_search_anmol_applicationss_2spk',
                    'type' => 'primary',
                    'fields' =>
                        array(
                            0 => 'id',
                        ),
                ),
            1 =>
                array(
                    'name' => 'anmol_course_search_anmol_applicationss_2_ida1',
                    'type' => 'index',
                    'fields' =>
                        array(
                            0 => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
                        ),
                ),
            2 =>
                array(
                    'name' => 'anmol_course_search_anmol_applicationss_2_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array(
                            0 => 'anmol_course_search_anmol_applicationss_2anmol_applicationss_idb',
                        ),
                ),
        ),
);