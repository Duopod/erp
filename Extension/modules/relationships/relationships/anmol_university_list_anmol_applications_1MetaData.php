<?php
// created: 2015-08-28 22:42:45
$dictionary["anmol_university_list_anmol_applications_1"] = array(
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' =>
        array(
            'anmol_university_list_anmol_applications_1' =>
                array(
                    'lhs_module' => 'anmol_University_list',
                    'lhs_table' => 'anmol_university_list',
                    'lhs_key' => 'id',
                    'rhs_module' => 'anmol_Applications',
                    'rhs_table' => 'anmol_applications',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'anmol_university_list_anmol_applications_1_c',
                    'join_key_lhs' => 'anmol_univ049aty_list_ida',
                    'join_key_rhs' => 'anmol_university_list_anmol_applications_1anmol_applications_idb',
                ),
        ),
    'table' => 'anmol_university_list_anmol_applications_1_c',
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
                    'name' => 'anmol_univ049aty_list_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array(
                    'name' => 'anmol_university_list_anmol_applications_1anmol_applications_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array(
            0 =>
                array(
                    'name' => 'anmol_university_list_anmol_applications_1spk',
                    'type' => 'primary',
                    'fields' =>
                        array(
                            0 => 'id',
                        ),
                ),
            1 =>
                array(
                    'name' => 'anmol_university_list_anmol_applications_1_ida1',
                    'type' => 'index',
                    'fields' =>
                        array(
                            0 => 'anmol_univ049aty_list_ida',
                        ),
                ),
            2 =>
                array(
                    'name' => 'anmol_university_list_anmol_applications_1_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array(
                            0 => 'anmol_university_list_anmol_applications_1anmol_applications_idb',
                        ),
                ),
        ),
);