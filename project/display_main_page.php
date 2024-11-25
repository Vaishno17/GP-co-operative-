<?php
require "config.php";

include('session.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Document</title>
    <style>
        
        .name_tab{
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        .name_feild{
           width: 40%;
        }
        .name_td{
             text-align : left;
            margin: 5px 0 5px 0;
            padding-left:10px;
            border-bottom: 0px;
            border-top: 0px;
             padding-left: 2%;
         }


        .items {
            background-color: #49bfff;
            border: 3px solid #15a5f3;
            border-radius: 15px;
        }

        .sub-head {
            font-size: 25px;
        }

        .name_detail {
            margin: 30px;

        }

        hr {
            margin-top: 15px;
            size: 100px;
            
        }

        table,
        th,
        td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        
        td {

            padding:10px;
        }
        .input_table td{
            height: 150px;
        }
        button {
            margin: 50px 50px 50px 50px;
            width: 100px;
            height: 30px;
        }
        .container1 tr td{
           margin: 100px;
        } 
    </style>
</head>

<body>
    <?php include("nav.php") ?>
     
<div id="invoice">
<?php 
       
          $sql="SELECT * FROM `project`";
          $result = mysqli_query($con,$sql);
          $row =mysqli_fetch_assoc($result);
    
     
        ?>
        <!-- <td>". $row[''] . "</td>
        <td>". $row[''] . "</td>
        <td>". $row[''] . "</td>

        <td>". $row['addf'] . "</td>
        <td>". $row[''] . "</td>
        <td>". $row[''] . "</td> -->
    <center>
        <h1 class="main-head">कर्ज खतावणी </h1>
    </center>
    <div class="name_tab">
        <table width="100%">
            <tr style="height: 50px;">
                <th colspan="2">सभासदचे नाव</th>
                <th colspan="2">जमिनदाराची नावे</th>
            </tr>
            <tr class="name_trb">
                <td class="name_td">श्री. :-</td>
                <td class="name_td name_feild"><?php echo $row['name']; ?></td>
                <td class="name_td">श्री. :-</td>
                
                <td class="name_td name_feild"><?php echo $row['guarentorf']; ?></td>
                

            </tr>
            <tr class="name_trb">
                <td class="name_td">पत्ता :-</td>
                <td class="name_td name_feild"><?php echo $row['addressf']; ?></td>
                <td class="name_td">पत्ता :-</td>
                <td class="name_td name_feild"><?php echo $row['addf']; ?></td>
            </tr>
            <tr class="name_trb">
                <td class="name_td">आधर कार्ड न. :- </td>
                <td class="name_td name_feild"><?php echo $row['adhaarno']; ?></td>
                <td class="name_td">श्री. :-</td>
                <td class="name_td name_feild"><?php echo $row['guarentorsec']; ?></td>
            </tr>
            <tr class="name_trb">
                <td class="name_td">मो. न. :-</td>
                <td class="name_td name_feild"><?php echo $row['phoneno']; ?></td>
                <td class="name_td">पत्ता :-</td>
                <td class="name_td name_feild"><?php echo $row['addsec']; ?></td>
            </tr>

         

        </table>
    </div>
    <hr>
   

    <div class="main_table" >
        <table id="table" width="100%" class="main_tab">
            <tr style="height: 50px;">
                <th rowspan="3">तरीख महिना</th>
                <th rowspan="3" >शेअर्स</th>
                <th colspan="2" rowspan="2" >दिलेले कर्ज</th>
                <th colspan="6">कर्ज वसुलिचा तपशील</th>
                <th colspan="2" rowspan="2">कर्ज बकी</th>
                <th colspan="2" rowspan="3" >एकूण कर्ज</th>
            </tr>
            <tr style="height: 50px;">

                <td rowspan="2">वर्गणी</td>
                <th colspan="2">कर्ज हप्ता</th>
                <th colspan="2">व्याज</th>
                <td rowspan="2">ऐकुण वसुल</td>

            </tr>
            <tr style="height: 70px;">
               
                <td>दिर्घ</td>
                <td>अल्प</td>
                <td>दिर्घ</td>
                <td>अल्प</td>
                <td>दिर्घ</td>
                <td>अल्प</td>
                <td>दिर्घ</td>
                <td>अल्प</td>
            </tr>

            <?php 
          $sql="SELECT * FROM `karjakhatavani` ORDER BY srnum DESC";
          $result = mysqli_query($con,$sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            // <th scope='row'>". $sno . "</th>
            echo "<tr>
            <td>". $row['date'] . "</td>
            <td>". $row['shares'] . "</td>

            <td>". $row['dirkar'] . "</td>
            <td>". $row['alkar'] . "</td>

            <td>". $row['vargani'] . "</td>
            <td>". $row['dirhaf'] . "</td>
            <td>". $row['alhaf'] . "</td>
            <td>". $row['dirvaj'] . "</td>
            <td>". $row['alvaj'] . "</td>
            <td>". $row['vasuli'] . "</td>
            
            <td>". $row['dirbaki'] . "</td>
            <td>". $row['albaki'] . "</td>
            <td>". $row['total_loan'] . "</td>
            </tr>";
        } 
        ?>

        </table>

    </div>
 </div>
                <script>
                window.onload = function () {
                  document.getElementById("download").addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 0.50,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'portrait'}
                
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
                </script>

</body>
</html>