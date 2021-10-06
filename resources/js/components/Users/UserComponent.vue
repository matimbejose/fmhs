<template>
    <div class="container-fuild">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Função</th>
                    </tr>
                    </thead>
                    <tbody>
                     <tr v-for="user in users" :key="user.id">
                         <td>{{ user.name }}</td>
                         <td>{{ user.email }}</td>
                         <td>Matematica - Regete</td>
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
import axios from 'axios'
const url = '';

export default {
    name: 'UserComponent',
    props: ['id'],

    data() {
        return {
            users: [],
            formData: {
                id: '',
                name: '',
                email: ''
            },
            satus: false
        }

    },

    methods: {
        getUsers() {
            axios.get('http://127.0.0.1:8000/getusers')
            .then((response) => {
                console.log(response)
                this.users = response.data.users
            })
            .catch((error) => {
                console.log(error)
            })
        },
        deleteStundents() {
            axios.get('')
        }

    },

    mounted() {
        this.getUsers('http://127.0.0.1:8000/getusers')
        .then((response) => {
            console.log(response)
            this.students = response.data.students
        })
        .catch((error) => {
            console.log(error)
        })
    },

    created() {

    }
}
</script>
