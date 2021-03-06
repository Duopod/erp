<?php
// created: 2015-09-16 13:05:15
$dictionary["anmol_applicationss_anmol_application_stages_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'anmol_applicationss_anmol_application_stages_1' => 
    array (
      'lhs_module' => 'anmol_Applicationss',
      'lhs_table' => 'anmol_applicationss',
      'lhs_key' => 'id',
      'rhs_module' => 'anmol_application_stages',
      'rhs_table' => 'anmol_application_stages',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'anmol_applicationss_anmol_application_stages_1_c',
      'join_key_lhs' => 'anmol_appl021dationss_ida',
      'join_key_rhs' => 'anmol_appla438_stages_idb',
    ),
  ),
  'table' => 'anmol_applicationss_anmol_application_stages_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'anmol_appl021dationss_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'anmol_appla438_stages_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'anmol_applicationss_anmol_application_stages_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'anmol_applicationss_anmol_application_stages_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'anmol_appl021dationss_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'anmol_applicationss_anmol_application_stages_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'anmol_appla438_stages_idb',
      ),
    ),
  ),
);