


<!-- Modal التسجيل -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('frontend.register.post') }}" method="POST" class="modal-content" id="formRegister">
            @csrf
            <div class="modal-header border-0">
                
            </div>
            <div class="modal-body pb-5">
                <!-- حقل اسم المستخدم -->



                <a href="https://t.me/mdraaf" class="btn btn-primary fw-bolder text-uppercase w-100 text-white mb-2" target="_blank">Contact Admin</a>
            </div>
        </form>
    </div>
</div>
