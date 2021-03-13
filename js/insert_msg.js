$(document).ready(function(){
    $("#send_msg").click(function(){
  
      let mitt = $("#mittente").val();
      let mess = $("#messaggio").val();
      if ($("#messaggio").val() != "") {
        $.ajax({
            type: 'POST',
            url: "db/insert_db_chat_mitt.php",
            data: {"mittente": mitt, "messaggio" : mess},
            success: function(data){
              console.log("Dati inviati");
            },
  
            error: function(data) {
              console.log("Dati non inviati");
            }
        });
      }
    });
  });