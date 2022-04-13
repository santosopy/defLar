@extends("admin-screen.layout.layout")

@section("content")
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
    
    <link rel="stylesheet" href="{{ url("admin/css/jsRapCalendar.css") }}">
    <script src="{{ url("admin/js/jsRapCalendar.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>  
    <style>
        .table{
            color: unset
        }
        .table thead th{
            text-align: center
        }
        .rapCalendar,
        .rapCalendar thead,
        .rapCalendar .calDisable,
        .rapCalendar .calSelected,
        .rapCalendar caption,
        .rapCalendar .larr,
        .rapCalendar .rarr,
        .rapCalendar .calSelectable:hover{
            color: black;
            background: transparent;
        }
        .rapCalendar .larr,
        .rapCalendar .rarr{
            width: 5%
        }
        .rapCalendar .rarr{
            text-align: right
        }
        .rapCalendar, .rapCalendar thead{
            text-shadow: none
        }
        .rapCalendar .calSelected{
            border-color: transparent
        }
        .rapCalendar caption span{
            width: 90%;
            display: inline-block;
            text-align: center;
        }
    </style>
    <div id="demo"></div>
    <script>
        jQuery(function($){
            // let d = new Date();
            $('#demo').jsRapCalendar({
                daysName:['日','月','火','水','木','金','土'],
                monthsNames:['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                // onClick:function(y,m,d){
                //     alert(y + '-' + m + '-' + d);
                // },
                enabled:false,
                // showCaption:true,
                // showArrows:true,
                // showYear:true,
                // minDate:DateToStr(d),
                // date:d
            })

            $.ajax({
                type: "GET",
                url: "{{ url('api/reserve') }}",
                success: function(response){
                    response.forEach(function(e){
                        let date = new Date(e["created_at"]).toLocaleDateString("en-JP"),
                            yearMonth = moment(date).format('YYYY-M'),
                            day = moment(date).format('D'),
                            table = $(".rapCalendar"),
                            caption = table.find("caption span").text(),
                            td = table.find("td")

                            // console.log(Math.round(e["created_at"].getTime()/1000))
                        console.log(date)

                        if(yearMonth == caption){
                            td.each(function(){
                                let itemDate = $(this),
                                    item = ""

                                if(itemDate.data("date") == day){
                                    item+= "<div style='text-shadow: none; font-weight:normal'>"
                                    item+= "    <p style='margin:0; font-size:12px'>名前:"+e["name"]+"</p>"
                                    item+= "    <p style='margin:0; font-size:12px'>金額:"+e["price"]+"</p>"
                                    item+= "</div>"
                                    itemDate.append(item)
                                }
                            })
                        }
                    })
                }
            })
        })    
    </script>        
    </div>
</div>
@endsection