<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Time;
use App\Models\Event;
class MonthCalendar extends Component
{

  public $start_month,$end_month,$times,$events,$month_dates;


    public function mount(){
       $this->start_month = new Carbon('first day of this month');
       $this->end_month = new Carbon('last day of this month');
       $this->month_dates =  CarbonPeriod::create($this->start_month,$this->end_month)->toArray();
       $this->times = Time::with('timeintervals')->get();
       $this->events = Event::whereDate('start_date_time','>=',$this->start_month)->whereDate('start_date_time','<=',$this->end_month)->get();
    }

    public function prevMonth($id){
       //dd($id);
       $month = date('Y-m-d',strtotime('-1 day',strtotime($id)));
       //dd($month);
       $this->start_month =date('Y-m-01',strtotime($month));
       $this->end_month= date('Y-m-t',strtotime($month));
       //dd($this->end_week);
       $this->month_dates =  CarbonPeriod::create($this->start_month,$this->end_month)->toArray();
       $this->times = Time::with('timeintervals')->get();
       //this->events = Event::whereDate('start_date_time',$this->today)->get();
       return $this->render();
    }
    public function nextMonth($id){
       //dd($id);
       $month = date('Y-m-d',strtotime('+1 day',strtotime($id)));
       //dd($month);
       $this->start_month =date('Y-m-01',strtotime($month));
       $this->end_month= date('Y-m-t',strtotime($month));
       //dd($this->end_week);
       $this->month_dates =  CarbonPeriod::create($this->start_month,$this->end_month)->toArray();
       $this->times = Time::with('timeintervals')->get();
       //this->events = Event::whereDate('start_date_time',$this->today)->get();
       return $this->render();
    }


    public function render()
    {
        return view('livewire.month-calendar');
    }
}
