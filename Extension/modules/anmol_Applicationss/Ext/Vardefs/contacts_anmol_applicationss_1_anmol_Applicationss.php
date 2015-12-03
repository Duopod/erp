<?php
// created: 2015-09-08 17:27:28
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1"] = array(
    'name' => 'contacts_anmol_applicationss_1',
    'type' => 'link',
    'relationship' => 'contacts_anmol_applicationss_1',
    'source' => 'non-db',
    'module' => 'Contacts',
    'bean_name' => 'Contact',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
    'id_name' => 'contacts_anmol_applicationss_1contacts_ida',
);
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1_name"] = array(
    'name' => 'contacts_anmol_applicationss_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
    'save' => true,
    'id_name' => 'contacts_anmol_applicationss_1contacts_ida',
    'link' => 'contacts_anmol_applicationss_1',
    'table' => 'contacts',
    'module' => 'Contacts',
    'rname' => 'name',
    'db_concat_fields' =>
        array(
            0 => 'first_name',
            1 => 'last_name',
        ),
);
$dictionary["anmol_Applicationss"]["fields"]["contacts_anmol_applicationss_1contacts_ida"] = array(
    'name' => 'contacts_anmol_applicationss_1contacts_ida',
    'type' => 'link',
    'relationship' => 'contacts_anmol_applicationss_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
);
