<x-app-layout>

    <div class="loginbox">
        <div class="container">
            <div class="row">
                <div class="col-md-5 login-modal-img">
                    <img src="{{ asset('pub-assets/images/login-modal.png') }}"/>
                </div>
                <div class="col-md-7 form-col">
                    <ul class="nav nav-pills login-nav">
                        <li>
                            <a class="active" href="#login" data-toggle="tab">Login</a>
                        </li>
                        <li>
                            <a href="#register" data-toggle="tab">Register</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://my.classcardapp.com/">Classcard Login</a>
                        </li>
                        <li>
                            <a href="#forget" data-toggle="tab"></a>
                        </li>
                    </ul>

                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="login">
                            <div class="login-form-content">
                                <h3 class="mb-4 login-title">Login</h3>
                                <livewire:auth.login-component/>
                                <div class="col-md-12 text-center mt-3">
                                    <a href="#forget" class="forget-pass">Can't Login?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="register">
                            <div class="login-form-content">
                                <h3 class="mb-4 login-title">Register</h3>
                                <livewire:auth.register-component/>
                            </div>
                        </div>
                        <div class="tab-pane" id="forget">
                            <div class="login-form-content">
                                <h3 class="mb-4 login-title">Forget Password</h3>
                                <div class="alert alert-danger forget-alert" role="alert"></div>
                                <livewire:auth.passwords.email-component/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
