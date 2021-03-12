$(document).ready(function(){

   function toIndex(){
      document.location.replace('../index.php');
   }

   let err_m = $('.err_msg');
   err_m.hide();
   $('#sign').click(function (e){
      e.preventDefault();
      let rnick = $('.rnick').val().trim(),
          rpass = $('.rpass').val().trim(),
          rprom = $('.rprom').val().trim();

         if(rnick.length <= 3 || rnick.length >= 11){
            err_m.show();
            err_m.html('Не верный логин.');
         }
         else if(rpass.length != 6){
            err_m.show();
            err_m.html('Не верный пароль.');
         }
         else if(rprom.length != 8){
            err_m.show();
            err_m.html('Не верный промокод.');
         }
         else {
            err_m.hide();
            $.ajax({
               url: 'php-scripts/signin.php',
               type: 'POST',
               dataType: 'text',
               data:
                   {
                      nick: rnick,
                      pass: rpass,
                      prom: rprom
                   },
               success(data) {
                  $('.err_msg').text(data);
                  toIndex();
               }
            })
         }
   });

   $('#auth').click(function (e){
      e.preventDefault();
      let nick = $('.nick').val().trim(),
          pass = $('.pass').val().trim();

          if(nick.length <= 3 || nick.length >= 11){
            err_m.show();
            err_m.html('Не верный логин.');
         }
         else if(pass.length != 6){
            err_m.show();
            err_m.html('Не верный пароль.');
         }  
         else{
            err_m.hide();
            $.ajax({
               url: 'php-scripts/auth.php',
               type: 'POST',
               dataType: 'text',
               data:
                   {
                      nick: nick,
                      pass: pass
                   },
               success(data){
                  $('.err_msg').text(data);
                  toIndex();
               }
            })
         }
   });
});