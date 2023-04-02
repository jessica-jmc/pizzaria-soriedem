@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-sm-4 col-sm-offset-4 ">
                <!--Form with header-->
                <div class="card wow fadeIn" data-wow-delay="0.3s">
                    <div class="card-body">

                    <!--Header-->
                    <div class="form-header purple-gradient">
                        <h3><i class="fas fa-user mt-2 mb-2"></i> Login:</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fas fa-user prefix white-text"></i>
                        <input type="text" id="orangeForm-name" class="form-control">
                        <label for="orangeForm-name">Seu nome</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix white-text"></i>
                        <input type="text" id="orangeForm-email" class="form-control">
                        <label for="orangeForm-email">Seu e-mail</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-lock prefix white-text"></i>
                        <input type="password" id="orangeForm-pass" class="form-control">
                        <label for="orangeForm-pass">Sua senha</label>
                    </div>

                    <div class="text-center">
                        <button class="btn purple-gradient btn-lg">Login</button>
                    </div>

                    </div>
                </div>
                <!--/Form with header-->    
            </div>
        </div>
    </div>
</div>
@endsection