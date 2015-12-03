<?php
// created: 2015-08-29 17:04:07
$dictionary["User"]["fields"]["documents_users_1"] = array(
    'name' => 'documents_users_1',
    'type' => 'link',
    'relationship' => 'documents_users_1',
    'source' => 'non-db',
    'module' => 'Documents',
    'bean_name' => 'Document',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_DOCUMENTS_TITLE',
    'id_name' => 'documents_users_1documents_ida',
);
$dictionary["User"]["fields"]["documents_users_1_name"] = array(
    'name' => 'documents_users_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_DOCUMENTS_TITLE',
    'save' => true,
    'id_name' => 'documents_users_1documents_ida',
    'link' => 'documents_users_1',
    'table' => 'documents',
    'module' => 'Documents',
    'rname' => 'document_name',
);
$dictionary["User"]["fields"]["documents_users_1documents_ida"] = array(
    'name' => 'documents_users_1documents_ida',
    'type' => 'link',
    'relationship' => 'documents_users_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_DOCUMENTS_USERS_1_FROM_USERS_TITLE',
);
