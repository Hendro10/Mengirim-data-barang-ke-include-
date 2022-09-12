@include('layout/header',['title' => 'Gallery'])

    <div class="container text-center mt-3 p-4 bg-white">
            <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="/img/gambar1.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/gambar2.jpg"
                class="img-thumbnail img-fluid">
                </div>
            <div class="col-4">
                <img src="/img/gambar3.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/gambar4.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/gambar5.jpg"
                class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>

@include('layout/footer')        