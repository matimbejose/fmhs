<template>
       <div class="container-fuild">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Estudantes <small v-if="status">{{ status }}</small></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                        <thead>
                            <tr>
                            <th>Nome</th>
                            <th>Disciplianas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jose Matimbe</td>
                                <td>Matematica e fica</td>
                            </tr>
                        
                        </tbody>
                        </table>
                        <a href="students/tools" class="btn btn-primary">Manipular Estudantes</a>
                </div>
                </div>
                       
            </div>
        </div>
      <footer-component />
    </div>
</template>

<script>
import FooterComponent from '../FooterComponent.vue'

const url = 'http://127.0.0.1:8000'; 

export default {
    name: 'StudentComponent'
}

</script>


