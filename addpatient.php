  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    </head>

    <body>

        
<input type="text" class="datepicker">
    </body>

  <script type="text/javascript">
  $( document ).ready(function() {
       $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 3 // Creates a dropdown of 15 years to control year
  });
});  
  </script>
  </html>