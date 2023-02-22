<x-app-layout>
    <x-slot name="title">Social Media Links</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Social Link Settings</h5>
                </div>
                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('social_links.store') }}">@csrf
                        <div class="settings-form">
                            <div class="links-info">
                                <div class="row form-row links-cont">
                                    <div class="form-group form-placeholder d-flex">
                                        <button class="btn social-icon">
                                            <i class="feather-facebook"></i>
                                        </button>
                                        <input type="url" class="form-control" name="facebook"
                                            placeholder="https://www.facebook.com" value="{{ $social->facebook }}">
                                        <div>
                                            <a href="#" class="btn trash">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="links-info">
                                <div class="row form-row links-cont">
                                    <div class="form-group form-placeholder d-flex">
                                        <button class="btn social-icon">
                                            <i class="feather-twitter"></i>
                                        </button>
                                        <input type="url" class="form-control" name="twitter"
                                            placeholder="https://www.twitter.com" value="{{ $social->twitter }}">
                                        <div>
                                            <a href="#" class="btn trash">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="links-info">
                                <div class="row form-row links-cont">
                                    <div class="form-group form-placeholder d-flex">
                                        <button class="btn social-icon">
                                            <i class="feather-youtube"></i>
                                        </button>
                                        <input type="url" class="form-control" name="youtube"
                                            placeholder="https://www.youtube.com" value="{{ $social->youtube }}">
                                        <div>
                                            <a href="#" class="btn trash">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="links-info">
                                <div class="row form-row links-cont">
                                    <div class="form-group form-placeholder d-flex">
                                        <button class="btn social-icon">
                                            <i class="feather-linkedin"></i>
                                        </button>
                                        <input type="url" class="form-control" name="linkedin"
                                            placeholder="https://www.linkedin.com" value="{{ $social->linkedin }}">
                                        <div>
                                            <a href="#" class="btn trash">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="links-info">
                                <div class="row form-row links-cont">
                                    <div class="form-group form-placeholder d-flex">
                                        <button class="btn social-icon">
                                            <i class="feather-link"></i>
                                        </button>
                                        <input type="url" class="form-control" name="others"
                                            placeholder="https://www.otherlinks.com" value="{{ $social->others }}">
                                        <div>
                                            <a href="#" class="btn trash">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="settings-btns">
                                <button type="submit" class="btn btn-orange">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
