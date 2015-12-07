/**
 * Created by andy on 13-09-2015.
 */

function customSaveFunction() {

    var isOK = true;

    //Get current date
    var currentdate = new Date();
    var now = ("0" + (currentdate.getMonth() + 1)).slice(-2) + "/"
        + ("0" + currentdate.getDate()).slice(-2) + "/"
        + currentdate.getFullYear();
// Reformat the date
    var date_split = $('#follow_up_date_c_date').val().split('-');
    var set_m = date_split[1];
    var set_d = date_split[0];
    var set_y = date_split[2];
    var set_date = set_m + "/" + set_d + "/" + set_y;


    //  For making Assignment Remark Mandatory if Lead is Assigned to someone else
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
// Prevent Past Dates
        if (set_date < now) {
            isOK = false;
            alert("You cannot set a date in the Past!");   // Display Error
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