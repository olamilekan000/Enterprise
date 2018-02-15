//SLIDES AND HIDES TITLE 'CAMEL FINANCIALS'
// $("#title").hide().slideDown(3000);
// $(".right").hide().fadeToggle(2000);

$('#tagz').hide(function(){
	$('#tagz').fadeToggle(2000)
})

//
$("input").change(function(){

	var $debit = $("input.num1").val();
	var $credit = $("input.num2").val();
	var $ans = $debit - $credit;
	$("input.subt").val(addCommas($ans));
	
});


$("input.subt").hover(function(){

	var $dr = $("input.num1").val();	
	var $cr = $("input.num2").val();	
	$("input.num1").val(addCommas($dr));
	$("input.num2").val(addCommas($cr));

});


$("input.amtData").focusout(function(){

	var $amt = $("input.amtData").val();		
	$("input.amtData").val(addCommas($amt));

});

$("input.finYrData").focusout(function(){


	var mnth = $("input.month").val();
	var daiy = $("input.Day").val();
	var finYrData = $("input.finYrData").val();
	if (mnth != "" && daiy != "" && finYrData != "") {

		var transDateData = daiy+"/"+mnth+"/"+finYrData;
		$("input.dateData").val(transDateData);
	}

});

function addCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

function clear(){

	$("input.vhnum").val("");
	$("input.finYrData").val("");
	$("input.periodData").val("");
	$("textarea.narrData").val("");
	$("input.amtData").val("0.00");
}

function edit(){
	alert($($dialog).find('input.vh').val());
}

// function delData(){
// 	$('button#botn').hover(function(){
// 		alert($(this).closest('tr').children('td:eq(0)').text());
// 		$('input.vh').text($(this).closest('tr').children('td:eq(0)').text());
// 		$('input.td').text($(this).closest('tr').children('td:eq(1)').text());
// 		$('input.fy').text($(this).closest('tr').children('td:eq(2)').text()); 
// 		$('input.perd').text($(this).closest('tr').children('td:eq(3)').text());  
// 		$('input.dy').text($(this).closest('tr').children('td:eq(4)').text()); 	
// 		$('input.mnt').text($(this).closest('tr').children('td:eq(5)').text()); 	
// 		$('input.sgn').text($(this).closest('tr').children('td:eq(6)').text()); 	
// 		$('input.nrr').text($(this).closest('tr').children('td:eq(7)').text()); 	
// 		// $('input .').val($(this).closest('tr').children('td:eq(8)').text());
// 		// $('input .').val($(this).closest('tr').children('td:eq(9)').text());
// 	});	
// 	// var clickedcell = $(this.target).closest('tr');
// 	// alert(clickedcell.children('td').text());
// }


var vhnData;
var daiy;
var mnth;
var finYrData;
var periodData;
var narrData;
var amtData;
var typeData;
var acctCodeData;
var signData;
var transDateData;	
var $table;	 	 	

function vals(){
	
	vhnData = $("input.vhnum").val();
	daiy = $("input.Day").val();
	mnth = $("input.month").val();
	finYrData = $("input.finYrData").val();
	periodData = $("input.periodData").val();
	narrData = $("textarea.narrData").val();
	amtData = $("input.amtData").val();
	typeData = $("select.typeData").val();
	acctCodeData = $("select.acctCodeData").val();
	signData = $("select.signData").val();
	transDateData = daiy+"/"+mnth+"/"+finYrData;
}

function takeInput(){
		
	vals();	
	
	if(vhnData == "" || 
		finYrData == "" || 
		periodData == "" || 
		narrData == "" || 
		amtData == "" || 
		typeData == "" || 
		acctCodeData == "" || 
		signData == "" ){
			
		alert("Fields Cannot Be Empty");

	}else{
		$.ajax({
			type:'POST',
			// url:'../php/INSERT.php',
			data:{
				vhnData2: vhnData,
				daiy2: daiy,
				mnth2: mnth,
				finYrData2: finYrData,
				periodData2: periodData,
				narrData2: narrData,
				amtData2: amtData,
				typeData2: typeData,
				acctCodeData2: acctCodeData,
				signData2: signData,
				transDateData2: transDateData,
			},
			success:function(){
					
				$table = $(
				'<tr class ="tdataz">'+
				    '<td class="hn">'+vhnData+'</td>'+
				    '<td>'+transDateData+'</td>'+
				    '<td>'+finYrData+'</td>'+
				    '<td>'+periodData+'</td>'+
				    '<td>'+daiy+'</td>'+
				    '<td>'+mnth+'</td>'+
				    '<td>'+narrData+'</td>'+
				    '<td>'+amtData+'</td>'+
				    '<td>'+typeData+'</td>'+
				    '<td>'+acctCodeData+'</td>'+
				    '<td>'+signData+'</td>'+
				    '<td><button type="button" id="editText" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalDelete">[X]</button></td>'+
				    '<td class="tdata"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalDelete" onclick="delData()" id="botn">[X]</button></td>'+
				'</tr>')
				$("tbody").append($table);	
				},
				error:function(){
					alert("error");
				}
			});
		clear();
	}
}

$('#editText').click(function(){
	// $('input.vh').text($(this).closest('tr').children('td:eq(0)').text());
	 // $('input.vh').val($('input.hn').text());
})

function create(){
	// alert($('#textbox').val())
	var crtTxt = $('#textbox').val();
	var crtinsrt = $('#insrt').val();
	var creatnarr = $('#crtnarr').val();
	if( crtTxt != "" && creatnarr != ""){
		$.ajax({
			type:'POST',
			url:'../php/INSERT.php',
			data:{
				crtTxt2: crtTxt,
				creatnarr2: creatnarr,
				crtinsrt2: crtinsrt,
			},
			success:function(){
				alert('success');
			},
			error:function(){
				alert('error');
			}
		});

	}

}







































