<div>
   <div class="mycalender_wrap">
      <div class="my_calender">
         <div class="custom_container">
            <div class="scroll_area">
               <div class="row1">
                  <div class="calender_topsec">
                     <div class="leftsec">
                        <span class="search_by">This Week</span>
                        <div class="arrow_box">
                           <button wire:click="prevWeek('{{$start_week}}')">	<span class="arrow"><img src="{{asset('site/images/my-calender/icon_lft_arrow.svg')}}" alt="icon arrow left" /></span></button>
                           <button wire:click="nextWeek('{{$start_week}}')"><span class="arrow"><img src="{{asset('site/images/my-calender/icon_rgt_arrow.svg')}}"
                              alt="icon arrow rgt" /></span>
                        </div>
                        <div class="date">{{date('d F',strtotime($start_week))}} - {{date('d F',strtotime('+6 day',strtotime($start_week)))}}, {{date('Y',strtotime($start_week))}}</div>
                     </div>
                     <div class="rightsec">
                        <div class="filter_by">
                           <select class="ui search dropdown dropdownmenu select-style" id="selectField" onchange="getFilters()">
                              <option value="1">Day</option>
                              <option value="2" selected>Week</option>
                              <option value="3">Month</option>
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
                     <!-- week_calender start -->
                     <div class="c_data week_calender d2">
                        <div class="fixed_time">
                           <div class="column">IST <br>{{date('h:ia')}}</div>
                           @foreach($times as $time)
                           <div class="column">{{$time->time}}</div>
                           @endforeach
                        </div>
                        @php $count_time = count($times) @endphp
                        @for($i=0;$i<=6;$i++)
                        <div class="make_booking">
                           <div class="column th">{{date('d D',strtotime($i.'day',strtotime($start_week)))}}</div>
                           @foreach($times as $time)
                           <div class="column">
                              <div class="td2">
                                 @foreach($time->timeintervals as $interval)
                                 @foreach($events as $event)
                                 @php
                                 $start_time = date('h:ia',strtotime($event->start_date_time));
                                 $end_time = date('h:ia',strtotime($event->end_date_time));
                                 $time_interval = $start_time.'-'.$end_time;
                                 $event_date = date('Y-m-d',strtotime($event->start_date_time));
                                 $current_date = date('Y-m-d',strtotime($i.'day',strtotime($start_week)));
                                 @endphp
                                 @if($event_date == $current_date)
                                 @if($time_interval == $interval->time_interval)
                                 <span class="b_time  yellow  show">{{$event->meeting_address}}</span>
                                 @else
                                 <span class="b_time pink2">{{$interval->time_interval}}</span>
                                 @endif
                                 @endif
                                 @endforeach
                                 <span class="b_time pink2">{{$interval->time_interval}}</span>
                                 @endforeach
                              </div>
                           </div>
                           @endforeach
                           <!--<div class="column unavailable"><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>
                              <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>
                              <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>
                              <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>
                              <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>
                              <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg"
                              alt="icon unavailable" />Unavailable</div>-->
                        </div>
                        @endfor
                     </div>
                     <!--week_calender end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
