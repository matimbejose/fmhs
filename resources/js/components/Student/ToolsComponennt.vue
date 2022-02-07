<template>
       <div class="container-fuild">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-yellow">
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
                            <a  :href="`/students/${student.id}/edit`" class="btn btn-success btn-xs"><i class="fas fa-pen"></i> </a>
                        <button @click="deleteStundents(student.id)" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                </div>

                <hr>

                  <div class="card-body">
                <legend>Formulario para adcionar novo estudante</legend>
                <form href="useForm" action="#" @submit.prevent="save">
                <div class="mb-3">
                <label  class="form-label">Nome</label>
                <input type="text" class="form-control" id="name"  placeholder="Nome do estudante" v-model="formData.name">
                </div>
                   <div class="mb-3">
                <label  class="form-label">Disciplianas</label>
                <input type="text" class="form-control" id="chair" placeholder="Disciplinas" v-model="formData.chair">
                </div>
                     <div class="mb-3">
                <label  class="form-label">Celular</label>
                <input type="text" class="form-control" id="phone" placeholder="Celular do estudante" v-model="formData.phone">
                </div>
                <div class="mb-3">
                <label  class="form-label">Data</label>
                <input type="text" class="form-control"  placeholder="Data de ingresso do estudante" id="data" v-model="formData.data">
                </div>
                <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>    
                 </div>
                
                </div>
                        <footer-component />
            </div>
        </div>
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


