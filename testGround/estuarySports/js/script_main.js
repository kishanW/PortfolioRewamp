function doingStuff(thatElementId){
	
	var someArray = ["One", "Two", "Three"];
	console.log(
			someArray.map(
				function(i){
					return i.toUpperCase();
				}
			)
		);
}