<!-- Unauthenticated Modal -->
<div class="modal fade" id="errorLoginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pt-1 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span>x</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h2 class="text-primary mb-3">@lang('web.modals.errors.login.title')</h2>
                <p class="text-white">@lang('web.modals.errors.login.text')</p>
            </div>
            <div class="modal-footer border-0 pt-0 pb-4">
                <button type="button" class="btn btn-primary fw-bolder text-uppercase mx-auto" data-bs-dismiss="modal">@lang('web.modals.errors.login.btn')</button>
            </div>
        </div>
    </div>
</div>