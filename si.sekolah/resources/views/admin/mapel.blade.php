@extends('layouts.master')


@section('title')
	Dashboard | Admin
@endsection


@section('content')
		<h2 class="title1">Mata Pelajaran</h2>
		<div class="blank-page widget-shadow scroll" id="style-2 div1">
			<div class="table-responsive bs-example widget-shadow">
				<table class="table table-bordered">
					<thead> 
						<tr> 
							<th>#</th>
							<th> Mata pelajaran</th>
							<th> Aksi</th>
						</tr> 
					</thead> 
					<tbody> 
						<tr> 
							<th scope="row">1</th>
							<td>B.Indonesia</td>
							<td>  
								CRUD
							</td>
						</tr> 
					</tbody> 
				</table> 
			</div>
		</div>
@endsection

			