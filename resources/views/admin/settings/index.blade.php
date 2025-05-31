@extends('layouts.admin')

@section('title') {{ __('Settings') }} @endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Settings') }}</h1>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('General Settings') }}</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('Tag Line') }}</label>
                                    <input type="text" class="form-control" name="settings[application_name]" id="application_name" value="{{ old('settings.application_name', $setting->application_name) }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Header Logo') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="header_logo" id="header_logo">
                                            <label class="custom-file-label" for="header_logo">{{ __('Choose Image') }}</label>
                                        </div>
                                    </div>
                                    @if(!empty($setting->header_logo))
                                    <img src="{{ asset('storage/app/public/settings/'.$setting->header_logo) }}" style="height: 46px;" class="mt-2">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Footer Logo') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="footer_logo" id="footer_logo">
                                            <label class="custom-file-label" for="footer_logo">{{ __('Choose Image') }}</label>
                                        </div>
                                    </div>
                                    @if(!empty($setting->footer_logo))
                                    <img src="{{ asset('storage/app/public/settings/'.$setting->footer_logo) }}" style="height: 45px;" class="mt-2">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Footer Text') }}</label>
                                    <textarea class="form-control" name="settings[footer_text]" id="footer_text" rows="2">{{ old('settings.footer_text', $setting->footer_text) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Copyright') }}</label>
                                    <input type="text" class="form-control" name="settings[copyright]" id="copyright" value="{{ old('settings.copyright', $setting->copyright) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="hidden" name="submit" value="general_setting">
                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Social Media Settings') }}</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('Facebook URL') }}</label>
                                    <input type="text" class="form-control" name="settings[facebook_url]" id="facebook_url" value="{{ old('settings.facebook_url', $setting->facebook_url) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Twitter URL') }}</label>
                                    <input type="text" class="form-control" name="settings[twitter_url]" id="twitter_url" value="{{ old('settings.twitter_url', $setting->twitter_url) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('LinkedIn URL') }}</label>
                                    <input type="text" class="form-control" name="settings[linkedin_url]" id="linkedin_url" value="{{ old('settings.linkedin_url', $setting->linkedin_url) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Instagram URL') }}</label>
                                    <input type="text" class="form-control" name="settings[instagram_url]" id="instagram_url" value="{{ old('settings.instagram_url', $setting->instagram_url) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Youtube URL') }}</label>
                                    <input type="text" class="form-control" name="settings[youtube_url]" id="youtube_url" value="{{ old('settings.youtube_url', $setting->youtube_url) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="hidden" name="submit" value="social_media_setting">
                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Contact Settings') }}</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('Contact Address') }}</label>
                                    <textarea class="form-control" name="settings[contact_address]" id="contact_address" rows="2">{{ old('settings.contact_address', $setting->contact_address) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Contact Email') }}</label>
                                    <input type="text" class="form-control" name="settings[contact_email]" id="contact_email" value="{{ old('settings.contact_email', $setting->contact_email) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Contact Phone') }}</label>
                                    <input type="text" class="form-control" name="settings[contact_phone]" id="contact_phone" value="{{ old('settings.contact_phone', $setting->contact_phone) }}" title="Please enter a valid phone number (format: +91 0123456789)" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Contact Phone (Optional)') }}</label>
                                    <input type="text" class="form-control" name="settings[contact_phone_optional]" id="contact_phone_optional" value="{{ old('settings.contact_phone_optional', $setting->contact_phone_optional) }}" title="Please enter a valid phone number (format: +91 0123456789)" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="hidden" name="submit" value="contact_setting">
                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Seo Settings') }}</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('Meta Title') }}</label>
                                    <input type="text" class="form-control" name="settings[meta_title]" id="meta_title" value="{{ old('settings.meta_title', $setting->meta_title) }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Meta Description') }}</label>
                                    <textarea class="form-control" name="settings[meta_description]" id="meta_description" rows="2">{{ old('settings.meta_description', $setting->meta_description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Meta Keywords') }}</label>
                                    <textarea class="form-control" name="settings[meta_keywords]" id="meta_keywords" rows="2">{{ old('settings.meta_keywords', $setting->meta_keywords) }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="hidden" name="submit" value="seo_setting">
                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('scripts')
<!-- bs-custom-file-input -->
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
@endsection
