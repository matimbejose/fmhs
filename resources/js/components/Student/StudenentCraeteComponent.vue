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
                            <form href="useForm" action="#" @submit.prevent="save">
                <div class="mb-3">
                <label  class="form-label">Nome</label>
                <input type="text" class="form-control" id="name"  placeholder="Nome do estudante">
                </div>
                   <div class="mb-3">
                <label  class="form-label">Disciplianas</label>
                <input type="text" class="form-control" id="chair" placeholder="Disciplinas">
                </div>
                     <div class="mb-3">
                <label  class="form-label">Celular</label>
                <input type="text" class="form-control" id="phone" placeholder="Celular do estudante">
                </div>
                <div class="mb-3">
                <label  class="form-label">Data</label>
                <input type="text" class="form-control"  placeholder="Data de ingresso do estudante" id="data">
                </div>
                <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>    
                    </div>
                </div>
            </div>
        </div>
        <FooterComponent />
    </div>
</template>

<script>
export  default {

}
</script>
