<template>
    <main>
        <body class="sb-nav-fixed">
        <!-- Header -->
        <Header />
        <div id="layoutSidenav">
            <!-- Sidebar -->
            <Sidebar />
            <div id="layoutSidenav_content">
                <router-view></router-view>
                <!-- Footer -->
                <Footer />
            </div>
        </div>
    </body>
    </main>
</template>

<script>
import Header from './components/Header.vue';
import Sidebar from './components/Sidebar.vue';
import Footer from './components/Footer.vue';
export default {
    components: {
        Header,
        Sidebar,
        Footer
    }
}
</script>
