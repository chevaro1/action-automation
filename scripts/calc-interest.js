//define some sample data
 var tabledata = [
 	{id:1, name:"Oli Bob", age:"12", col:"red", dob:""},
 	{id:2, name:"Mary May", age:"1", col:"blue", dob:"14/05/1982"},
 	{id:3, name:"Christine Lobowski", age:"42", col:"green", dob:"22/05/1982"},
 	{id:4, name:"Brendon Philips", age:"125", col:"orange", dob:"01/08/1980"},
 	{id:5, name:"Margret Marmajuke", age:"16", col:"yellow", dob:"31/01/1999"},
 ];

 var tabledata = [
   {sdate:"01/01/2021", fdate:"", days:0, interestRate:0, dailyInterest:0, outstanding:0,interestPayable:0}
 ];

 //Create Date Editor
 var dateEditor = function(cell, onRendered, success, cancel, editorParams){
     var cellValue = cell.getValue(),
     input = document.createElement("input");

     input.setAttribute("type", "text");

     input.style.padding = "4px";
     input.style.width = "100%";
     input.style.boxSizing = "border-box";

     input.value = typeof cellValue !== "undefined" ? cellValue : "";

     onRendered(function(){
         input.style.height = "100%";
         $(input).datepicker(); //turn input into datepicker
         input.focus();
     });

     function onChange(e){
         if(((cellValue === null || typeof cellValue === "undefined") && input.value !== "") || input.value != cellValue){
             success(input.value);
         }else{
             cancel();
         }
     }

     //submit new value on blur or change
     input.addEventListener("change", onChange);
     input.addEventListener("blur", onChange);

     //submit new value on enter
     input.addEventListener("keydown", function(e){
         switch(e.keyCode){
             case 13:
             success(input.value);
             break;

             case 27:
             cancel();
             break;
         }
     });

     return input;
};

 //create Tabulator on DOM element with id "example-table"
 var table = new Tabulator("#example-table", {
  	height:205, // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
  	data:tabledata, //assign data to table
  	layout:"fitColumns", //fit columns to width of table (optional)
    reactiveData: true,
  	columns:[ //Define Table Columns
 	 	{title:"Start Date", field:"sdate", editor:dateEditor},
 	 	{title:"End Date", field:"fdate", sorter:"date", editor:dateEditor},
 	 	{title:"Days", field:"days"},
 	 	{title:"Interest Rate %", field:"interestRate", editor: true, cellEdited: function(cell)},
    {title:"Daily Interest Rate", field:"dailyInterest"},
    {title:"Amount Outstanding", field:"outstanding"},
    {title:"Interest Payable", field:"interestPayable"}
  	],
 });
