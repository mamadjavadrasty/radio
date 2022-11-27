<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    @if (session('success'))
                    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Filter</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="">
                                <form action="{{ route('admin.radio.index') }}" method="get">

                                    <div class="row mb-4">
                                        <div class="col-md-6 col-lg-6">
                                            {{--                Radio Name Filed                        --}}
                                            <div class="col radio_name_field">
                                                <label for="radio_name_field">Name</label>
                                                <input name="name" type="text" id="radio_name_field" class="form-control" placeholder="Radio Name" value="{{ old('name') }}">
                                            </div>
                                            {{--                Radio Tags Filed                        --}}
                                            <div class="col radio_tags_field">
                                                <label for="radio_tags_field">Tags</label>
                                                <input name="tags" type="text" id="radio_tags_field" class="form-control" placeholder="Radio Tags" value="{{ old('tags') }}">
                                            </div>
                                            {{--                Radio Country Filed                        --}}
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                        <div class="col radio_country_field">
                                            <label for="radio_country_field">Country</label>
                                            <input name="country" type="text" id="radio_country_field" class="form-control" placeholder="Radio Country" value="{{ old('country') }}">
                                        </div>
                                        {{--                Radio Language Filed                        --}}
                                        <div class="col radio_language_field">
                                            <label for="radio_language_field">Language</label>
                                            <input name="language" type="text" id="radio_language_field" class="form-control" placeholder="Radio Language" value="{{ old('language') }}">
                                        </div>
                                        {{--                Radio Click Count Filed                        --}}
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                        <div class="col radio_click_count_field">
                                            <label for="radio_click_count_field">Click Count</label>
                                            <input name="click_count" type="text" id="radio_click_count_field" class="form-control" placeholder="Radio Click Count" value="{{ old('click_count') }}">
                                        </div>

                                        {{--                Radio Last Update Filed                        --}}
                                        <div class="col radio_last_update_field">
                                            <label for="radio_last_update_field">Last Update</label>
                                            <input name="last_update" type="date" id="radio_last_update_field" class="form-control" placeholder="Radio Click Count" value="{{ old('last_update') }}">
                                        </div>
                                        </div>


                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header text-right">
                            <a href="{{ route('admin.radio.create') }}" class="btn btn-warning p-2 rounded">New Radio</a>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>tags</th>
                                            <th>country</th>
                                            <th>language</th>
                                            <th>click Count</th>
                                            <th>votes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($radios as $key => $radio)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$radio->name}}</td>
                                                <td>{{substr($radio->tags,0,35)}}</td>
                                                <td>{{$radio->country}}</td>
                                                <td>{{$radio->language}}</td>
                                                <td>{{$radio->click_count}}</td>
                                                <td>{{$radio->votes}}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary" href="{{ route('admin.radio.details' ,$radio->id) }}">Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                           <div>
                               <div  class="d-flex item-content justify-content-center"> {{ $radios->links() }} </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin.layout-component>
