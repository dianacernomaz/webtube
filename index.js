document.getElementsByTagName(img).mouseover = function(){onMoveImg(this.style);};
function onMoveImg(a){
                function fun(){
                    if(a.pixelHeight>150){
                        a.pixelLeft-=2;
                        a.pixelTop-=2;
                        a.pixelWidth+=4;
                        a.pixelHeight+=4;
                        a.zIndex+=1;
                        setTimeout(fun,20);
                    }
                }
                fun();
        }    
     function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
          
            if (username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
              alert("Invalid Username. Username must be at least 8 characters long and can only contain letters and numbers.");
              return false;
            }
          
            if (password.length < 8 || !/^[a-zA-Z0-9]+$/.test(password)) {
              alert("Invalid Password. Password must be at least 8 characters long and can only contain letters and numbers.");
              return false;
            }            
            else {
            window.alert("Validation Successful");
            form.reset();
            return true;}
          }

          function validateFormRegister() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var password2= document.getElementById("password2").value;
          
            if (username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
              alert("Invalid Username. Username must be at least 8 characters long and can only contain letters and numbers.");
              return false;
            }
          
            if (password.length < 8 || !/^[a-zA-Z0-9]+$/.test(password)) {
              alert("Invalid Password. Password must be at least 8 characters long and can only contain letters and numbers.");
              return false;
            }   
            if(password2 !=password){
            alert("Both entered passwords must be identical!");
            return false;
          }
          else {
            window.alert("Account is created!");
            form.reset();
            return true;}

          }
          