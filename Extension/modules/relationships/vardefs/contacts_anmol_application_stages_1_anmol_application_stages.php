<?php
// created: 2015-09-21 22:38:54
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1"] = array (
  'name' => 'contacts_anmol_application_stages_1',
  'type' => 'link',
  'relationship' => 'contacts_anmol_application_stages_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_anmol_application_stages_1contacts_ida',
);
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1_name"] = array (
  'name' => 'contacts_anmol_application_stages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_anmol_application_stages_1contacts_ida',
  'link' => 'contacts_anmol_application_stages_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["anmol_application_stages"]["fields"]["contacts_anmol_application_stages_1contacts_ida"] = array (
  'name' => 'contacts_anmol_application_stages_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_anmol_application_stages_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
);
