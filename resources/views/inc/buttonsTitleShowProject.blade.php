@if(!is_null($project->github_url))
	<div class="col-12 col-sm-3 my-auto">
		<div class="row">
			<div class="col-6 col-md-6 p-0 pr-1 mt-1">
				<a href="{{ url('projects_preview').'/project'.$project->id.'/' }}" target="_blank">
				<div class="col-12 btn btn-sm btn-secondary m-0">
					Podgląd<i class="icon-eye"></i>
				</div>
			</a>
			</div>
			<div class="col-6 col-md-6 p-0 pr-1 mt-1">
				<a href="{{ $project->github_url }}" target="_blank">
					<div class="col-12 btn btn-sm btn-secondary m-0">
						GitHub<i class="icon-github-circled-alt2"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
@endif