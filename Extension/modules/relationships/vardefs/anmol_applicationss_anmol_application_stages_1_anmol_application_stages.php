<?php
// created: 2015-09-16 13:05:15
$dictionary["anmol_application_stages"]["fields"]["anmol_applicationss_anmol_application_stages_1"] = array (
  'name' => 'anmol_applicationss_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'anmol_Applicationss',
  'bean_name' => 'anmol_Applicationss',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'id_name' => 'anmol_appl021dationss_ida',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_applicationss_anmol_application_stages_1_name"] = array (
  'name' => 'anmol_applicationss_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATIONSS_TITLE',
  'save' => true,
  'id_name' => 'anmol_appl021dationss_ida',
  'link' => 'anmol_applicationss_anmol_application_stages_1',
  'table' => 'anmol_applicationss',
  'module' => 'anmol_Applicationss',
  'rname' => 'name',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_appl021dationss_ida"] = array (
  'name' => 'anmol_appl021dationss_ida',
  'type' => 'link',
  'relationship' => 'anmol_applicationss_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATIONSS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);
