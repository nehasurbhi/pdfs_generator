<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
</head>
<body>

<!-- top -->
    <div class="">
      <div class="top" style="border-bottom:1px solid black;">
        <div class="company" >
          <div class="logos">
            <img src="{{public_path('imgs/Logo.png')}}" alt="" width="55" />
          </div>
          <div class="add" style="width:75%" >
            <strong>{{$pay['compName']}}</strong>
            <div style="font-size:12px;" > {{$pay['compAddress']}} </div> 
          </div>
        </div>
        <div class="month">
        <strong >Payslip</strong>
            <div style="font-size:12px;" > for the Month {{$pay['month']}}</div>
        </div>
      
      </div>    
<!-- top end -->
   
     <!-- employee Details start -->
    <table style="margin-top:10px;">
        <tr style="background-color:#F3F4F6;">
          <th colspan="2">Employee Details</th>
        </tr>
        <tr>
          <td >
          <table style="border:none;" >
            <tr style="margin-top: -5rem !important;">
              <td class="no-vborder noBorder label">Employee No.</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cus">{{$pay['empNo']}}</td>
            </tr>
            <tr >
              <td class="no-vborder noBorder label">Employee Name</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cus">{{$pay['empName']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder label">Function</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cus">{{$pay['empFunction']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder label">Designation</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cus">{{$pay['empDesignation']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder label">Date of Joining</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cus">{{$pay['empDateJoining']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder label"></td>
              <td class="no-vborder noBorder"></td>
              <td class="no-vborder noBorder cus"></td>
            </tr>
           
          </table>
          </td>
          <td class="tax" style="width:50%; ">
          <table style="border:none; " >
            <tr >
              <td class="no-vborder noBorder labels ">Tax Regime </td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cust">{{$pay['empTax']}}</td>
            </tr>
            <tr >
              <td class="no-vborder noBorder labels">Income Tax N0. (PAN)</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cust">{{$pay['empTax']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder labels">Universal Account No. (UAN)</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cust">{{$pay['empUAN']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder labels">ESI Number</td>
              <td class="no-vborder noBorder">:</td>
              <td class="no-vborder noBorder cust">{{$pay['empEsic']}}</td>
            </tr>
            <tr>
              <td class="no-vborder noBorder labels">Bank Details</td>
              <td class="no-vborder noBorder semi">:</td>
              <td class="no-vborder noBorder cust">{{$pay['empBank']}}</td>
            </tr>
           
          </table>
          </td>
        </tr>
      
    </table>
     <!-- employee details end -->

    <!-- Attendance table start from here -->
    <table style="margin-top:10px;">
        <tr style="background-color:#F3F4F6;">
            <th>Attendance Details</th>
            <th>Value</th>
            <th colspan="7">Leave Details</th>
        </tr>
        
        <tr class="noBorder">
      
        <td style="font-weight:bold">{{isset($leaveSummary[0])? $leaveSummary[0]['key']: ""}}</td>     
           <td style="font-weight:bold; text-align:center;" >{{isset($leaveSummary[0])? $leaveSummary[0]['value'] ." Days": ""}} </td>
           
            <th rowspan="2">Description</th>
            <th rowspan="2">Eligible C.Y</th>
            <th colspan="3">Current Year Leaves</th>
            
            <th rowspan="2">Cumlative Used</th>
            <th rowspan="2">Closing Balance</th> 


        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[1])? $leaveSummary[1]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[1])? $leaveSummary[1]['value'] ." Days": ""}} </td>
            
            <th>Opening</th>
            <th>Apr-20</th>
            <th>Closing</th>
            

        </tr>
        <tr class="noBorder">
        <td style="font-weight:bold">{{isset($leaveSummary[2])? $leaveSummary[2]['key']: ""}}</td>     
           <td style="font-weight:bold; text-align:center;">{{isset($leaveSummary[2])? $leaveSummary[2]['value'] ." Days": ""}} </td>
            <td class="noBorder">Casual Leave</td>
            <td class="noBorder" style="text-align:center">{{$pay['eligibleCasualLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['casualOpeningLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['casualCurrentLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['casualClosingLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['casualCumlativeLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['casualClosingBalance']}}</td> 

        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[3])? $leaveSummary[3]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[3])? $leaveSummary[3]['value'] ." Days": ""}} </td>
           
            <td class="noBorder" >Earned Leave</td>
            <td class="noBorder" style="text-align:center">{{$pay['eligibleEarnedLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['earnedOpeningLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['earnedCurrentLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['earnedClosingLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['earnedCumlativeLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['earnedClosingBalance']}}</td> 

        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[4])? $leaveSummary[4]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[4])? $leaveSummary[4]['value']." Days": ""}} </td>
            
            <td class="noBorder">Sick Leave</td>
            <td class="noBorder" style="text-align:center">{{$pay['eligibleSickLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['sickOpeningLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['sickCurrentLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['sickClosingLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['sickCumlativeLeave']}}</td>
            <td class="noBorder" style="text-align:center">{{$pay['sickClosingBalance']}}</td> 

        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[5])? $leaveSummary[5]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[5])? $leaveSummary[5]['value'] ." Days": ""}} </td>
            
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td> 

        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[6])? $leaveSummary[6]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[6])? $leaveSummary[6]['value'] ." Days": ""}} </td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td>
            <td class="noBorder"></td> 

        </tr>
        <tr class="noBorder">
        <td >{{isset($leaveSummary[7])? $leaveSummary[7]['key']: ""}}</td>     
           <td style="text-align:center;">{{isset($leaveSummary[7])? $leaveSummary[7]['value'] ." Days": ""}} </td>
            <td style="text-align:center">Total</td>
            <td style="text-align:center">{{$pay['totEligibleLeave']}}</td>
            <td style="text-align:center">{{$pay['totOpeningLeave']}}</td>
            <td style="text-align:center">{{$pay['totCurrentLeave']}}</td>
            <td style="text-align:center">{{$pay['totClosingLeave']}}</td>
            <td style="text-align:center">{{$pay['totCumlativeLeave']}}</td>
            <td style="text-align:center">{{$pay['totClosingBalance']}}</td>  

        </tr>
       
    </table>
    <!-- Attendance end from here -->

    <!-- salary table -->
    <table style="width:100%; margin-top:10px; ">
      <tr style="background-color:#F3F4F6;" >
        <th style="float:left; text-align:left ">Earning</th>
        <th style="width:15%; ">Amount</th>
        <th style="width:15%">Gross Salary</th>
      </tr>
      @foreach($pay['earnings']['line'] as $earning)
      <tr class="noBorder " >
        <td>{{$earning ['label']}}</td>
        <td  style="float:right; text-align:right ">{{$earning['amount']}}</td>
        <td class="noBorder" style="float:right; text-align:right ">{{$earning['gross']}}</td>
      </tr>
      @endforeach
      <tr>
        <th style=" text-align:left ">{{$pay['earnings']['summary']['label']}}</th>
        <th style="float:right; text-align:right ">{{$pay['earnings']['summary']['amount']}}</th>
        <th style="float:right; text-align:right ">{{$pay['earnings']['summary']['gross']}}</th>
      </tr>     
    </table>
    <!-- salary table end -->
    <!-- Employee contribution start -->
    <table style="width:100%; margin-top:10px;">
      <tr style="background-color:#F3F4F6;" >
        <th style="float:left; text-align:left ">Employer Contribution</th>
        <th style="width:15%">Amount</th>
        <th style="width:15%">Gross Salary</th>
      </tr>
      @foreach($pay['employees']['contribution'] as $employee)
      <tr class="noBorder " >
        <td>{{$employee['label']}}</td>
        <td style="float:right; text-align:right ">{{$employee['amount']}}</td>
        <td class="noBorder" style="float:right; text-align:right ">{{$employee['gross']}}</td>
      </tr>
      @endforeach
      <tr>
        <th style="text-align:left">{{$pay['employees']['employee_summary']['label']}}</th>
        <th style="float:right; text-align:right ">{{$pay['employees']['employee_summary']['amount']}}</th>
        <th style="float:right; text-align:right ">{{$pay['employees']['employee_summary']['gross']}}</th>
      </tr>
    </table>
    <!-- Emplyee contribution end -->
    <!-- ctc start -->
    <table style="width:100%; margin-top:10px; ">
      
      <tr>
        <th style="text-align:left">{{$pay['ctc_summary']['label']}}</th>
        <th style="width:15%; float:right; text-align:right ">{{$pay['ctc_summary']['amount']}}</th>
        <th style="width:15%; float:right; text-align:right ">{{$pay['ctc_summary']['gross']}}</th>
      </tr>
    </table>
    <!-- ctc end -->

    <!-- Statutory Deduction start -->
    <table style="width:100%; margin-top:10px">
      <tr style="background-color:#F3F4F6;" >
        <th style="float:left; text-align:left ">Statutory Deduction</th>
        <th style="width:15%" >Amount</th>
        <th style="width:15%" >Gross Salary</th>
      </tr>
      @foreach($pay['statutory']['deductions'] as $deduction)
      <tr class="noBorder " >
        <td>{{$deduction['label']}}</td>
        <td style="float:right; text-align:right ">{{$deduction['amount']}}</td>
        <td class="noBorder" style="float:right; text-align:right ">{{$deduction['gross']}}</td>
      </tr>
      @endforeach
      <tr>
        <th style="text-align:left">{{$pay['statutory']['statutory_summary']['label']}}</th>
        <th style="float:right; text-align:right ">{{$pay['statutory']['statutory_summary']['amount']}}</th>
        <th style="float:right; text-align:right ">{{$pay['statutory']['statutory_summary']['gross']}}</th>
      </tr>
    
    </table>
    <!-- Statutory Deduction end -->

    <!-- Other Deduction start -->
   
    <table style="width:100%; margin-top:10px">
      <tr style="background-color:#F3F4F6;" >
        <th style="float:left; text-align:left ">Other Deduction</th>
        <th style="width:15%">Amount</th>
        <th style="width:15%" >Gross Salary</th>  
      </tr>
      @foreach($pay['other']['fines'] as $fine)
      @if ($fine['amount'] ?? false)
      <tr class="noBorder " >
        <td>{{$fine['label']}}</td>
        <td class="noBorder" style="float:right; text-align:right ">{{$fine['amount']}}</td>
        <td class="noBorder" style="float:right; text-align:right ">{{$fine['gross']}}</td>
      </tr> 
      @endif
      @endforeach
      <tr>
        <th style="text-align:left">{{$pay['other']['fine_summary']['label']}}</th>
        <th style="float:right; text-align:right ">{{$pay['other']['fine_summary']['amount']}}</th>
        <th style="float:right; text-align:right ">{{$pay['other']['fine_summary']['gross']}}</th>
      </tr>
    
    </table>
    
    <!-- Other Deduction end -->

     <!-- Salary In-handstart -->
     <table style="width:100%; margin-top:10px">
     
      <tr>
        <th style="text-align:left">{{$pay['salary']['label']}}</th>
        <th style="width:15%; float:right; text-align:right ">{{$pay['salary']['amount']}}</th>
        <th style="width:15%; float:right; text-align:right ">{{$pay['salary']['gross']}}</th>
      </tr>  
      
    </table>
    <!-- Salary In-hand end -->
    <div class="rup">
          <p class="amount" style="font-size:10px; margin-top:-0.001rem; margin-bottom:-0.4rem;">Invoice Amount (in words) : </p>
          <strong style="font-size:11px;">{{$pay['paySlipAmount']}}</strong>
          <p class="eoe" style="font-size:10px;">for Freelux Technologies Pvt. Ltd.</p>
        </div>


    <footer class="" >
      -This document has been automatically generated by Freelux Payroll; therefore, a signature is not required-
    </footer>
  </div>
    
 </div>
    <style>
       body {
      font-family: helvetica;
      margin: 0;
      padding: 0;
    }
   /* top css */
   /* .top{
    border:2px solid red;
   } */
    .company,
    .month {
      box-sizing: border-box;
      display: inline-block;  
    }
    .company {
      
      width: 57%;
      /* padding-top: 10px; */
      /* background-color: blue; */
    }

    .month{   
        float:right;
        text-align:right;
        /* width: 30%; */
        margin-top:12px;
        /* font-size:12px; */
        /* background-color: green; */
      }
     
    .logos {
      display: inline-block;
      margin-top: 10px;
    }
    .add{
      display:inline-block;
      font-size:14px;
    }
    /* top css end */

    .employee-summary {
      text-align: center;
      color: #383838;
      font-size:14px;
      padding:8px 0px;
    }

    /* employee summary css start */
    .employee {
      /* border: 1px solid black; */
      padding: 7px;
    }
    .employee table  {
  /* font-size: 11px; */
  border:none !important;
  /* border-collapse: collapse; */
}
    
    .customers td {
      border: none !important;
      font-size: 11px;
      padding: 0.2px !important;
      /* color: black; */

    }
    .emp-left, .emp-right{
          box-sizing: border-box;  
           display: inline-block; 
           font-size:11px;
         }
         .emp-left, .label{
          width:30%;
          vertical-align: top;
          /* background-color:yellow; */
         }
         .emp-right, .labels{
          width:45%;
          vertical-align: top;
          /* background-color:yellow; */
         }
         .emp-left, .semi{
          vertical-align: top;
          /* background-color:yellow; */
         }
         .emp-left, .cus{
          width:67%;
          /* background-color:green; */
         }
         .emp-right, .cust{
          width:52%;
          /* background-color:green; */
         }
         .emp-left{
          width:52%; 
          /* border-right: 1px solid #2f2e2a; */
          margin-top:2px;
          /* background-color:red; */
         }
         
         .emp-right{
          float:right;
          width:47%;
          /* background-color:blue; */
         }
    /* employee summary end */

    table, th, td {
          font-size:11px;
          border: 1px solid black;
          border-collapse: collapse;
          
        }
        table 
        {
            width: 100%;
        }
        th, td{
          padding: 2px;
        }
         .noBorder td:nth-child(1), .noBorder td:nth-child(2) {
           
           border-bottom: none;
           border-top: none;
        }

        .noBorder{
          border-bottom: none;
           border-top: none;
        }
        .no-vborder {
          border-left: none;
          border-right: none;
        }

     .noBorder td:nth-child(1), .noBorder td:nth-child(2) {
           
           border-bottom: none;
           border-top: none;
        }
    /* attandance end */
    .rup {
      /* margin: 6px 0px; */
      box-sizing: border-box;
      display: inline-block;
      width: 100%;
    }

    .amount {}

    .eoe {
      float: right;
      text-align: right;
      margin-top: -3px;
    }

    footer {
      position: fixed;
      bottom: -20px;
      left: 0px;
      right: 0px;
      /* height: 50px; */
      font-size: 12px !important;
      font-weight: 500;
      color: black;
      text-align: center;
      float:right;
      
    }
   
   
    </style>
</body>
</html>