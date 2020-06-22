<div class="container">
    <h1 class="text-center font-weight-bold mt-3">SELAMAT DATANG DI TOKO ALFAMACET</h1>
    <h4 class="text-center mb-3">Bagaimana penilaian Anda dengan pelayanan kami?</h4>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn pilih_sangat_puas mb-3 text-white" data-toggle="modal"
                data-target="#sangatpuas">
                <i class="far fa-grin-beam fa-2x"></i><br>
                SANGAT PUAS
            </button>
        </div>
        <div class="col-lg-6  col-md-6 col-sm-12 d-flex justify-content-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn pilih_puas mb-3 text-white" data-toggle="modal" data-target="#puas">
                <i class="far fa-smile"></i><br>
                PUAS
            </button>
        </div>
        <div class="col-lg-12  col-md-12 col-sm-12  d-flex justify-content-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn pilih_tidak_puas mb-3 text-white" data-toggle="modal"
                data-target="#tidakpuas">
                <i class="far fa-sad-tear"></i><br>
                TIDAK PUAS
            </button>
        </div>
    </div>
</div>

<!-- pilihan 1 -->
<!-- Modal -->
<div class="modal fade mt-5" id="sangatpuas" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label1">Yakin sangat puas dengan pelayanan kami?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form action="<?= base_url() . 'dashboard/tambah_sangat_puas' ?>">
                    <button type="submit" class="btn btn-primary"> Ya </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end pilihan 1 -->

<!-- pilihan 2 -->
<!-- Modal -->
<div class="modal fade mt-5" id="puas" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label1">Yakin puas dengan pelayanan kami?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form action="<?= base_url() . 'dashboard/tambah_puas' ?>">
                    <button type="submit" class="btn btn-primary"> Ya </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end pilihan 2 -->

<!-- pilihan 3 -->
<!-- Modal -->
<div class="modal fade mt-5" id="tidakpuas" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label1">Yakin tidak puas dengan pelayanan kami?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form action="<?= base_url() . 'dashboard/tambah_tidak_puas' ?>">
                    <button type="submit" class="btn btn-primary"> Ya </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end pilihan 3 -->