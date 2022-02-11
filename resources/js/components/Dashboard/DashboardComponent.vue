<template>
    <div class="container-fluid">
         <!-- Formulário para registar novos usuários -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Painel</h3>
                        <div class="card-tools">
                            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- primero -->
                       <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Usuarios</div>
                     <div class="card-body">
                      <a href="/users"><i class="fas fa-users fa-6x"></i></a>
                    </div>
                    </div> 
                    <!-- terminaqui -->

                    <!-- segundo -->
                      <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Estudantes</div>
                     <div class="card-body">
                     <a href="/students"><i class="fas fa-book-reader fa-6x"></i></a>
                
                      
                    </div>
                    </div> 
                    <!-- termina -->

                      <!-- segundo -->
                      <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Professores</div>
                     <div class="card-body">
                       <a href="/teachers"><i class="fas fa-graduation-cap fa-6x"></i></a>
               
                    </div>
                    </div> 
                    <!-- termina -->

                      <!-- segundo -->
                      <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Turmas</div>
                     <div class="card-body">
                     <a href="/classes"> <i class="fas fa-chalkboard-teacher fa-6x"></i></a>
                    </div>
                    </div> 
                    <!-- termina -->

                      <!-- segundo -->
                      <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Horarios</div>
                     <div class="card-body">
                      <a href="/schedules"><i class="fas fa-clipboard-list fa-6x"></i></a>
                    </div>
                    </div> 
                    <!-- termina -->

                    <div class="card border-success col-sm-2" style="min-width: 13rem;">
                    <div class="card-header bg-transparent border-success">Cursos</div>
                     <div class="card-body">
                      <a href="/coures"><i class="fas fa-school  fa-6x"></i></a>
                      
                    </div>
                    </div>



                 </div>
                    </div> 
                  </div>
            </div>
        </div>
        <footer class="main-footer-fluid">
           <footer-component />
        </footer>
    </div>
    
</template>
    

<script>
import FooterComponent from '../FooterComponent.vue'
export default {
  name: 'DashboardComponent',
  components: { 
    FooterComponent
  }

}
</script>

<style>

