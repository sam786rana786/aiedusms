<x-app-layout>
    <x-slot name="title">Profile</x-slot>
    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img id="showImage" class="rounded-circle" alt="User Image"
                                src="{{ !empty($user->profile) ? asset($user->profile) : asset('assets/img/profiles/avatar-02.jpg') }}">
                        </a>
                    </div>
                    <div class="col ms-md-n2 profile-user-info">
                        <h4 class="user-name mb-0">{{ $user->name }}</h4>
                        <h6 class="text-muted">
                            @foreach ($user->getRoleNames() as $item)
                                {{ $item }}
                            @endforeach
                        </h6>
                        <div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{ $user->address }}</div>
                        <div class="about-text">{{ $user->mobile }}</div>
                    </div>
                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Change Password</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content profile-tab-cont">

                <!-- Personal Details Tab -->
                <div class="tab-pane fade show active" id="per_details_tab">

                    <!-- Personal Details -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Edit Profile</span>
                                    </h5>
                                    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name')
                                                is-invalid
                                                @enderror"
                                                    id="name" placeholder="Full Name" value="{{ $user->name }}"
                                                    required name="name">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email')
                                                is-invalid
                                                @enderror"
                                                    id="email" placeholder="Full email" value="{{ $user->email }}"
                                                    required name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="mobile">Mobile</label>
                                                <input type="tel"
                                                    class="form-control @error('mobile')
                                                is-invalid
                                                @enderror"
                                                    id="mobile" placeholder="Mobile Number"
                                                    value="{{ $user->mobile }}" required name="mobile">
                                                @error('mobile')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="profile">Profile Image</label>
                                                <input type="file" class="form-control" id="image"
                                                    name="profile">
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" id="address" name="address">{{ $user->address }}</textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Personal Details -->
                </div>
                <!-- /Personal Details Tab -->

                <!-- Change Password Tab -->
                <div id="password_tab" class="tab-pane fade">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <form method="POST" action="storePassword">@csrf
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" name="old_password">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" name="new_password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Change Password Tab -->

            </div>
        </div>
    </div>
</x-app-layout>
