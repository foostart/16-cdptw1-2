$(document).ready(function () {
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
	var input = document.querySelector('#Clear');
	var yourname = document.querySelector('#name');
	var email = document.querySelector('#email');
	var tel = document.querySelector('#tel');
	var mess = document.querySelector('#mess');
	input.addEventListener('click', function () {
		yourname.value = '';
		email.value = '';
		tel.value = '';
		mess.value = '';
	}, false);
	$("#Send").click(function(){
		alert("Thong tin da duoc luu!");
	});
	function email($str) {
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	var span = document.createElement('span');
	if (id == 'tel' && isNaN(value) == true) {
            span.innerHTML = 'Phone number not number!';
    }
});
