<template>
        <div class="container-fuild">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Cursos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
            
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <footer-component />
        </footer>
    </div>
</template>

<script>
import FooterComponent from '../FooterComponent.vue'
export default {
    name: 'CouseComponent',
    components: {
        FooterComponent
    }
}
</script>