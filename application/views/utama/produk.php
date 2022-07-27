<div class="container-fluid py-0" style="background: #eb1d21;">

    <div class="container py-3">

        <div class="row align-items-center py-4">

            <div class="col-md-6 text-center text-md-left">

                <h1 class="mb-4 mb-md-0 text-white text-uppercase">Produk <?= $produk ?></h1>

            </div>

            <div class="col-md-6 text-center text-md-right">

                <div class="d-inline-flex align-items-center">

                    <a class="btn btn-outline-primary" href="<?= base_url('index/') ?>" style="font-weight: boldk;">Kembali  <i class="fas fa-angle-double-right text-white mx-2"></i></a>

                    

                    <!--   <a class="btn btn-outline-primary disabled" href=""></a> -->

                </div>

            </div>

        </div>

    </div>

</div>


<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php foreach ($produk2 as $data) { ?>
                <div class="col-sm-3 mt-3">
                    <a href="<?= base_url('index/detail-produk/') ?><?= $data['id'] ?>">
                        <div class="card bg-dark text-white">
                          <img class="card-img" src="<?= base_url('assets/produk/') ?><?= $data['gambar'] ?>" alt="Card image">
                          <div class="card-img-overlay">
                            <h5 class="card-title"><?= $data['nama_produk'] ?></h5>
                      <!--   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p> -->
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
</div>


