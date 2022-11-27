<x-admin.layout-component>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">
    <div class="container">
        <div class="container">
            <div class="sidenav">
                <div class="sidenav-content">
                    <a href="#font-icon_feather" class="active">Update all radio settings</a>
                </div>
            </div>

           @if($update_setting)
                <form action="{{route('admin.setting.update',$update_setting->id) }}" method="post">@csrf
                    @method('put')
                    <div class="row layout-spacing layout-top-spacing feather-icon">
                        <div id="font-icon_feather" class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area bx-top-6">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>update all radio</h4>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="">status :</div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="value" class="custom-control-input" value="1" {{$update_setting->value == 1 ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="customRadio3">On</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="value" class="custom-control-input" value="0" {{$update_setting->value == 0 ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="customRadio4">Off</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <h3 class="text-center mt-2">data Setting is Empty</h3>
            @endif





        </div>

    </div>
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
</x-admin.layout-component>
