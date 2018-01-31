<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body{
      background-color: #ddd3d3;
    }
  </style>
</head>
<body>
<?php 
$imgpath;
include 'login.php';
$name1=$_GET["submit"];
$sql="SELECT * FROM movies WHERE Name='$name1'";
$res=mysqli_query($con,$sql);
if (!$res) {
  printf("Error: %s\n", mysqli_error($con));
}
else{
$row=0;
while ($row=mysqli_fetch_array($res)){
  $imgpath=$row['path'];
  $price=$row['Price'];
  }
} 
$theater="Balaji Movieplex: Kopar Khairane(Screen3)<br>
              Mumbai, Navi Mumbai";
$nofoticket=$_GET['con'];
$gs=0.09*32;
$total=$gs+$gs+($price*$nofoticket)+32;
echo '
<div ><h1 style="color:#2ba02b; text-align:center;font-size:46px;"><img src="images/correct.jpg" style="width: 80px;height: 80px ;position:relative;top:15px;border-radius:50%;">Tickets Has Been Book Successfully!!!!</h1></div>
<div style="
 width: 550px;
 text-align: center;
 padding: 5px;
 height:auto;
 background-color:black;
 border:solid 5px yellow;
 position: relative;
 top:10px;
 left:350px;
display: inline-block;
box-shadow: 0 40px 38px 0 black;

">
      <header>
        <img src="images/logo.jpg" style="width: 540px;height: 70px">
        <h2 style="color:#07f107; text-shadow: grey 1px 1px;"> Your booking is confirmed!</h2>
        <p style="color: white">Booking ID <i style="color: white">WTCDHF9</i></p> 
      </header>
          <div style="
            width: 530px;
            height: 150px;
            position: relative;
            padding: 5px;
            color: white;
            background-color:#2e1c82; border-bottom: dashed 1px grey;
            border-radius: 30px;
          ">
            <img src="'.$imgpath.'" style="height: 130px; border:solid 2px white;width: 150px;position:absolute; left: 20px; top: 10px;padding: 0px;">
            <h3 style="padding-left: 150px;">'.$name1.'(U/A) </h3>
            <p style="padding-left: 150px;">05:10pm | Sun, 5 Nov, 2017</p>
            <p style="   
                font-size: 13px;
                color:#cccccc;
                font-weight: 400;
                position: relative;
                left: 20px;padding-left: 150px;
                " >'.$theater.'</p>
          </div>
           <div style="
            width: 530px;
            height: 150px;
            position: relative;
            padding: 5px;
            background-color:#e1c7ef;border-radius: 30px;
          ">
            <h1 style="color:green;text-align: left;padding-left: 20px;font-size:46px;padding-left: 40px;">'.$nofoticket.'<br>
            <h3 style="text-align: left;padding-left: 20px">Tickets</h3></h1>
            <img src="images/confirm.png" style="height: 130px; width: 150px;position:absolute; right: 60px; top: 10px;padding: 0px;">
          </div>

          <div>
            <h1 style="
                      padding: 15px 10px 15px 10px;
                      font-size: 26px;
                      text-align: left;
                      vertical-align: top;
                      color:#ffffff;
                      letter-spacing: 1px;
                  " >ORDER SUMMARY</h1>
            <table style="width: 520px;height: 50px;text-align: left;padding-bottom: 10px; margin-left: 15px;">
              <tr >
                <td style="padding: 10px; color: white"><b>TICKET AMOUNT</b></td>
                <td style="color:white;">Rs.'.$price.'</td>
              </tr>
              </tr>
                <tr style="color:#cccccc; padding-left: 10px;">
                <td>Quantity</td><td>'.$nofoticket.' tickets</td>
              </tr>
              <tr >
                <td style="padding: 10px;color: white"><b>INTERNET HANDLING FEES</b></td>
                <td>Rs.37.76</td>
              </tr>
                <tr style="color:#cccccc;  padding-left: 10px;">
                <td>Booking Fees</td><td>Rs.32.00</td>
              </tr>
              <tr style="color:#cccccc; padding-left: 10px;">
                <td>Central GST (CGST) @ 9%</td><td>Rs.'.$gs.'</td>
              </tr>
              <tr style="color:#cccccc; padding-left: 10px;">
                <td>State GST (SGST) @ 9%</td><td>Rs.'.$gs.'</td>
              </tr>
              <tr style="color:white;font-size: 24px;">
                <td style="padding-top: 20px;">AMOUNT PAID</td><td style="padding-top: 20px;">Rs.'.$total.'</td>
              </tr>
            </table>
            <br>
          </div>
      <footer>
      <img src="images/foot.jpg" style="width: 520px;height:150px; position:relative;left: 0px;">
      <div style="padding: 30px;color:#cccccc;">
        <h4 style="text-align: left;">IMPORTANT INSTRUCTIONS</h4>
        <p style="font-size: 18px; text-align: left;">Kids of 3 years and above requires a ticket for admission</p>
        <p style="font-size: 18px;text-align: left;">Tickets once booked cannot be exchanged. cancelled or refunded.
            The Credit Card and Credit Card Holder must be present at the ticket counter while collecting the ticket(s).
            GST collected is paid to the department.
            999799 - Other Services n.e.c. PAN Based GSTN. 27AABCB3428P1ZF.</p>
      </div>
      </footer>
</div><div><br><br><p></p><br><br><p></p><br><br><p></p></div>';?>
</body>
</html>