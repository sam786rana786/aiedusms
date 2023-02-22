<x-app-layout>
    <x-slot name="title">General Settings</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Website Basic Details</h5>
                </div>
                <div class="card-body pt-0">

                    <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="details" value="basic">
                        <div class="settings-form">
                            <div class="form-group">
                                <label>Website Name <span class="star-red">*</span></label>
                                <input type="url" class="form-control @error('site_name') is-invalid @enderror"
                                    placeholder="Enter website Url" name="site_name" value="{{ $general->site_name }}">
                            </div>
                            <div class="form-group">
                                <p class="settings-label">Logo <span class="star-red">*</span></p>
                                <div class="settings-btn">
                                    <input type="file" name="logo" id="image" class="hide-input">
                                    <label for="file" class="upload">
                                        <i class="feather-upload"></i>
                                    </label>
                                </div>
                                <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
                                <div class="upload-images">
                                    <img src="{{ !empty($general->logo) ? asset($general->logo) : asset('assets/img/logo.png') }}"
                                        alt="Image" id="showImage">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                <div class="settings-btn">
                                    <input type="file" name="favicon" id="favicon" class="hide-input">
                                    <label for="file" class="upload">
                                        <i class="feather-upload"></i>
                                    </label>
                                </div>
                                <h6 class="settings-size">
                                    Recommended image size is <span>16px x 16px or 32px x 32px</span>
                                </h6>
                                <h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
                                <div class="upload-images upload-size">
                                    <img src="{{ !empty($general->favicon) ? asset($general->favicon) : asset('assets/img/favicon.png') }}"
                                        alt="Image" id="showFavicon">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="settings-btns">
                                    <button type="submit" class="btn btn-orange">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">School Details</h5>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('settings') }}" method="POST">@csrf
                        <input type="hidden" name="details" value="school">
                        <div class="settings-form">
                            <div class="form-group">
                                <label>School Name <span class="star-red">*</span></label>
                                <input type="text"
                                    class="form-control @error('school_name')
                                    is-invalid
                                @enderror"
                                    placeholder="Enter School Name" name="school_name"
                                    value="{{ $general->school_name }}">
                            </div>
                            <div class="form-group">
                                <label>Short School Name <span class="star-red">*</span></label>
                                <input type="text"
                                    class="form-control @error('short_name')
                                    is-invalid
                                @enderror"
                                    placeholder="Enter Short School Name" value="{{ $general->short_name }}"
                                    name="short_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email <span class="star-red">*</span></label>
                                        <input type="email"
                                            class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                            name="email" value="{{ $general->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="star-red">*</span></label>
                                        <input type="tel" name="phone" value="{{ $general->phone }}"
                                            class="form-control @error('phone')
                                            is-invalid
                                        @enderror">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>School Code</label>
                                        <input type="text"
                                            class="form-control @error('school_code')
                                            is-invalid
                                        @enderror"
                                            name="school_code" value="{{ $general->school_code }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Affiliation Number</label>
                                        <input type="text"
                                            class="form-control @error('affiliation_number')
                                            is-invalid
                                        @enderror"
                                            name="affiliation_number" value="{{ $general->affiliation_number }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address <span class="star-red">*</span></label>
                                        <textarea
                                            class="form-control
                                            @error('address')
                                                is-invalid
                                            @enderror"
                                            name="address">{{ $general->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="settings-btns">
                                    <button type="submit" class="btn btn-orange">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript"></script>
    </x-slot>
</x-app-layout>
