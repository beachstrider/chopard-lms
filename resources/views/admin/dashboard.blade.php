@extends('admin.layout')

@section('content')

@include('admin.partials.top-bar')

<div class="page-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-account-star-variant"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{ $allusercount }}</span>
                        Total Participants
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-account-multiple-plus"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{ $newusercount }}</span>
                        New Users
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-timer-sand"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{ $time_tool }}</span>
                        Time spent in the Tool
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-av-timer"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{ $time_reference }}</span>
                        Time spent reading Reference
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-block">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-users" role="tab">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-sessions" role="tab">Sessions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-bouncerate" role="tab">Bounce Rate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-sessionduration" role="tab">Session Duration</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="tab-users" role="tabpanel">
                                <canvas id="line-chart1" width="800" height="450"></canvas>
                            </div>
                            <div class="tab-pane p-3" id="tab-sessions" role="tabpanel">
                                <canvas id="line-chart2" width="800" height="450"></canvas>
                            </div>
                            <div class="tab-pane p-3" id="tab-bouncerate" role="tabpanel">
                                <canvas id="line-chart3" width="800" height="450"></canvas>
                            </div>
                            <div class="tab-pane p-3" id="tab-sessionduration" role="tabpanel">
                                <canvas id="line-chart4" width="800" height="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20" style="background-color: #67a8e4; color: #fff; height: 431.5px;">
                    <div class="card-block">
                        <h4 class="mt-0 header-title">Active Users right now</h4>
                        <h1>{{ $activeusers }}</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-size: 12px;">Top Active Pages</p>
                                @if( $activepages !=null )
                                    @foreach($activepages as $page)
                                    <p style="margin: 0;">{{ $page[0] }}</p>
                                    @endforeach
                                    @php
                                        reset($activepages);
                                    @endphp
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 12px; text-align: right;">Active Users</p>
                                @if( $activepages !=null )
                                    @foreach($activepages as $page)
                                    <p style="text-align: right; margin: 0;">{{ $page[1] }}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20" style="">
                    <div class="card-block">
                        <h4 class="mt-0 header-title">More users returned to your site in 
                        <?php
                            array_pop($return_users);
                            $users_latestMonth = $return_users[sizeof($return_users)-1][1];
                            $newUser_latestMonth = $return_users[sizeof($return_users)-1][2];
                            $letter_latestMonth = date('F', mktime(0, 0, 0, $return_users[sizeof($return_users)-1][0], 10));
                            $return_users_latestMonth = round( ( $users_latestMonth - $newUser_latestMonth ) / $users_latestMonth * 100 ,2 );
                            echo $letter_latestMonth.".";
                        ?>
                        </h4>
                        <p style="font-size: 14px;">You had {{ $users_latestMonth }} users, {{ $users_latestMonth - $newUser_latestMonth }} came back in {{ $letter_latestMonth }}, which means {{ $return_users_latestMonth }}% of your users returned to your site.</p>
                        <div><canvas id="bar" height="300"></canvas></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 header-title">Sessions by country</h4>
                        <p class="text-muted m-b-30 font-14">Sessions by country</p>
                        <div class="row">
                            <div class="col-md-7">
                                <div id="world-map-users" style="height: 400px;"></div>
                            </div>
                            <div class="col-md-5" style="display: flex; align-items: center;">
                                <canvas id="bar-chart-horizontal" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20">
                    <div class="card-block">
                        <p class="text-muted m-b-30 font-14">What are your top devices ?</p>
                        <div id="morris-donut-example" style="height: 300px"></div>
                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <i class="mdi mdi-desktop-mac"></i>
                                <p class="text-muted m-b-0">Desktop</p>
                                <h4 class=""><b>{{ round( $topdevices[0][1] / ( $topdevices[0][1] + $topdevices[1][1] + $topdevices[2][1] ) * 100, 1 ) }}%</b></h4>
                            </li>
                            <li>
                                <i class="mdi mdi-cellphone-iphone"></i>
                                <p class="text-muted m-b-0">Mobile</p>
                                <h4 class=""><b>{{ round( $topdevices[1][1] / ( $topdevices[0][1] + $topdevices[1][1] + $topdevices[2][1] ) * 100, 1 ) }}%</b></h4>
                            </li>
                            <li>
                                <i class="mdi mdi-tablet"></i>
                                <p class="text-muted m-b-0">Tablet</p>
                                <h4 class=""><b>{{ round( $topdevices[2][1] / ( $topdevices[0][1] + $topdevices[1][1] + $topdevices[2][1] ) * 100, 1 ) }}%</b></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="col-xl-4 btm-tbl">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 m-b-15 header-title">Ranking & Scoring by chapters - Exercises</h4>
                        <table id="datatable1" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Chapter-Exercise</th>
                                <th>Score(Avg)</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs_activity as $key => $row)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>Chapter{{ $row->chapter."&nbsp;&nbsp;".$row->name }}</td>
                                        <td>{{ $row->score }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 btm-tbl">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 m-b-15 header-title">Ranking & Scoring by countries</h4>
                        <table id="datatable3" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Country</th>
                                <th>Score(Avg)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rs_country as $key => $row )
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->country }}</td>
                                    <td>{{ $row->score }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 btm-tbl">
                <div class="card m-b-20">
                    <div class="card-block">
                        <h4 class="mt-0 m-b-15 header-title">Ranking & Scoring by store type</h4>
                        <table id="datatable2" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Store type</th>
                                <th>Score(Avg)</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs_store as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->saleschannel }}</td>
                                        <td>{{ $row->score }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/c3/c3.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}">
    <style>
    .dataTables_info{
        visibility: hidden;
    }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael-min.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chart.js/chart.min.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/c3/c3.min.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script>
    
    // Start flot.init.js
        new Chart(document.getElementById("line-chart1"), {
            type: 'line',
            data: {
                labels: [
                    <?php
                    foreach ($ana_users as $row){
                        echo "\"".date("M d",strtotime($row[0]))."\",";
                    }
                    reset($ana_users);
                    ?>
                ],
                datasets: [{ 
                    data: [ 
                        <?php
                            foreach ($ana_users as $row){
                                echo $row[2].",";
                            }
                        ?>
                    ],
                    label: "Users",
                    borderColor: "#3e95cd",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                display: true,
                }
            }
        });

        new Chart(document.getElementById("line-chart2"), {
            type: 'line',
            data: {
                labels: [
                    <?php
                    reset($ana_users);
                    foreach ($ana_users as $row){
                        echo "\"".date("M d",strtotime($row[0]))."\",";
                    }
                    reset($ana_users);
                    ?>
                ],
                datasets: [{ 
                    data: [ 
                        <?php
                            foreach ($ana_users as $row){
                                echo $row[3].",";
                            }
                        ?>
                    ],
                    label: "Sessions",
                    borderColor: "#3e95cd",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                display: true,
                }
            }
        });

        new Chart(document.getElementById("line-chart3"), {
            type: 'line',
            data: {
                labels: [
                    <?php
                    reset($ana_users);
                    foreach ($ana_users as $row){
                        echo "\"".date("M d",strtotime($row[0]))."\",";
                    }
                    reset($ana_users);
                    ?>
                ],
                datasets: [{ 
                    data: [ 
                        <?php
                            foreach ($ana_users as $row){
                                echo round($row[4],2).",";
                            }
                        ?>
                    ],
                    label: "Bounce Rate(%)",
                    borderColor: "#3e95cd",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                display: true,
                }
            }
        });

        new Chart(document.getElementById("line-chart4"), {
            type: 'line',
            data: {
                labels: [
                    <?php
                    reset($ana_users);
                    foreach ($ana_users as $row){
                        echo "\"".date("M d",strtotime($row[0]))."\",";
                    }
                    reset($ana_users);
                    ?>
                ],
                datasets: [{ 
                    data: [ 
                        <?php
                            foreach ($ana_users as $row){
                                echo round($row[5]).",";
                            }
                        ?>
                    ],
                    label: "Session Duration(Second)",
                    borderColor: "#3e95cd",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                display: true,
                }
            }
        });


    // End

    // Start chartjs.init.js
        !function($) {
            "use strict";

            var ChartJs = function() {};

            ChartJs.prototype.respChart = function(selector,type,data, options) {
                // get selector by context
                var ctx = selector.get(0).getContext("2d");
                // pointing parent container to make chart js inherit its width
                var container = $(selector).parent();

                // enable resizing matter
                $(window).resize( generateChart );

                // this function produce the responsive Chart JS
                function generateChart(){
                    // make chart width fit with its container
                    var ww = selector.attr('width', $(container).width() );
                    switch(type){
                        case 'Line':
                            new Chart(ctx, {type: 'line', data: data, options: options});
                            break;
                        case 'Doughnut':
                            new Chart(ctx, {type: 'doughnut', data: data, options: options});
                            break;
                        case 'Pie':
                            new Chart(ctx, {type: 'pie', data: data, options: options});
                            break;
                        case 'Bar':
                            new Chart(ctx, {type: 'bar', data: data, options: options});
                            break;
                        case 'Radar':
                            new Chart(ctx, {type: 'radar', data: data, options: options});
                            break;
                        case 'PolarArea':
                            new Chart(ctx, {data: data, type: 'polarArea', options: options});
                            break;
                    }
                    // Initiate new chart or Redraw

                };
                // run function - render chart at first load
                generateChart();
            },
            //init
            ChartJs.prototype.init = function() {
                //barchart
                var barChart = {
                    labels: [
                        <?php
                            reset($return_users);
                            foreach($return_users as $key=>$row){
                                echo "\"".substr(date('F', mktime(0, 0, 0, $row[0], 10)),0,3)."\",";
                            }
                            reset($return_users);
                        ?>
                        ],
                    datasets: [
                        {
                            label: "returning users(%)",
                            backgroundColor: "#67a8e4",
                            borderColor: "#67a8e4",
                            borderWidth: 1,
                            hoverBackgroundColor: "#67a8e4",
                            hoverBorderColor: "#67a8e4",
                            data: [
                            <?php
                                foreach($return_users as $key=>$row){
                                    $val = round(($row[1] - $row[2]) / $row[1] * 100,2);
                                    echo $val.",";
                                }
                            ?>
                            ]
                        }
                    ]
                };
                this.respChart($("#bar"),'Bar',barChart);
                
            },
            $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

        }(window.jQuery),

        //initializing
        function($) {
            "use strict";
            $.ChartJs.init()
        }(window.jQuery);
    // End

    // Start jvectormap.init.js
        !function($) {
            "use strict";

            var VectorMap = function() {};

            VectorMap.prototype.init = function() {
                //various examples
                var country_info = {
                    <?php
                        foreach($users_country as $key=>$row){
                            echo $row[1].":".$row[2].",";
                        }
                    ?>
                };

                $('#world-map-users').vectorMap({
                    map : 'world_mill_en',
                    scaleColors : ['#03a9f4', '#03a9f4'],
                    normalizeFunction : 'polynomial',
                    hoverOpacity : 0.7,
                    hoverColor : false,
                    regionStyle : {
                        initial : {
                            fill : '#c9cfd4'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 9,
                            'fill': '#03a9f4',
                            'fill-opacity': 0.9,
                            'stroke': '#fff',
                            'stroke-width' : 7,
                            'stroke-opacity': 0.4
                        },

                        hover: {
                            'stroke': '#fff',
                            'fill-opacity': 1,
                            'stroke-width': 1.5
                        }
                    },
                    series: {
                        regions: [{
                            values: country_info,
                            scale: ['#C8EEFF', '#0071A4'],
                            normalizeFunction: 'polynomial'
                        }]
                    },
                    onRegionTipShow: function(e, el, code){
                        el.html(el.html()+ "&nbsp;<img src=\"assets/admin/images/flag/" + code.toString().toLowerCase() + ".png\" style='width: 20px; height: 14px;'/> " + " (Sessions: " + country_info[code] + ")");
                    },
                        
                    backgroundColor : 'transparent',
                });

            },
            //init
            $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
        }(window.jQuery),

        //initializing 
        function($) {
            "use strict";
            $.VectorMap.init()
        }(window.jQuery);
    // End

    // Start morris.init.js
        !function ($) {
            "use strict";

            var Dashboard = function () {
            };

            //creates Donut chart
            Dashboard.prototype.createDonutChart = function (element, data, colors) {
                Morris.Donut({
                    element: element,
                    data: data,
                    resize: true,
                    colors: colors,
                });
            },

            Dashboard.prototype.init = function () {
                //creating donut chart
                var $donutData = [
                    {label: "Tablet", value: <?php echo $topdevices[2][1]; ?> },
                    {label: "Mobile", value: <?php echo $topdevices[1][1]; ?> },
                    {label: "Desktop", value: <?php echo $topdevices[0][1]; ?> }
                ];
                this.createDonutChart('morris-donut-example', $donutData, ['#f0f1f4', '#67a8e4', '#337ab7']);

            },
            //init
            $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
        }(window.jQuery),

        //initializing
        function ($) {
            "use strict";
            $.Dashboard.init();
        }(window.jQuery);
    // End

    // Start chartist.init.js
        new Chart(document.getElementById("bar-chart-horizontal"), {
            type: 'horizontalBar',
            data: {
            labels: [
                <?php
                    $i = 0;
                    reset($users_country);
                    foreach($users_country as $key=>$row){
                        echo "\"".$row[0]."\",";
                        $i++;
                        if($i>5) break;
                    }
                ?>
                ],
            datasets: [
                {
                label: "Sessions",
                backgroundColor: "#67a8e4",
                data: [
                <?php
                    $i = 0;
                    reset($users_country);
                    foreach($users_country as $key=>$row){
                        echo $row[2].",";
                        $i++;
                        if($i>5) break;
                    }
                ?> 
                ]
                }
            ]
            },
            options: {
            legend: { display: false },
            title: {
                display: true,
            }
            }
        });

    // End

    // Start datatables.init.js
        $(document).ready(function() {
            $('#datatable1').DataTable();
            $('#datatable2').DataTable();
            $('#datatable3').DataTable();

        } );
    // End
    
    </script>
@endpush