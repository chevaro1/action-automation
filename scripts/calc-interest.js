//define some sample data
 var tabledata = [
 	{id:1, name:"Oli Bob", age:"12", col:"red", dob:""},
 	{id:2, name:"Mary May", age:"1", col:"blue", dob:"14/05/1982"},
 	{id:3, name:"Christine Lobowski", age:"42", col:"green", dob:"22/05/1982"},
 	{id:4, name:"Brendon Philips", age:"125", col:"orange", dob:"01/08/1980"},
 	{id:5, name:"Margret Marmajuke", age:"16", col:"yellow", dob:"31/01/1999"},
 ];

 var tabledata = [
   {sdate:"", fdate:"", days:0, interestRate:0, dailyInterest:0, outstanding:0, interestPayable:0}
 ];

 // new Date("dateString") is browser-dependent and discouraged, so we'll write
// a simple parse function for U.S. date format (which does no error checking)
function parseDate(str) {
    var mdy = str.split('/');
    return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

function datediff(first, second) {
    // Take the difference between the dates and divide by milliseconds per day.
    // Round to nearest whole number to deal with DST.
    return Math.round((second-first)/(1000*60*60*24));
}

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
        $(input).datepicker({
            onClose: onChange
        }); //turn input into datepicker
        input.focus();
    });

    function onChange(e){
        if(((cellValue === null || typeof cellValue === "undefined") && input.value !== "") || input.value != cellValue){
            success(input.value);
        }else{
            cancel();
        }
    }

    return input;
};

var dailyInterest = function(value, data, type, params, component){
  //console.log("daily interest called" + value);
  if(value == 0) {
    return 0;
  }
  var val = value;
  //val = val.slice(0, -1);
  var res = (val / 100) / 365;
  //console.log("array value for daily interest = " + tabledata[0].dailyInterest);
  return res.toFixed(9);
};

var interestPayable = function(value, data, type, params, component){
    console.log("interest payable days = " + data.days);
    console.log("interest payable daily interest = " + data.interestRate);
    console.log("interest payable outstanding = " + data.outstanding);

    if(data.outstanding === 0 || data.interestRate === 0 || data.days === 0) {
      return 0;
    }

    var val = data.interestRate;
    console.log("daily payable interest start val = " + val);
    var res = (val / 100) / 365;
    res = res.toFixed(9);
    console.log("daily payable interest = " + res);

    console.log("total = " + (data.outstanding * res * data.days));
    var total = (data.outstanding * res * data.days);
    data.interestPayable = total;
    console.log("interest payable value = " + data.interestPayable);
    console.log("array value for total = " + tabledata[0].interestPayable);
    //data.interestPayable.setValue(total);
    return total.toFixed(2);

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
 	 	{title:"Days", field:"days", editor:"input", formatter: function(cell){
      return cell.getValue();
    }, cellEdited: function(cell) {
      var row = cell.getRow();
      var rowNo = row.getPosition();
      tabledata[rowNo].interestPayable = 1;
    }},
 	 	{title:"Interest Rate %", field:"interestRate", editor: "input", formatter:function(cell){
      var res = cell.getValue() + "%";
      return res;
    }, cellEdited:function(cell){
      var row = cell.getRow();
      var rowNo = row.getPosition();
      //console.log("cell value = " + cell.getValue());
      tabledata[rowNo].dailyInterest = cell.getValue();
      tabledata[rowNo].interestPayable = 1;
    }},
    {title:"Daily Interest Rate", field:"dailyInterest", mutator: dailyInterest},
    {title:"Amount Outstanding", field:"outstanding", editor: true, cellEdited: function(cell) {
      var row = cell.getRow();
      var rowNo = row.getPosition();
      tabledata[rowNo].interestPayable = 1;
    }},
    {title:"Interest Payable", field:"interestPayable", mutator:interestPayable, formatter:"money", formatterParams:{
    decimal:".",
    thousand:",",
    symbol:"£",
    precision:false,
    }}
  	],
 });
