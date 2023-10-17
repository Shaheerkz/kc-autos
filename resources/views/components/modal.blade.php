

@props(['id', 'title' => $title ?? '', 'btnTitle'])
<div class="modal fade step-form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close all-center" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="step-form">
              <form action="" id="step-form">
                <div class="row">
                  <div class="col-md-12">
                    <div class="step-form-wrap">
                      <div class="header">
                        <ul class="progress-bar-wrap d-flex ps-0 mb-0 justify-content-between ">
                          <li class=" list-unstyled d-flex align-items-center text-22 f-700 f-ibm text-dark-brown indicators">
                            <span class="step-numbers  all-center me-3">1</span> Vehicle
                          </li>
                          <li class="list-unstyled"> <span class="right-arrow-icon"><i class="fa-solid fa-chevron-right"></i></span></li>
                          <li class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                            <span class="step-numbers  all-center me-3 bg-light-gray">2</span>
                            Ownership
                          </li>
                          <li class="list-unstyled"> <span class="right-arrow-icon"><i class="fa-solid fa-chevron-right"></i></span></li>
                          <li class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                            <span class="step-numbers  all-center me-3 bg-light-gray">3</span>
                            Condition
                          </li>
                        </ul>
                        <div class="border-bottom-light mb-40"></div>
                        <div class="content">
                          <div class="content__box visible__no-animation step-1">
                            <x-auth.form submit="#" title="" description="">
                              <x-slot name="inputs">
                                <x-input label="Year*:" name="Como prefere ser chamado" />
                                <x-input label="Make*:" name="Digite seu número de WhatsApp" />
                                <x-input label="Model*:" name="Digite seu e-mail" />
                                <x-input label="Trim*:" name="Digite seu e-mail" />
                                <x-input label="Description*:" textarea="skcksdc" name="Digite seu e-mail" />
                                <div class="d-flex justify-content-end w-96">
                                  <x-button type="button" id="next-1" classes="primary-btn" value="Next" />
                                </div>
                              </x-slot>
                            </x-auth.form>
                          </div>
                          <div class="content__box step-2">
                            <x-auth.form submit="#" title="" description="">
                              <x-slot name="inputs">
                                <x-input label="Field*:" name="Como prefere ser chamado" />
                                <x-input label="Field*:" name="Digite seu número de WhatsApp" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <div class="d-flex justify-content-end w-96 gap-2 ">
                                  <x-button type="button" id="prev-1" classes="primary-btn prevbtn" value="Previous" />
                                  <x-button type="button" id="next-2" classes="primary-btn" value="Next" />
                                </div>
                              </x-slot>
                            </x-auth.form>
                          </div>
                          <div class="content__box step-3">
                            <x-auth.form submit="#" title="" description="">
                              <x-slot name="inputs">
                                <x-input label="Field*:" name="Como prefere ser chamado" />
                                <x-input label="Field*:" name="Digite seu número de WhatsApp" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <x-input label="Field*:" name="Digite seu e-mail" />
                                <p class="primary-para text-center w-90 mb-5">Please agree to the terms and condition to procced with the application</p>
                                <div class="d-flex justify-content-end w-96 gap-2">
                                  <x-button type="button" id="prev-2" classes="primary-btn prevbtn" value="Previous" />
                                  <x-button type="button" id="submit" classes="primary-btn" value="Submit" />
                                </div>
                              </x-slot>
                            </x-auth.form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>