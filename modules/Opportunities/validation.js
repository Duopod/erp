/**
 * Created by andy on 13-09-2015.
 */

function customSaveFunction() {

    var isOK = true;

    // Check if All checkboxes are Checked
 

    if (isOK == true) {

        return check_form('EditView');
    }


    //$("#dialog").dialog();
    alert("All Requirements Not Checked");   // Display Error
    return false;


}