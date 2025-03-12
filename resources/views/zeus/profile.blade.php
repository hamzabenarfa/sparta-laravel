@extends('frontend.zeus.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('styles')
<link href="/web/vendor/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="/web/vendor/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="row g-0 py-3">
    <div class="col-12 px-2">

        <form action="{{ route('frontend.profile.update.details') }}" method="POST" class="card card-form mx-auto my-4" id="formProfile">
            @csrf
            <div class="card-header bg-transparent border-0 p-0">
                <h1 class="h5 text-primary fw-bolder text-uppercase mb-3">@lang('web.profile.title')</h1>
            </div>
            <div class="card-body px-0 pt-0">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="text-white mb-2">@lang('form.language.label')</label>
                        <select name="language" class="form-control @error('language') is-invalid @enderror" id="language">
                            <option value="es" @if(auth()->user()->language=='es') selected @endif>@lang('form.language.options.es.title')</option>
                            <option value="en" @if(auth()->user()->language=='en') selected @endif>@lang('form.language.options.en.title')</option>
                            <option value="pt" @if(auth()->user()->language=='pt') selected @endif>@lang('form.language.options.pt.title')</option>
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="text-white mb-2">@lang('form.user.label')</label>
                        <p class="text-white mb-0">{{ auth()->user()->username }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="firstname" class="text-white mb-2">@lang('form.name.label')</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="@lang('form.name.label')" value="{{ auth()->user()->first_name }}" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" id="firstname">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="lastname" class="text-white mb-2">@lang('form.lastname.label')</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="@lang('form.lastname.label')" value="{{ auth()->user()->last_name }}" id="lastname">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="flatpickr" class="text-white mb-2">@lang('form.birthday.label')</label>
                        <input type="text" name="birthday" class="form-control border border-white @error('birthday') is-invalid @enderror date" placeholder="@lang('form.birthday.label')" value="{{ auth()->user()->birthday?->format('d-m-Y') ?? '' }}" id="flatpickr">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="email" class="text-white mb-2">@lang('form.email.label')</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('form.email.label')" value="{{ auth()->user()->email }}" id="email">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="phone" class="text-white mb-2">@lang('form.phone.label')</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror number" placeholder="@lang('form.phone.label')" value="{{ auth()->user()->phone }}" id="phone">
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 px-0">
                <button type="submit" class="btn btn-primary fw-bolder text-uppercase w-100" action="profile">@lang('form.buttons.save')</button>
            </div>
        </form>

    </div>
</div>

@endsection

@section('scripts')
<script src="/web/vendor/flatpickr/flatpickr.js"></script>
<script src="/web/vendor/flatpickr/es.js"></script>
@endsection