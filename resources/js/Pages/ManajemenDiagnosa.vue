<template>
    <DashboardLayout title="Manajemen Diagnosa" :useBtnTambah="true">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" v-model="searchValue" placeholder="Search . . " class="form-control-sm mb-3">
                        <EasyDataTable v-model:server-options="serverOptions" table-class-name="customize-table"
                            :server-items-length="serverItemsLength" :headers="headers" :items="items" :loading="loading"
                            :search-value="searchValue" header-text-direction="center" alternating>
                            <template #item-action="{ id }">
                                <div class="action-wrapper text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-info" @click="editProduk(id)" data-toggle="modal"
                                            data-target="#editModal">Edit</button>
                                        <button class="btn btn-danger" @click="konfirmasiHapus(id)" data-toggle="modal"
                                            data-target="#deleteModal">Hapus</button>
                                    </div>
                                </div>
                            </template>
                        </EasyDataTable>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
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

<style>
.customize-table {
    --easy-table-header-font-size: 15px;
    --easy-table-header-font-color: #858796;
    --easy-table-header-height: 50px;
    --easy-table-header-font-size: 15px;

    --easy-table-body-row-background-color: #0000000d;
    --easy-table-body-even-row-background-color: #ffffff;
    --easy-table-body-row-font-color: #858796;
    --easy-table-body-even-row-font-color: #858796;
    --easy-table-body-row-hover-font-color: #858796;
    --easy-table-body-row-height: 50px;
    --easy-table-body-row-font-size: 15px;

    --easy-table-footer-font-color: #858796;
    --easy-table-footer-font-size: 15px;
    --easy-table-footer-height: 50px;
}
</style>

<script>
import DashboardLayout from '../Layouts/DashboardLayout.vue';

export default {
    components: {
        DashboardLayout,
    },
    setup() {
        return {
            headers: [
                { text: "Kode ICD-X", value: "kode", sortable: true },
                { text: "Nama (ID)", value: "nama_id", sortable: true },
                { text: "Nama (EN)", value: "nama_en", sortable: true },
                { text: "Action", value: "action", sortable: false }
            ],
        }
    },
    data() {
        return {
            items: [],
            serverItemsLength: 0,
            serverOptions: {
                page: 1,
                rowsPerPage: 10,
            },
            loading: false,
            searchValue: ''
        }
    },
    watch: {
        serverOptions: {
            handler() {
                this.loadFromServer()
            },
            deep: true
        },
        searchValue: {
            handler() {
                this.loadFromServer()
            },
        }
    },
    mounted() {
        this.loadFromServer()
    },
    computed: {
        restApiUrl() {
            var _a = this.serverOptions, limit = _a.rowsPerPage, sortBy = _a.sortBy, sortType = _a.sortType;
            console.log(_a);
            if (sortBy && sortType) {
                return '/diagnosa?limit=' + limit + '&sortBy=' + sortBy + '&sortType=' + sortType
            } else {
                return '/diagnosa?limit=' + limit
            }
        },
    },
    methods: {
        loadFromServer: async function () {
            this.loading = true;
            let dataset = [];
            var self = this;
            axios.get(this.restApiUrl + '&search=' + self.searchValue)
                .then(function (response) {
                    response.data.data.forEach(function (data) {
                        dataset.push({
                            kode: data.kode,
                            nama_id: data.nama_id,
                            nama_en: data.nama_en
                        })
                    })
                    self.items = dataset
                    self.serverItemsLength = response.data.total
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    self.loading = false;
                });
        }
    }
}
</script>
