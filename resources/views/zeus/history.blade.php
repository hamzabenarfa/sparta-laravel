@extends('frontend.zeus.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('styles')
<link href="/web/vendor/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="/web/vendor/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<link href="/web/vendor/table/datatable/datatables.css" rel="stylesheet" type="text/css">
<link href="/web/vendor/table/datatable/dt-global_style.css" rel="stylesheet" type="text/css">

<style>
    /* تصميم الـ th الخاص بالجداول */
    .table-history th {
        color: #ffff;
        background: linear-gradient(139deg, #1c1e36 , #9C27B0);
        border-left: 1px solid #9E9E9E;
        border-right: 1px solid #9E9E9E;
        font-weight: 600;
        line-height: 26px;
        text-shadow: none;
        padding: 0.5em;
    }
    /* تحسين مظهر الـ td */
    .table-history td {
        color: #fff;
        background-color: #1c1e36;
    }

    .table-history a {
        color: #9C27B0;
        font-weight: 600;
    }
</style>
@endsection

@section('content')

<div class="container-xl history">
	<div class="row g-0">
		<div class="col-12 px-3">
			<h3 class="text-white mb-4"><span class="fa fa-table"></span> @lang('web.history.title')</h3>
		</div>

		<div class="col-12 px-3 mb-4">
			<form action="{{ route('frontend.profile.history') }}" method="GET" class="row">
				<div class="form-group col-md-3 col-12 mb-2">
					<div class="datepicker-field position-relative">
						<input type="text" name="start" class="form-control date" placeholder="@lang('form.start date.placeholder')" id="flatpickr">
						<button type="button" id="calendar-button" class="btn btn-primary">
							<span class="fas fa-calendar text-white"></span>
						</button>
					</div>
				</div>

				<div class="col-md-3 col-12">
					<button type="submit" class="btn btn-primary fw-bold text-uppercase">@lang('form.buttons.search')</button>
				</div>
			</div>			
		</div>

		<div class="col-12 px-3">
			<div class="table-responsive">
				<table class="table table-history">
					<thead>
						<tr>
							<th>@lang('web.history.table.head.date')</th>
							<th>@lang('web.history.table.head.game')</th>
							<th>@lang('web.history.table.head.bet')</th>
							<th>@lang('web.history.table.head.win')</th>
						</tr>
					</thead>
					<tbody>
						@forelse($records as $record)
						<tr>
							<td class="text-white">{{ date('Y-m-d H:i', strtotime($record->date_time)) }}</td>
							<td>
								<a href="{{ route('frontend.game.go', $record->game) }}?api_exit=/" class="text-primary">{{ $record->game }}</a>
							</td>
							<td class="text-white">
                                {{ is_numeric($record->bet) ? number_format($record->bet, 2, '.', ',') : $record->bet }} TND
                            </td>
							<td class="text-white">
                                {{ is_numeric($record->win) ? number_format($record->win, 2, '.', ',') : $record->win }} TND
                            </td>
						</tr>
						@empty
						<tr class="empty">
							<td colspan="4">@lang('web.history.table.empty')</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script src="/web/vendor/flatpickr/flatpickr.js"></script>
<script src="/web/vendor/flatpickr/es.js"></script>
<script src="/web/vendor/table/datatable/datatables.js"></script>
<script>
    // تهيئة Flatpickr لتقويم التاريخ
    document.addEventListener("DOMContentLoaded", function() {
        // الحصول على تاريخ اليوم تلقائيًا
        var today = new Date().toISOString().split('T')[0];

        var calendarInput = flatpickr("#flatpickr", {
            dateFormat: "Y-m-d",
            defaultDate: today, // إعداد تاريخ اليوم كالتاريخ الافتراضي
            locale: "es",
        });

        // عند الضغط على زر التقويم، افتح الـ Flatpickr
        document.getElementById("calendar-button").addEventListener("click", function() {
            calendarInput.open();
        });

        // إعادة توجيه الصفحة عند إدخال تاريخ
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            var startDate = document.querySelector('[name="start"]').value || today; // استخدم تاريخ اليوم إذا لم يتم إدخال أي تاريخ

            // تحقق من إدخال التاريخ
            if (startDate) {
                // إعادة توجيه مع التاريخ في الرابط
                window.location.href = "{{ route('frontend.profile.history') }}?start=" + startDate;
            }
        });
    });
</script>
@endsection
