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
    out += '<tr class="table-secondary">' +
            '<th scope="row">' + arr[i].case_number +'</th>' +
            '<td>' + arr[i].created + '</td>' +
            '<td><button type="button" class="btn btn-secondary btn-block" onclick=choose(' + arr[i].case_number + ')>Edit</button></td>' +
            '<td><button type="button" class="btn btn-secondary btn-block" onclick=chooser(' + arr[i].case_number + ')>Read Only</button></td>' +
           '</tr>';

  }
  document.getElementById("table").innerHTML = out;
}


function choose(caseNo){

  var xmlhttp = new XMLHttpRequest();
  var url = "/php/set_file.php";
  var param = "?case=" + caseNo;

  console.log("case = " + caseNo);

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //var myArr = JSON.parse(this.responseText);
      window.location.href = "lease-info-details.php";
    }
  };
  xmlhttp.open("GET", url+param, true);
  xmlhttp.send();
}

function chooser(caseNo){

  var xmlhttp = new XMLHttpRequest();
  var url = "/php/set_file.php";
  var param = "?case=" + caseNo;

  console.log("case = " + caseNo);

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //var myArr = JSON.parse(this.responseText);
      window.location.href = "lease-info-read-only.php";
    }
  };
  xmlhttp.open("GET", url+param, true);
  xmlhttp.send();
}
