<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var token = $("[name=_token]").val();

		$("#country").change(function(){
			// Clear the state and city dropdowns
			$("#state").html('<option value="">-Select-</option>');
			$("#city").html('<option value="">-Select-</option>');

			$.post("/ajax/getstate", { country_id: $("#country").val(), _token: token })
				.done(function(data) {
					$("#state").html(data);
				})
				.fail(function() {
					alert("Error retrieving states.");
				});
		});

		$("#state").change(function(){
			// Clear the city dropdown
			$("#city").html('<option value="">-Select-</option>');

			$.post("/ajax/getcity", { state_id: $("#state").val(), _token: token })
				.done(function(data) {
					$("#city").html(data);
				})
				.fail(function() {
					alert("Error retrieving cities.");
				});
		});
	});
</script>
