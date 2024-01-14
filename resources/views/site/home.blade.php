@extends('layouts.site_layout')
@section('content')
<div class="scroll_area">
   <div class="row1">
      @if($value == NULL)
      @livewire('day-calendar')
      @elseif($value == "week")
      @livewire('week-calendar')
      @elseif($value == "day")
      @livewire('day-calendar')
      @elseif($value == "month")
      @livewire('month-calendar')
      @elseif($value == "year")
      @livewire('year-calendar')
      @endif
   </div>
</div>
<div class="nextbtn_row">
   <div class="slot_selected">
      <span class="slot_btn">12 time slot selected</span>
      <div class="slot_popup">
         <div class="toprow">
            <strong class="t_heading"><img src="images/my-calender/icon_calender.svg"
               alt="icon calender" /> Selected Time Slots</strong>
            <span class="clear_all">CLEAR ALL</span>
         </div>
         <div class="slot_time">
            <strong class="date">MONDAY, OCTOBER 10 2023</strong>
            <ul>
               <li>11 : 00 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 15 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 30 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 45 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>12 : 00 PM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>12 : 15 PM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>12 : 30 PM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>12 : 45 PM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
            </ul>
         </div>
         <div class="slot_time">
            <strong class="date">TUESDAY, OCTOBER 10 2023</strong>
            <ul>
               <li>11 : 00 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 15 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 30 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
               <li>11 : 45 AM <span class="cross"><img src="images/my-calender/icon_cross2.svg"
                  alt="icon cross" /></span></li>
            </ul>
         </div>
      </div>
   </div>
   <a href="select-event.html" class="next">NEXT</a>
</div>
@endsection
