@extends('admin.main')
@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Data Kerja Praktek</h3>
                        <div class="mb-2">
                            <button type="button" class="btn mb-1 btn-primary btn-primary btn-xs" data-toggle="modal"
                                data-target="#tambahDataModal">
                                Tambah Data <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                            </button>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-2 ">
                                {{-- zero-configuration = tambahin ini kalo perlu ya imron --}}
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Dosen Pembimbing</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Project</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Imron Ma'ruf Fajaruddin</td>
                                        <td>200180139</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos amet
                                            natus? Qui veritatis obcaecati doloremque nobis </td>
                                        <td>Dosen dosen,S.T.,M.Kom</td>
                                        <td><a class="btn label btn-danger btn-rounded fa fa-file-pdf-o" href="#"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Download"></a>
                                        </td>
                                        <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Github"><i
                                                        class="fa fa-github-alt color-muted m-r-5"></i>
                                                </a><a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Drive"><i
                                                        class="mdi mdi-google-drive color-danger"></i></a></span>
                                        </td>
                                        <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit"><i
                                                        class="fa fa-pencil color-muted m-r-5"></i>
                                                </a><a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Close"><i
                                                        class="fa fa-trash color-danger"></i></a></span>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Dosen Pembimbing</th>
                                        <th scope="col">Laporan</th>
                                        <th scope="col">Project</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Kerja Praktek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi form tambah data di sini -->
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" placeholder="Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="dosen">Dosen Pembimbing</label>
                            <input type="text" class="form-control" id="dosen"
                                placeholder="Dosen Pembimbing"required>
                        </div>
                        <div class="form-group">
                            <label for="laporan">Upload File Laporan (PDF)</label>
                            <input type="file" class="form-control-file" id="laporan"required>
                        </div>
                        <div class="form-group">
                            <label for="github">Link Project GitHub</label>
                            <input type="text" class="form-control" id="github"
                                placeholder="Link Project GitHub"required>
                        </div>
                        <div class="form-group">
                            <label for="gdrive">Link Project Google Drive</label>
                            <input type="text" class="form-control" id="gdrive"
                                placeholder="Link Project Google Drive"required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
