<?php
$listViewDefs ['Leads'] = 
array (
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'FP_EVENT_LOCATIONS_LEADS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id' => 'FP_EVENT_LOCATIONS_LEADS_1FP_EVENT_LOCATIONS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '7%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'CONVERTED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CONVERTED',
    'width' => '10%',
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
);
?>
