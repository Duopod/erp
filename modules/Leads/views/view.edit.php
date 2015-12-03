<?php


class LeadsViewEdit extends ViewEdit
{
    function display()
    {
        require_once 'modules/ACLRoles/ACLRole.php';

        //Get the current user's role
        $objACLRole = new ACLRole();
        $roles = $objACLRole->getUserRoles($GLOBALS['current_user']->id);
        //check if they are in the Admin or Admin Manager's role
        if (in_array('Admin', $roles) || in_array('Branch Manager - Delhi', $roles)) {
            $this->ev->ss->assign('ReadOnly', '');
        } else { //If not pass in a variable with the value readonly
            $this->ev->ss->assign('ReadOnly', 'readonly');
        }
        //Call the parent display function
        parent::display();
    }
}

?>


