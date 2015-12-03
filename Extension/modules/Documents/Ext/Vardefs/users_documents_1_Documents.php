<?php
// created: 2015-08-29 17:09:46
$dictionary["Document"]["fields"]["users_documents_1"] = array(
    'name' => 'users_documents_1',
    'type' => 'link',
    'relationship' => 'users_documents_1',
    'source' => 'non-db',
    'module' => 'Users',
    'bean_name' => 'User',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
    'id_name' => 'users_documents_1users_ida',
);
$dictionary["Document"]["fields"]["users_documents_1_name"] = array(
    'name' => 'users_documents_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
    'save' => true,
    'id_name' => 'users_documents_1users_ida',
    'link' => 'users_documents_1',
    'table' => 'users',
    'module' => 'Users',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["users_documents_1users_ida"] = array(
    'name' => 'users_documents_1users_ida',
    'type' => 'link',
    'relationship' => 'users_documents_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
