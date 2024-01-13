<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Time;
use App\Models\Event;
class WeekCalendar extends Component
{
    public $start_week,$end_week,$yesterday,$times,$events;


    public function mount(){
      $now = Carbon::now();
      $this->start_week = $now->startOfWeek(Carbon::SUNDAY)->format('Y-m-d');
      $this->end_week = $now->endOfWeek(Carbon::SATURDAY);
      $this->times = Time::with('timeintervals')->get();
      $this->events = Event::whereDate('start_date_time','>=',$this->start_week)->whereDate('start_date_time','<=',$this->end_week)->get();
    }

    public function prevWeek($id){
       //dd($id);
       $this->start_week = date('Y-m-d',strtotime('-7 day',strtotime($id)));
       $this->end_week = date('Y-m-d',strtotime('+6 day',strtotime($this->start_week)));
       //dd($this->end_week);
       $this->times = Time::with('timeintervals')->get();
       $this->events =Event::whereDate('start_date_time','>=',$this->start_week)->whereDate('start_date_time','<=',$this->end_week)->get();

       return $this->render();
    }

    public function nextWeek($id){
       //dd($id);
       $this->start_week = date('Y-m-d',strtotime('+7 day',strtotime($id)));
       $this->end_week = date('Y-m-d',strtotime('+6 day',strtotime($this->start_week)));
       //dd($this->end_week);
       $this->times = Time::with('timeintervals')->get();
       $this->events = Event::whereDate('start_date_time','>=',$this->start_week)->whereDate('start_date_time','<=',$this->end_week)->get();
       // dd($this->events);
       return $this->render();
    }

    public function render()
    {
        return view('livewire.week-calendar');
    }
}
