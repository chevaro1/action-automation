
var data = [];
//var case_no = 1;
//getSheet();


function createSpreadsheet() {
  $.ajax({
    type: 'POST',
    url: 'php/create_spreadsheet.php',
    data: {caseno: case_no},
    success:function(data) {
      //GO TO NEXT PAGE!
      window.location.href = "output.php";
    }
  });
}


function updateSheet(arr){


  for ( i = 0; i < arr.length; i++) {
    var sections = arr[i].value.split("-");
    var result = sections[2] + "-" + sections[1] + "-" + sections[0];
    $.ajax({
      type: 'POST',
      url: 'php/update_sheet.php',
      data: {type: arr[i].key, date: result, caseno: case_no}
    });
  }

}


var editDate = function(value, data, type, params, component) {
  var sections = value.split("-");
  var result = sections[2] + "-" + sections[1] + "-" + sections[0];
  return result;
};

var editValue = function(value, data, type, params, component) {
  //price = (value).toLocaleString("en-GB", {style: "currency", currency: "GBP", minimumFractionDigits: 2});
  //console.log("editing price");
  return "£" + price;
};

var table = new Tabulator("#example-table", {
 	height:405, // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
 	//data:data, //assign data to table
  placeholder:"No Service Charges Found",
  ajaxURL:"php/get_choose_interest.php",
  ajaxParams:{case:case_no, type:"service"},
 	layout:"fitColumns", //fit columns to width of table (optional)
   reactiveData: true,
 	columns:[ //Define Table Columns
   {formatter:"rowSelection", titleFormatter:"rowSelection", hozAlign:"center", width:50, headerSort:false, cellClick:function(e, cell){
     cell.getRow().toggleSelect();
   }},
    {title:"id", field:"id", visible:false},
	 	{title:"Start Date", field:"start_date", mutator:editDate},
	 	{title:"Value", field:"value", formatter:"money", formatterParams:{symbol:"£"}}
 	],
});

var table2 = new Tabulator("#example-table2", {
 	height:405, // set height of table (in CSS or here), this enables the Virtual DOM and improves render speed dramatically (can be any valid css height value)
 	//data:data, //assign data to table
  placeholder:"No Ground Rent Found",
  ajaxURL:"php/get_choose_interest.php",
  ajaxParams:{case:case_no, type:"ground"},
 	layout:"fitColumns", //fit columns to width of table (optional)
   reactiveData: true,
 	columns:[ //Define Table Columns
   {formatter:"rowSelection", titleFormatter:"rowSelection", hozAlign:"center", width:50, headerSort:false, cellClick:function(e, cell){
     cell.getRow().toggleSelect();
   }},
    {title:"id", field:"id", visible:false},
	 	{title:"Start Date", field:"start_date", mutator:editDate},
	 	{title:"Value", field:"value", formatter:"money", formatterParams:{symbol:"£"}}
 	],
});




$("#submit").click(function(){
  var arr = [];

  if (table.getSelectedRows().length > 0){
    var selectedRows = table.getSelectedRows();
    var value = selectedRows[0]._row.cells[2].initialValue;
    //console.log(value);
    arr.push({
      key: "service",
      value: value
    });
  }
  if (table2.getSelectedRows().length > 0){
    var selectedRows2 = table2.getSelectedRows();
    var value2 = selectedRows2[0]._row.cells[2].initialValue;
    //console.log(value2);
    arr.push({
      key: "ground",
      value: value2
    });
  }

  console.log(arr);
  console.log(arr.length);
  console.log(arr[0].key);
  console.log(arr.ground);

  updateSheet(arr);
  createSpreadsheet();


});
