@extends('master')
@section('content')
<section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1829.1572314984276!2d-46.43690230733506!3d-23.52118957021601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e3!4m3!3m2!1d-23.521066599999997!2d-46.435711399999995!4m5!1s0x94ce64016d2760a5%3A0x989175ff04988bed!2sR.%20Paravisco%2C%20564%20-%20Vila%20Progresso%20(Zona%20Leste)%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008240-660!3m2!1d-23.5210805!2d-46.4361891!5e0!3m2!1spt-BR!2sbr!4v1680474319722!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</section>
<div class="container-fluid mb-5">

      <!--Grid row-->
      <div class="row" style="margin-top: -100px;">

        <!--Grid column-->
        <div class="col-md-12">

          <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!--Section: Contact v.2-->
                <section class="section">
                    <img >
                  <!--Section heading-->
                  <h2 class="font-weight-bold text-center h1 my-5">Contato</h2>
                  <!--Section description-->
                  <p class="text-center grey-text mb-5 mx-auto w-responsive">Para fazer seu pedido ou tirar dúvidas sobre nossas pizzas, entre em contato conosco através de nossos canais de atendimento. Estamos sempre prontos para atendê-lo da melhor forma possível e garantir a melhor experiência gastronômica.</p>

                  <div class="row pt-5">

                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                      <form>

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-name" class="form-control">
                              <label for="contact-name" class="">Seu nome</label>
                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control">
                              <label for="contact-email" class="">Seu e-mail</label>
                            </div>
                          </div>
                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                              <input type="text" id="contact-Subject" class="form-control">
                              <label for="contact-Subject" class="">Mensagem</label>
                            </div>
                          </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                            <div class="md-form">
                              <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                              <label for="contact-message">Sua mensagem</label>
                            </div>

                          </div>
                        </div>
                        <!--Grid row-->

                      </form>

                      <div class="text-center text-md-left my-4">
                        <a class="btn peach-gradient">Enviar</a>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fas fa-map-marker fa-2x orange-text" style="color:#7f0000"></i>
                          <p>R. Paravisco, 564 - Vila Progresso</p>
                        </li>

                        <li>
                          <i class="fas fa-phone fa-2x orange-text"style="color:#7f0000"></i>
                          <p>11 2052 8754<br>11 98926 8754</p>
                        </li>

                        <li>
                          <i class="fas fa-envelope fa-2x orange-text"style="color:#7f0000"></i>
                          <p>pizza@soriedem.com.br</p>
                        </li>
                      </ul>
                    </div>
                    <!--Grid column-->

                  </div>

                </section>
                <!--Section: Contact v.2-->

              </div>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>

    </div>
@endsection