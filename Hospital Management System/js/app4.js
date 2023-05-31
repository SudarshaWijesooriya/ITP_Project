$(document).ready(function(){
	$.ajax({
		url:"http://localhost/hospitalNew/data1.php",
		method:"GET",
		success:function(data){
		//console.log(data);},
		    var name= [];
			var counts = [];
			var col = [];
				for(var i in data){
				name.push(data[i].Name);
				counts.push(data[i].Count);
				col.push('blue');	
				}
				//console.log(affliction);
				//console.log(counts);
				
				var chartdata = {
					labels :name,
					datasets:[{
					label : "Medicines of the Month",
					backgroundColor:'#324960',
					data:counts
					}]};
					
			var ctx = document.getElementById("mycanvas");
			var barGraph = new Chart(ctx,{
				type :'bar',
				data :chartdata,
				options :{
					
		                legend :{display : false},
	                    title:{
							   display:true,
							   //text :'Monthy Highest Medicine'
	                          }
	}
			});
		},
		
		error:function(data){
			//console.log(data);
		}
	});
	});














