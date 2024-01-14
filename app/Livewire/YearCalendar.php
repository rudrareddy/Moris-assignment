<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Time;
use App\Models\Event;
class YearCalendar extends Component
{
    public $start_year,$end_year,$times,$events;

    public function mount(){
       $this->start_year = date('Y-m-d', strtotime('first day of january'));
       $this->end_year = date('Y-m-d', strtotime('last day of december'));
    }

    public function nextYear($id){
       //dd($id);
       $year = date('Y-m-d',strtotime('+1 Year',strtotime($id)));
       //dd($month);
       $this->start_year =date('Y-m-d', strtotime('first day of january',strtotime($year)));
       //dd($this->start_year);
       $this->end_year= date('Y-m-d', strtotime('last day of december',strtotime($year)));
       //dd($this->end_year);
       return $this->render();
    }

    public function prevYear($id){
       //dd($id);
       $year = date('Y-m-d',strtotime('-1 Year',strtotime($id)));
       //dd($month);
       $this->start_year =date('Y-m-d', strtotime('first day of january',strtotime($year)));
       //dd($this->start_year);
       $this->end_year= date('Y-m-d', strtotime('last day of december',strtotime($year)));
       //dd($this->end_month);
       return $this->render();
    }

    public function render()
    {
        return view('livewire.year-calendar');
    }
}
