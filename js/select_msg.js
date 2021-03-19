
   function select_message() {

    var nomeMittente = document.getElementById('mittente').value;

     $.ajax({
       url: "db/select_chat_msg.php",
       crossDomain: true,
       dataType: 'JSON',
       success: function(data, stato) {
         console.log("JSON PASSATO: " + data);
         var str = 'REAL TIME CHAT';

         for (var i = 0; i < data.length; i++) {
           console.log(data[i]);

           if (data[i].mittente  === nomeMittente) {
                str = str
          + '<div class="container">'
          + '<div class="container col border-dark"><img id="avatar" src="'+ data[i].avatar +'" alt="Avatar">'
          + '<strong>' + data[i].mittente + '</strong>' 
          + '<br>'
          + data[i].testo 
          + '</div>'
          + '</div>'
               } else {
                str = str
          + '<div class="container">'
          + '<div class="container col border-dark" style="background-color:yellow"><img id="avatar" src="img/hacker.png" alt="Avatar">'
          + '<strong>' + data[i].mittente + '</strong>' 
          + '<br>'
          + data[i].testo 
          + '<a href="../db/delete_msg.php">X</a>'
          + '</div>'
          + '</div>'
               }
         
           
         }

         $("#divChat").html(str);
       },
       error: function(data, stato) {
         console.log(stato);
         console.log("SONO DENTRO FUNZIONE ERROR");
       }
     });
}

       $(document).ready(function() {
       select_message();
       setInterval(select_message,1000);
});
  