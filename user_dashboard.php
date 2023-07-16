<!DOCTYPE html>
<html>
  <head>
    <title> USER DASHBOARD </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
     <div class = "row" id="header">
      <div class = "col-md-12">
        <div class = "col-md-4" style="display: inline-block;">
         <h3>TaskEase</h3>
       </div>
       <div class = "col-md-6" style="display: inline-block;text-align: right;">
        <b> Email ID: </b> Test@gmail.com
        <span style="margin-left: 25px;"> <b> Name: </b>User </span> 
      </div>
    </div>
  </div>
  <div class = "row">
    <div class = "col-md-2" id="left_sidebar">
      <table class = "table">
        <tr>
          <td style="text-align: center;">
            <a href="user_dashboard.php" type= "button" id = "logout_link"> Dashboard </a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <a href="manage_task.php" type= "button"> Update Task </a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <a href="apply_leave.php" type= "button"> Apply Leave </a>
          </td>
        </tr>
<tr>
          <td style="text-align: center;">
            <a href="view_leave.php" type= "button"> Leave Status </a>
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            <a href="logout.php" type= "button" id = "logout_link"> Logout </a>
          </td>
        </tr>
      </table>
    </div>
    <div class ="col-md-10" id = "right_sidebar">
      <h4> Instructions </h4>
      <ul> <li>  Please mark your Attendance </li>
        <li>  Kindly complete your Task before Deadline </li>
      </ul>
    </div>
  </body>
</html>