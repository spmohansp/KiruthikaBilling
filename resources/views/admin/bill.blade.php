<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.layout.header')
    <style media="screen">


    </style>
  </head>
  <body class="app sidebar-mini rtl">

    <main style="padding-left:2%;padding-right:2%">
      <div class="row" style="margin-top:2%">
        <div class="col-lg-11 col-xs-11">

        </div>
        <div class="col-lg-1 col-xs-1">
          <button class="btn btn-primary" type="button" onclick="myFunction()" >print</button>
        </div>
      </div>

    <div class="row " style="margin-top:2%">

      <div class="col-xs-12 box" >
        <div class="" style="margin-top:-0.7%">
          <div class="w3-center"style="padding-top:2%">
            <b style="font-size:30px">{{ $Admin->company_name }}</b>
          </div>
            <div class="row">
              <div class="col-lg-4 col-xs-4">

              </div>
              <div class="col-lg-4 col-xs-4 w3-center" style="text-align:center">
                {{ $Admin->address }} <br>
                Mobile : {{ $Admin->mobile }} , Email : {{ $Admin->email }} , <br>
                GST NO : {{ $Admin->gst }}
              </div>
              <div class="col-lg-4 col-xs-4">

              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-xs-6 col-lg-6  box">
            <label for="">To :</label><br>
            <b >{{ $Client->business_name }}</b>
            <div class="">
              {{ $Client->address }}<br>
              PAN : {{ $Client->PAN }} <br>
              Mobile : {{ $Client->mobile }} <br>
              Email : {{ $Client->email }}
            </div>
            GST NO :  {{ $Client->GST }} <br>
          </div>
          <div class="box col-lg-6 col-xs-6">
            <table class="table table-bordered" style="margin-top:3%">
              <thead>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > Invoice No</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->invoice }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > Date</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ date("d-m-Y", strtotime($Bill->date)) }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > Truck No</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Client->truck_number }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > Consigment No</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Client->consigment_number }}</th>
                </tr>

              </thead>
            </table>
          </div>
        </div>
        <div class="row" style="margin-top:0%;padding-bottom:0%">
          <div class=" col-lg-6 col-xs-6 box">
            <br>
            {{ $Bill->textarea }}
          </div>
          <div class=" col-lg-6 col-xs-6 box">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > FRIGHT</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->FREIGHT }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > HEIGHT CASE</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->HEIGHT_CASE }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > HOLTING</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->HOLTING }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > UNLOADING CHARGES</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->UNLOADING_CHARGES }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > TOTAL</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->TOTAL }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > ADVANCE</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->ADVANCE }}</th>
                </tr>
                <tr>
                  <th style="width:50%;padding-top:7px;padding-bottom:7px;" > PENDING</th>
                  <th style="padding-top:7px;padding-bottom:7px;">{{ $Bill->PENDING }}</th>
                </tr>
              </thead>
            </table>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
             <tbody>
               <tr>
                 <td style="width:50%" class=""><b>Rupees in words</b><br> {{ displaywords($Bill->TOTAL) }}</td>
                 <td class="w3-center"> <b>{{ $Client->business_name }}</b> <br></td>
               </tr>
             </tbody>
          </table>
          <div class="col-lg-6 col-xs-6">
          </div>
          <div class="col-lg-6 col-xs-6 w3-right">

          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-lg-5 col-xs-5">

        </div>
        <div class="col-lg-2  w3-center">
          <div class="w3-center" style="margin-top:-0.7%">
            <div class=""style="padding-top:2%">
              <b>{{ $Admin->email }}</b>
            </div>
        </div>
      </div>
      <div class="col-lg-5">

      </div>
        </div>
    </main>
   @include('admin.layout.script')
    <script>
function myFunction() {
  window.print();
}
</script>
  </body>


<?php


function displaywords($number){
    $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
    $digits = array('', '', 'hundred', 'thousand', 'ten thousand', 'lakh', 'ten lakh' ,'crore');

    $number = explode(".", $number);
    $result = array("","");
    $j =0;
    foreach($number as $val){
        // loop each part of number, right and left of dot
        for($i=0;$i<strlen($val);$i++){
            // look at each part of the number separately  [1] [5] [4] [2]  and  [5] [8]

            $numberpart = str_pad($val[$i], strlen($val)-$i, "0", STR_PAD_RIGHT); // make 1 => 1000, 5 => 500, 4 => 40 etc.
            if($numberpart <= 20){ // if it's below 20 the number should be one word
                $numberpart = 1*substr($val, $i,2); // use two digits as the word
                $i++; // increment i since we used two digits
                $result[$j] .= $words[$numberpart] ." ";
            }else{
                //echo $numberpart . "<br>\n"; //debug
                if($numberpart > 90){  // more than 90 and it needs a $digit.
                    $result[$j] .= $words[$val[$i]] . " " . $digits[strlen($numberpart)-1] . " ";
                }else if($numberpart != 0){ // don't print zero
                    $result[$j] .= $words[str_pad($val[$i], strlen($val)-$i, "0", STR_PAD_RIGHT)] ." ";
                }
            }
        }
        $j++;
    }
    if(trim($result[0]) != "") echo $result[0] . "Rupees ";
    if($result[1] != "") echo $result[1] . "Paise";
    echo " Only";
}


?>
</html>
