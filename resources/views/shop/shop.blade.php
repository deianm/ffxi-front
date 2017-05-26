@extends('layout.master')

@section('content')
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="row">

                    <!-- BEGIN TAB PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-share font-dark"></i>
                                <span class="caption-subject font-dark bold uppercase">The I don't Have Time Shop!</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_tab1" data-toggle="tab"> Drop Rate </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab2" data-toggle="tab"> Exp Rate </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab3" data-toggle="tab"> Healing </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab4" data-toggle="tab"> Buffs </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab5" data-toggle="tab"> Costumes </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab6" data-toggle="tab"> NM Spawn </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab7" data-toggle="tab"> Storage Space </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab8" data-toggle="tab"> Housing </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_tab1">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> <img src="http://static.ffxiah.com/images/icon/4131.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> <img src="http://static.ffxiah.com/images/icon/4131.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> <img src="http://static.ffxiah.com/images/icon/4131.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> <img src="http://static.ffxiah.com/images/icon/4131.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab2">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> <img src="http://static.ffxiah.com/images/icon/4112.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;">  <img src="http://static.ffxiah.com/images/icon/4112.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;">  <img src="http://static.ffxiah.com/images/icon/4112.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;">  <img src="http://static.ffxiah.com/images/icon/4112.png"> </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab3">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab4">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab5">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab6">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab7">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="portlet_tab8">
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-bell-o"></i>Advance Table </div>
                                            <div class="tools">
                                                <a href="javascript:;" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="javascript:;" class="reload"> </a>
                                                <a href="javascript:;" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa fa-briefcase"></i> Company </th>
                                                        <th class="hidden-xs">
                                                            <i class="fa fa-user"></i> Contact </th>
                                                        <th>
                                                            <i class="fa fa-shopping-cart"></i> Total </th>
                                                        <th> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"></div>
                                                            <a href="javascript:;"> RedBull </a>
                                                        </td>
                                                        <td class="hidden-xs"> Mike Nilson </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="info"> </div>
                                                            <a href="javascript:;"> Google </a>
                                                        </td>
                                                        <td class="hidden-xs"> Adam Larson </td>
                                                        <td> 560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success"> </div>
                                                            <a href="javascript:;"> Apple </a>
                                                        </td>
                                                        <td class="hidden-xs"> Daniel Kim </td>
                                                        <td> 3460.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm purple">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="warning"> </div>
                                                            <a href="javascript:;"> Microsoft </a>
                                                        </td>
                                                        <td class="hidden-xs"> Nick </td>
                                                        <td> 2560.60$ </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                                <i class="fa fa-share"></i> Share </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TAB PORTLET-->

                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
@endsection