@extends('admin.layout.app')


@section('content')


<section class="content">

<h1 class="text-white col-md-12">Hello {{ session('Role') ?? '' }}</h1>
        <div class="row">
          <div class="col-md-6">
            <h3 class="text-white col-md-12">Users</h3>
            <div class="col-lg-6">
              <div class="small-box svbg_blue">

                <div class="inner">
                  <h3>15</h3>
                  <p>Total Users</p>
                </div>
                <div class="svicon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="small-box svbg_orange">
                <div class="inner">
                  <h3>0</h3>
                  <p>Today Users</p>
                </div>
                <div class="svicon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="text-white col-md-12">Revenue</h3>
            <div class="col-lg-6">
              <div class="small-box svbg_violet">
                <div class="inner">
                  <h3>$ 0.00</h3>

                  <p>Total Income</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-money"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="small-box svbg_teal">
                <div class="inner">
                  <h3>0</h3>
                  <p>Total Nights</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-bed"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="text-white col-md-12">Property</h3>
            <div class="col-lg-6">
              <div class="small-box svbg_green">
                <div class="inner">
                  <h3>41</h3>
                  <p>Total Property</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-home"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="small-box svbg_purple">
                <div class="inner">
                  <h3>0</h3>
                  <p>Today Property</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-home"></i>
                </div>
              </div>
            </div>

          </div>


          <div class="col-md-6">
            <h3 class="text-white col-md-12">Experience</h3>
            <div class="col-lg-6">
              <div class="small-box svbg_green">
                <div class="inner">
                  <h3>28</h3>
                  <p>Total Experience</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="small-box svbg_pink">
                <div class="inner">
                  <h3>0</h3>
                  <p>Today Experience</p>
                </div>
                <div class="svicon">
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="text-white col-md-12">Reservation</h3>
            <div class="col-lg-6">
              <div class="small-box svbg_pink">
                <div class="inner">
                  <h3>54</h3>
                  <p>Total Reservations</p>
                </div>
                <div class="svicon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="small-box svbg_yellow">
                <div class="inner">
                  <h3>0</h3>
                  <p>Today Reservations</p>
                </div>
                <div class="svicon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
       
        <style>
          .highcharts-title {
            color: #fff !important;
            fill: #fff !important;
          }
        </style>
        <br>
        <div class="row">
          <div class="col-md-8">
            <div id="container" class="sale-container" data-highcharts-chart="0" style="overflow: hidden;">
              <div id="highcharts-xoxl5xk-0" dir="ltr" class="highcharts-container "
                style="position: relative; overflow: hidden; width: 1065px; height: 462px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none;">
                <svg version="1.1" class="highcharts-root"
                  style="font-family: Lucida Grande, Lucida Sans Unicode, Arial, Helvetica, sans-serif;font-size:12px;"
                  xmlns="http://www.w3.org/2000/svg" width="1065" height="462" viewBox="0 0 1065 462">
                  <desc>Created with Highcharts 8.2.2</desc>
                  <defs>
                    <clippath id="highcharts-xoxl5xk-1-">
                      <rect x="0" y="0" width="906" height="354" fill="none"></rect>
                    </clippath>
                  </defs>
                  <rect fill="#212130" class="highcharts-background" x="0" y="0" width="1065" height="462" rx="0"
                    ry="0"></rect>
                  <rect fill="none" class="highcharts-plot-background" x="60" y="71" width="906" height="354"></rect>
                  <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 135.5 71 L 135.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 210.5 71 L 210.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 286.5 71 L 286.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 361.5 71 L 361.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 437.5 71 L 437.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 512.5 71 L 512.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 588.5 71 L 588.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 663.5 71 L 663.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 739.5 71 L 739.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 814.5 71 L 814.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 890.5 71 L 890.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 965.5 71 L 965.5 425"
                      opacity="1"></path>
                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 59.5 71 L 59.5 425"
                      opacity="1"></path>
                  </g>
                  <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line"
                      d="M 60 248.5 L 966 248.5" opacity="1"></path>
                  </g>
                  <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="60" y="71" width="906"
                    height="354"></rect>
                  <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                    <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7"
                      d="M 60 425.5 L 966 425.5"></path>
                  </g>
                  <g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="26" data-z-index="7"
                      text-anchor="middle" transform="translate(0,0) rotate(270 26 248)" class="highcharts-axis-title"
                      style="color:#666666;fill:#666666;" y="248">
                      <tspan>Nights per Month</tspan>
                    </text>
                    <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 60 71 L 60 425"></path>
                  </g>
                  <g class="highcharts-series-group" data-z-index="3">
                    <g class="highcharts-series highcharts-series-0 highcharts-spline-series" data-z-index="0.1"
                      opacity="1" transform="translate(60,71) scale(1 1)" clip-path="url(#highcharts-xoxl5xk-1-)">
                      <path fill="none"
                        d="M 37.75 177 C 37.75 177 83.05 177 113.25 177 C 143.45 177 158.55 177 188.75 177 C 218.95 177 234.05 177 264.25 177 C 294.45 177 309.55 177 339.75 177 C 369.95 177 385.05 177 415.25 177 C 445.45 177 460.55 177 490.75 177 C 520.95 177 536.05 177 566.25 177 C 596.45 177 611.55 177 641.75 177 C 671.95 177 687.05 177 717.25 177 C 747.45 177 762.55 177 792.75 177 C 822.95 177 868.25 177 868.25 177"
                        class="highcharts-graph" data-z-index="1" stroke="#ed3615" stroke-width="2"
                        stroke-linejoin="round" stroke-linecap="round"></path>
                      <path fill="none"
                        d="M 37.75 177 C 37.75 177 83.05 177 113.25 177 C 143.45 177 158.55 177 188.75 177 C 218.95 177 234.05 177 264.25 177 C 294.45 177 309.55 177 339.75 177 C 369.95 177 385.05 177 415.25 177 C 445.45 177 460.55 177 490.75 177 C 520.95 177 536.05 177 566.25 177 C 596.45 177 611.55 177 641.75 177 C 671.95 177 687.05 177 717.25 177 C 747.45 177 762.55 177 792.75 177 C 822.95 177 868.25 177 868.25 177"
                        visibility="visible" data-z-index="2" class="highcharts-tracker-line" stroke-linecap="round"
                        stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"></path>
                    </g>
                    <g class="highcharts-markers highcharts-series-0 highcharts-spline-series highcharts-tracker"
                      data-z-index="0.1" opacity="1" transform="translate(60,71) scale(1 1)">
                      <path fill="#ed3615" d="M 37 181 A 4 4 0 1 1 37.00399999933334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 113 181 A 4 4 0 1 1 113.00399999933333 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 188 181 A 4 4 0 1 1 188.00399999933333 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 264 181 A 4 4 0 1 1 264.00399999933336 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 339 181 A 4 4 0 1 1 339.00399999933336 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 415 181 A 4 4 0 1 1 415.00399999933336 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 490 181 A 4 4 0 1 1 490.00399999933336 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 566 181 A 4 4 0 1 1 566.0039999993334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 641 181 A 4 4 0 1 1 641.0039999993334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 717 181 A 4 4 0 1 1 717.0039999993334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 792 181 A 4 4 0 1 1 792.0039999993334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                      <path fill="#ed3615" d="M 868 181 A 4 4 0 1 1 868.0039999993334 180.99999800000018 Z" opacity="1"
                        class="highcharts-point"></path>
                    </g>
                  </g>
                  <g class="highcharts-exporting-group" data-z-index="3">
                    <g class="highcharts-button highcharts-contextbutton" stroke-linecap="round"
                      transform="translate(1031,10)">
                      <rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2"
                        ry="2" stroke="none" stroke-width="1"></rect>
                      <title>Chart context menu</title>
                      <path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                        class="highcharts-button-symbol" data-z-index="1" stroke="#666666" stroke-width="3"></path><text
                        x="0" data-z-index="1" y="12"
                        style="color:#333333;cursor:pointer;font-weight:normal;fill:#333333;"></text>
                    </g>
                  </g><text x="533" text-anchor="middle" class="highcharts-title" data-z-index="4"
                    style="color:#333333;font-size:18px;fill:#333333;" y="24">
                    <tspan>Sales of Past 12 Months</tspan>
                  </text><text x="533" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                    style="color:#666666;fill:#666666;" y="52">
                    <tspan>Total Income USD 0.00 for 0 Nights</tspan>
                  </text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4"
                    style="color:#666666;fill:#666666;" y="459"></text>
                  <g class="highcharts-legend" data-z-index="7" transform="translate(978,214)">
                    <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="76" height="29"
                      visibility="visible"></rect>
                    <g data-z-index="1">
                      <g>
                        <g class="highcharts-legend-item highcharts-spline-series highcharts-color-undefined highcharts-series-0"
                          data-z-index="1" transform="translate(8,3)">
                          <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ed3615"
                            stroke-width="2"></path>
                          <path fill="#ed3615" d="M 8 15 A 4 4 0 1 1 8.003999999333336 14.999998000000167 Z"
                            class="highcharts-point" opacity="1"></path><text x="21"
                            style="color:#ed3615;cursor:pointer;font-size:12px;font-weight:bold;fill:#ed3615;"
                            text-anchor="start" data-z-index="2" y="15">
                            <tspan>Nights</tspan>
                          </text>
                        </g>
                      </g>
                    </g>
                  </g>
                  <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="97.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">March</text><text x="173.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">April</text><text x="248.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">May</text><text x="324.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">June</text><text x="399.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">July</text><text x="475.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">August</text><text x="550.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">September</text><text x="626.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">October</text><text x="701.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">November</text><text x="777.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">December</text><text x="852.75"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">January</text><text x="928.25"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle"
                      transform="translate(0,0)" y="444" opacity="1">February</text></g>
                  <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="45"
                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                      transform="translate(0,0)" y="252" opacity="1">0</text></g><text x="1055"
                    class="highcharts-credits" text-anchor="end" data-z-index="8"
                    style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="457">Highcharts.com</text>
                </svg>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <!-- LINE CHART -->
            <div class="box box-info" style="border-top-color:transparent;">
              <div class="box-header with-border">
                <h3 class="box-title">Latest Bookings</h3>
              </div>
              <div class="box-body" style="margin-top:0">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Guest Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th width="5%">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href=" ">aalvin</a></td>
                        <td>$ 207</td>
                        <td>03-09-2022 2:17 AM</td>
                        <td>Accepted</td>
                      </tr>
                      <tr>
                        <td><a href="">aalvin</a></td>
                        <td>$ 59</td>
                        <td>03-09-2022 2:19 AM</td>
                        <td>Accepted</td>
                      </tr>
                      <tr>
                        <td><a href="">aalvin</a></td>
                        <td>$ 51</td>
                        <td>03-09-2022 2:27 AM</td>
                        <td>Accepted</td>
                      </tr>
                      <tr>
                        <td><a href="">John</a></td>
                        <td>$ 28</td>
                        <td>03-09-2022 2:31 AM</td>
                        <td>Accepted</td>
                      </tr>
                      <tr>
                        <td><a href="">John</a></td>
                        <td>$ 209</td>
                        <td>16-09-2022 2:21 AM</td>
                        <td>Accepted</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-info" style="border-top-color:transparent;">
              <div class="box-header with-border">
                <h3 class="box-title">Latest Property</h3>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Host Name</th>
                        <th width="15%">Date</th>
                        <th width="5%">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/listing/74/basics">Private
                            room in
                            Thailand</a></td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>11-07-2023 7:16 AM</td>
                        <td>Listed</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/listing/72/basics">Entire
                            home/apt in
                          </a></td>
                        <td><a href="">John Doe</a></td>
                        <td>11-07-2023 6:43 AM</td>
                        <td>Unlisted</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/listing/69/basics">Unique
                            stays in
                            England</a></td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>11-07-2023 12:09 AM</td>
                        <td>Listed</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/listing/66/basics">Entire
                            apt in
                            Ayyampuzha</a></td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>10-07-2023 5:39 AM</td>
                        <td>Listed</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/listing/64/basics">single
                            room in
                            Paris</a></td>
                        <td><a href="">John Doe</a></td>
                        <td>07-07-2023 4:40 AM</td>
                        <td>Unlisted</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-info" style="border-top-color:transparent;">
              <div class="box-header with-border">
                <h3 class="box-title">Latest Experience</h3>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Host Name</th>
                        <th width="15%">Date</th>
                        <th width="5%">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/experience/73/basics">River
                            Rafting</a>
                        </td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>11-07-2023 7:04 AM</td>
                        <td>Listed</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/experience/71/basics">test</a>
                        </td>
                        <td><a href="">John Doe</a></td>
                        <td>11-07-2023 5:12 AM</td>
                        <td>Unlisted</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/experience/70/basics">Tent
                            and
                            Camping</a></td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>11-07-2023 12:20 AM</td>
                        <td>Listed</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/experience/68/basics">Test</a>
                        </td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>10-07-2023 6:52 AM</td>
                        <td>Unlisted</td>
                      </tr>
                      <tr>
                        <td><a href="firstpointcreations.com/admin/experience/67/basics">Air
                            Ballon
                            Safari</a></td>
                        <td><a href="firstpointcreations.com/admin/edit-customer/23">susana
                            singh</a></td>
                        <td>10-07-2023 6:08 AM</td>
                        <td>Listed</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

        <div class="row">

        </div>

</section>



@endsection