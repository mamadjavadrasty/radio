<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-2">
                                        <h4>Create Radio</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.radio.store') }}" method="post"> @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>

                                                <tr>
                                                    <td>change uuid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="change_uuid" placeholder="Some change uuid..." class="form-control" value="{{ old('change_uuid')}}" >
                                                        @error('change_uuid')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('change_uuid')}}
                                                        </div>
                                                        @enderror
                                                    </td>

                                                </tr>
                                              <tr>
                                                  <td>station uuid</td>
                                                  <td>
                                                      <input id="t-text" type="text" name="station_uuid" placeholder="Some station uuid ..." class="form-control" value="{{ old('station_uuid') }}" >
                                                      @error('station_uuid')
                                                      <div class="text-danger text-center">
                                                          {{$errors->first('station_uuid')}}
                                                      </div>
                                                      @enderror
                                                  </td>

                                              </tr>

                                                <tr>
                                                    <td>server uuid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="server_uuid" placeholder="Some server uuid..." class="form-control" value="{{ old('server_uuid') }}" >
                                                        @error('server_uuid')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('server_uuid')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="name" placeholder="Some name..." class="form-control" value="{{ old('name') }}" >

                                                        @error('name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('name')}}
                                                        </div>
                                                        @enderror
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="url" placeholder="Some url..." class="form-control" value="{{ old('url') }}" >
                                                        @error('url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('url')}}
                                                        </div>
                                                        @enderror
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>url resolved</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="url_resolved" placeholder="Some url resolved..." class="form-control" value="{{ old('url_resolved') }}" >
                                                        @error('url_resolved')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('url_resolved')}}
                                                        </div>
                                                        @enderror
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>homepage</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="homepage" placeholder="Some homepage..." class="form-control" value="{{ old('homepage') }}" >
                                                        @error('homepage')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('homepage')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>favicon</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="favicon" placeholder="Some favicon..." class="form-control" value="{{ old('favicon') }}" >
                                                        @error('favicon')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('favicon')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>tags</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="tags" placeholder="Some tags..." class="form-control" value="{{ old('tags')  }}" >
                                                        @error('tags')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('tags')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" placeholder="Some country..." class="form-control" value="{{ old('country') }}" >
                                                        @error('country')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('country')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country code</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country_code" placeholder="Some country code..." class="form-control" value="{{ old('country_code') }}" >
                                                        @error('country_code')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('country_code')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>iso_3166_2</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="iso_3166_2" placeholder="Some iso_3166_2..." class="form-control" value="{{ old('iso_3166_2') }}" >
                                                        @error('iso_3166_2')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('iso_3166_2')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>state</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="state" placeholder="Some state..." class="form-control" value="{{ old('state') }}" >
                                                        @error('state')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('state')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>language</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="language" placeholder="Some language..." class="form-control" value="{{ old('language') }}" >
                                                        @error('language')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('language')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>language codes</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="language_codes" placeholder="Some language codes..." class="form-control" value="{{ old('language_codes') }}" >
                                                        @error('language_codes')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('language_codes')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>votes</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="votes" placeholder="Some votes..." class="form-control" value="{{ old('votes') }}" >
                                                        @error('votes')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('votes')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click count</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_count" placeholder="Some click count..." class="form-control" value="{{ old('click_count') }}" >
                                                        @error('click_count')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('click_count')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click trend</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_trend" placeholder="Some click trend..." class="form-control" value="{{ old('click_trend') }}" >
                                                        @error('click_trend')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('click_trend')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last change time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_change_time" placeholder="Some last change time..." class="form-control" value="{{ old('last_change_time') }}" >
                                                        @error('last_change_time')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_change_time')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last change time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_change_time_iso8601" placeholder="Some last change time iso8601..." class="form-control" value="{{ old('last_change_time_iso8601') }}" >
                                                        @error('last_change_time_iso8601')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_change_time_iso8601')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>codec</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="codec" placeholder="Some codec..." class="form-control" value="{{ old('codec')  }}" >
                                                        @error('codec')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('codec')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>bitrate</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="bitrate" placeholder="Some bitrate..." class="form-control" value="{{ old('bitrate') }}" >
                                                        @error('bitrate')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('bitrate')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>hls</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="hls" placeholder="Some hls..." class="form-control" value="{{ old('hls') }}" >
                                                        @error('hls')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('hls')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok" placeholder="Some last checkok..." class="form-control" value="{{ old('last_checkok') }}" >
                                                        @error('last_checkok')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_checkok')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last check time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_check_time" placeholder="Some last check time..." class="form-control" value="{{ old('last_check_time') }}" >
                                                        @error('last_check_time')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_check_time')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last check time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_check_time_iso8601" placeholder="Some last check time iso8601..." class="form-control" value="{{ old('last_check_time_iso8601') }}" >
                                                        @error('last_check_time_iso8601')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_check_time_iso8601')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok_time" placeholder="Some last checkok time..." class="form-control" value="{{ old('last_checkok_time') }}" >
                                                        @error('last_checkok_time')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_checkok_time')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok_time_iso8601" placeholder="Some last checkok time iso8601..." class="form-control" value="{{ old('last_checkok_time_iso8601') }}" >
                                                        @error('last_checkok_time_iso8601')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_checkok_time_iso8601')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last local check time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_local_check_time" placeholder="Some last local check time..." class="form-control" value="{{ old('last_local_check_time') }}" >
                                                        @error('last_local_check_time')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_local_check_time')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last local check time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_local_check_time_iso8601" placeholder="Some last local check time iso8601..." class="form-control" value="{{ old('last_local_check_time_iso8601') }}" >
                                                        @error('last_local_check_time_iso8601')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('last_local_check_time_iso8601')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click timestamp</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_timestamp" placeholder="Some click timestamp..." class="form-control" value="{{ old('click_timestamp') }}" >
                                                        @error('click_timestamp')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('click_timestamp')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click timestamp iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_timestamp_iso8601" placeholder="Some click timestamp iso8601..." class="form-control" value="{{ old('click_timestamp_iso8601') }}" >
                                                        @error('click_timestamp_iso8601')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('click_timestamp_iso8601')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ssl error</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="ssl_error" placeholder="Some ssl error..." class="form-control" value="{{ old('ssl_error') }}" >
                                                        @error('ssl_error')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('ssl_error')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>geo lat</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="geo_lat" placeholder="Some geo lat..." class="form-control" value="{{ old('geo_lat') }}" >
                                                        @error('geo_lat')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('geo_lat')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>geo long</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="geo_long" placeholder="Some geo long..." class="form-control" value="{{ old('geo_long') }}" >
                                                        @error('geo_long')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('geo_long')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>has extended info</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="has_extended_info" placeholder="Some has extended info..." class="form-control" value="{{ old('has_extended_info') }}" >
                                                        @error('has_extended_info')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('has_extended_info')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-warning d-block mx-auto">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout-component>
