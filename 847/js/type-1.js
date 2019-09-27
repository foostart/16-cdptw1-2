$(document).ready(function(){
	 $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            }
    );
	$('#btnClear').click(function(){				
					if(confirm("Want to clear?")){
						/*Clear all input type="text" box*/
						$('#form1 input[type="text"]').val('');
						/*Clear textarea using id */
						$('#form1 #message').val('');
					}					
				});
			});