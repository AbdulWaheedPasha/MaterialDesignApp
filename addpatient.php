  <?php include('function.php'); ?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript">

            function validate(){
              //var firstname = document.patientform.firstname;
              //var lastname = document.patientform.lastname;
              //var age       = document.patientform.age;
              var dob       = document.patientform.dob;
              //var gender    = document.patientform.gender;
              var phone     = document.patientform.phone;
              var message   = document.patientform.message;


              if(firstnamefun()){
                if(lastnamefun()){
                  if(agefun()){
                    if(dobfun(dob)){
                      if(genderfun()){
                        if(phonefun()){
                          if(messagefun(message)){
                            return true;
                          }
                        }
                      }
                    }
                  }

                }
                
              }
              return false;
            }



   function dobfun(dob){
    var currentDt = new Date();
    var mm = currentDt.getMonth() + 1;
    var dd = currentDt.getDate();
    var yyyy = currentDt.getFullYear();
    var date = mm + '/' + dd + '/' + yyyy;
    var presentage = getAge(dob.value, date);

    var age       = document.patientform.age;
    if(dob.value.length <= 0 ){
      document.getElementById("dobstatus").innerHTML = "Please Select The Date";
      return false;
    }else if(dob.value.length >= 0){
      if(getAge(dob.value, date) == age.value){
        document.getElementById("dobstatus").innerHTML = "";
        return true;
      }else{
        alert('Please correct your Age / Birthdate');
        return false;
      }
      
    }

  }



        function getAge(dateOfBirth, tillDate) {
            var dob = new Date(dateOfBirth);
            var endDt = new Date(tillDate) || new Date();
            return  new Date(endDt.getTime() - dob.getTime()).getUTCFullYear() - 1970;
        }
        




            function firstnamefun(){
                var regx = /^[A-Za-z]+$/;
                var firstname = document.patientform.firstname;
                if(firstname.value == ''){
                  document.getElementById("fstatus").innerHTML = "Please Enter The First Name";
                }
                else if(!firstname.value.match(regx)){
                  document.getElementById("fstatus").innerHTML = "Only Alphabet";
                  return false; 
                }else{
                  document.getElementById("fstatus").innerHTML = '';
                  return true;
                }
            }

             function lastnamefun(){
                var regx = /^[A-Za-z]+$/;
                var lastname = document.patientform.lastname;
                if(lastname.value == ''){
                  document.getElementById("lstatus").innerHTML = "Please Enter The Last Name";}
                else if(!lastname.value.match(regx)){
                  document.getElementById("lstatus").innerHTML = "Only Alphabet";
                  return false; 
                }else{
                  document.getElementById("lstatus").innerHTML = '';
                  return true;
                }
            }
             function agefun(){
                var regx = /^[0-9]+$/;
                var age = document.patientform.age.value;
                

                if(age == ''){
                  document.getElementById("agestatus").innerHTML = "Please Enter The Age";}
                 else if(age < 0 || age > 200){
                  document.getElementById("agestatus").innerHTML = "Please Enter Valid Age";
                  return false; 
                }
                else if(!age.match(regx)){
                  document.getElementById("agestatus").innerHTML = "Only Digit";
                  return false; 
                }else{
                  document.getElementById("agestatus").innerHTML = '';
                  return true;
                }
            }

            function genderfun(gender){
              var gender    = document.patientform.gender;
              if(gender.value.length > 0){
                document.getElementById("genderstatus").innerHTML = "";
                return true;
              }
              else{
                document.getElementById("genderstatus").innerHTML = "Please Select The Gender";
                return false;
              }
            }

            function phonefun(){
              var phone     = document.patientform.phone;
              var regx = /^\d{10}$/;
              var regxal = /^[A-Za-z]+$/;
              if(phone.value.match(regx)){
                document.getElementById("phonestatus").innerHTML = "";
                return true;
              }else{
                document.getElementById("phonestatus").innerHTML = "Please Enter the Valid 10 Digit Mobile Number";
                return false;
              }
            }

            function messagefun(message){

              if(message.value.length > 0){
                document.getElementById("messagestatus").innerHTML = "";
                return true;
              }
              else{
                document.getElementById("messagestatus").innerHTML = "Please Enter Your Message";
                return false;
              }
            }

      </script>
    </head>

    <body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Patient Registration</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Back</a></li>
  
      </ul>
    </div>
  </nav>
        

    <div class="row">
        <form class="col s12" name="patientform" method="post" action="function.php" onsubmit="return validate()">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" name ="firstname" onkeyup="firstnamefun()">
              <label for="first_name">First Name</label>
              <span id="fstatus" class="helper-text" style="color: red;"></span>

            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" name ="lastname" onkeyup="lastnamefun()">
              <label for="last_name">Last Name</label>
              <span id="lstatus" class="helper-text" style="color: red;"></span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="age" type="text" name ="age" onkeyup="agefun()" maxlength="3">
              <label for="age">Age</label>
              <span id="agestatus" class="helper-text" style="color: red;"></span>
            </div>
            <div class="input-field col s6">
              <input type="text" class="datepicker" name ="dob" id="dob"  readonly>
              <label for="dob">Birthdate</label>
              <span id="dobstatus" class="helper-text" style="color: red;"></span>
            </div>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <select name ="gender" onchange="genderfun()">
              <option value="" disabled selected>Choose your option</option>
              <option value="m"> Male</option>
              <option value="f"> Female</option>
            </select>
            <label>Gender</label>
            <span id="genderstatus" class="helper-text" style="color: red;"></span>
          </div>

            <div class="input-field col s6">
              <input  type="text" name ="phone" id="phone" onkeyup="phonefun()">
              <label for="phone">Phone</label>
              <span id="phonestatus" class="helper-text" style="color: red;"></span>
            </div>

          </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1"  name ="message" class="materialize-textarea"></textarea>
                  <label for="textarea1">Textarea</label>
                  <span id="messagestatus" class="helper-text" style="color: red;"></span>
                </div>
              </div>


            <button class="btn waves-effect waves-light" type="submit" name="submit" style="width: 100%;height: 50px;">Submit
           
            </button>


        </form>
      </div>


      <!--JavaScript at end of body for optimized loading border-bottom: 1px solid #489e2d;-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <script>

  
        var today = new Date();
        var elem = document.querySelector('.datepicker');
        var instance = M.Datepicker.init(elem, {
          yearRange: [1850,2018],
          format: 'mm/dd/yyyy',
          selectMonths: true,
          selectYears: 15,
          maxDate: today,
        });

    


         var select = document.querySelector('select');
        var instance = M.FormSelect.init(select, {});  
    </script>
  </html>
        