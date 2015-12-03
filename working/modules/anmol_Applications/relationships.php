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

$relationships = array(
    'anmol_applications_documents_1' =>
        array(
            'id' => '66281148-58e1-60ac-0c63-55e2e3cbfc0d',
            'relationship_name' => 'anmol_applications_documents_1',
            'lhs_module' => 'anmol_Applications',
            'lhs_table' => 'anmol_applications',
            'lhs_key' => 'id',
            'rhs_module' => 'Documents',
            'rhs_table' => 'documents',
            'rhs_key' => 'id',
            'join_table' => 'anmol_applications_documents_1_c',
            'join_key_lhs' => 'anmol_applications_documents_1anmol_applications_ida',
            'join_key_rhs' => 'anmol_applications_documents_1documents_idb',
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
    'anmol_course_search_anmol_applications_1' =>
        array(
            'id' => '6fac7b36-e973-bce8-6132-55e2e3502aa0',
            'relationship_name' => 'anmol_course_search_anmol_applications_1',
            'lhs_module' => 'anmol_course_search',
            'lhs_table' => 'anmol_course_search',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
            'rhs_key' => 'id',
            'join_table' => 'anmol_course_search_anmol_applications_1_c',
            'join_key_lhs' => 'anmol_course_search_anmol_applications_1anmol_course_search_ida',
            'join_key_rhs' => 'anmol_course_search_anmol_applications_1anmol_applications_idb',
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
    'anmol_university_list_anmol_applications_1' =>
        array(
            'id' => '7a9ef79e-0093-4a0a-f311-55e2e3ef1e6f',
            'relationship_name' => 'anmol_university_list_anmol_applications_1',
            'lhs_module' => 'anmol_University_list',
            'lhs_table' => 'anmol_university_list',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
            'rhs_key' => 'id',
            'join_table' => 'anmol_university_list_anmol_applications_1_c',
            'join_key_lhs' => 'anmol_univ049aty_list_ida',
            'join_key_rhs' => 'anmol_university_list_anmol_applications_1anmol_applications_idb',
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
    'anmol_applications_modified_user' =>
        array(
            'id' => 'a962063a-ca5e-d8aa-5300-55e2e31ba433',
            'relationship_name' => 'anmol_applications_modified_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
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
    'anmol_applications_created_by' =>
        array(
            'id' => 'b356dbbc-abc0-e764-0148-55e2e3985e36',
            'relationship_name' => 'anmol_applications_created_by',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
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
    'anmol_applications_assigned_user' =>
        array(
            'id' => 'bdb0a151-c2f6-359e-182a-55e2e3b03997',
            'relationship_name' => 'anmol_applications_assigned_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
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
    'contacts_anmol_applications_1' =>
        array(
            'id' => 'c66cbe87-c53d-2440-c64b-55e2e3f44093',
            'relationship_name' => 'contacts_anmol_applications_1',
            'lhs_module' => 'Contacts',
            'lhs_table' => 'contacts',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Applications',
            'rhs_table' => 'anmol_applications',
            'rhs_key' => 'id',
            'join_table' => 'contacts_anmol_applications_1_c',
            'join_key_lhs' => 'contacts_anmol_applications_1contacts_ida',
            'join_key_rhs' => 'contacts_anmol_applications_1anmol_applications_idb',
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
    'anmol_applications_opportunities_1' =>
        array(
            'rhs_label' => 'Application Stages',
            'lhs_label' => 'Applications',
            'rhs_subpanel' => 'default',
            'lhs_module' => 'anmol_Applications',
            'rhs_module' => 'Opportunities',
            'relationship_type' => 'one-to-many',
            'readonly' => true,
            'deleted' => false,
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
            'relationship_name' => 'anmol_applications_opportunities_1',
        ),
);