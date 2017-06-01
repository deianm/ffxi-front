@extends('layout.master')

@section('content')

    <!-- Temp Style Test for Scroll Bars -->
    <style>

        #info {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 25px;
        }

        .scrollbar {
            float: left;
            height: 300px;
            background: white;
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        .force-overflow {
            min-height: 450px;
        }

        #wrapper {
            text-align: center;
            width: 500px;
            margin: auto;
        }

        #style-3::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-3::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }

        #style-3::-webkit-scrollbar-thumb {
            background-color: #000000;
        }

    </style>

    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">

                <div class="row">
                    <div class="col-md-8 col-sm-8">

                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-green-steel uppercase bold">News</span>
                                </div>
                            </div>

                            <div class="portlet-body">

                                <h4>Something Here</h4>
                                <div class="row">
                                    <img src="" alt="logo" style="width:100%;">
                                </div>
                                <p>HI</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-offset-md-1 col-md-4 col-sm-4">

                        <div class="portlet light ">
                            <div class="portlet-body">
                                <iframe src="https://discordapp.com/widget?id=317394773034008577&theme=dark" width="325"
                                        height="300" allowtransparency="true" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="portlet light portlet-fit">
                            <div class="portlet-body" style="height:400px;">
                                <div class="mt-element-list">
                                    <div class="mt-list-head list-simple font-white bg-purple-medium">
                                        <div class="list-head-title-container">
                                            <div class="list-date" style="padding-top:5px !important; width:15px !important;">200</div>
                                            <h3 class="list-title">Online Players</h3>
                                        </div>
                                    </div>
                                    <div class="mt-list-container list-simple scrollbar" style="width:320px;" id="style-3">
                                            <ul class="force-overflow">
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                                <li class="mt-list-item">
                                                    <div class="list-item-content" style="padding:0 !important;">
                                                        <p>WHM99/BLM47 <a>Chakra</a> Bastok</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
@endsection