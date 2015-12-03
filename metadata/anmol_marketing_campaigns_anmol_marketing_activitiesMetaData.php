<?php
// created: 2015-09-05 14:48:06
$dictionary["anmol_marketing_campaigns_anmol_marketing_activities"] = array(
    'true_relationship_type' => 'one-to-many',
    'relationships' =>
        array(
            'anmol_marketing_campaigns_anmol_marketing_activities' =>
                array(
                    'lhs_module' => 'anmol_marketing_campaigns',
                    'lhs_table' => 'anmol_marketing_campaigns',
                    'lhs_key' => 'id',
                    'rhs_module' => 'anmol_Marketing_activities',
                    'rhs_table' => 'anmol_marketing_activities',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'anmol_marketing_campaigns_anmol_marketing_activities_c',
                    'join_key_lhs' => 'anmol_mark980bmpaigns_ida',
                    'join_key_rhs' => 'anmol_marka9c3ivities_idb',
                ),
        ),
    'table' => 'anmol_marketing_campaigns_anmol_marketing_activities_c',
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
                    'name' => 'anmol_mark980bmpaigns_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array(
                    'name' => 'anmol_marka9c3ivities_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array(
            0 =>
                array(
                    'name' => 'anmol_marketing_campaigns_anmol_marketing_activitiesspk',
                    'type' => 'primary',
                    'fields' =>
                        array(
                            0 => 'id',
                        ),
                ),
            1 =>
                array(
                    'name' => 'anmol_marketing_campaigns_anmol_marketing_activities_ida1',
                    'type' => 'index',
                    'fields' =>
                        array(
                            0 => 'anmol_mark980bmpaigns_ida',
                        ),
                ),
            2 =>
                array(
                    'name' => 'anmol_marketing_campaigns_anmol_marketing_activities_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array(
                            0 => 'anmol_marka9c3ivities_idb',
                        ),
                ),
        ),
);