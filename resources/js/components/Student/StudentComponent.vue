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
                            <tr v-for="student in students" :key="student.id">
                        <td>{{ student.name }}</td>
                        <td>{{ student.chair }}</td>
                            </tr>
                        </tbody>
                        </table>
                        <a href="students/tools" class="btn btn-primary">Manipular Estudantes</a>
                        <a href="students/pauta" class="btn btn-primary">Verificar Pauta</a>

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
import axios from 'axios';
const  url = 'http://127.0.0.1:8000';
import FooterComponent from '../FooterComponent.vue'


export default {
    name: 'StudentComponent',
    props: ['id'],
    components: {
        FooterComponent

    },
    data() {
        return {
            students:[],
            formData: {
                id: '',
                name: '',
                chair: '',
            },
            status: false 
        }
    },
    methods: {
        getStudents() {
            axios.get(`${url}/getstudents`)
            .then((response) => {
                console.log(response)
                this.students = response.data.students
            })
            .catch((error) => {
                console.log(error)
            })
        }
    },

    mounted() {
        this.getStudents();
    }

}

</script>




