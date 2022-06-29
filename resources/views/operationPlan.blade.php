@extends('layouts.master')

@section('content')
    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="operation_plan">
        <div id="svg_wrap"></div>
        <div class="body">
            <form method="POST" action="{{ route('customer.operation-plans.store') }}">
                @csrf
                <h1 class="h1">Operation Plan</h1>

                <section class="section">
                    <h3>Choose Department :</h3>

                    <div class="row mx-auto my-auto p-4">
                        <div id="myCarousel" class="carousel slide w-100" data-interval="false">
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $skip = 0;
                                $isLoop = true;
                                ?>
                                @while ($isLoop)
                                    <div class="carousel-item py-8 {{ $skip == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            <?php $departments = \App\Department::skip($skip)
                                                ->take(4)
                                                ->get(); ?>
                                            @foreach ($departments as $key => $department)
                                                <div class="col col{{ $key + 1 }}">
                                                    <div class="col-md-12 ftco-animate">
                                                        <div class="staff" style="max-width: 336px">
                                                            <label style="padding: 10px" id="selected_department">
                                                                <input id="department" type="radio" name="department_id"
                                                                    id="{{ $key }}" value="{{ $department->id }}"
                                                                    onchange="getHospital({{ $department->id }})">
                                                                <img src="{{ Voyager::image($department->photo) }}"
                                                                    height="100px">
                                                                <p style="text-align: center">{{ $department->name }}</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php if ($key == 3) {
                                                        $skip = $skip + 4;
                                                    }
                                                    ?>
                                                </div>
                                            @endforeach

                                        </div>
                                        <?php if ($departments->count() != 4) {
                                            break;
                                        }
                                        ?>
                                    </div>
                                @endwhile

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a class="carousel-control-prev text-dark" href="#myCarousel" role="button"
                                    data-slide="prev">
                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-dark" href="#myCarousel" role="button"
                                    data-slide="next">
                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($departments as $key => $department)
                    <label style="padding: 10px" id="selected_department">
                        <input type="radio" name="department_id" id="{{ $key }}"
                            value="{{ $department->id }}" onchange="getHospital({{ $department->id }})">
                        <img src="{{ Voyager::image($department->photo) }}" height="100px">
                        <p style="text-align: center">{{ $department->name }}</p>
                    </label>
                @endforeach --}}
                </section>

                <section class="section">
                    <h3>Choose Hospital :</h3>

                    <div id="hospitals">
                    </div>
                </section>

                <section class="section">
                    <h3>Choose Hotels :</h3>

                    <div class="row mx-auto my-auto p-4">
                        <div id="myCarousel" class="carousel slide w-100" data-interval="false">
                            <div class="carousel-inner" role="listbox">
                                <?php
                                $skip = 0;
                                $isLoop = true;
                                ?>
                                @while ($isLoop)
                                    <div class="carousel-item py-8 {{ $skip == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            <?php $hotels = \App\Hotel::skip($skip)
                                                ->take(4)
                                                ->get(); ?>
                                            @foreach ($hotels as $key => $hotel)
                                                <div class="col col{{ $key + 1 }}">
                                                    <div class="col-md-12 ftco-animate">
                                                        <div class="staff" style="max-width: 336px">
                                                            <label style="padding: 10px">
                                                                <input id="hotel" type="radio" name="hotel_id" id
                                                                    ="{{ $key }}" value="{{ $hotel->id }}">
                                                                <img src="{{ Voyager::image($hotel->photo) }}"
                                                                    height="100px">
                                                                <p style="text-align: center">{{ $hotel->name }}</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php if ($key == 3) {
                                                        $skip = $skip + 4;
                                                    }
                                                    ?>
                                                </div>
                                            @endforeach

                                        </div>
                                        <?php if ($hotels->count() != 4) {
                                            break;
                                        }
                                        ?>
                                    </div>
                                @endwhile

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a class="carousel-control-prev text-dark" href="#myCarousel" role="button"
                                    data-slide="prev">
                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-dark" href="#myCarousel" role="button"
                                    data-slide="next">
                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <h3>Choose Transfer :</h3>
                    @foreach ($transfers as $key => $transfer)
                        <label style="padding: 10px">
                            <input id="transfer" type="radio" name="transfer_id" id="{{ $key }}"
                                value="{{ $transfer->id }}">
                            <img src="{{ Voyager::image($transfer->photo) }}" height="100px">
                            <p style="text-align: center">{{ $transfer->name }}</p>
                        </label>
                    @endforeach
                </section>

                <section class="section">
                    <h3>Personal information :</h3>
                    <input class="input" type="text" name="full_name" placeholder="Full Name" required/>
                    <input class="input" type="text" name="email" placeholder="E-mail" required/>
                    <input class="input" type="text" name="phone" placeholder="Phone" />
                </section>
                <div class="button" id="prev">&larr; Previous</div>
                <div class="button" id="next">Next &rarr;</div>
                <input type="submit" class="button" id="submit" value="Agree and send application" />
            </form>
        </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
        var base_color = "rgb(230,230,230)";
        var active_color = "rgb(113 52 189)";

        var child = 1;
        var length = $(".section").length - 1;
        $("#prev").addClass("disabled");
        $("#submit").addClass("disabled");

        $(".section").not(".section:nth-of-type(1)").hide();
        $(".section").not(".section:nth-of-type(1)").css('transform','translateX(100px)');

        var svgWidth = length * 200 + 24;
        $("#svg_wrap").html(
        '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
            svgWidth +
            ' 24" xml:space="preserve"></svg>'
        );

        function makeSVG(tag, attrs) {
        var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
        for (var k in attrs) el.setAttribute(k, attrs[k]);
        return el;
        }

        for (i = 0; i < length; i++) {
        var positionX = 12 + i * 200;
        var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
        document.getElementById("svg_form_time").appendChild(rect);
        // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
        var circle = makeSVG("circle", {
            cx: positionX,
            cy: 12,
            r: 12,
            width: positionX,
            height: 6
        });
        document.getElementById("svg_form_time").appendChild(circle);
        }

        var circle = makeSVG("circle", {
        cx: positionX + 200,
        cy: 12,
        r: 12,
        width: positionX,
        height: 6
        });
        document.getElementById("svg_form_time").appendChild(circle);

        $('#svg_form_time rect').css('fill',base_color);
        $('#svg_form_time circle').css('fill',base_color);
        $("circle:nth-of-type(1)").css("fill", active_color);


        $(".button").click(function () {
        $("#svg_form_time rect").css("fill", active_color);
        $("#svg_form_time circle").css("fill", active_color);
        var id = $(this).attr("id");
        if (id == "next") {
            // if(!document.getElementById('department').checked){
            // alert('please choose a department');
            // return false;
            // }
            // if(!document.getElementById('hotel').checked){
            //     alert('please choose a hotel');
            // return false;
            // }
            // if(!document.getElementById('transfer').checked){
            //     alert('please choose a transfer');
            // return false;
            // }
            // if(!document.getElementById('hospital').checked){
            //     alert('please choose a hospital');
            // return false;
            // }

            $("#prev").removeClass("disabled");
            if (child >= length) {
            $(this).addClass("disabled");
            $('#submit').removeClass("disabled");
            }
            if (child <= length) {
            child++;
            }
        } else if (id == "prev") {
            $("#next").removeClass("disabled");
            $('#submit').addClass("disabled");
            if (child <= 2) {
            $(this).addClass("disabled");
            }
            if (child > 1) {
            child--;
            }
        }
        var circle_child = child + 1;
        $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
            "fill",
            base_color
        );
        $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
            "fill",
            base_color
        );
        var currentSection = $(".section:nth-of-type(" + child + ")");
        currentSection.fadeIn();
        currentSection.css('transform','translateX(0)');
        currentSection.prevAll('.section').css('transform','translateX(-100px)');
        currentSection.nextAll('.section').css('transform','translateX(100px)');
        $('.section').not(currentSection).hide();
        });

        });
    </script>

@endsection


<script>
    function getHospital(id) {
        let url = `/getHospitals/${id}`;
        $.ajax({
            url: url,
            type: 'get',
            success: function(data) {
                document.getElementById('hospitals').innerHTML = '';
                data.data.forEach(item => {
                    document.getElementById('hospitals').innerHTML +=
                        `<label style="padding: 10px"><input id="hospital" type="radio" name="hospital_id" id="${item.id}" value="${item.id}"><img src="${window.location.protocol}//${window.location.host}/storage/${item.photo}" height="100px"><p style="text-align: center">${item.name}</p></label>`;
                });
            }
        });
    }
</script>

