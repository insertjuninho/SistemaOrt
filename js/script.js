

var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		easing: 'easeInOutBack'
		
	});
});
$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity,});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//plugin de animação
		easing: 'easeInOutBack'
	});
});


/*MUDAR A COR DO RADIO DEPIS DE CLICADO*/
$(document).ready(function(){
	$('input').on('click', function() {
		$('.radio').parent().css('opacity', '2');
		$('.radio:checked').parent().css('opacity', '0.4');
	});

});


//FILTRO DE TABLE 
$(document).ready(function(){
	$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});

//Formata campo
$(document).ready(function () { 
	var $campo = $(".press");
	$campo.mask('00/00', {reverse: true});
});

var $input    = document.getElementById('foto'),
$fileName = document.getElementById('file-name');

$input.addEventListener('change', function(){
	$fileName.textContent = this.value;
});


/*$(document).ready(function(){
	$('a[data-confirm]').click.(function(ev){
		var href = $(this).attr('href');
		if(!$('#confirm').length){
			$('body').append('<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Excuir Cadastro</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza que deseja excluir este cadastro?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">NÃO</button><a  class="btn btn-primary text-white" id="dataComfirmOK">SIM</a></div></div></div></div>	');
			}

			$('#dataComfirmOK').attr('href', href);
			$('#confirm').modal({show : true});
			return false;
		});



	});*/

