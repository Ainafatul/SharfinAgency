@extends('layout.Admin')

@section('content')
    <div class="single-slider slider-height2 d-flex align-items-center" style="margin-bottom: 128px;min-height: 500px;background: #15AC97">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1>Select Your New Perfect Style</h1>
                        <p>Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s" style="animation-delay: 0.4s;">
                        <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="id">
        <div class="container container-md">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">About Sharfin Agency</h5>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">About</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="w-100">Title
                                <input type="text" class="form-control w-100" name="title" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="w-100">Content
                                <textarea type="text" class="form-control w-100" name="content" value=""></textarea>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Image</h5>
                </div>
                <div class="card-body">
                    <div id="img-preview" class="row">
                    </div>
                    <div class="col-md-3" style="height: 200px;margin-bottom: 16px">
                        <div class="h-100 w-100 file btn btn-lg btn-primary" style="background: #073932">
                            <input id="fileuploads" style="width: 100%;height: 100%" type="file" name="image"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn btn-primary">Submit Form</div>
        </div>
    </div>
    <style>
        .card {
            margin-bottom: 48px;
        }

        .img-thumbnail {
            padding: 0;
        }

        div {
            position: relative;
            overflow: hidden;
        }

        #fileuploads {
            position: absolute;
            font-size: 50px;
            opacity: 0;
            right: 0;
            top: 0;
        }
    </style>
@endsection
<script>
    @push('scripts')

    function readURL(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                $('#img-preview').children()
                $('#img-preview').append('<div class="col-md-3" style="height: 200px;margin-bottom: 16px">' +
                    '<img id="img-preview" class="img-thumbnail h-100" src="' + e.target.result + '" style="object-fit: cover"/>' +
                    '</div>');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileuploads").change(function () {
        readURL(this);
    });
    @endpush
</script>