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
                        <caption>Verificar Pauta de ava</caption>
                        <thead>
                            <tr>
                            <th>Nome</th>
                            <th>Disciplianas</th>
                            <th>Celular</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr v-for="student in students" :key="student.id">
                        <td>{{ student.name }}</td>
                        <td>{{ student.chair }}</td>
                        <td>{{ student.phone }}</td>

                        <td>
                            <button class="btn btn-primary btn-xs"><i class="fas fa-eye"></i> </button>
                            <a  class="btn btn-success btn-xs"><i class="fas fa-pen"></i> </a>
                        <button @click="deleteStundents" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'StudentComponent',
    props: ['id'],
    components: {

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
            axios.get('http://127.0.0.1:8000/getstudents')
            .then((response) => {
                console.log(response);
                this.students = response.data.students
            })
            .catch((error) => {
                console.log(error)
            })
        },

        deleteStundents(id) {
            axios.delete(`http://127.0.0.1:8000/students/${id}`)
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


