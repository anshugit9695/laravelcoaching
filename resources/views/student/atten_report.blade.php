@extends('student.master')

@section('content')
<!-- Student Attendance Page -->
<div class="main-content-wrap">
	<div class="wg-box">
		<div class="flex items-center justify-between mb-20">
			<h3><i class="icon-file-text"></i> Student Attendence</h3>
		</div>

		<form class="row g-3 mb-4">
			<div class="col-md-4">
				<label class="form-label">From Date</label>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="dd / mm / yyyy">
					<span class="input-group-text"><i class="icon-calendar"></i></span>
				</div>
			</div>
			<div class="col-md-4">
				<label class="form-label">To Date</label>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="dd / mm / yyyy">
					<span class="input-group-text"><i class="icon-calendar"></i></span>
				</div>
			</div>
			<div class="col-md-2 align-self-end">
				<button type="button" class="btn btn-primary">Search</button>
			</div>

			<div class="col-12 mt-3">
				<label class="form-label">Select Date</label>
				<div class="d-flex align-items-center gap-3">
					<div class="input-group" style="max-width:320px">
						<input type="text" class="form-control" placeholder="dd / mm / yyyy">
						<span class="input-group-text"><i class="icon-calendar"></i></span>
					</div>
					<button type="button" class="btn btn-success">Search</button>
				</div>
			</div>
		</form>

		<div class="table-responsive mb-4">
			<table class="table table-bordered">
				<thead class="bg-light">
					<tr>
						<th>S.No.</th>
						<th class="text-center">Absent Dates</th>
						<th class="text-center">Students</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td class="text-center">
							<span class="badge bg-danger me-2">22-05-2026</span>
							<span class="badge bg-danger me-2">23-05-2026</span>
							<span class="badge bg-danger">24-05-2026</span>
						</td>
						<td class="text-center">TANISH CHOUHAN</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr class="text-center">
						<th>S.No.</th>
						<th>Date</th>
						<th>P/A</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<tr>
						<td>1</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /Student Attendance Page -->
@endsection
