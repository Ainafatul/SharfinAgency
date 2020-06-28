@extends('layout.Agent')

@section('content')
    <div class="page-container">
        <div class="card m-lg-auto" style="padding: 24px 64px;border-top: 0">
            <h2 class="m-3">Property</h2>
            <div class="card-body" style="margin-bottom: 36px">
                <form class="m-lg-auto" action="{{route('onNewProperty')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" id="category" name="category">
                            <option value="Rumah">Rumah</option>
                            <option value="Kos">Kos</option>
                            <option value="Kontrakan">Kontrakan</option>
                        </select>
                    </div>
                    <div class="card">
                        <div class="form-group form-check">
                            <div class="row" style="padding: 12px 24px;">
                                <div class="col-6">
                                    <input type="checkbox" class="form-check-input" id="isSell" name="isSell">
                                    <label class="form-check-label" for="exampleCheck1">Jual</label>
                                </div>
                                <div class="col-6">
                                    <input type="checkbox" class="form-check-input" id="isRent" name="isRent">
                                    <label class="form-check-label" for="exampleCheck1">Sewa</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 24px;padding-right: 24px">
                            <div class="col-6" id="detailPenjualan" hidden>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Harga Jual</h5>
                                        <div class="form-group">
                                            <label for="price">Harga</label>
                                            <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                   name="price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6" id="detailPenyewaan" hidden>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Harga Sewa</h5>
                                        <div class="form-group">
                                            <label for="price">Harga</label>
                                            <input type="number" min="0.00" max="1000000000000.00" step="0.01" class="form-control" id="price"
                                                   name="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="minRent">Minimal Sewa</label>
                                            <input type="number" class="form-control" id="minRent" name="minRent">
                                        </div>
                                        <div class="form-group">
                                            <label for="typeRent">Jenis Sewa</label>
                                            <input type="text" class="form-control" id="typeRent" name="typeRent">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="bath_room">Kamar Mandi</label>
                        <input type="number" class="form-control" id="bath_room" name="bath_room">
                    </div>
                    <div class="form-group">
                        <label for="bed_room">Kamar Tidur</label>
                        <input type="number" class="form-control" id="bed_room" name="bed_room">
                    </div>
                    <div class="form-group">
                        <label for="stories">Jumlah Lantai</label>
                        <input type="number" class="form-control" id="stories" name="stories">
                    </div>
                    <div class="form-group">
                        <label for="land_area">Luas Tanah</label>
                        <input type="number" class="form-control" id="land_area" name="land_area">
                    </div>
                    <div class="form-group">
                        <label for="building_area">Luas Bangunan (M<sup><span style="font-size: 0.8em">2</span></sup>)</label>
                        <input type="number" class="form-control" id="building_area" name="building_area">
                    </div>
                    <div class="row w-100">
                        <div class="col-3">
                            <label for="province">Province</label>
                            <select class="custom-select mr-sm-2" id="province" name="province"></select>
                        </div>
                        <div class="col-3">
                            <label for="city">City</label>
                            <select class="custom-select mr-sm-2" id="city" name="city"></select>
                        </div>
                        <div class="col-3">
                            <label for="district">District</label>
                            <select class="custom-select mr-sm-2" id="district" name="district"></select>
                        </div>
                        <div class="col-3">
                            <label for="sub_district">Sub District</label>
                            <select class="custom-select mr-sm-2" id="sub_district" name="sub_district"></select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 12px">
                        <label for="address">Alamat Lengkap</label>
                        <textarea type="text" class="form-control" id="address" rows="5" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Keterangan</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <label for="uploadImage">Photo</label>
                    <div>
                        <div class="list-group list-group-horizontal-xl d-flex justify-content-center h-auto">
                            <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img0" class="card-img" src="http://placehold.jp/150x150.png">
                                </li>

                                <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img1" class="card-img" src="http://placehold.jp/150x150.png">
                                </li>
                            </ul>
                            <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                <li class="list-group-item card" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img2" class="card-img d-flex justify-content-center"
                                         src="http://placehold.jp/150x150.png">
                                </li>
                                <li class="list-group-item card" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img3" class="card-img d-flex justify-content-center"
                                         src="http://placehold.jp/150x150.png">
                                </li>
                            </ul>
                        </div>
                        <div class="list-group list-group-horizontal-xl d-flex justify-content-center" style="margin-bottom: 24px">
                            <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img4" class="card-img"
                                         src="http://placehold.jp/150x150.png">
                                </li>
                                <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img5" class="card-img"
                                         src="http://placehold.jp/150x150.png">
                                </li>
                            </ul>
                            <ul class="list-group list-group-horizontal-sm d-flex justify-content-center">
                                <li class="list-group-item card d-flex justify-content-center" style="width: 200px;height: 200px;padding: 0">
                                    <img id="img6" class="card-img"
                                         src="http://placehold.jp/150x150.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="custom-file">
                        <input id="uploadImage" name="image[]" accept="image/*" class="custom-file-input" type="file" multiple required>
                        <label id="maxPicture" class="custom-file-label" for="uploadImage">Choose file</label>
                    </div>
                    <button style="margin-top: 24px" class="btn btn-primary w-100" id="submit" type="submit">Daftarkan Property</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#isSell').change(function () {
            $('#detailPenjualan').attr('hidden', !$(this).is(':checked'))
        });
        $('#isRent').change(function () {
            $('#detailPenyewaan').attr('hidden', !$(this).is(':checked'))
        });

        function preview_image(event, img, index) {
            let reader = new FileReader();
            reader.onload = function () {
                let output = document.getElementById(img);
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[index]);
        }

        $('#uploadImage').change(function (event) {
            const input = document.getElementById('uploadImage');
            if (input.files.length <= 7) {
                $('#maxPicture').text('Okey Lur');
                $('#submit').attr('disabled', false)
                for (let i = 0; i < input.files.length; i++) {
                    preview_image(event, 'img' + i, i)
                }
            } else {
                $('#maxPicture').text('Limit e 7 Dulur ku Sayang');
                $('#submit').attr('disabled', true)
            }
        });

        // const server = "http://10.10.10.16:8000/";
        // $.getJSON(server + "getProvinces", function (result) {
        //     $.each(result, function (i, field) {
        //         const option = document.createElement("option");
        //         option.value = field.id;
        //         option.text = field.name;
        //         document.getElementById("province").add(option);
        //     });
        // });

        // $('#province').change(function () {
        //     const selectedID = this.options[this.selectedIndex].value;
        //     $.getJSON(server + "getCities/" + selectedID, function (result) {
        //         $('#city').empty()
        //         $('#district').empty()
        //         $('#sub_district').empty()
        //         $.each(result, function (i, field) {
        //             const option = document.createElement("option");
        //             option.value = field.id;
        //             option.text = field.name;
        //             document.getElementById("city").add(option);
        //         });
        //     });
        // })
        // $('#city').change(function () {
        //     const selectedID = this.options[this.selectedIndex].value;
        //     $.getJSON(server + "getDistricts/" + selectedID, function (result) {
        //         $('#district').empty()
        //         $('#sub_district').empty()
        //         $.each(result, function (i, field) {
        //             const option = document.createElement("option");
        //             option.value = field.id;
        //             option.text = field.name;
        //             document.getElementById("district").add(option);
        //         });
        //     });
        // })
        // $('#district').change(function () {
        //     const selectedID = this.options[this.selectedIndex].value;
        //     $.getJSON(server + "getSubDistricts/" + selectedID, function (result) {
        //         $('#sub_district').empty()
        //         $.each(result, function (i, field) {
        //             const option = document.createElement("option");
        //             option.value = field.id;
        //             option.text = field.name;
        //             document.getElementById("sub_district").add(option);
        //         });
        //     });
        // })
    </script>
@endsection
