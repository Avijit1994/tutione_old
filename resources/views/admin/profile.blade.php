<x-admin-layout>
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
                        <!-- header section -->
                        <div class="d-flex">
                            <a href="#" class="me-25">
                                <img src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}" id="account-upload-img"
                                     class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                            </a>
                            <!-- upload and reset button -->
                            <div class="d-flex align-items-end mt-75 ms-1">
                                <div>
                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                    <input type="file" id="account-upload" hidden accept="image/*" />
                                    <button type="button" id="account-reset"
                                            class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                    <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                </div>
                            </div>
                            <!--/ upload and reset button -->
                        </div>
                        <!--/ header section -->

                        <!-- form -->
                        {{ Form::open(['route' => 'admin.profile.store', 'files' => true,'class' => 'validate-form mt-2 pt-50']) }}
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
{{--                                <div class="col-12 col-sm-6 mb-1">--}}
{{--                                    {{ Form::label('phone', 'Phone', ['class' => 'form-label']) }}--}}
{{--                                    {{ Form::text('phone', old('phone',auth()->user()->phone), ['class' => 'form-control', 'placeholder' => 'Phone']) }}--}}
{{--                                    @error('phone') <span class="text-red">{{ $message }}</span> @enderror--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                </div>
                            </div>
                        {{ Form::close() }}
                        <!--/ form -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
