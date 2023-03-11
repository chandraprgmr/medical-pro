<template>
    <DashboardLayout title="404 Not Found" :useTitle="false">
        <div class="wrapper-404">
            <div class="error-404">
                <div class="number">4</div>
                <div class="illustration">
                    <div class="circle"></div>
                    <div class="clip">
                        <div class="paper">
                            <div class="face">
                                <div class="eyes">
                                    <div class="eye eye__left"></div>
                                    <div class="eye eye_right"></div>
                                </div>
                                <div class="cheeks cheeks__left"></div>
                                <div class="cheeks cheeks__right"></div>
                                <div class="mouth"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="number">4</div>
            </div>

            <div class="text">Oops. Halaman yang Anda cari tidak ditemukan.</div>
            <Link class="button" href="/back-office/">Kembali</Link>
        </div>
    </DashboardLayout>
</template>

<style></style>

<script>
import DashboardLayout from '../Layouts/DashboardLayout.vue'
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        DashboardLayout,
        Link
    }
}
</script>
