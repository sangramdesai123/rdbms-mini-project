<?php
 session_start(); 
 ?>
<?php 
	include 'ticket.php';
 ?>
<?php 
$to=$_SESSION['u_email'];
$subject='Your Ticket';
$message='<div ><h1 style="color:#2ba02b; text-align:center;font-size:40px;">Tickets Has Been Book Successfully!!!!</h1></div>
<div style="
 width: 550px;
 text-align: center;
 padding: 5px;
 height:auto;
 position: relative;
 top:10px;
">
   
          <div style="
            width: 530px;
            height: 130px;
            position: relative;
            padding: 5px;
            color: white;
            background-color:#2e1c82; border-bottom: dashed 1px grey;
            border-radius: 30px;
          ">
          <div style="position:absolute;">
             <h1 style="color:green;text-align: left;padding-left: 20px;font-size:20px;padding-left: 36px;">'.$nofoticket.'
            <h3 style="text-align: left;padding-left: 20px">Tickets</h3></h1>
          </div>
          <div style="position:absolute;">
            <h3 style="padding-left: 200px;">'.$name1.'(U/A) </h3>
            <p style="padding-left: 200px;color:white;">05:10pm | Sun, 5 Nov, 2017</p>
          </div>
          </div>

           <div style="
            width: 530px;
            color:white;
            position: relative;
            padding: 5px;
            background-color:#e91e63;border-radius: 30px;
          ">
            <h1 style="
                      padding: 15px 10px 15px 10px;
                      font-size: 26px;
                      text-align: left;
                      vertical-align: top;
                      letter-spacing: 1px;
                  " >ORDER SUMMARY</h1>
            <table style="width: 520px;height: 50px;text-align: left;padding-bottom: 10px; margin-left: 15px;color:#ffffff;">
              <tr >
                <td style="padding: 10px;"><b>TICKET AMOUNT</b></td>
                <td>Rs.'.$price.'</td>
              </tr>
              </tr>
                <tr style="padding-left: 10px;">
                <td>Quantity</td><td>'.$nofoticket.' tickets</td>
              </tr>
              <tr >
                <td style="padding: 10px;"><b>INTERNET HANDLING FEES</b></td>
                <td>Rs.37.76</td>
              </tr>
                <tr style=" padding-left: 10px;">
                <td>Booking Fees</td><td>Rs.32.00</td>
              </tr>
              <tr style="; padding-left: 10px;">
                <td>Central GST (CGST) @ 9%</td><td>Rs.'.$gs.'</td>
              </tr>
              <tr style=" padding-left: 10px;">
                <td>State GST (SGST) @ 9%</td><td>Rs.'.$gs.'</td>
              </tr>
              <tr style=";font-size: 24px;">
                <td style="padding-top: 20px;">AMOUNT PAID</td><td style="padding-top: 20px;">Rs.'.$total.'</td>
              </tr>
            </table>
            <br>
            
          </div>'
      ;
      // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if(mail($to, $subject, $message, $headers)){
echo "email sended from php to u";
}
else{
  echo '
  <div ><h1 style="color:#2ba02b; text-align:center;font-size:46px;"><img src="images/wrong.jpg" style="width: 80px;height: 80px ;position:relative;top:15px;border-radius:50%;">Tickets Has Been Book Successfully!!!!</h1></div>';
}

 ?>

