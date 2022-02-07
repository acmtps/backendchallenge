<?php
namespace  App\Helpers ;

//Carbon library import
use Carbon\Carbon;
use Carbon\CarbonPeriod;

//class DateHelper
class DateHelper
{
    public function __construct(Carbon $carbon )
    {
        $this->carbon =  $carbon ;
    }

    //function to create date
    public function makeDate($date) : Carbon
    {
        return $this->carbon->createFromDate($date);
    }

    //function to calculate number of days between two dates
    public  function getDaysDiff($day1, $day2, $format= null) : int
    {
        $diffInDays = is_null($format) ?
                $this->makeDate($day1)->diffInDays($this->makeDate($day2)) :
                $this->makeDate($day1)->{'diffIn'.$format}($this->makeDate($day2)) ;
        return $diffInDays;
    }

    //function to calculate number of weeks between two dates
    public function getWeekDiff($day1, $day2, $format = null) : int
    {
        $diffInDays = is_null($format) ?
            $this->makeDate($day1)->diffInDays($this->makeDate($day2))/7 :
            $this->makeDate($day1)->{'diffIn'.$format}($this->makeDate($day2)) ;
        return $diffInDays;
    }

    //function to convert date as per user input
    public function convertDate($day1, $day2, $format= null) : int
    {
        
        $diffInDays = is_null($format) ? $this->makeDate($day1)->diffInDays($this->makeDate($day2)) :
            $this->makeDate($day1)->{'diffIn'.$format}($this->makeDate($day2)) ;
        return $diffInDays ;
    }

    //function to calculate week days between two dates
    public function getWeeksDays($date1, $date2, $format= null) : int
    {
        /**
         * define weekends
         */
        $this->carbon->setWeekendDays([
            // Carbon::FRIDAY,
            Carbon::SATURDAY,
            Carbon::SUNDAY
        ]);

        $weekDays  = is_null($format) ?
            $this->makeDate($date1)->diffInWeekdays($this->makeDate($date2)) :
            $this->makeDate($date1)->{'diffIn'.$format}($this->makeDate($date1)
                ->addDays(($this->makeDate($date1)->diffInWeekdays($this->makeDate($date2)) )  ) ) ;
        return $weekDays ;

    }

    //function for time zone comparison between two dates
    public function timeZoneComparison($timeZone1, $timeZone2, $format= null) : int
    {
        $diffInDays = is_null($format) ?
            $this->carbon->create($time, $timeZone1)->diffInHour($this->carbon->create($time,$timeZone2)) :
            $this->carbon->create($time, $timeZone1)->{'diffIn'.$format}($this->carbon->create($time,$timeZone2));
        return $diffInDays;
    }
}
