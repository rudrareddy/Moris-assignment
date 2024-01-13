<div>
  <div class="calender_topsec">
    <div class="leftsec">
      <span class="search_by">This Week</span>
      <div class="arrow_box">
        <button wire:click="prevDay('{{$today}}')"><span class="arrow"><img src="{{asset('site/images/my-calender/icon_lft_arrow.svg')}}" alt="icon arrow left" /></span></button>
        <button wire:click="nextDay('{{$today}}')">  <span class="arrow"><img src="{{asset('site/images/my-calender/icon_rgt_arrow.svg')}}"alt="icon arrow rgt" /></span></button>
      </div>

      <div class="date">{{$today}} </div>
    </div>
    <div class="rightsec">
      <div class="filter_by">
        <select class="ui search dropdown dropdownmenu select-style" id="selectField">
          <option value="1" selected>Day</option>
          <option value="2">Week</option>
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
    <!-- day_calender start -->
    <div class="c_data week_calender day_wise d1">
      <div class="fixed_time">
        <div class="column">IST <br>{{date('h:ia')}}</div>
        @foreach($times as $time)
        <div class="column">{{$time->time}}</div>
        @endforeach
      </div>
      <div class="make_booking">
        <div class="column th">{{date('d F, Y',strtotime($today))}}</div>
        @foreach($times as $time)
        <div class="column">
          <div class="td">
            @foreach($time->timeintervals as $interval)
            @foreach($events as $event)
              @php
                 $start_time = date('h:ia',strtotime($event->start_date_time));
                 $end_time = date('h:ia',strtotime($event->end_date_time));
                 $time_interval = $start_time.'-'.$end_time;
              @endphp

            @if($time_interval == $interval->time_interval)
            <span class="b_time lightprpl full_height show">{{$event->meeting_address}}</span>
            @else
            <span class="b_time pink2">{{$interval->time_interval}}</span>
            @endif
            @endforeach
            <span class="b_time pink2">{{$interval->time_interval}}</span>
            @endforeach

          </div>
              <!--<div class="td2">
            <span class="b_time lightprpl full_height">Design Team Metting</span>

        <div class="mcalender_popup">
              <div class="top_option">
                <span><img src="{{asset('site/images/my-calender/icon_edit.svg')}}"
                    alt="icon edit" /></span>
                <span><img src="{{asset('site/images/my-calender/icon_delete.svg')}}"
                    alt="icon delete" /></span>
                <span class="close_btn"><img src="{{asset('site/images/my-calender/icon_cross.svg')}}"
                    alt="icon cross" /></span>
              </div>
              <div class="row_two">
                <div class="eventcolor">
                  <span class="roundcolor"></span>
                </div>
                <h3>Design Team Metting</h3>
                <div class="choosecolor">
                  <ul>
                    <li style="background-color:#6E1588;"></li>
                    <li style="background-color:#E1003E;"></li>
                    <li style="background-color:#2B99F0;"></li>
                    <li style="background-color:#FE2924;"></li>
                    <li style="background-color:#A41E90;"></li>
                  </ul>
                </div>
              </div>
              <div class="content_area">
                <div class="top_details">
                  <strong class="app_date"><img
                      src="images/my-calender/icon_calender.svg"
                      alt="icon calender" /> Friday, 14th October
                    2023</strong>
                  <strong class="app_time"><img
                      src="images/my-calender/icon_watch.svg"
                      alt="icon watch" />
                    11 : 00 Am - 11 : 15 Am <span>Asia /
                      Kolkata</span></strong>
                  <strong class="app_zoom"><img
                      src="images/my-calender/icon_zoom.png"
                      alt="icon zoom" /> Zoom Platform <span><img
                        src="images/my-calender/icon_attachment.svg"
                        alt="icon attachment" /> Copy Link</span></strong>
                  <strong class="app_bymail"><img
                      src="images/my-calender/icon_clock.svg"
                      alt="icon clock" />
                    15 min before by Email</strong>
                </div>
                <div class="attendees">
                  <div class="bg_white">Attendees <strong><img
                        src="images/my-calender/icon_user.png" />
                      10</strong>
                  </div>
                </div>
                <ul class="user_info">
                  <li>
                    <img src="images/my-calender/icon_user2.png"
                      alt="icon user" />
                    <strong>chaitanya@morismedia.in</strong>
                    <span class="check"></span>
                  </li>
                  <li>
                    <img src="images/my-calender/icon_user2.png"
                      alt="icon user" />
                    <strong>sanatariq@morismedia.in</strong>
                    <span class="check"></span>
                  </li>
                  <li>
                    <img src="images/my-calender/icon_user2.png"
                      alt="icon user" />
                    <strong>harpreet.k@morismedia.in</strong>
                    <span class="check"></span>
                  </li>
                </ul>
              </div>
            </div>

          </div>-->
        </div>
        @endforeach

      </div>
    </div>
    <!--day_calender end -->
  </div>

</div>
