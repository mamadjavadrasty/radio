<x-admin.layout-component>
    <style>
        .pointer-none{
            pointer-events: none;
        }
    </style>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success text-center alert-dismissible fade show mt-2 " role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         <div class="w-50 mx-auto text-center mt-2">
            <h3>Update All and Insert New Radios</h3>
            <hr>
             <button id="update" onclick="confirms()" type="button" href="{{route('admin.radio.update.request')}}" class="bg-primary p-2 rounded {{!is_null($updateJob) ? 'bg-danger pointer-none' : ''}}" >{{!is_null($updateJob) ? 'Fetching Radios' : 'UPDATE'}}</button>
        </div>
            <hr>
            <div class="container">
                <div class="row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">

                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Update Single Radio</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('admin.radio.update.store')}}" method="post">
                                    @csrf
                                    <input id="search" name="uuid" type="text" class="form-control search-form-control  ml-lg-auto {{$errors->has('uuid') ? 'is-invalid' : ''}}" value="{{old('uuid')}}" placeholder="uuid...">
                                    <button type="submit" class="btn btn-info d-block mx-auto mt-3">Add</button>
                                </form>
                                @error('uuid')
                                <div class="text-danger text-center">
                                    {{$errors->first('uuid')}}
                                </div>
                                @enderror
                            </div>
                            <hr>
                            <div id="place_table" class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-4 text-center">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>station uuid</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($syncRadios as $syncRadio)
                                            <tr>
                                                <td>{{$syncRadio->id}}</td>
                                                <td>{{$syncRadio->uuid}}</td>
                                                <td>
                                                    <form action="{{route('admin.radio.update.delete',$syncRadio->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script>

        function confirms(){

            if (confirm("Are you sure you want to update and download all entire radios ?")){
                location.href = "{{route('admin.radio.update.request')}}";
            }else{
                console.log('cancel');
            }

        }
    </script>
</x-admin.layout-component>
