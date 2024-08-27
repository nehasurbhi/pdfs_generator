<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay = [
            'earnings' => [
                "line" => [
                    ["label" => "Basic Salary", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "House Rent Allowance", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "Statutory Bonus", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "Special Allowance", "amount" => "7,919.00", "gross" => "12,000.00"],
                ],
                "summary" => ["label"=> "A - Total Earnings" ,"amount"=>"7,919.00","gross"=>"12,000.00"]
            ],

            'employees' => [
                "contribution" => [
                    ["label" => "Employer’s EPF Contribution @ 3.67% ", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "Employer’s EPS Contribution @ 8.33%", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "Employers’s ESI Contribution", "amount" => "7,919.00", "gross" => "12,000.00"],
                ],
                "employee_summary" => ["label"=> "B - Total Contribution" ,"amount"=>"7,919.00","gross"=>"12,000.00"]
            ],

            "ctc_summary" => ["label"=> "Salary - Cost to Company (CTC) (A + B)" ,"amount"=>"7,919.00","gross"=>"12,000.00"],

            'statutory' => [
                "deductions" => [
                    ["label" => "Employee’s Share of Provident Fund ", "amount" => "7,919.00", "gross" => "12,000.00"],
                    ["label" => "Employee’s Share of ESIC", "amount" => "7,919.00", "gross" => "12,000.00"],
                ],
                "statutory_summary" => ["label"=> "D - Total Statutory Deductions" ,"amount"=>"7,919.00","gross"=>"12,000.00"]
            ],
  
            'other' => [
                "fines" => [
                    ["label" => "Punctuality / Late Fine", "amount" => "7,919.00", "gross" => ""],
                ],
                "fine_summary" => ["label"=> "E - Total Other Deduction" ,"amount"=>"7,919.00","gross"=>""]
            ],

            'salary' => [
                    "label" => "for Cash Payment / Bank Transfer (A - D - E)",
                     "amount" => "20,297.00 ", 
                     "gross" => "20,297.00"
            ],
            
        ];

        $pay['compName'] = 'Freelux Technologies Pvt. Ltd.';
        $pay['compAddress'] = ' Bokaro, India, 865428, hr@Freelux.com, 3465567609';
        $pay['month'] = 'April 2024';

        $pay['empNo'] = '123456';
        $pay['empName'] = 'Neha Surbhi';
        $pay['empFunction'] = 'Development';
        $pay['empDesignation'] = 'Software Engineer';
        $pay['empBank'] = '57543298675143, HDFC Bank ( India), Bokaro';
        $pay['empTax'] = 'Regular Tax Regime';
        $pay['empUAN'] = '145755449076';
        $pay['empEsic'] = '9873426481 ';
        $pay['empDateJoining'] = '1-Apr-2022';

        $pay['eligibleCasualLeave'] = '12 ';
        $pay['casualOpeningLeave'] = '3';
        $pay['casualCurrentLeave'] = '1';
        $pay['casualClosingLeave'] = '4';
        $pay['casualCumlativeLeave'] = '3';
        $pay['casualClosingBalance'] = '1';

        $pay['eligibleEarnedLeave'] = '18';
        $pay['earnedOpeningLeave'] = '18';
        $pay['earnedCurrentLeave'] = '0';
        $pay['earnedClosingLeave'] = '18';
        $pay['earnedCumlativeLeave'] = '18';
        $pay['earnedClosingBalance'] = '18';

        $pay['eligibleSickLeave'] = '12';
        $pay['sickOpeningLeave'] = '3';
        $pay['sickCurrentLeave'] = '1';
        $pay['sickClosingLeave'] = '4';
        $pay['sickCumlativeLeave'] = '3';
        $pay['sickClosingBalance'] = '1';

        $pay['totEligibleLeave'] = '42';
        $pay['totOpeningLeave'] = '24';
        $pay['totCurrentLeave'] = '2';
        $pay['totClosingLeave'] = '26';
        $pay['totCumlativeLeave'] = '24';
        $pay['totClosingBalance'] = '20';

        $pay['paySlipAmount'] = 'Twenty thousand two hundred ninety seven only';


        // $dd = array_key_exists('jjj', $abc) ? $abc['jjj'] : null;
        $unpaidAttendance = 1;
        $absentAttendance = null;
        $paidAttendance = 20;
        $casualAttendance = 1;
        $declaredAttendance = 1;
        $earnedAttendance = 4;
        $presentAttendance = 17;
        $weekOffAttendance = 4;

        $leaveSummary = [];
        if ($unpaidAttendance != 0 &&  $unpaidAttendance != null) {
            $leaveSummary[] = ['key' => 'Unpaid Days', 'value' => $unpaidAttendance];
        };
        if ($absentAttendance != 0 &&  $absentAttendance != null) {
            $leaveSummary[] =  ['key' => 'Absent', 'value' => $absentAttendance];
        };
        if ($paidAttendance != 0 &&  $paidAttendance != null) {
            $leaveSummary[] =  ['key' => 'Paid Days', 'value' => $paidAttendance];
        };
        if ($casualAttendance != 0 &&  $casualAttendance != null) {
            $leaveSummary[] =  ['key' => 'Casual Leave', 'value' => $casualAttendance];
        };
        if ($declaredAttendance != 0 &&  $declaredAttendance != null) {
            $leaveSummary[] =  ['key' => 'Declared Holiday', 'value' => $declaredAttendance];
        };
        if ($earnedAttendance != 0 &&  $earnedAttendance != null) {
            $leaveSummary[] =  ['key' => 'Earned Leave', 'value' => $earnedAttendance];
        };
        if ($presentAttendance != 0 &&  $presentAttendance != null) {
            $leaveSummary[] =  ['key' => 'Present', 'value' => $presentAttendance];
        };
        if ($weekOffAttendance != 0 &&  $weekOffAttendance != null) {
            $leaveSummary[] =  ['key' => 'Week Off', 'value' => $weekOffAttendance];
        };


        $payslipDatas = [
            'pay' => $pay, 'leaveSummary' => $leaveSummary,

        ];
       

        $data = [
            'title' => 'Welcome pdf generator',
            'date' => date('m/d/y')
        ];
        $payslippdf = PDF::loadView('payslip', ['pay' => $pay, 'leaveSummary' => $leaveSummary]);


        return $payslippdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('Hello payslip Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
