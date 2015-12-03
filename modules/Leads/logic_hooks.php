<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1;
$hook_array = Array();
// position, file, function 


$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(77,
    'updateGeocodeInfo',
    'custom/modules/Leads/LeadsJjwg_MapsLogicHook.php',
    'LeadsJjwg_MapsLogicHook',
    'updateGeocodeInfo');

$hook_array['after_ui_frame'][] = Array(71,
    'script test',
    'custom/modules/Leads/script.php',
    'script_branch',
    'script');

$hook_array['before_save'][] = Array(78,
    'dup check',
    'custom/modules/Leads/check_mobile.php',
    'check_mobile',
    'check'); // Checking Duplicate Mobile
$hook_array['before_save'][] = Array(1,
    'add branch',
    'custom/modules/Leads/add_branch.php',
    'add_branch',
    'addbranch'); // Adding Branch Automatically to a Lead

$hook_array['before_save'][] = Array(1,
    'add remark',
    'custom/modules/Leads/add_remark.php',
    'add_remark',
    'addremark'); // Add Remark to Remark History and Empty the Box

$hook_array['before_save'][] = Array(1,
    'Leads push feed',
    'modules/Leads/SugarFeeds/LeadFeed.php',
    'LeadFeed',
    'pushFeed');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(77,
    'updateRelatedMeetingsGeocodeInfo',
    'custom/modules/Leads/LeadsJjwg_MapsLogicHook.php',
    'LeadsJjwg_MapsLogicHook',
    'updateRelatedMeetingsGeocodeInfo');

