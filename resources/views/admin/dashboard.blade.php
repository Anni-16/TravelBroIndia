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
    <div class="col-md-12">
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
                  <td><a href="">aalvin</a></td>
                  <td>$ 207</td>
                  <td>03-09-2022 2:17 AM</td>
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
      </div>
    </div>

  </div>
  <br>

  <div class="row">
    <div class="col-md-12">
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
    </div>
  </div>

  <div class="row">

  </div>

</section>



@endsection