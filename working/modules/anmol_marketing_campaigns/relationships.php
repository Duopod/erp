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
    'anmol_marketing_campaigns_anmol_marketing_activities' =>
        array(
            'id' => 'aaa307a9-7102-13be-ed6a-56613aa9a56f',
            'relationship_name' => 'anmol_marketing_campaigns_anmol_marketing_activities',
            'lhs_module' => 'anmol_marketing_campaigns',
            'lhs_table' => 'anmol_marketing_campaigns',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_Marketing_activities',
            'rhs_table' => 'anmol_marketing_activities',
            'rhs_key' => 'id',
            'join_table' => 'anmol_marketing_campaigns_anmol_marketing_activities_c',
            'join_key_lhs' => 'anmol_mark980bmpaigns_ida',
            'join_key_rhs' => 'anmol_marka9c3ivities_idb',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => NULL,
            'relationship_role_column_value' => NULL,
            'reverse' => '0',
            'deleted' => '0',
            'readonly' => true,
            'rhs_subpanel' => 'default',
            'lhs_subpanel' => NULL,
            'is_custom' => true,
            'relationship_only' => false,
            'for_activities' => false,
            'from_studio' => true,
        ),
    'anmol_marketing_campaigns_modified_user' =>
        array(
            'id' => 'e12838ad-94c3-6d36-a97a-56613a323d85',
            'relationship_name' => 'anmol_marketing_campaigns_modified_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_marketing_campaigns',
            'rhs_table' => 'anmol_marketing_campaigns',
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
    'anmol_marketing_campaigns_created_by' =>
        array(
            'id' => 'e78357dc-86d9-8e5a-d801-56613a582fdd',
            'relationship_name' => 'anmol_marketing_campaigns_created_by',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_marketing_campaigns',
            'rhs_table' => 'anmol_marketing_campaigns',
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
    'anmol_marketing_campaigns_assigned_user' =>
        array(
            'id' => 'eba2e292-e56c-a36c-23f0-56613af02101',
            'relationship_name' => 'anmol_marketing_campaigns_assigned_user',
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'anmol_marketing_campaigns',
            'rhs_table' => 'anmol_marketing_campaigns',
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
    'anmol_marketing_campaigns_leads_1' =>
        array(
            'rhs_label' => 'Leads',
            'lhs_label' => 'Marketing Campaign',
            'rhs_subpanel' => 'default',
            'lhs_module' => 'anmol_marketing_campaigns',
            'rhs_module' => 'Leads',
            'relationship_type' => 'one-to-many',
            'readonly' => true,
            'deleted' => false,
            'relationship_only' => false,
            'for_activities' => false,
            'is_custom' => false,
            'from_studio' => true,
            'relationship_name' => 'anmol_marketing_campaigns_leads_1',
        ),
);