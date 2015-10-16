<?php

/**
 * Created by PhpStorm.
 * User: device
 * Date: 14.10.15
 * Time: 15:17
 */
namespace lesson2;

use Carbon\Carbon;

class ClassDate extends Carbon
{
    private $day;
    private $month;
    private $year;

    public function dateInfo($day, $month, $year)
    {
        $this->day=$day;
        $this->month=$month;
        $this->year=$year;
        $yearnow=date("Y");
        $nowday=Carbon::instance(new \DateTime());
        if (!$this->validDate()) {
            $mes='An incorrect date format';
            return $mes;
        }
        $newyear=Carbon::instance(new \DateTime("01.01.$yearnow"));
        $enterdate=Carbon::instance(new \DateTime("$this->day.$this->month.$this->year"));
        $diffday=($enterdate->day)-($nowday->day);
        $diffmonth=($enterdate->month)-($nowday->month);
        $diffyear=($enterdate->year)-($nowday->year);
        $daystartyear=$nowday->dayOfYear;
        $monthstartyear=($nowday->month)-($newyear->month);
        $timezons=$nowday->timezoneName;
        $mes='You entered '. $enterdate->toDateString().'<br/>';
        $mes.='Now '.$nowday->toDateString().'<br/>';
        if ($diffday==0 && $diffmonth==0 && $diffyear==0) {
            $mes.='You enter the current date';
        } elseif ($diffday>0 || $diffmonth>0 || $diffyear>0) {
            $mes.='More than the current date entered in the '.abs($diffday).' days and '.abs($diffmonth).' month '.abs($diffyear).' year(s)';
        } else {
            $mes.='Less than the current date entered by '.abs($diffday).' days and '.abs($diffmonth).' month '.abs($diffyear).' year(s)';
        }
        $mes.="<br/> Your time zone: $timezons";
        $mes.="<br/> Since the beginning of this year went $monthstartyear full months or $daystartyear days";
        return  $mes;
    }

    private function validDate()
    {
        if (checkdate($this->month, $this->day, $this->year)) {
            return true;
        }
        return false;
    }
}