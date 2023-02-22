<x-app-layout>
    <x-slot name="title">Settings</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Localization Details</h5>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('localization') }}" method="POST">@csrf
                        <div class="settings-form">
                            <div class="form-group">
                                <label>Time Zone</label>
                                <select class="select form-control" name="timezone">
                                    <option {{ $settings['timezone'] == 'Asia/Kolkata' ? 'selected' : '' }}
                                        value="Asia/Kolkata">Asia/Kolkata
                                    </option>
                                    <option value="Asia/Singapore"
                                        {{ $settings['timezone'] == 'Asia/Singapore' ? 'selected' : '' }}>Asia/Singapore
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date Format</label>
                                <select class="select form-control" name="date_format">
                                    <option value="d M Y" {{ $settings['date_format'] == 'd M Y' ? 'selected' : '' }}>
                                        15 May 2016</option>
                                    <option value="d/m/Y" {{ $settings['date_format'] == 'd/m/Y' ? 'selected' : '' }}>
                                        15/05/2016</option>
                                    <option value="d.m.y" {{ $settings['date_format'] == 'd.m.y' ? 'selected' : '' }}>
                                        15.05.2016</option>
                                    <option value="d-m-y" {{ $settings['date_format'] == 'd-m-y' ? 'selected' : '' }}>
                                        15-05-2016</option>
                                    <option value="y/m/d" {{ $settings['date_format'] == 'y/m/d' ? 'selected' : '' }}>
                                        2016/05/15</option>
                                    <option value="y-m-d" {{ $settings['date_format'] == 'y-m-d' ? 'selected' : '' }}>
                                        2016-05-15</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Time Format</label>
                                <select class="select form-control" name="time_format">
                                    <option value="h:i:s A"
                                        {{ $settings['time_format'] == 'h:i:s A' ? 'selected' : '' }}>12
                                        Hours</option>
                                    <option value="H:i:s" {{ $settings['time_format'] == 'H:i:s' ? 'selected' : '' }}>
                                        24
                                        Hours</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Currency Symbol</label>
                                <select class="select form-control" name="currency">
                                    <option value="$" {{ $settings['currency'] == '$' ? 'selected' : '' }}>$
                                    </option>
                                    <option value="₹" {{ $settings['currency'] == '₹' ? 'selected' : '' }}>₹
                                    </option>
                                    <option value="£" {{ $settings['currency'] == '£' ? 'selected' : '' }}>£
                                    </option>
                                    <option value="€" {{ $settings['currency'] == '€' ? 'selected' : '' }}>€
                                    </option>
                                </select>
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
</x-app-layout>
