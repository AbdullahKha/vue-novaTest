<!DOCTYPE html>
<html dir="rtl" lang="Ar">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <style type="text/css" media="all">
        @page {
            footer: page-footer;
        }
        @page.page_cover{
            footer : '';
        }
        @font-face {
            font-family: 'Droid Arabic Kufi';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.eot);
            src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.eot?#iefix) format('embedded-opentype'),
            url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.woff2) format('woff2'),
            url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.woff) format('woff'),
            url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.ttf) format('truetype');
        }
        body
        {
            font-family: 'Droid Arabic Kufi', serif;
            padding: 1%;
            margin:0 5%;
            border-right: lightgray solid 2px;
            direction: rtl;
        }
        #problems {
            table-layout: fixed;
            border-collapse: collapse;
            width: 100%;
        }
        #problems td, #problems th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #problems tr:nth-child(even){background-color: #f2f2f2;}
        #problems th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align:center;
            background-color: #1567d8;
            color: white;
        }#problems {
             font-family: Arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
         }
        #problems td, #problems th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #problems tr:nth-child(even){background-color: #f2f2f2;}
        #problems th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align:center;
            background-color: #1567d8;
            color: white;
        }
        ul.dashed > li {
            text-indent: -5px;
        }
        ul.dashed > li:before {
            content: " - ";
            text-indent: -5px;
        }
        .page_cover
        {
            background-image: url("{{ public_path('assets/img/cover.jpg')}}");
            /* background-size:  2480 px 3508 px; */
            width: 2480px;
            height: 3300px;
        }
        .header_cover
        {
            padding-top:  480px;
            padding-right:  110px;
        }
        .header_cover2
        {
            padding-top:  437px;
            padding-right:  320px;
        }
        .end_cover
        {
            background-image: url("{{ public_path('assets/img/page_001.jpg')}}");
            width: 2480px;
            height: 3508px;
            footer: '';
        }
        .footer_content{
            padding-top:  300px;
            padding-right:  300px;
            align-self: center;
            font-size: 44pt;
        }
        .page_content
        {
            padding: 50px 50px 50px;
        }
        @media print
        {
            .page-break  { display:block; page-break-before:always; }
        }
        div.footer {
            text-align: center;
            /*padding-bottom: 10px;*/
            position: running(footer);
            font-size: 9pt;
            color: #1567d8;
        }
        .chart-style {
            text-align: center;
            border: 1px solid lightgray;
        }
    </style>
</head>
<body style="font-family:dinnext">

<div class="page_cover">
    <div class="header_cover">
        <div dir="rtl">
{{--            <h1 style="font-weight: bold">{{$Subject}}</h1>--}}
{{--            <h3 style="color: grey; font-weight: lighter">{{$SubSubject}}</h3>--}}
            {{$foo}}
        </div>
    </div>
    <div class="header_cover2">
        <div dir="rtl">
            <p style="color: white;">سري للغاية وغير قابل للتداول
                <br> &emsp;&emsp;&emsp; 1441ھـ /2020 م</p>
        </div>
    </div>
</div>
<pagebreak>
{{--<div class="page_content">--}}
{{--    <div style="width: 100%; margin: 0" >--}}
{{--        <p dir="RTL" style="color: #1567d8; font-size: 16pt;"> احصائيات الحوادث لنظامي تام وتام سسبند</p>--}}
{{--        <p dir="RTL" style="color: black">--}}
{{--            سجل نظامي تام وتام سسبند خلال الربع الأول من عام ٢٠٢٠ مجموعة من الحوادث عددها <span style="font-weight: bold">{{$problemsCount}}</span>--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <br>--}}
{{--    <span style="text-align: center">مشاكل من حيث النظام :</span>--}}
{{--    <div class="chart-style">--}}
{{--        <img src="{{$Subject.'_Ch1_.png'}}">--}}
{{--    </div>--}}
{{--    <span style="text-align: center">مشاكل من حيث النوع :</span>--}}
{{--    <div class="chart-style">--}}
{{--        <img src="{{$Subject.'_Ch2_.png'}}">--}}
{{--    </div>--}}
{{--    <span style="text-align: center">مشاكل من حيث الشهر :</span>--}}
{{--    <div class="chart-style">--}}
{{--        <img src="{{$Subject.'_Ch3_.png'}}">--}}
{{--    </div>--}}
{{--</div>--}}
</pagebreak>
<div>
{{--    @php($count=0)--}}
{{--    @foreach($problems as $item)--}}
{{--        @php($count++)--}}
{{--        <div class="page-break">--}}
{{--            <div  class="page_content">--}}
{{--                <p dir="RTL" style="color:#1567d8;font-size: 14pt">{{$count}}. تفاصيل الحادثة</p>--}}
{{--                <div dir="rtl">--}}
{{--                    <table dir="rtl" id="problems">--}}
{{--                        <thead >--}}
{{--                        <tr style="background-color:#1567d8;" align="center">--}}
{{--                            <strong>--}}
{{--                                <th style="color: white">--}}
{{--                                    #--}}
{{--                                </th>--}}
{{--                                <th style="color: white">--}}
{{--                                    العنوان--}}
{{--                                </th>--}}
{{--                                <th style="color: white">--}}
{{--                                    المعلومات--}}
{{--                                </th>--}}
{{--                            </strong>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td >--}}
{{--                                <p dir="RTL" align="left"><strong>1. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">اسم النظام</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->System->name_system}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>2. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">عنوان الحادثة</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->title}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>3. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">رقم الحادثة</p>--}}
{{--                            </td>--}}
{{--                            @if(isset($item->issue_id))--}}
{{--                                <td width="434">{{$item->issue_id}}</td>--}}
{{--                            @else--}}
{{--                                <td width="434">-</td>--}}
{{--                            @endif--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>4. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">وقت وتاريخ الحادثة</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->dateTime_problem}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>5. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">نوع الحادثة</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->TypeProblem->type_problem}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>6. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">مستوى خطورة الحادثة</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->levels_problem}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td width="35">--}}
{{--                                <p dir="RTL" align="left"><strong>7. </strong></p>--}}
{{--                            </td>--}}
{{--                            <td width="132">--}}
{{--                                <p dir="RTL" align="left">معد تقرير الحادثة</p>--}}
{{--                            </td>--}}
{{--                            <td width="434">{{$item->user->name}}</td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div style="background-color: #f2f2f2; width: 100%; margin: 0" >--}}
{{--                    <p dir="RTL" style="color: #1567d8">سيناريو الحادثة</p>--}}
{{--                    <p dir="RTL" style="color: black">--}}
{{--                        {!!$item->scenario_problem!!}</p>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div>--}}
{{--                    <p dir="RTL" style="color: #1567d8">أسباب الحادث</p>--}}
{{--                    <p dir="RTL">{!!$item->reason_problem!!}</p>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div>--}}
{{--                    <p dir="RTL" style="color:#1567d8;font-size: 14pt">حلول الحادثة</p>--}}
{{--                    <div dir="rtl" >--}}
{{--                        <table dir="rtl" id="problems">--}}
{{--                            <thead style="color: #F2F2F2">--}}
{{--                            <tr style="background-color:#1567d8;font-style: normal" align="center">--}}
{{--                                <td>--}}
{{--                                    <p dir="RTL" align="center" style="color: white; width: 10%;">#</p>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <p dir="RTL" align="center" style="color: white; width: 45%;">حلول قصيرة المدى</p>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <p dir="RTL" align="center" style="color: white; width: 45%;">حلول طويلة المدى</p>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <p dir="RTL" >1.</p>--}}
{{--                                </td>--}}
{{--                                <td >--}}
{{--                                    <p dir="RTL" >{!!$item->shortTerm_solution!!}</p>--}}
{{--                                </td>--}}
{{--                                <td >--}}
{{--                                    <p dir="RTL" >{!!$item->longTerm_solution!!}</p>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <div class="footer">--}}
{{--            <span><strong>{{$count}}|</strong>إدارة التعاملات الرقمية - <span style="background-color: lightgray">سري للغاية وغير قابل للتداول</span></span>--}}
{{--        </div>--}}
{{--    @endforeach--}}
</div>
<pagebreak></pagebreak>
<div class="end_cover">
    <div class="footer_content">
        <h1>شكراً</h1>
    </div>
</div>
</body>
</html>
