<template>
    <DashboardLayout title="Manajemen Obat" :useBtnTambah="true">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="main-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Obat</th>
                                    <th>Nama Obat</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>prctml</td>
                                    <td>Paracetamol</td>
                                    <td>2 ltr</td>
                                    <td class="text-center">
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#editModal">Edit</button>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>pndl</td>
                                    <td>Panadol</td>
                                    <td>200 Keping</td>
                                    <td class="text-center">
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#editModal">Edit</button>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="nik" id="nik">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control">
                                        <label for="nama" id="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control">
                                        <label for="alamat" id="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control">
                                        <label for="nohp" id="nohp">No HP</label>
                                        <input type="number" name="nohp" id="nohp" class="form-control">
                                        <label for="jenisKelamin" id="jenisKelamin">Jenis Kelamin</label>
                                        <input type="text" name="jenisKelamin" id="jenisKelamin" class="form-control">
                                        <label for="tmptLahir" id="tmptLahir">Tempat Lahir</label>
                                        <input type="text" name="tmptLahir" id="tmptLahir" class="form-control">
                                        <label for="tglLahir" id="tglLahir">Tgl Lahir</label>
                                        <input type="date" name="tglLahir" id="tglLahir" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal  -->
                        <!-- Modal Hapus -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal  -->
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<style></style>

<script>
import DashboardLayout from '../Layouts/DashboardLayout.vue';

export default {
    components: {
        DashboardLayout
    }
}
</script>
