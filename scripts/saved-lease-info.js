


function getData(){
    var xmlhttp = new XMLHttpRequest();
    var url = "/php/get_lease_info.php";
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
