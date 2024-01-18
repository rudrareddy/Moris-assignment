<div>
   <div class="mycalender_wrap">
      <div class="my_calender">
         <div class="custom_container">
            <div class="scroll_area">
               <div class="row1">
                  <div class="calender_topsec">
                     <div class="leftsec">
                        <span class="search_by">This Month</span>
                        <div class="arrow_box">
                           <button wire:click="prevMonth('{{$start_month}}')">	<span class="arrow"><img src="{{asset('site/images/my-calender/icon_lft_arrow.svg')}}" alt="icon arrow left" /></span></button>
                           <button wire:click="nextMonth('{{$end_month}}')"><span class="arrow"><img src="{{asset('site/images/my-calender/icon_rgt_arrow.svg')}}"
                              alt="icon arrow rgt" /></span>
                        </div>
                        <div class="date">{{date('F, Y',strtotime($start_month))}}</div>
                     </div>
                     <div class="rightsec">
                        <div class="filter_by">
                           <select class="ui search dropdown dropdownmenu select-style" id="selectField" onchange="getFilters()">
                              <option value="1">Day</option>
                              <option value="2" >Week</option>
                              <option value="3" selected>Month</option>
                              <option value="4">year</option>
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
                     <!-- month_calender start -->
                     <div class="c_data month_calender d3">
                        <div class="full_row month_row">
                           <div class="th">SUNDAY</div>
                           <div class="th">MONDAY</div>
                           <div class="th">TUESDAY</div>
                           <div class="th">WEDNESDAY</div>
                           <div class="th">THURSDAY</div>
                           <div class="th">FRIDAY</div>
                           <div class="th">SATURDAY</div>
                        </div>
                        <div class="full_row days_row">
                           @if(date('D',strtotime($start_month)) == "Sun")
                           @foreach($month_dates as $date)
                           @if($loop->index <= 6)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Mon")
                           <div class="td"><span class="date">-</span></div>
                           @foreach($month_dates as $date)
                           @if($loop->index <= 5)
                           @foreach($events as $event)
                           @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           <div class="td"><span class="date ">{{date('d',strtotime($date))}}</span></div>
                           @endif
                           @endforeach
                           <!--<div class="td"><span class="date">{{date('Y-m-d',strtotime('+1 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+2 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+3 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+4 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+5 day',strtotime($start_month)))}}</span></div>-->
                           @endif
                           @if(date('D',strtotime($start_month)) == "Tue")
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           @foreach($month_dates as $date)
                           @if($loop->index <= 4)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           <!--<div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime($start_month))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+1 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+2 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+3 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+4 day',strtotime($start_month)))}}</span></div>-->
                           @endif
                           @if(date('D',strtotime($start_month)) == "Wed")
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           @foreach($month_dates as $date)
                           @if($loop->index <= 3)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           <!--<div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime($start_month))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+1 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+2 day',strtotime($start_month)))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+3 day',strtotime($start_month)))}}</span></div>-->
                           @endif
                           @if(date('D',strtotime($start_month)) == "Thu")
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           @foreach($month_dates as $date)
                           @if($loop->index <= 2)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           <!--<div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                              <div class="td"><span class="date">-</span></div>
                               <div class="td"><span class="date">{{date('Y-m-d',strtotime($start_month))}}</span></div>
                               <div class="td"><span class="date">{{date('Y-m-d',strtotime('+1 day',strtotime($start_month)))}}</span></div>
                               <div class="td"><span class="date">{{date('Y-m-d',strtotime('+2 day',strtotime($start_month)))}}</span></div>-->
                           @endif
                           @if(date('D',strtotime($start_month)) == "Fri")
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           <div class="td"><span class="date">-</span></div>
                           @foreach($month_dates as $date)
                           @if($loop->index <= 1)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           <!--<div class="td"><span class="date">{{date('Y-m-d',strtotime($start_month))}}</span></div>
                              <div class="td"><span class="date">{{date('Y-m-d',strtotime('+1 day',strtotime($start_month)))}}</span></div>-->
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
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                        </div>
                        <!-- second row start here -->
                        <div class="full_row days_row">
                           @if(date('D',strtotime($start_month)) == "Sun")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 7 && $loop->index <= 13)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">Sales Constellation</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Mon")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 6 && $loop->index <= 12)
                           <div class="td">
                              <span class="date ">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif


                           @if(date('D',strtotime($start_month)) == "Tue")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 5 && $loop->index <= 11)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif


                           @if(date('D',strtotime($start_month)) == "Wed")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 4 && $loop->index <= 10)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif


                           @if(date('D',strtotime($start_month)) == "Thu")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 3 && $loop->index <= 9)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif

                           @if(date('D',strtotime($start_month)) == "Fri")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 2 && $loop->index <= 8)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif

                           @if(date('D',strtotime($start_month)) == "Sat")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 1 && $loop->index <= 7)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
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
                           <div class="td">
                              <span class="date ">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Mon")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 13 && $loop->index <= 19)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Tue")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 12 && $loop->index <= 18)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Wed")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 11 && $loop->index <= 17)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Thu")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 10 && $loop->index <= 16)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label red">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Fri")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 9 && $loop->index <= 15)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Sat")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 10 && $loop->index <= 16)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
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
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label green">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Mon")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 20 && $loop->index <= 26)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Tue")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 19 && $loop->index <= 25)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Wed")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 18 && $loop->index <= 24)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Thu")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 17 && $loop->index <= 23)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Fri")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 16 && $loop->index <= 22)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @endif
                           @if(date('D',strtotime($start_month)) == "Sat")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 15 && $loop->index <= 21)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
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
                           @foreach($month_dates as $date)
                           @if($loop->index >= 28)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @php $last_day = date('d',strtotime($end_month)) @endphp
                           @php $empty_days = date('d',strtotime($end_month))- 28; @endphp
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date"></span></div>
                           @endfor
                           @endif


                           @if(date('D',strtotime($start_month)) == "Mon")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 27 )
                           @if(date('d',strtotime($date)) == date('d',strtotime($end_month)))
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @else
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endif
                           @endforeach
                           @php $empty_days = date('d',strtotime($end_month))- 27; @endphp
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date"></span></div>
                           @endfor
                           @endif


                           @if(date('D',strtotime($start_month)) == "Tue")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 26)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endforeach
                           @php $empty_days = date('d',strtotime($end_month))- 26; @endphp
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date"></span></div>
                           @endfor
                           @endif


                           @if(date('D',strtotime($start_month)) == "Wed")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 25)
                           @if(date('d',strtotime($date)) == date('d',strtotime($end_month)))
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @else
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endif
                           @endforeach
                           @php $empty_days = date('d',strtotime($end_month))- 26; @endphp
                           @for($i=$empty_days;$i-6;$i++)
                           <div class="td"><span class="date"></span></div>
                           @endfor
                           @endif


                           @if(date('D',strtotime($start_month)) == "Thu")
                           @foreach($month_dates as $date)
                           @if($loop->index >= 24 )
                           @if(date('d',strtotime($date)) == date('d',strtotime($end_month)))
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @else
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endif
                           @endforeach
                           @php $empty_days = date('d',strtotime($end_month))- 24; @endphp
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date"></span></div>
                           @endfor
                           @endif
                           @if(date('D',strtotime($start_month)) == "Fri")
                           @php $empty_days = date('d',strtotime($end_month))- 23; @endphp
                           @foreach($month_dates as $date)
                           @if($empty_days >= 8)
                           @if($loop->index >= 23 && $loop->index  <= 29)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @else
                           @if($loop->index >= 23)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
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
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @else
                           @if($loop->index >= 22)
                           <div class="td">
                              <span class="date">{{date('d',strtotime($date))}}</span>
                              @foreach($events as $event)
                              @if(date('Y-m-d',strtotime($event->start_date_time)) == date('Y-m-d',strtotime($date)))
                              <div class="event_label blue">{{$event->meeting_address}}</div>
                              @endif
                              @endforeach
                           </div>
                           @endif
                           @endif
                           @endforeach
                           @php $last_day = date('d',strtotime($end_month)) @endphp
                           @if($empty_days < 8)
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date">-</span></div>
                           @endfor
                           @endif
                           @endif
                        </div>
                        <!-- fifth row ends here -->
                        <!-- sixth row starts here -->
                        <div class="full_row days_row">
                           @if(date('D',strtotime($start_month)) == "Fri")
                           @php $empty_days = date('d',strtotime($end_month))- 30; @endphp
                           @foreach($month_dates as $date)
                           @if($loop->index >29)
                           <div class="td"><span class="date">{{date('d',strtotime($date))}}</span></div>
                           @endif
                           @endforeach
                           @for($i=$empty_days;$i-7;$i++)
                           <div class="td"><span class="date">-</span></div>
                           @endfor
                           @endif
                           @if(date('D',strtotime($start_month)) == "Sat")
                           @php $empty_days = date('d',strtotime($end_month))- 30; @endphp
                           @foreach($month_dates as $date)
                           @if($loop->index >28)
                           <div class="td"><span class="date">{{date('d',strtotime($date))}}</span></div>
                           @endif
                           @endforeach
                           @for($i=$empty_days;$i-6;$i++)
                           <div class="td"><span class="date">-</span></div>
                           @endfor
                           @endif
                        </div>
                        <!-- sixth row ends here -->
                     </div>
                     <!-- month_calender end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
