$(document).ready(function () {

    // Ajax Call form Already Exists Email Verification 
    $("#stuemail").on("keypress blur", function () {
    
        var stuemail= $("#stuemail").val(); 
        $.ajax({
        
        url: "student/addStudent.php",
        
        method: "POST",
        
        data: { checkemail: "checkmail",
        stuemail: stuemail,
        }, 
        success: function (data) {
        // console.log(data);
        if(data!=0)
        {
            $("#statusMsg2").html(
                '<small style="color:red;">Email Id already used!</small>'
            );
            $("#signup").attr("disabled", true);
        }
        else if(data==0)
        {
            $("#statusMsg2").html(
                '<small style="color:green;">There you go!</small>'
            );
            $("#signup").attr("disabled", false);
        }
        },
        });
    }); 
});


function addStu()
{
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname= $("#RegInputName").val();
    var stuemail= $("#RegInputEmail1").val();
    var stupass= $("#RegInputPassword1").val();

    // console.log(RegInputName);
    // console.log(RegInputEmail1);
    // console.log(RegInputPassword1);

    // form validation
    if(stuname.trim()=="")
    {
        $("#statusMsg1").html(
            '<small style="color:red;">Please Enter Name !</small>'
        ); 
        $("#stuname").focus();
        return false;
    }
    else if(stuemail.trim()=="")
    {
        $("#statusMsg2").html(
            '<small style="color:red;">Please Enter Email !</small>'
        ); 
        $("#stuemail").focus();
        return false;
    }
    else if(stuemail.trim()=="" && !reg.test(stuemail))
    {
        $("#statusMsg2").html(
            '<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
        ); 
        $("#stuemail").focus();
        return false;
    }
    else if(stupass.trim()=="")
    {
        $("#statusMsg3").html(
            '<small style="color:red;">Please Enter Password !</small>'
        ); 
        $("#stupass").focus();
        return false;
    }
    else{
    $.ajax({
        url:'student/addStudent.php',
        method: 'POST',
        dataType: "json",
        data: 
        {
            stusignup : "stusignup",
            stuname : stuname,
            stuemail : stuemail,
            stupass : stupass,
        },
        success:function(data)
        {
            console.log(data)
            if (data == "ok") {
                $("#successMsg").html("<span>Registration Successful !</span>");
                clearStuRegField();
            } 
            else if (data=="failed") {
                $("#successMsg").html("<span>Unable to Register</span>");
            }
        },
                
    });
}
} 


// Empty all fields
function clearStuRegField()
{
    $('#stuRegForm').trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}

// Ajax call for student login verification
function checkStuLogin()
{
    // console.log("Login Clicked");
    var stuLoginEmail = $("#LoginInputEmail1").val();
    var stuLoginPass = $("#LoginInputPassword1").val();
    $.ajax({
        url: "student/addStudent.php",
        
        method: "POST",

        data:{
            checkLogEmail : "CheckLoginEmail",
            stuLoginEmail : stuLoginEmail,
            stuLoginPass : stuLoginPass,
        },

        success: function(data){
            // console.log(data);
            if(data==0)
            {
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email Id or Password!</small>');
            }
            else if(data==1)
            {
                $("#statusLogMsg").html('<small>Login Successful</small>');
                setTimeout(()=>{
                    window.location.href="index.php";
                },1000);
                // location.href='index.php';
                // location.reload();
                // setTimeout(window.open("index.php"),1000);
            }
        },
    });
}