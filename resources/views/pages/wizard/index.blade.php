@extends('layout.main')

@section('page')
  <div class="home-btn d-none d-sm-block">
    <a href="https://alaminpuloerang.sch.id" class="text-dark"><i class="fas fa-home h2"></i></a>
    <a href="/administrator" class="text-dark ms-2"><i class="fas fa-power-off h2"></i></a>
  </div>

    {{-- TODO:Form Wizard --}}
    <section class="my-5 pt-sm-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Form Pendaftaran</h4>
        
                            <div id="basic-example">
                                <h3>Registrasi</h3>
                                <section>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input">First name</label>
                                                    <input type="text" class="form-control" id="basicpill-firstname-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input">Last name</label>
                                                    <input type="text" class="form-control" id="basicpill-lastname-input">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-phoneno-input">Phone</label>
                                                    <input type="text" class="form-control" id="basicpill-phoneno-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-email-input">Email</label>
                                                    <input type="email" class="form-control" id="basicpill-email-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-address-input">Address</label>
                                                    <textarea id="basicpill-address-input" class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </section>
        
                                <h3>Data Pribadi</h3>
                                <section>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-pancard-input">PAN Card</label>
                                                    <input type="text" class="form-control" id="basicpill-pancard-input">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                                    <input type="text" class="form-control" id="basicpill-vatno-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-cstno-input">CST No.</label>
                                                    <input type="text" class="form-control" id="basicpill-cstno-input">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-servicetax-input">Service Tax No.</label>
                                                    <input type="text" class="form-control" id="basicpill-servicetax-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-companyuin-input">Company UIN</label>
                                                    <input type="text" class="form-control" id="basicpill-companyuin-input">
                                                </div>
                                            </div>
        
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-declaration-input">Declaration</label>
                                                    <input type="text" class="form-control" id="basicpill-Declaration-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </section>
        
                                <h3>Data Ayah</h3>
                                <section>
                                    <div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-namecard-input">Name on Card</label>
                                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Credit Card Type</label>
                                                        <select class="form-select">
                                                            <option selected>Select Card Type</option>
                                                            <option value="AE">American Express</option>
                                                            <option value="VI">Visa</option>
                                                            <option value="MC">MasterCard</option>
                                                            <option value="DI">Discover</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-cardno-input">Credit Card Number</label>
                                                        <input type="text" class="form-control" id="basicpill-cardno-input">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-card-verification-input">Card Verification Number</label>
                                                        <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-expiration-input">Expiration Date</label>
                                                        <input type="text" class="form-control" id="basicpill-expiration-input">
                                                    </div>
                                                </div>
        
                                            </div>
                                        </form>
                                    </div>
                                </section>
        
                                <h3>Data Ibu</h3>
                                <section>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div>
                                                    <h5>Confirm Detail</h5>
                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>Data Wali</h3>
                                <section>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div>
                                                    <h5>Confirm Detail</h5>
                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>Selesai</h3>
                                <section>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                </div>
                                                <div>
                                                    <h5>Confirm Detail</h5>
                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TODO:Form Wizard --}}
  
@endsection