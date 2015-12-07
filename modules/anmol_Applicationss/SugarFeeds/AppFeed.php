<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 07-12-2015
 * Time: 15:14
 */


require_once('modules/SugarFeed/feedLogicBase.php');

class AppFeed extends FeedLogicBase
{
    public $module = 'anmol_Applicationss';

    public function pushFeed($bean, $event, $arguments)
    {
        $text = '';
        if (empty($bean->fetched_row)) {
            $text = 'New Application Uploaded [' . $bean->module_dir . ':' . $bean->id . ':' . $bean->name . ']';
        }
        if (!empty($text)) {
            SugarFeed::pushFeed2($text, $bean);
        }
    }
}