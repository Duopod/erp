<?php
// created: 2015-09-05 13:49:15
$dictionary["anmol_marketing_activities_campaigns"] = array(
    'true_relationship_type' => 'one-to-many',
    'relationships' =>
        array(
            'anmol_marketing_activities_campaigns' =>
                array(
                    'lhs_module' => 'anmol_Marketing_activities',
                    'lhs_table' => 'anmol_marketing_activities',
                    'lhs_key' => 'id',
                    'rhs_module' => 'Campaigns',
                    'rhs_table' => 'campaigns',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'anmol_marketing_activities_campaigns_c',
                    'join_key_lhs' => 'anmol_marke08aivities_ida',
                    'join_key_rhs' => 'anmol_marketing_activities_campaignscampaigns_idb',
                ),
        ),
    'table' => 'anmol_marketing_activities_campaigns_c',
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
                    'name' => 'anmol_marke08aivities_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array(
                    'name' => 'anmol_marketing_activities_campaignscampaigns_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array(
            0 =>
                array(
                    'name' => 'anmol_marketing_activities_campaignsspk',
                    'type' => 'primary',
                    'fields' =>
                        array(
                            0 => 'id',
                        ),
                ),
            1 =>
                array(
                    'name' => 'anmol_marketing_activities_campaigns_ida1',
                    'type' => 'index',
                    'fields' =>
                        array(
                            0 => 'anmol_marke08aivities_ida',
                        ),
                ),
            2 =>
                array(
                    'name' => 'anmol_marketing_activities_campaigns_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array(
                            0 => 'anmol_marketing_activities_campaignscampaigns_idb',
                        ),
                ),
        ),
);