<?php
// created: 2015-09-22 22:57:01
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1"] = array (
  'name' => 'anmol_applicationss_tasks_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_tasks_1',
  'source' => 'non-db',
  'module' => 'anmol_Applicationss',
  'bean_name' => 'anmol_Applicationss',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'id_name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
);
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1_name"] = array (
  'name' => 'anmol_applicationss_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'save' => true,
  'id_name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
  'link' => 'anmol_applicationss_tasks_1',
  'table' => 'anmol_applicationss',
  'module' => 'anmol_Applicationss',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["anmol_applicationss_tasks_1anmol_applicationss_ida"] = array (
  'name' => 'anmol_applicationss_tasks_1anmol_applicationss_ida',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_TASKS_1_FROM_TASKS_TITLE',
);
