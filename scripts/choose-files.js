getData();

function getData(){
    var xmlhttp = new XMLHttpRequest();
    var url = "/php/get_cases.php";
    //var param = "?cat=" + product;

    console.log("get data script running");

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        printData(myArr);
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function printData(arr){
  console.log("myFunction called");
  var out = "";
  var i;
  for(i = 0; i < arr.length; i++) {
    out += '<tr class="table-success">' +
            '<th scope="row">' + arr[i].case_number +'</th>' +
            '<td>' + arr[i].created + '</td>' +
            '<td><button type="button" class="btn btn-success" onclick=choose(' + arr[i].id + ',"inactive")>Edit</button></td>' +
           '</tr>';

  }
  document.getElementById("table").innerHTML = out;
}
