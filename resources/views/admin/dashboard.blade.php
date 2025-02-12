@extends('layouts.admin')
@section('main')
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $post_count }}</h3>

        <p>Posts</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Bounce Rate</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $account_count }}</h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{route('account.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $comment_count }}</h3>

        <p>Comments</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <iframe src="https://play.grafana.org/d-solo/000000016/1-time-series-graphs?orgId=1&from=1715868892547&to=1715872492548&panelId=410" width="450" height="200" frameborder="0"></iframe>
  <section class="col-lg-5 connectedSortable ui-sortable">
            <!-- Calendar -->
    <div class="card bg-gradient-success">
      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

        <h3 class="card-title">
          <i class="far fa-calendar-alt"></i>
          Calendar
        </h3>
        <!-- tools card -->
        <div class="card-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
              <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu" role="menu">
              <a href="#" class="dropdown-item">Add new event</a>
              <a href="#" class="dropdown-item">Clear events</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">View calendar</a>
            </div>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body pt-0">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">March 2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="02/25/2024" class="day old weekend">25</td><td data-action="selectDay" data-day="02/26/2024" class="day old">26</td><td data-action="selectDay" data-day="02/27/2024" class="day old">27</td><td data-action="selectDay" data-day="02/28/2024" class="day old">28</td><td data-action="selectDay" data-day="02/29/2024" class="day old">29</td><td data-action="selectDay" data-day="03/01/2024" class="day">1</td><td data-action="selectDay" data-day="03/02/2024" class="day weekend">2</td></tr><tr><td data-action="selectDay" data-day="03/03/2024" class="day weekend">3</td><td data-action="selectDay" data-day="03/04/2024" class="day">4</td><td data-action="selectDay" data-day="03/05/2024" class="day">5</td><td data-action="selectDay" data-day="03/06/2024" class="day active today">6</td><td data-action="selectDay" data-day="03/07/2024" class="day">7</td><td data-action="selectDay" data-day="03/08/2024" class="day">8</td><td data-action="selectDay" data-day="03/09/2024" class="day weekend">9</td></tr><tr><td data-action="selectDay" data-day="03/10/2024" class="day weekend">10</td><td data-action="selectDay" data-day="03/11/2024" class="day">11</td><td data-action="selectDay" data-day="03/12/2024" class="day">12</td><td data-action="selectDay" data-day="03/13/2024" class="day">13</td><td data-action="selectDay" data-day="03/14/2024" class="day">14</td><td data-action="selectDay" data-day="03/15/2024" class="day">15</td><td data-action="selectDay" data-day="03/16/2024" class="day weekend">16</td></tr><tr><td data-action="selectDay" data-day="03/17/2024" class="day weekend">17</td><td data-action="selectDay" data-day="03/18/2024" class="day">18</td><td data-action="selectDay" data-day="03/19/2024" class="day">19</td><td data-action="selectDay" data-day="03/20/2024" class="day">20</td><td data-action="selectDay" data-day="03/21/2024" class="day">21</td><td data-action="selectDay" data-day="03/22/2024" class="day">22</td><td data-action="selectDay" data-day="03/23/2024" class="day weekend">23</td></tr><tr><td data-action="selectDay" data-day="03/24/2024" class="day weekend">24</td><td data-action="selectDay" data-day="03/25/2024" class="day">25</td><td data-action="selectDay" data-day="03/26/2024" class="day">26</td><td data-action="selectDay" data-day="03/27/2024" class="day">27</td><td data-action="selectDay" data-day="03/28/2024" class="day">28</td><td data-action="selectDay" data-day="03/29/2024" class="day">29</td><td data-action="selectDay" data-day="03/30/2024" class="day weekend">30</td></tr><tr><td data-action="selectDay" data-day="03/31/2024" class="day weekend">31</td><td data-action="selectDay" data-day="04/01/2024" class="day new">1</td><td data-action="selectDay" data-day="04/02/2024" class="day new">2</td><td data-action="selectDay" data-day="04/03/2024" class="day new">3</td><td data-action="selectDay" data-day="04/04/2024" class="day new">4</td><td data-action="selectDay" data-day="04/05/2024" class="day new">5</td><td data-action="selectDay" data-day="04/06/2024" class="day new weekend">6</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month active">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- ./col -->
</div>
@endsection