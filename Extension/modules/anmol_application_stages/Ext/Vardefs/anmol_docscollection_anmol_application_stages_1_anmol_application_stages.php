<?php
// created: 2015-09-24 16:00:34
$dictionary["anmol_application_stages"]["fields"]["anmol_docscollection_anmol_application_stages_1"] = array (
  'name' => 'anmol_docscollection_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'anmol_docscollection_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'anmol_DocsCollection',
  'bean_name' => 'anmol_DocsCollection',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
  'id_name' => 'anmol_docs1beelection_ida',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_docscollection_anmol_application_stages_1_name"] = array (
  'name' => 'anmol_docscollection_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
  'save' => true,
  'id_name' => 'anmol_docs1beelection_ida',
  'link' => 'anmol_docscollection_anmol_application_stages_1',
  'table' => 'anmol_docscollection',
  'module' => 'anmol_DocsCollection',
  'rname' => 'name',
);
$dictionary["anmol_application_stages"]["fields"]["anmol_docs1beelection_ida"] = array (
  'name' => 'anmol_docs1beelection_ida',
  'type' => 'link',
  'relationship' => 'anmol_docscollection_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_DOCSCOLLECTION_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);
