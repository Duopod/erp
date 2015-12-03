/**
 * Created by andy on 13-09-2015.
 */

function customSaveFunction() {

    var isOK = true;

    // Check if All checkboxes are Checked


    // Make Selecting the file mandatory
// If Application is sent once then the even wont fire.
    if ($("#application_stage_c").val() == "stage_1" && $('#app_sent_to_uni_c').val() == "" && $('#filename_file').val() == "") {

        alert("The Document attachment (Stage 1) is Empty!!!");
        return false;


    } else {
        //   isOK = false;
    }

    if ($("#application_stage_c").val() == "stage_1" && $('#app_sent_to_uni_c').val() == "" && $('#unchecked_docs_c').val() == "") {
        // if all checklist not checked
        alert("The application has pendencies!");
        $('.myCB').each(function () {


            if ($(this).is(':checked')) {

            } else {
                isOK = false;
            }


        })
    }


    if (isOK == true) {

        return check_form('EditView');
    }


    //$("#dialog").dialog();
    alert("All Requirements Not Checked");   // Display Error
    return false;


}