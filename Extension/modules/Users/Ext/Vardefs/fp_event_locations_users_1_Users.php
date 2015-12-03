<?php
// created: 2015-09-04 11:17:10
$dictionary["User"]["fields"]["fp_event_locations_users_1"] = array(
    'name' => 'fp_event_locations_users_1',
    'type' => 'link',
    'relationship' => 'fp_event_locations_users_1',
    'source' => 'non-db',
    'module' => 'FP_Event_Locations',
    'bean_name' => 'FP_Event_Locations',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id_name' => 'fp_event_locations_users_1fp_event_locations_ida',
);
$dictionary["User"]["fields"]["fp_event_locations_users_1_name"] = array(
    'name' => 'fp_event_locations_users_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'save' => true,
    'id_name' => 'fp_event_locations_users_1fp_event_locations_ida',
    'link' => 'fp_event_locations_users_1',
    'table' => 'fp_event_locations',
    'module' => 'FP_Event_Locations',
    'rname' => 'name',
);
$dictionary["User"]["fields"]["fp_event_locations_users_1fp_event_locations_ida"] = array(
    'name' => 'fp_event_locations_users_1fp_event_locations_ida',
    'type' => 'link',
    'relationship' => 'fp_event_locations_users_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_USERS_TITLE',
);
