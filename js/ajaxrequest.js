$(document).ready(function() {
    // ajax call form already exists email verification 

    // $("#stuemail").on("blur", function() {
    //     var stuemail = $("stuemail").val();

    //     $.ajax({
    //         url: "Student/addstudent.php",
    //         method: "POST",
    //         data: {
    //             checkemail: "checkmail",
    //             stuemail: stuemail,
    //         },

    //         success: function(data){
    //             // console.log(data);

    //             if(data != 0){
    //                 $("#statusMsg2").html(
    //                     '<small style="color: red;">Email ID already used ! </small>'
    //                 );

    //                 $("#signup").attr("disabled", true);
    //             }
    //         },
    //     });
    // });



    $("#stuemail").on("blur", function() {

        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        var stuemail = $("#stuemail").val(); // Corrected selector
    
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkmail",
                stuemail: stuemail,
            },
    
            success: function(data) {
                console.log(data);
    
                if (data > 0) { // Check if email exists in the database (response > 0)
                    $("#statusMsg2").html('<small style="color: red;">Email ID already used ! </small>');
                    $("#signup").attr("disabled", true);
                }
                else if(data ==0 && reg.test(stuemail)){
                    $('#statusMsg2').html(
                        '<small style="color: green;">There You Go! </small>'
                    );
                }

                else if(!reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="color:red;"> Please enter valid email e.g. example@gmail.com </small>'
                    );
                    $("#signup").attr("disabled", false);
                }

                else {
                    $("#statusMsg2").html(''); // Clear the status message if email is available
                    $("#signup").attr("disabled", false);
                }

                if(stuemail == ""){
                    $('#statusMsg2').html(
                        '<small style="color: red;">Please enter email!</small>'
                    );
                }

                
            },
        });
    });
    
    $("#stuemail").on("focus", function() {
        $("#statusMsg2").html(""); // Clear the status message when the email input field gains focus
    });




});










function addStu(){

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();


    // checking form fields on form submission 

    if(stuname.trim() == ""){
        $("#statusMsg1").html(
            '<small style="color: red;">Please Enter Name! </small>'
        );
        $("#stuname").focus();
        return false;
    }
    else if (stuemail.trim() == ""){
        $("#statusMsg2").html(
            '<small style="color: red;">Please Enter Email! </small>'
        );
        $("#stuemail").focus();
        return false;
    }

    else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html(
            '<small style="color: red;">Please Enter vaid Email e.g. example@mail.com </small>'
        );
        $("#stuemail").focus();
        return false;

    }
    else if (stupass.trim() == ""){
        $("#statusMsg3").html(
            '<small style="color: red;">Please Enter Password! </small>'
        );
        $("#stupass").focus();
        return false;
    }

    else {
        $.ajax({
            url: 'Student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data:{
                stusignup : "stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupass : stupass,
    
            },
            success:function(data){
                console.log(data);
    
    
                if(data == "OK"){
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
    
                    $("#successMsg").css("color", "green");

                    clearStuRegField();
                }
                else if(data == "Failed"){
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to Register !</span>");
    
                    $("#successMsg").css("color", "red");
                }
            },
        });
    } 
}


// empty all fields 

function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}




// ajax call for student login verification 

function checkStuLogin(){
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();

    $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        data:{
            checkLogemail: "checklogemail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success: function(data){
            if(data == 0){
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password!</small>'
                );
            }
            else if(data == 1){
                $("#statusLogMsg").html('<div class="spinner-border text-success role="status"></div>'
                );

                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
        },
    });
}