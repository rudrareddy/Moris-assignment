<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Time;
use App\Models\Event;
class DayCalendar extends Component
{

    public $today,$yesterday,$times,$events;

    protected $listeners = ['some-event' => '$refresh'];

    public function mount(){
      $this->today = Carbon::now()->format('Y-m-d');
      $this->yesterday = Carbon::now()->subday();
      $this->times = Time::with('timeintervals')->get();
      $this->events = Event::whereDate('start_date_time',$this->today)->get();
      
    }

    public function prevDay($id){
       //dd($id);
       $this->today = date('Y-m-d',strtotime('-1 day',strtotime($id)));
       $this->times = Time::with('timeintervals')->get();
       $this->events = Event::whereDate('start_date_time',$this->today)->get();
       return $this->render();
      // $this->emitSelf('DayCalendar','some-event');
       //$this->emit('refresh');
    }

    public function nextDay($id){
       //dd($id);
       $this->today = date('Y-m-d',strtotime('+1 day',strtotime($id)));
       $this->times = Time::with('timeintervals')->get();
       $this->events = Event::whereDate('start_date_time',$this->today)->get();
       return $this->render();
      // $this->emitSelf('DayCalendar','some-event');
       //$this->emit('refresh');
    }



    public function render()
    {
        return view('livewire.day-calendar');
    }
}
