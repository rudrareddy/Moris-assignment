@php
use Carbon\CarbonPeriod;
use App\Models\Event;
@endphp
<div>
   <div class="calender_topsec">
      <div class="leftsec">
         <span class="search_by"> Year</span>
         <div class="arrow_box">
            <button wire:click="prevYear('{{date('Y-m-d',strtotime($start_year))}}')"><span class="arrow"><img src="{{asset('site/images/my-calender/icon_lft_arrow.svg')}}" alt="icon arrow left" /></span></button>
            <button wire:click="nextYear('{{date('Y-m-d',strtotime($start_year))}}')">  <span class="arrow"><img src="{{asset('site/images/my-calender/icon_rgt_arrow.svg')}}"alt="icon arrow rgt" /></span></button>
         </div>
         <div class="date"> {{date('Y',strtotime($start_year))}}  </div>
      </div>
      <div class="rightsec">
         <div class="filter_by">
            <select class="ui search dropdown dropdownmenu select-style" id="selectField" onchange="getFilters()">
               <option value="1">Day</option>
               <option value="2">Week</option>
               <option value="3">Month</option>
               <option value="4" selected>year</option>
            </select>
         </div>
         <span class="time"><img src="{{asset('site/images/my-calender/icon_countdown.svg')}}" alt="icon time" />
         Yet
         to
         Respond</span>
         <span class="print"><img src="{{asset('site/images/my-calender/icon_print.svg')}}"
            alt="icon print" /></span>
         <strong class="more_option"><span></span></strong>
      </div>
   </div>
   <div class="calender_content">
      <!-- year_calender start -->
      <div class="c_data year_calender d4">
         @for($i=0;$i<=11;$i++)
         <div class="common">
            <h4 class="m_text"><span>{{date('F Y',strtotime($i.' month',strtotime($start_year)))}} </span></h4>
            <div class="full_row month_row">
               <div class="th">S</div>
               <div class="th">M</div>
               <div class="th">T</div>
               <div class="th">W</div>
               <div class="th">T</div>
               <div class="th">F</div>
               <div class="th">S</div>
            </div>
            @php
            $start_month = date('Y-m-01',strtotime($i.' month',strtotime($start_year)));
            $end_month = date('Y-m-t',strtotime($start_month));
            $month_dates =CarbonPeriod::create($start_month,$end_month)->toArray();
            $events = Event::select('id','start_date_time','end_date_time')->whereDate('start_date_time','>=',$start_month)->whereDate('end_date_time','<=',$end_month)->get();
            @endphp
            <!-- firsr row start here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Sun")
               @foreach($month_dates as $date)
               @if($loop->index <= 6)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Mon")
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index <= 5)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Tue")
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index <= 4)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Wed")
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index <= 3)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Thu")
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index <= 2)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Fri")
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index <= 1)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               <div class="td"><span class="date">-</span></div>
               @foreach($month_dates as $date)
               @if($loop->index == 0)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
            </div>
            <!-- first row ends here -->
            <!-- second row start here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Sun")
               @foreach($month_dates as $date)
               @if($loop->index >= 7 && $loop->index <= 13)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Mon")
               @foreach($month_dates as $date)
               @if($loop->index >= 6 && $loop->index <= 12)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Tue")
               @foreach($month_dates as $date)
               @if($loop->index >= 5 && $loop->index <= 11)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Wed")
               @foreach($month_dates as $date)
               @if($loop->index >= 4 && $loop->index <= 10)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Thu")
               @foreach($month_dates as $date)
               @if($loop->index >= 3 && $loop->index <= 9)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Fri")
               @foreach($month_dates as $date)
               @if($loop->index >= 2 && $loop->index <= 8)
               @foreach($events as $event)
               @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
               <div class="td  booked">{{date('d',strtotime($date))}}</div>
               @else
               <div class="td  ">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               @foreach($month_dates as $date)
               @if($loop->index >= 1 && $loop->index <= 7)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
            </div>
            <!-- second row ends here -->
            <!-- third row start here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Sun")
               @foreach($month_dates as $date)
               @if($loop->index >= 14 && $loop->index <= 20)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Mon")
               @foreach($month_dates as $date)
               @if($loop->index >= 13 && $loop->index <= 19)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Tue")
               @foreach($month_dates as $date)
               @if($loop->index >= 12 && $loop->index <= 18)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Wed")
               @foreach($month_dates as $date)
               @if($loop->index >= 11 && $loop->index <= 17)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Thu")
               @foreach($month_dates as $date)
               @if($loop->index >= 10 && $loop->index <= 16)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Fri")
               @foreach($month_dates as $date)
               @if($loop->index >= 9 && $loop->index <= 15)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               @foreach($month_dates as $date)
               @if($loop->index >= 10 && $loop->index <= 16)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
            </div>
            <!-- third row ends here -->
            <!-- fourth row start here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Sun")
               @foreach($month_dates as $date)
               @if($loop->index >= 21 && $loop->index <= 27)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Mon")
               @foreach($month_dates as $date)
               @if($loop->index >= 20 && $loop->index <= 26)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Tue")
               @foreach($month_dates as $date)
               @if($loop->index >= 19 && $loop->index <= 25)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Wed")
               @foreach($month_dates as $date)
               @if($loop->index >= 18 && $loop->index <= 24)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Thu")
               @foreach($month_dates as $date)
               @if($loop->index >= 17 && $loop->index <= 23)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Fri")
               @foreach($month_dates as $date)
               @if($loop->index >= 16 && $loop->index <= 22)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               @foreach($month_dates as $date)
               @if($loop->index >= 15 && $loop->index <= 21)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
            </div>
            <!-- fourth row ends here -->
            <!-- fifth row start here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Sun")
               @php $empty_days = date('d',strtotime($end_month))- 28; @endphp
               @foreach($month_dates as  $date)
               @if($loop->index >= 28)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Mon")
               @php $empty_days = date('d',strtotime($end_month))- 28; @endphp
               @foreach($month_dates as  $date)
               @if($loop->index >= 27)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Tue")
               @php $empty_days = date('d',strtotime($end_month))- 27; @endphp
               @foreach($month_dates as  $date)
               @if($loop->index >= 26)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Wed")
               @php $empty_days = date('d',strtotime($end_month))- 26; @endphp
               @foreach($month_dates as  $date)
               @if($loop->index >= 25)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Thu")
               @php $empty_days = date('d',strtotime($end_month))- 25; @endphp
               @foreach($month_dates as  $date)
               @if($loop->index >= 24)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}</div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Fri")
               @php $empty_days = date('d',strtotime($end_month))- 23; @endphp
               @foreach($month_dates as $date)
               @if($empty_days >= 8)
               @if($loop->index >= 23 && $loop->index  <= 29)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @else
               @if($loop->index >= 23)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               @php $empty_days = date('d',strtotime($end_month))- 22; @endphp
               @foreach($month_dates as $date)
               @if($empty_days >= 8)
               @if($loop->index >= 22 && $loop->index <= 28)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @else
               @if($loop->index >= 22)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endif
               @endforeach
               @endif
            </div>
            <!-- fifth row ends here -->
            <!-- sixth row starts here -->
            <div class="full_row days_row">
               @if(date('D',strtotime($start_month)) == "Fri")
               @php $empty_days = date('d',strtotime($end_month))- 30; @endphp
               @foreach($month_dates as $date)
               @if($loop->index >29)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
               @if(date('D',strtotime($start_month)) == "Sat")
               @php $empty_days = date('d',strtotime($end_month))- 30; @endphp
               @foreach($month_dates as $date)
               @if($loop->index >28)
               <div class="td @foreach($events as $event)
                  @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date))) booked @endif @endforeach">{{date('d',strtotime($date))}}
               </div>
               @endif
               @endforeach
               @endif
            </div>
            <!-- sixth row ends here -->
         </div>
         @endfor
      </div>
      <!-- year_calender end -->
   </div>
</div>
