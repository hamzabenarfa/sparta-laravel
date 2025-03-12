<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('frontend.auth.login.post') }}" method="POST" class="modal-content" id="formLogin">
            @csrf
            <div class="modal-header border-0">
                <h1 class="modal-title fw-bold text-center">@lang('web.modals.login.title')</h1>
            </div>
            <div class="modal-body pb-5">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="@lang('form.user.label')" id="username">
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="@lang('form.password.label')" id="password">
                </div>

              
                <button type="submit" class="btn btn-primary fw-bolder text-uppercase w-100">@lang('web.modals.login.btn')</button>
            </div>
        </form>
    </div>
</div>

