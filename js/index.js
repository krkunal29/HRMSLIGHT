  function login(){
    var email=$("#email").val();
    var password=$("#password").val();
       $.ajax({
           type: "POST",
           url: "./src/checklogincreditial.php",
           data: ({
               email: email,
               password: password
           }),
           success: function(msg) {
                response = JSON.parse(msg);
                if(response['status']==="T"){
                  window.location.href="./public_html/dashboard.php";
                }
                else{
                }
           },
           error: function(data, errorThrown) {
               alert('request failed :' + errorThrown);
           }
       });
  }
