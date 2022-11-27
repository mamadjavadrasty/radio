<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        @if (session('success'))
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>New Radio</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <input id="search" type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                        <div id="loader" class="mx-auto"></div>
                        <div id="place_table" class="widget-content widget-content-area">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("input#search" ).keyup(function() {
            $('div#loader').html('<div class="spinner-grow text-primary mx-auto d-block" role="status"></div>');
            setTimeout(() => {
                callRadio();
            }, 1000);
      });

      function callRadio() {

        const value = $("input#search").val();
            const place_table = $('div#place_table');

            $.ajax({
            url: 'https://radio-browser.p.rapidapi.com/json/stations/search',
            type: 'get',
            headers: {
                    'x-rapidapi-host': 'radio-browser.p.rapidapi.com',
                    'x-rapidapi-key': '91340408bbmsh0e8a7e3cc82fcaep154b2ejsn3ed97dc1f618',
             },
            data:{'name' : value ,'limit':35},
            contentType : 'application/json',
            error:function(exp){
                console.log(exp);
            },
            success: function (response) {
                $('div#loader').html('');

                var radios = response;
                console.log(radios);
                //html string table
                var htmlString = '';
                htmlString += '<table class="table table-bordered mb-4">';
                    htmlString += ' <thead>';
                        htmlString += '<tr>'
                            htmlString += '<th>Name</th>';
                            htmlString += '<th>Tags</th>';
                            htmlString += '<th>Country</th>';
                            htmlString += '<th>Language</th>';
                            htmlString += '<th>Radio Download</th>';
                            htmlString += '<th>Actions</th>';
                        htmlString += '</tr>';
                    htmlString += ' </thead>';
                    htmlString += ' <tbody>';


                for(var i = 0;i < radios.length;i++){
                    var radio = radios[i];
                    htmlString += '<tr>';
                        htmlString += ' <td>'+ radio.name +'</td>';
                        htmlString += '<td>'+ radio.tags.substr(0,32)  +'</td>';
                        htmlString += '<td>'+ radio.country +'</td>';
                        htmlString += '<td>'+ radio.language +'</td>';
                        htmlString += '<td class="text-center"><a href="'+ radio.url +'"><span class="text-success">Click here</span></a></td>';
                        htmlString += '<td class="text-center">';
                        htmlString += '<a href="{{request()->getSchemeAndHttpHost() . "/radio/search/request/"}}'+radio.stationuuid+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></td>';
                    htmlString += '</tr>';
                }

            htmlString += '</tbody>';
            htmlString += '</table>';
            place_table.html(htmlString);
            }

            });
       }
      </script>
</x-admin.layout-component>
