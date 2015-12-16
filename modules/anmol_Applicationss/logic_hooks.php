<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1;
$hook_array = Array();
// position, file, function 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(78, 'dup check', 'custom/modules/anmol_Applicationss/update_uni.php', 'update_uni', 'uni');
$hook_array['before_save'][] = Array(1, 'anmol_Applicationss push feed', 'custom/modules/anmol_Applicationss/SugarFeeds/AppFeed.php', 'AppFeed', 'pushFeed');
$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(71, 'script test', 'custom/modules/anmol_Applicationss/script.php', 'script', 'script');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(79, 'operations_after1', 'custom/modules/anmol_Applicationss/operations_after.php', 'operations_after1', 'operations_after1');


?>