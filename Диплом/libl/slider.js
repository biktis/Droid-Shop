const rangeslider=document.getElementById('range-slider');
if(rangeslider){
	noUiSlider.create(rangeslider, {
    start: [500, 9999],
    connect: true,
    step:1,
    range: {
        'min': 500,
        'max': 9999
    }
});
	const input1=document.getElementById('input-1');
	const input2=document.getElementById('input-2');
	const inputs=[input1,input2];
	rangeslider.noUiSlider.on('update',function(values,handle){
inputs[handle].value=Math.round(values[handle]);
	});
	const setRangeSlider=(i,value)=>{
		let arr=[null,null];
		arr[i]=value;

		rangeslider.noUiSlider.set(arr);
	};
	inputs.forEach((el,index)=>{
		el.addEventListener('change',(e)=>{
			setRangeSlider(index,e.currentTarget.value);
		});
	});
}