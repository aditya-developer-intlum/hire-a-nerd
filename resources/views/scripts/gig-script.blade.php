<script type="text/javascript">




$(function(){

	$("#gig_title_input").on('keyup',function(e) {

		$("gigTitle").html($(this).val().length);

		if (this.value.length == 80) {
            e.preventDefault();
        } else if (this.value.length > 80) {
            // Maximum exceeded
            this.value = this.value.substring(0, 80);
        }

	});

	$("#describe_your_gig").on('keyup',function(e) {

		$("BrieflyDescribeYourGig").html($(this).val().length);

		if (this.value.length == 1200) {
            e.preventDefault();
        } else if (this.value.length > 1200) {
            // Maximum exceeded
            this.value = this.value.substring(0, 1200);
        }

        if(this.value.length < 120) {
        	 e.preventDefault();
        	 $(".min_description").addClass('text-danger');
        } else {

        	$(".min_description").removeClass('text-danger');
        }

	});


	$("#requirement").on('keyup',function(e) {

		$("requirement").html($(this).val().length);

		if (this.value.length == 450) {
            e.preventDefault();
        } else if (this.value.length > 450) {
            // Maximum exceeded
            this.value = this.value.substring(0, 450);
        }

	});


	document.getElementById("_agntFile-1").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
    	 console.log(e.target.result);
        // get loaded data and render thumbnail.
        //document.getElementById("image").src = e.target.result;
   		$("#_agntFile1_label").html(`<img src="${e.target.result}" alt="" class="_attIcon">`);
        console.log(e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
}
	document.getElementById("_agntFile-2").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
    	 console.log(e.target.result);
        // get loaded data and render thumbnail.
        //document.getElementById("image").src = e.target.result;
   		$("#_agntFile2_label").html(`<img src="${e.target.result}" alt="" class="_attIcon">`);
        console.log(e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
}
	document.getElementById("_agntFile-3").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
    	 console.log(e.target.result);
        // get loaded data and render thumbnail.
        //document.getElementById("image").src = e.target.result;
   		$("#_agntFile3_label").html(`<img src="${e.target.result}" alt="" class="_attIcon">`);
        console.log(e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
}




});

$("#gig_overview").click(function(){

	$.ajax({
		url: '{{ url("api/gig-overview/create") }}',
		type: 'POST',
		dataType: 'json',
		data: {

			  id: "{{ Auth::id() }}",
		      "gig_title": $("#gig_title_input").val(),
		      "category": $("#gig_category_input").val(),
		      "sub_category": $("#gig_sub_category_input").val(),
		      "tags" : $("#tags").val(),
            },
	})
	.done(function(res) {

		$("#gig_title_label,#gig_category_label,#tag_label,#gig_sub_category_label").removeClass('text-danger');
		$("#overview_tick").html("&#10004;").css("background-color","#45c327");
		$("#overview_tick").parent().parent().addClass('active _completed');
		window.location.reload();
		$("#Pricing").attr('href','#gPricing').trigger('click');
	})
	.fail(function(e) {
		let error = e.responseJSON.errors;

		error.gig_title?
		$("#gig_title_label").addClass('text-danger'):
		$("#gig_title_label").removeClass('text-danger');

		error.category?
		$("#gig_category_label").addClass('text-danger'):
		$("#gig_category_label").removeClass('text-danger');

		error.sub_category?
		$("#gig_sub_category_label").addClass('text-danger'):
		$("#gig_sub_category_label").removeClass('text-danger');

		error.tags?
		$("#tag_label").addClass('text-danger'):
		$("#tag_label").removeClass('text-danger');

	});


});
	$("#gig_overview_cancel").click(function(){

			$("#gig_title_input").val("");
		    $("#gig_category_input").val("");
		    $('#tags').importTags('');

	});

$(".skills_price").click(function(){

    $('.skills_price')
    .not(':checked')
    .prop('disabled', $('.skills_price:checked').length == 5);
});
$(function(){
	 $('.skills_price')
    .not(':checked')
    .prop('disabled', $('.skills_price:checked').length == 5);
});

$("#price_form").submit(function(event){
	event.preventDefault(); //prevent default action
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission

	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){
		$("#price_validation_error").hide();

		$("#pricing_tick").html("&#10004;").css("background-color","#45c327");
        $("#pricing_tick").parent().parent().addClass('active _completed');

        $(`textarea[name='basic_package_name'],
        	textarea[name='standard_package_name'],
			textarea[name='premium_package_name'],
			textarea[name='basic_description'],
			textarea[name='standard_description'],
			textarea[name='premium_description'],
			select[name='basic_delivery_day'],
			select[name='standard_delivery_day'],
			select[name='premium_delivery_day'],
			select[name='basic_price'],
			select[name='standard_price'],
			select[name='premium_price']

        	`).removeClass('errDanger');
		$("#Desc").attr('href','#gDesc').trigger('click');

		 return false;
	}).fail(function(e){
		let err = e.responseJSON.errors;

		$("#price_validation_error ul").empty();
		$("#price_validation_error").show();
		if(err == undefined){
			$("#price_validation_error").hide();
		}
		$.each(err, function(index, val) {

		$("#price_validation_error ul").append(`<li style='color:black'>${val}</li>`);

		});
			if(err.basic_package_name){

				$("textarea[name='basic_package_name']").addClass('errDanger');
			} else {

				$("textarea[name='basic_package_name']").removeClass('errDanger');
			}
			if (err.standard_package_name) {
				$("textarea[name='standard_package_name']").addClass('errDanger');
			} else {
				$("textarea[name='standard_package_name']").removeClass('errDanger');
			}
			if (err.premium_package_name) {
				$("textarea[name='premium_package_name']").addClass('errDanger');
			} else {
				$("textarea[name='premium_package_name']").removeClass('errDanger');
			}
			if (err.basic_description) {
				$("textarea[name='basic_description']").addClass('errDanger');
			} else {
				$("textarea[name='basic_description']").removeClass('errDanger');
			}
			if (err.standard_description) {
				$("textarea[name='standard_description']").addClass('errDanger');
			} else {
				$("textarea[name='standard_description']").removeClass('errDanger');
			}
			if (err.premium_description) {
				$("textarea[name='premium_description']").addClass('errDanger');
			} else {
				$("textarea[name='premium_description']").removeClass('errDanger');
			}
			if (err.basic_delivery_day) {
				$("select[name='basic_delivery_day']").addClass('errDanger');
			} else {
				$("select[name='basic_delivery_day']").removeClass('errDanger');
			}
			if (err.standard_delivery_day) {
				$("select[name='standard_delivery_day']").addClass('errDanger');
			} else {
				$("select[name='standard_delivery_day']").removeClass('errDanger');
			}
			if (err.premium_delivery_day) {
				$("select[name='premium_delivery_day']").addClass('errDanger');
			} else {
				$("select[name='premium_delivery_day']").removeClass('errDanger');
			}
			if (err.basic_price) {
				$("select[name='basic_price']").addClass('errDanger');
			} else {
				$("select[name='basic_price']").removeClass('errDanger');
			}
			if (err.standard_price) {
				$("select[name='standard_price']").addClass('errDanger');
			} else {
				$("select[name='standard_price']").removeClass('errDanger');
			}
			if (err.premium_price) {
				$("select[name='premium_price']").addClass('errDanger');
			} else {
				$("select[name='premium_price']").removeClass('errDanger');
			}

		 $('html, body').animate({

       			 scrollTop: $("#package_label").offset().top

    		}, 2000);

	});
});

$("#description_and_faq").submit(function(e){

	e.preventDefault();

		//console.log(new FormData(this));
		var form = $('#description_and_faq')[0];

		// Create an FormData object
        var data = new FormData(form);
         data.append("widget_three", 1);


	$.ajax({
		url: '{{ url("api/gig-description/create/".Auth::id()) }}',
		type: 'POST',
		dataType: 'json',
		enctype: 'multipart/form-data',
		data: data,
		processData: false,
        contentType: false,
        cache: false,
        success:function(data){
        		$("#deck_tick").html("&#10004;").css("background-color","#45c327");
        		$("#deck_tick").parent().parent().addClass('active _completed');
		   		$("#Requirment").attr('href','#gRequirment').trigger('click');
        },
        error:function(e){
        		if(e.responseJSON.errors.describe_your_gig)
				{
					$("#describe_your_gig_label").addClass('text-danger');

						Swal.fire({
						  type: 'error',
						  text: `${e.responseJSON.errors.describe_your_gig}`,
						})
				}
        }
	});

});
$("#requirement_submit").click(function(){
	$.ajax({
		url: '{{ url("api/gig-requirement/create/".Auth::id()) }}',
		type: 'POST',
		dataType: 'json',
		data: {
			requirement: $("#requirement").val(),
			answer_type: $("#answer_type").val(),
			is_mandatory: $("#is_mandatory").val(),
			widget_four: 1,
		},
	})
	.done(function() {

		$("#requirement_tick").html("&#10004;").css("background-color","#45c327");
        $("#requirement_tick").parent().parent().addClass('active _completed');
		 $("#gallery").attr('href','#gGallery').trigger('click');
		$("#answer_type_label").removeClass('text-danger');
		$("#requirement_label").removeClass('text-danger');

	})
	.fail(function(e) {

		let  error = e.responseJSON.errors;

		if(error.requirement!="")
		{
			$("#requirement_label").addClass('text-danger');
		} else {
   			$("#requirement_label").removeClass('text-danger');
		}
		if(error.answer_type)
		{
			$("#answer_type_label").addClass('text-danger');
		} else {
   			$("#answer_type_label").removeClass('text-danger');
		}
	});

});

$("#gallery_form").submit(function(event){
	event.preventDefault(); //prevent default action
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = new FormData(this); //Encode form elements for submission
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
		contentType: false,
        cache: false,
   		processData:false
	}).done(function(response){

		$("#gallery_tick").html("&#10004;").css("background-color","#45c327");
        $("#gallery_tick").parent().parent().addClass('active _completed');
		  $("#publish").attr('href','#gPublish').trigger('click');
		 return false;
	}).fail(function(e){

		$("INPUT[name=gig_photo_one]").notify(e.responseJSON.errors.gig_photo_one[0]);
		$("INPUT[name=gig_photo_two]").notify(e.responseJSON.errors.gig_photo_two[0]);
		$("INPUT[name=gig_photo_three]").notify(e.responseJSON.errors.gig_photo_three[0]);
		$("INPUT[name=gig_video]").notify(e.responseJSON.errors.gig_video[0]);
		$("INPUT[name=gig_pdf_one]").notify(e.responseJSON.errors.gig_pdf_one[0]);
		$("INPUT[name=gig_pdf_two]").notify(e.responseJSON.errors.gig_pdf_two[0]);

	});
});

$("#publish_gig").click(function(){

	$.ajax({
		url: '{{ url("api/gig-publish/create/".Auth::id()) }}',
		type: 'POST',
		data:{gig_id: "{{ $id ?? '' }}"},
		dataType: 'json',
	})
	.done(function(payload) {

		switch(payload) {

  			case "widget_five":

  				   	$("#gallery").trigger('click');

   			break;

		 	case "widget_four":

		    		$("#Requirment").trigger('click');

		    break;

		    case "widget_three":

		    		$("#Desc").trigger('click');

		    break;

		    case "widget_two":

		    	  	$("#Pricing").trigger('click');

		    break;

		    case "widget_one":

		    	 	$("#overview").trigger('click');

		    break;

		    case "success":

		    	 	window.location.href="{{ url("/") }}";

		    break;

  			default:

		}
	})
	.fail(function(e) {
		//console.log(e);
	});


});


</script>

