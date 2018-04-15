  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    </head>

    <body>
    <nav>
      <div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>

      <table class="responsive-table centered highlight" >
        <thead>
          <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Mobile</th>
          </tr>
        </thead>

        <tbody id="result">
            <?php 
            $con =  mysqli_connect('localhost','id5420298_waheed','waheed123','id5420298_hospital');

            $sql = "SELECT * from patient";
            $result = mysqli_query($con,$sql);
            while ( $row = mysqli_fetch_array($result)) {
            ?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['phone'];?></td>
          </tr>
          <?php } ?>
       
        </tbody>
      </table>



    <div class="fixed-action-btn">
      <a href="addpatient.php" class="btn-floating btn-large red">
        <i class="large material-icons">add</i>
      </a>
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <script type="text/javascript">
      $(document).ready(function(){

        function search(){
          var search_value = $('#search').val();
          $.ajax({
            method:'post',
            url:'function.php',
            data:{search_value:search_value},
            success : function(data){
              $('#result').html(data);
            }
          })

        }

          $('#search').keyup(function(e){
            search();
          })

      })
    
        var elem = document.querySelector('.datepicker');
        var instance = M.Datepicker.init(elem, {
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 3 // Creates a dropdown of 15 years to control year
        });

    </script>
  </html>
        