<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
$hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array('1', 'workflow', 'include/workflow/WorkFlowHandler.php', 'WorkFlowHandler', 'WorkFlowHandler',);


$hook_array['before_save'][] = Array(78,
    'operations',
    'custom/modules/anmol_application_stages/operations.php',
    'operations',
    'operations');

$hook_array['after_save'][] = Array(79,
    'operations_after',
    'custom/modules/anmol_application_stages/operations_after.php',
    'operations_after',
    'operations_after');


$hook_array['after_ui_frame'][] = Array(71,
    'script test',
    'custom/modules/anmol_application_stages/script.php',
    'script',
    'script');


/*$hook_array['after_save'][] = Array(78,
    'test',
    'custom/modules/anmol_Applications/redirect.php',
    'redirect',
    'redirect');*/

//$hook_array['before_relationship_add'] = Array();
//$hook_array['before_relationship_add'][] = Array(78, 'test2', 'custom/modules/anmol_Applications/redirect2.php','redirect2', 'redirect2');

