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
              var firstname = document.patientform.firstname;
              var lastname = document.patientform.lastname;
              var age       = document.patientform.age;
              var dob       = document.patientform.dob;
              var gender    = document.patientform.gender;
              var phone     = document.patientform.phone;
              var message   = document.patientform.message;


              if(firstnamefun(firstname)){
                if(lastnamefun(lastname)){
                  if(agefun(age)){
                    if(dobfun(dob)){
                      if(genderfun(gender)){
                        if(phonefun(phone)){
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
              function firstnamefun(firstname){
              if(firstname.value.length > 0){
                return true;
              }
              else{
                alert('invalid First name');
                return false;
              }
            }
              function lastnamefun(lastname){
              if(lastname.value.length > 0){
                return true;
              }
              else{
                alert('invalid last name');
                return false;
              }
            }
              function agefun(age){

              if(!isNaN(age.value)){
                return true;
              }
              else{
                alert('invalid age');
                return false;
              }
            }
              function dobfun(dob){
              if(dob.value.length > 0){
                return true;
              }
              else{
                alert('Enter birthdate');
                return false;
              }
            }
              function genderfun(gender){
              if(gender.value.length > 0){
                return true;
              }
              else{
                alert('Select Gender');
                return false;
              }
            }
              function phonefun(phone){
              if(phone.value.length == 10 && !isNaN(phone.value)){
                return true;
              }
              else{
                alert('invalid Mobile name');
                return false;
              }
            }
              function messagefun(message){
              if(message.value.length > 0){
                return true;
              }
              else{
                alert('Enter message name');
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
              <input id="first_name" type="text" name ="firstname">
              <label for="first_name">First Name</label>
              <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>

            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" name ="lastname" >
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="age" type="text" name ="age" >
              <label for="age">Age</label>
            </div>
            <div class="input-field col s6">
              <input type="text" class="datepicker" name ="dob" id="dob">
              <label for="dob">Birthdate</label>
            </div>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <select name ="gender">
              <option value="" disabled selected>Choose your option</option>
              <option value="m"> Male</option>
              <option value="f"> Female</option>
            </select>
            <label>Gender</label>
          </div>

            <div class="input-field col s6">
              <input  type="text" name ="phone" id="phone">
              <label for="phone">Phone</label>
            </div>

          </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1"  name ="message" class="materialize-textarea"></textarea>
                  <label for="textarea1">Textarea</label>
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



        var elem = document.querySelector('.datepicker');
        var instance = M.Datepicker.init(elem, {
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 3 // Creates a dropdown of 15 years to control year
        });

         var select = document.querySelector('select');
        var instance = M.FormSelect.init(select, {});  
    </script>
  </html>
        