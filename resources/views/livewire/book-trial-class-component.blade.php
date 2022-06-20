<div>
    <form wire:submit.prevent="submit" method="post">
        <div class="banner-card row">
            <div class="col-md-6 mb-2">
                <label for="">Student Name</label><span class="text-danger">*</span>
                <input type="text" wire:model="student_name" placeholder="Please Enter Student Name"
                    class="form-control" />
                @error('student_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-2">
                <label for="">Email</label><span class="text-danger">*</span>
                <input type="text" wire:model="student_email" placeholder="Please Enter Your Email"
                    class="form-control" />
                @error('student_email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-2">
                <label for="">Phone No</label><span class="text-danger">*</span>
                <input type="number" wire:model="phone_no" placeholder="Please Enter Your Phone No"
                    class="form-control" />
                @error('phone_no') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-2">
                <label for="">Curriculum <span class="text-danger">*</span></label>
                <select wire:model="curriculam" class="form-control" id="curriculam">
                    <option value="" selected>Select Curriculum</option>
                    @foreach ($curriculams as $curriculam)
                        <option value="{{ $curriculam->id }}">{{ $curriculam->name }}</option>
                    @endforeach
                </select>
                @error('curriculam') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-2">
                <label for="">Grade <span class="text-danger">*</span></label>
                <select wire:model="grade" class="form-control" id="grade">
                    <option value="" selected>Select Grade</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
                @error('grade') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-2 form-group">
                <label for="">Password <span class="text-danger">*</span></label>
                <input type="password" wire:model="password" placeholder="Please Enter Your Password" class="form-control" />
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="d-flex flex-row-reverse">
                <button class="btn btn-primary mt-3" type="submit">Book Now</button>
            </div>
        </div>
    </form>
</div>

