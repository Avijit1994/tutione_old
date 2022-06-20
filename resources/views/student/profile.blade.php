<x-student-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <!-- profile -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Profile Details</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                        <!-- form -->
                        {{ Form::open(['route' => 'student.profile.store', 'files' => true,'class' => 'validate-form mt-2 pt-50']) }}
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-1">
                                <img src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}">
                                {{ Form::file('image', ['class' => 'form-control', 'placeholder' => 'image']) }}
                                @error('name') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('name', 'Name', ['class' => 'form-label']) }}
                                {{ Form::text('name', old('name',auth()->user()->name), ['class' => 'form-control', 'placeholder' => 'Name']) }}
                                @error('name') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
                                {{ Form::text('email', old('email',auth()->user()->email), ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                @error('email') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('phone', 'Phone', ['class' => 'form-label']) }}
                                {{ Form::text('phone', old('phone',auth()->user()->phone), ['class' => 'form-control', 'placeholder' => 'Phone']) }}
                                @error('phone') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('school_name', 'School Name', ['class' => 'form-label']) }}
                                {{ Form::text('school_name', old('school_name',auth()->user()->school_name), ['class' => 'form-control', 'placeholder' => 'School Name']) }}
                                @error('school_name') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('guardian_email', 'Guardian Email', ['class' => 'form-label']) }}
                                {{ Form::text('guardian_email', old('guardian_email',auth()->user()->guardian_email), ['class' => 'form-control', 'placeholder' => 'Guardian Email']) }}
                                @error('guardian_email') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                {{ Form::label('guardian_name', 'Guardian Name', ['class' => 'form-label']) }}
                                {{ Form::text('guardian_name', old('guardian_name',auth()->user()->guardian_name), ['class' => 'form-control', 'placeholder' => 'Guardian Name']) }}
                                @error('guardian_name') <span class="text-red">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                    <!--/ form -->
                    </div>
                </div>

                <!-- deactivate account  -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Delete Account</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                        <div class="alert alert-warning">
                            <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
                            <div class="alert-body fw-normal">
                                Once you delete your account, there is no going back. Please be certain.
                            </div>
                        </div>

                        <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                       id="accountActivation"
                                       data-msg="Please confirm you want to delete account"/>
                                <label class="form-check-label font-small-3" for="accountActivation">
                                    I confirm my account deactivation
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger deactivate-account mt-1">Deactivate
                                    Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ profile -->
            </div>
        </div>

    </div>
</x-student-layout>
