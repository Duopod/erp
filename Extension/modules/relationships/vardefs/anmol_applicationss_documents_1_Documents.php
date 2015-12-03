<?php
// created: 2015-09-08 17:22:07
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1"] = array(
    'name' => 'anmol_applicationss_documents_1',
    'type' => 'link',
    'relationship' => 'anmol_applicationss_documents_1',
    'source' => 'non-db',
    'module' => 'anmol_Applicationss',
    'bean_name' => 'anmol_Applicationss',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
    'id_name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
);
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1_name"] = array(
    'name' => 'anmol_applicationss_documents_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
    'save' => true,
    'id_name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
    'link' => 'anmol_applicationss_documents_1',
    'table' => 'anmol_applicationss',
    'module' => 'anmol_Applicationss',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["anmol_applicationss_documents_1anmol_applicationss_ida"] = array(
    'name' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
    'type' => 'link',
    'relationship' => 'anmol_applicationss_documents_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
