<?php
$module_name = 'anmol_application_stages';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'anmol_applicationss_anmol_application_stages_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'application_stage_history_c',
            'studio' => 'visible',
            'label' => 'LBL_APPLICATION_STAGE_HISTORY',
            'customCode' => '{$fields.application_stage_history_c.value|escape:\'htmlentitydecode\' |escape:\'html\'|strip_tags|url2html|nl2br}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'conditional_offer_c',
            'label' => 'LBL_CONDITIONAL_OFFER',
          ),
          1 => 
          array (
            'name' => 'unchecked_docs_c',
            'studio' => 'visible',
            'label' => 'LBL_UNCHECKED_DOCS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'contacts_anmol_application_stages_1_name',
          ),
          1 => 
          array (
            'name' => 'anmol_docscollection_anmol_application_stages_1_name',
          ),
        ),
          7 =>
              array(
                  0 =>
                      array(
                          'name' => 'fp_event_locations_anmol_application_stages_1_name',
                      ),
              ),
      ),
    ),
  ),
);
?>
