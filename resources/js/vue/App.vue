<template>
    <div class="container-scroller">
        <Header></Header>
        <div class="container-fluid page-body-wrapper">
            <Sidebar></Sidebar>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <router-view :key="$route.fullPath"></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from './components/Sidebar';
import Header from "./components/Header";

export default {
    name: "App",
    components: {Sidebar, Header},
    async mounted() {

    }
}
</script>

<style scoped>

</style>
