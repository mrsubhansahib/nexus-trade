@extends($activeTemplate . 'layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card custom--card">
                <div class="card-body">
                    <form class="account-form" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form--label">@lang('Current Password')</label>
                            <input type="password" name="current_password" class="form-control form--control"
                                autocomplete="current-password" required>
                        </div>
                        <div class="form-group">
                            <label class="form--label">@lang('Password')</label>
                            <input type="password" name="password"
                                class="form-control form--control @if (gs('secure_password')) secure-password @endif"
                                required autocomplete="current-password">
                        </div>
                        <div class="form-group">
                            <label class="form--label">@lang('Confirm Password')</label>
                            <input type="password" name="password_confirmation" class="form-control form--control" required
                                autocomplete="current-password">
                        </div>
                        <button type="submit" class="cmn--btn btn--lg w-100">@lang('Submit')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@if (gs('secure_password'))
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
