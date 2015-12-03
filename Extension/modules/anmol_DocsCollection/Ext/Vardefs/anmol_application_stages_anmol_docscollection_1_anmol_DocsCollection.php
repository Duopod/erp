<?php
// created: 2015-09-24 15:35:09
$dictionary["anmol_DocsCollection"]["fields"]["anmol_application_stages_anmol_docscollection_1"] = array (
  'name' => 'anmol_application_stages_anmol_docscollection_1',
  'type' => 'link',
  'relationship' => 'anmol_application_stages_anmol_docscollection_1',
  'source' => 'non-db',
  'module' => 'anmol_application_stages',
  'bean_name' => 'anmol_application_stages',
  'vname' => 'LBL_ANMOL_APPLICATION_STAGES_ANMOL_DOCSCOLLECTION_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
  'id_name' => 'anmol_appl40ff_stages_ida',
);
$dictionary["anmol_DocsCollection"]["fields"]["anmol_application_stages_anmol_docscollection_1_name"] = array (
  'name' => 'anmol_application_stages_anmol_docscollection_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_APPLICATION_STAGES_ANMOL_DOCSCOLLECTION_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
  'save' => true,
  'id_name' => 'anmol_appl40ff_stages_ida',
  'link' => 'anmol_application_stages_anmol_docscollection_1',
  'table' => 'anmol_application_stages',
  'module' => 'anmol_application_stages',
  'rname' => 'name',
);
$dictionary["anmol_DocsCollection"]["fields"]["anmol_appl40ff_stages_ida"] = array (
  'name' => 'anmol_appl40ff_stages_ida',
  'type' => 'link',
  'relationship' => 'anmol_application_stages_anmol_docscollection_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_APPLICATION_STAGES_ANMOL_DOCSCOLLECTION_1_FROM_ANMOL_DOCSCOLLECTION_TITLE',
);
