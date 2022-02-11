<template>
<div class="container-fuild">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Estudantes</h3>
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
                            <th>Celular</th>
                            <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="student in students" :key="student.id">
                        <td>{{ student.name }}</td>
                        <td>{{ student.chair }}</td>
                        <td>{{ student.phone }}</td>
                        <td>{{ student.data }}</td>
                        <td>
                            <button class="btn btn-primary btn-xs"><i class="fas fa-eye"></i> </button>
                            <button class="btn btn-primary btn-xs"><i class="fas fa-edit"></i> </button>
                            <button class="btn btn-primary btn-xs"><i class="fas fa-trash"></i></button>
                        </td>
                            </tr>
                        </tbody>
                        </table>
                         <a href="/students/tools/create" class="btn btn-primary">Cadastrar Estudantes</a>
                    </div>
                </div>
            </div>
        </div>
    <FooterComponent />
    </div>
</template>

<script>
import FooterComponent from '../FooterComponent.vue'
import axios from 'axios';
const url = 'http://127.0.0.1:8000'; 

export default {
    name: 'StudentComponent',
    props: ['id'],
    components: {
        FooterComponent

    },
    data()  {
        return {
            students: [],
            formData: {
                id: '',
                name: '',
                chair: '',
                phone: ''
            },
            status: false
        }
    },
    methods: {
        getStudents() {
            axios.get(`${url}/getstudents`)
            .then((response) => {
                console.log(response);
                this.students = response.data.students
            })
            .catch((error) => {
                console.log(error)
            })
        },

        save() {
            axios.post(`${url}/students/create`, this.formData)
            .then((response) => {
                this.status = response.data.sucess
            })
            .catch((err) => {
                console.log(err)
            })
        },

        deleteStundents(id) {
            axios.delete(`${url}/students/${id}`)
            .then((response) => {
                this.status = response.data.sucess
                this.getStudents()
            })
            .catch((error) => {
                console.log(error)
            })
        }
 },
    mounted() {
        this.getStudents()
    }
}   

</script>


