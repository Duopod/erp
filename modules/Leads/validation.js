/**
 * Created by andy on 13-09-2015.
 */

function customSaveFunction() {

    var isOK = true;

    //Get current date
    var currentdate = new Date();
    var datetime = "Now: " + currentdate.getDate() + "/"
        + (currentdate.getMonth() + 1) + "/"
        + currentdate.getFullYear() + " @ "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes() + ":"
        + currentdate.getSeconds();


    // For making Assignment Remark Mandatory if Lead is Assigned to someone else
    if ($('#re_assign_comment_c').is(":visible") && $('#re_assign_comment_c').val() == "") {
        isOK = false;
        alert("Please enter a re assign Remark / Reason");   // Display Error
        return false;
    } else {
        if ($('#follow_up_date_c').val() == "" && $('#lead_score_c').val() != 'dead_lead' && $('#re_assign_comment_c').is(":hidden")) {
            isOK = false;
            alert("Please Enter a Follow Up Date");   // Display Error
            return false;
        } else {
        }

        if ($('#follow_up_date_c').val() != "" && $('#lead_score_c').val() == 'dead_lead') {
            isOK = false;
            alert("You cannot set a Follow Up Date on a Dead Lead");   // Display Error
            return false;
        } else {
        }
    }


    //
    if (isOK == true) {
        return check_form('EditView');
    }


    //$("#dialog").dialog();
    alert("All Requirements Not Checked");   // Display Error
    return false;


}