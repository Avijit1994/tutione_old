<!DOCTYPE html>
<html>
<head>
    <title>Laravel Cropper js - Crop Image Before Upload</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
</head>
<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg {
        max-width: 1000px !important;
    }
</style>
<body>
<div class="container">
    <h1>Laravel Cropper Js - Crop Image Before Upload</h1>
    <input type="file" name="image" class="image">
</div>
<div class="row">
    <div class="col-md-8">
        <img id="image" src="">
    </div>
    <div class="col-md-4">
        <div class="preview"></div>
    </div>
</div>
<button type="button" class="btn btn-primary" id="crop">Crop</button>
</div>
<script>
    const image = document.getElementById('image');
    let cropper;
    $("body").on("change", ".image", function (e) {
        const files = e.target.files;
        const done = function (url) {
            image.src = url;

            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        };
        let reader;
        let file;
        let url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $("#crop").click(function () {
        const canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });
        canvas.toBlob(function (blob) {
            const url = URL.createObjectURL(blob);
            const reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function () {
                const base64data = reader.result;
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "crop-image-upload",
                    data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                    success: function (data) {
                        console.log(data);
                        alert("Crop image successfully uploaded");
                    }
                });
            }
        });
    })
</script>
</body>
</html>
