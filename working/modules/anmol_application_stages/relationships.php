<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$relationships = array (
  'contacts_anmol_application_stages_1' => 
  array (
    'id' => '1d7557cd-d30e-fa67-195d-5603f9736fb4',
    'relationship_name' => 'contacts_anmol_application_stages_1',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_application_stages',
    'rhs_table' => 'anmol_application_stages',
    'rhs_key' => 'id',
    'join_table' => 'contacts_anmol_application_stages_1_c',
    'join_key_lhs' => 'contacts_anmol_application_stages_1contacts_ida',
    'join_key_rhs' => 'contacts_anmol_application_stages_1anmol_application_stages_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'anmol_application_stages_modified_user' => 
  array (
    'id' => '8e7dbbf7-7b52-b115-020e-5603f979c1d8',
    'relationship_name' => 'anmol_application_stages_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_application_stages',
    'rhs_table' => 'anmol_application_stages',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'anmol_application_stages_created_by' => 
  array (
    'id' => '9942c840-fbb1-428c-ddde-5603f96a2f94',
    'relationship_name' => 'anmol_application_stages_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_application_stages',
    'rhs_table' => 'anmol_application_stages',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'anmol_application_stages_assigned_user' => 
  array (
    'id' => '9f44d9a0-74ce-e829-5b14-5603f9c3d572',
    'relationship_name' => 'anmol_application_stages_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_application_stages',
    'rhs_table' => 'anmol_application_stages',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'anmol_applicationss_anmol_application_stages_1' => 
  array (
    'id' => 'e8daf580-7c9c-5ac0-ef1b-5603f9c3bfa4',
    'relationship_name' => 'anmol_applicationss_anmol_application_stages_1',
    'lhs_module' => 'anmol_Applicationss',
    'lhs_table' => 'anmol_applicationss',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_application_stages',
    'rhs_table' => 'anmol_application_stages',
    'rhs_key' => 'id',
    'join_table' => 'anmol_applicationss_anmol_application_stages_1_c',
    'join_key_lhs' => 'anmol_appl021dationss_ida',
    'join_key_rhs' => 'anmol_appla438_stages_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'anmol_application_stages_anmol_docscollection_1' => 
  array (
    'rhs_label' => 'DocsCollection',
    'lhs_label' => 'Application Stages',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'anmol_application_stages',
    'rhs_module' => 'anmol_DocsCollection',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'anmol_application_stages_anmol_docscollection_1',
  ),
);