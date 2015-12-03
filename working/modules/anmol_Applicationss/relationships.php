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
  'anmol_applicationss_assigned_user' => 
  array (
    'id' => '11b3a842-78ac-5115-c39b-5601be94d868',
    'relationship_name' => 'anmol_applicationss_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_Applicationss',
    'rhs_table' => 'anmol_applicationss',
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
    'id' => '434d6972-a8f6-7edc-8a23-5601be7a8ee2',
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
  'anmol_applicationss_documents_1' => 
  array (
    'id' => '4d8bb206-dc94-d850-6af8-5601bebda825',
    'relationship_name' => 'anmol_applicationss_documents_1',
    'lhs_module' => 'anmol_Applicationss',
    'lhs_table' => 'anmol_applicationss',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'anmol_applicationss_documents_1_c',
    'join_key_lhs' => 'anmol_applicationss_documents_1anmol_applicationss_ida',
    'join_key_rhs' => 'anmol_applicationss_documents_1documents_idb',
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
  'anmol_applicationss_modified_user' => 
  array (
    'id' => '6724975f-d065-01f9-11b0-5601be7bec4f',
    'relationship_name' => 'anmol_applicationss_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_Applicationss',
    'rhs_table' => 'anmol_applicationss',
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
  'contacts_anmol_applicationss_1' => 
  array (
    'id' => '6c355600-038a-48b2-fafb-5601bebd5ce3',
    'relationship_name' => 'contacts_anmol_applicationss_1',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_Applicationss',
    'rhs_table' => 'anmol_applicationss',
    'rhs_key' => 'id',
    'join_table' => 'contacts_anmol_applicationss_1_c',
    'join_key_lhs' => 'contacts_anmol_applicationss_1contacts_ida',
    'join_key_rhs' => 'contacts_anmol_applicationss_1anmol_applicationss_idb',
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
  'anmol_course_search_anmol_applicationss_2' => 
  array (
    'id' => '89f0fe0c-bb58-dedc-8f6d-5601bef39812',
    'relationship_name' => 'anmol_course_search_anmol_applicationss_2',
    'lhs_module' => 'anmol_course_search',
    'lhs_table' => 'anmol_course_search',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_Applicationss',
    'rhs_table' => 'anmol_applicationss',
    'rhs_key' => 'id',
    'join_table' => 'anmol_course_search_anmol_applicationss_2_c',
    'join_key_lhs' => 'anmol_course_search_anmol_applicationss_2anmol_course_search_ida',
    'join_key_rhs' => 'anmol_course_search_anmol_applicationss_2anmol_applicationss_idb',
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
  'anmol_applicationss_created_by' => 
  array (
    'id' => 'f1990c56-dad4-9802-1bad-5601beec3c35',
    'relationship_name' => 'anmol_applicationss_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'anmol_Applicationss',
    'rhs_table' => 'anmol_applicationss',
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
  'anmol_applicationss_tasks_1' => 
  array (
    'rhs_label' => 'Tasks',
    'lhs_label' => 'Applicationss',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'anmol_Applicationss',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'anmol_applicationss_tasks_1',
  ),
);