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
                                        <h4>Radio Details </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.radio.update', $radio->id) }}" method="post">@method('put') @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>id</td>
                                                    <td>
                                                        <input id="t-text" type="number" placeholder="Some Text..." class="form-control" value="{{ $radio->id }}" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>change uuid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="change_uuid" placeholder="Some Text..." class="form-control" value="{{ $radio->change_uuid }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>station uuid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="station_uuid" placeholder="Some Text..." class="form-control" value="{{ $radio->station_uuid }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>server uuid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="server_uuid" placeholder="Some Text..." class="form-control" value="{{ $radio->server_uuid }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="name" placeholder="Some Text..." class="form-control" value="{{ $radio->name }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="url" placeholder="Some Text..." class="form-control" value="{{ $radio->url }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>url resolved</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="url_resolved" placeholder="Some Text..." class="form-control" value="{{ $radio->url_resolved }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>homepage</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="homepage" placeholder="Some Text..." class="form-control" value="{{ $radio->url_resolved }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>favicon</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="favicon" placeholder="Some Text..." class="form-control" value="{{ $radio->favicon }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>tags</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="tags" placeholder="Some Text..." class="form-control" value="{{ $radio->tags }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" placeholder="Some Text..." class="form-control" value="{{ $radio->country }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country code</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country_code" placeholder="Some Text..." class="form-control" value="{{ $radio->country_code }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>iso_3166_2</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="iso_3166_2" placeholder="Some Text..." class="form-control" value="{{ $radio->iso_3166_2 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>state</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="state" placeholder="Some Text..." class="form-control" value="{{ $radio->state }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>language</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="language" placeholder="Some Text..." class="form-control" value="{{ $radio->language }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>language codes</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="language_codes" placeholder="Some Text..." class="form-control" value="{{ $radio->language_codes }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>votes</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="votes" placeholder="Some Text..." class="form-control" value="{{ $radio->votes }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click count</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_count" placeholder="Some Text..." class="form-control" value="{{ $radio->click_count }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click trend</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_trend" placeholder="Some Text..." class="form-control" value="{{ $radio->click_trend }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last change time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_change_time" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_change_time }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last change time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_change_time_iso8601" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_change_time_iso8601 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>codec</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="codec" placeholder="Some Text..." class="form-control" value="{{ $radio->codec }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>bitrate</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="bitrate" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->bitrate }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>hls</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="hls" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->hls }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_checkok }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last check time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_check_time" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_check_time }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last check time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_check_time_iso8601" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_check_time_iso8601 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok_time" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_checkok_time }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last checkok time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_checkok_time_iso8601" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_checkok_time_iso8601 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last local check time</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_local_check_time" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_local_check_time }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>last local check time iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="last_local_check_time_iso8601" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->last_local_check_time_iso8601 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click timestamp</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_timestamp" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->click_timestamp }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>click timestamp iso8601</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="click_timestamp_iso8601" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->click_timestamp_iso8601 }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ssl error</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="ssl_error" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->ssl_error }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>geo lat</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="geo_lat" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->geo_lat }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>geo long</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="geo_long" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->geo_long }}" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>has extended info</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="has_extended_info" placeholder="Some Text..." class="form-control" value="{{ $radio->radioTime->has_extended_info }}" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-warning d-block mx-auto">Save Changes</button>
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
