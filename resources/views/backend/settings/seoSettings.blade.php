<x-app-layout>
    <x-slot name="title">SEO Settings</x-slot>
    <x-settings-page />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">SEO Settings</h5>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('seo_settings.store') }}" method="POST">@csrf
                        <div class="settings-form">
                            <div class="form-group form-placeholder">
                                <label>Meta Title <span class="star-red">*</span></label>
                                <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                    name="meta_title" value="{{ $seo->meta_title }}">
                                <div class="text-danger pt-2">
                                    @error('meta_title')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Meta Keywords <span class="star-red">*</span></label>
                                <input type="text" data-role="tagsinput" class="input-tags form-control"
                                    placeholder="Meta Keywords" name="meta_keywords" value="{{ $seo->meta_keywords }}"
                                    id="services">
                                <div class="text-danger pt-2">
                                    @error('meta_keywords')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Meta Description <span class="star-red">*</span></label>
                                <input type="text"
                                    class="form-control @error('meta_description') is-invalid @enderror"
                                    name="meta_description" value="{{ $seo->meta_description }}">
                                <div class="text-danger pt-2">
                                    @error('meta_description')
                                        {{ $message }}
                                    @enderror
                                </div>
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
