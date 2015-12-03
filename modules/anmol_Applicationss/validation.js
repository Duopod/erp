/**
 * Created by andy on 13-09-2015.
 */

function customSaveFunction() {

    var isOK = true;
    var unchecked_docs = "";

    // Check if All checkboxes are Checked
    if ($('#conditional_offer_c').is(':checked')) {

        $('.myCB').each(function () {


            if ($(this).is(':checked')) {

            } else {

                //alert($(this).parent().next().text());
                var unchecked_doc = $(this).parent().next().text();
                //  unchecked_doc.toString();
                unchecked_docs = unchecked_docs + "</br>" + unchecked_doc;

                // alert(unchecked_docs);
                $('#unchecked_docs_c').val(unchecked_docs);

            }


        })

    }

    else {
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