// Ajax call for admin login verification
function checkAdminLogin()
{
    // console.log("Login Clicked");
    var adminLogEmail = $("#adminLoginInputEmail1").val();
    var adminLogPass = $("#adminLoginInputPassword1").val();
    $.ajax({
        url: "Admin/admin.php",
        
        method: "POST",

        data:{
            checkLogEmail : "CheckLoginEmail",
            adminLogEmail : adminLogEmail,
            adminLogPass : adminLogPass,
        },

        success: function(data){
            // console.log(data);
            if(data==0)
            {
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email Id or Password!</small>');
            }
            else if(data==1)
            {
                $("#statusAdminLogMsg").html('<small>Login Successful</small>');
                setTimeout(()=>{
                    window.location.href="Admin/adminDashboard.php";
                },1000);
            }
        }
    });
}