@extends('layouts.layout')

@include('layouts.navigation')
@include('layouts.footer')

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">

        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                        Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                        Registre des mariage <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i> </span>
                        Enregistrement acte...
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="header-title m-t-0">Calendar</h4>
                </div>
            </div> <!-- end row -->

            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="m-t-10">
                        <div class="row m-b-30">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#" data-toggle="modal" data-target="#add-category" class="m-t-10 btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
                                            <i class="fa fa-plus"></i> Create New
                                        </a>
                                        <div id="external-events" class="m-t-20">
                                            <br>
                                            <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                            <div class="external-event bg-success" data-class="bg-success">
                                                <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>New Theme Release
                                            </div>
                                            <div class="external-event bg-info" data-class="bg-info">
                                                <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>My Event
                                            </div>
                                            <div class="external-event bg-warning" data-class="bg-warning">
                                                <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Meet manager
                                            </div>
                                            <div class="external-event bg-primary" data-class="bg-primary">
                                                <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Create New theme
                                            </div>
                                        </div>

                                        <!-- checkbox -->
                                        <div class="checkbox checkbox-custom m-t-30">
                                            <input id="drop-remove" type="checkbox">
                                            <label for="drop-remove">
                                                Remove after drop
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-md-9">
                                <div id="calendar"></div>
                            </div> <!-- end col -->
                        </div>  <!-- end row -->
                    </div>

                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body p-20"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add a category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body p-20">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
                <!-- end col-12 -->
            </div> <!-- end row -->


        </div>

    </div>

@endsection

