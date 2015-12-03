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
    'fp_events_fp_event_locations_1' =>
        array(
            'id' => '3b05cca5-e10d-1480-965a-55e967a92e76',
            'relationship_name' => 'fp_events_fp_event_locations_1',
            'lhs_module' => 'FP_events',
            'lhs_table' => 'fp_events',
            'lhs_key' => 'id',
            'rhs_module' => 'FP_Event_Locations',
            'rhs_table' => 'fp_event_locations',
            'rhs_key' => 'id',
            'join_table' => 'fp_events_fp_event_locations_1_c',
            'join_key_lhs' => 'fp_events_fp_event_locations_1fp_events_ida',
            'join_key_rhs' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
            'relationship_type' => 'many-to-many',
            'relationship_role_column' => NULL,
            'relationship_role_column_value' => NULL,
            'reverse' => '0',
            'deleted' => '0',
            'readonly' => true,
            'rhs_subpanel' => NULL,
            'lhs_subpanel' => 'default',
            'from_studio' => true,
            'is_custom' => true,
            'relationship_only' => false,
            'for_activities' => false,
        ),
    'fp_event_locations_modified_user' =>
        array(
            'id' => '7b909842-0bc0-4712-20fd-55e967c1665c',
            'relationship_name' => 'fp_event_locations_modified_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'FP_Event_Locations',
            'rhs_table' => 'fp_event_locations',
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
            'lhs_subpanel' => 'default',
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
        ),
    'fp_event_locations_fp_events_1' =>
        array(
            'id' => '7f7dac4e-c812-8123-47e9-55e967142e09',
            'relationship_name' => 'fp_event_locations_fp_events_1',
            'lhs_module' => 'FP_Event_Locations',
            'lhs_table' => 'fp_event_locations',
            'lhs_key' => 'id',
            'rhs_module' => 'FP_events',
            'rhs_table' => 'fp_events',
            'rhs_key' => 'id',
            'join_table' => 'fp_event_locations_fp_events_1_c',
            'join_key_lhs' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
            'join_key_rhs' => 'fp_event_locations_fp_events_1fp_events_idb',
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
    'fp_event_locations_created_by' =>
        array(
            'id' => '8908c131-b7b4-89b0-b13e-55e967fda6fd',
            'relationship_name' => 'fp_event_locations_created_by',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'FP_Event_Locations',
            'rhs_table' => 'fp_event_locations',
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
            'lhs_subpanel' => 'default',
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
        ),
    'fp_event_locations_users_1' =>
        array(
            'id' => '91340801-b687-88fa-caa0-55e967d35949',
            'relationship_name' => 'fp_event_locations_users_1',
            'lhs_module' => 'FP_Event_Locations',
            'lhs_table' => 'fp_event_locations',
            'lhs_key' => 'id',
            'rhs_module' => 'Users',
            'rhs_table' => 'users',
            'rhs_key' => 'id',
            'join_table' => 'fp_event_locations_users_1_c',
            'join_key_lhs' => 'fp_event_locations_users_1fp_event_locations_ida',
            'join_key_rhs' => 'fp_event_locations_users_1users_idb',
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
    'fp_event_locations_assigned_user' =>
        array(
            'id' => '99f9560c-a08a-bdac-636e-55e967e82c12',
            'relationship_name' => 'fp_event_locations_assigned_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'FP_Event_Locations',
            'rhs_table' => 'fp_event_locations',
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
            'lhs_subpanel' => 'default',
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
        ),
    'fp_event_locations_leads_1' =>
        array(
            'rhs_label' => 'Leads',
            'lhs_label' => 'Branches',
            'rhs_subpanel' => 'default',
            'lhs_module' => 'FP_Event_Locations',
            'rhs_module' => 'Leads',
            'relationship_type' => 'one-to-many',
            'readonly' => true,
            'deleted' => false,
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
            'relationship_name' => 'fp_event_locations_leads_1',
        ),
);