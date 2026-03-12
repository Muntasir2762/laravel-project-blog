@extends('admin.master')

@section('content')
    <div class="row g-4 container mt-4">
        <div class="col-md-12">
            <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Update Settings</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{url('/admin/settings-update')}}" method="post">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="summernote" class="form-label">About Me</label>
                            <textarea name="about_me" class="form-control" id="summernote" required>{{$setting->about_me}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook Link(Optional)</label>
                            <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control" id="facebook" />
                        </div>
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter Link(Optional)</label>
                            <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" id="twitter" />
                        </div>
                        <div class="mb-3">
                            <label for="github" class="form-label">Github Link(Optional)</label>
                            <input type="text" name="github" value="{{$setting->github}}" class="form-control" id="github" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Quick Example-->
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush
