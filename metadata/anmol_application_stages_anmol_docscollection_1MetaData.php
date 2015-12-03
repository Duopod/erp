<?php
// created: 2015-09-24 15:35:08
$dictionary["anmol_application_stages_anmol_docscollection_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'anmol_application_stages_anmol_docscollection_1' => 
    array (
      'lhs_module' => 'anmol_application_stages',
      'lhs_table' => 'anmol_application_stages',
      'lhs_key' => 'id',
      'rhs_module' => 'anmol_DocsCollection',
      'rhs_table' => 'anmol_docscollection',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'anmol_application_stages_anmol_docscollection_1_c',
      'join_key_lhs' => 'anmol_appl40ff_stages_ida',
      'join_key_rhs' => 'anmol_apple833lection_idb',
    ),
  ),
  'table' => 'anmol_application_stages_anmol_docscollection_1_c',
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
      'name' => 'anmol_appl40ff_stages_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'anmol_apple833lection_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'anmol_application_stages_anmol_docscollection_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'anmol_application_stages_anmol_docscollection_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'anmol_appl40ff_stages_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'anmol_application_stages_anmol_docscollection_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'anmol_apple833lection_idb',
      ),
    ),
  ),
);