<x-admin.layout-component>
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/widgets/modules-widgets.css">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-4">
        <div class="row widget-statistic">

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one_hybrid widget-followers">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </div>
                        <p class="w-value">{{$countRadio ?? 0}}</p>
                        <h5 class="">All Radio</h5>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="widget widget-one_hybrid widget-followers">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </div>

                        <p class="w-value">{{$sumClickCount ?? 0}}</p>
                        <h5 class="">All ClickCount</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="widget widget-one_hybrid widget-followers">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </div>
                        <p class="w-value">{{$lastUpdated->created_at ?? 0}}</p>
                        <h5 class="">Latest fetch radio date</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin.layout-component>
