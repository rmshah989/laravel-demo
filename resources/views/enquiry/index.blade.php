@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Task
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/save-enquiry" method="POST" name="form-enquiry" id="form-enquiry" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name -->
						<div class="form-group">
							<label for="user_id" class="col-sm-3 control-label">User Name</label>

							<div class="col-sm-8">
								    <select class="js-data-user_id" name="user_id" id="user_id" style="width:100%">
								      <option value="">Search for User</option>
								    </select>
							</div>
						</div>

						<div class="form-group dependent-user_id" style="display:none">
							<label for="email_id" class="col-sm-3 control-label">User Email-ID</label>

							<div class="col-sm-8">
								<input type="text" name="email_id" id="email_id" value="" style="width:100%" disabled="true">
							</div>
						</div>
						<div class="form-group dependent-user_id">
							<label for="services" class="col-sm-3 control-label">Services</label>

							<div class="col-sm-8">
								<select class="js-data-services" name="services" id="services" style="width:100%">
							       <option value="">Select Service</option>
							       @foreach ($services as $service)
							       <option value="{{$service->id}}">{{$service->title}}</option>
							       @endforeach
							    </select>
							</div>
						</div>
						<div class="form-group">
							<label for="subjectarea" class="col-sm-3 control-label">Subject Area</label>

							<div class="col-sm-8">
								<select class="js-data-subjectarea" name="subjectarea" id="subjectarea" style="width:100%">
							      <option value="">Search Subject Area</option>
							    </select>
							</div>
						</div>

						<!-- Add Task Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Create Enquiry
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script>
	$(".js-data-services").select2();
    $(".js-data-user_id").select2({
      ajax: {
        url: "{{route('api',['method'=>'users'])}}",
        /*url:'https://api.github.com/search/repositories',*/
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          params.page = params.page || 1;
     
          return {
            results: data.items,
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 3,
      templateResult: formatUserSearchResults,
      templateSelection: formatUserSearchResultsSelection
    }).on("change", function(e) {
          // mostly used event, fired to the original element when the value changes
          console.log("change val=" + e.val);
        });

	$(".js-data-subjectarea").select2({
      ajax: {
        url: "{{route('api',['method'=>'subjectarea'])}}",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          params.page = params.page || 1;
     
          return {
            results: data.items,
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 3,
      templateResult: formatSASearchResults,
      templateSelection: formatSASearchResultsSelection
    });

	function formatSASearchResults (repo) {
      if (repo.loading) return repo.text;

      var markup = "<div>" +
          "<div>" + repo.title + "</div>"+
          "</div>";
     return markup;
    }

    function formatSASearchResultsSelection (repo) {
		return repo.title || repo.text;
    }

	function formatUserSearchResults (repo) {
      if (repo.loading) return repo.text;

      var markup = "<div>" +
          "<div>" + repo.name + "</div>"+
          "</div>";
     return markup;
    }

    function formatUserSearchResultsSelection (repo) {
		if(repo.id!=''){
		  $("#email_id").val(repo.email);
		  $(".dependent-user_id").show();
		}
		return repo.name || repo.text;
    }
    $(document).ready(function() {
    $('#form-enquiry').formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
                'user_id': {
                    validators: {
                        notEmpty: {
                            message: 'Please Select the Enquiry',
                        }
                    }
                },
                'services': {
                    validators: {
                        notEmpty: {
                            message: 'Please Select Service',
                        }
                    }
                },
                'subjectarea': {
                    validators: {
                        notEmpty: {
                            message: 'Please Select Subject Area',
                        }
                    }
                }
            }
	    });
	});
</script>
</script>
@endsection
