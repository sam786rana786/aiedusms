<x-app-layout>
    <x-slot name="title">Email Settings</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">SMTP Settings</h5>
                </div>
                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('emailsettings') }}">@csrf
                        <div class="settings-form">
                            <div class="form-group form-placeholder">
                                <label>Email From Address <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['email_from'] }}"
                                    name="email_from">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email Host <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['smtp_host'] }}"
                                    name="smtp_host">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email Port <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['smtp_port'] }}"
                                    name="smtp_port">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email Username <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['smtp_username'] }}"
                                    name="smtp_username">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email Password <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['smtp_password'] }}"
                                    name="smtp_password">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email <span class="star-red">*</span></label>
                                <input type="email" class="form-control" value="{{ $settings['smtp_email'] }}"
                                    name="smtp_email">
                            </div>
                            <div class="form-group form-placeholder">
                                <label>Email Security <span class="star-red">*</span></label>
                                <input type="text" class="form-control" value="{{ $settings['smtp_security'] }}"
                                    name="smtp_security">
                            </div>
                            <div class="form-group mb-0">
                                <div class="settings-btns">
                                    <button type="submit" class="btn btn-orange">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
