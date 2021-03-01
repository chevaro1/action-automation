// Upload file
function uploadFile() {

   var files = document.getElementById("file").files;

   if(files.length > 0 ){

      var formData = new FormData();
      //files[0].name = "l";
      formData.append("file", files[0]);
      //fileName = files[0].name;
      //files[0].name = "hasd"

      var xhttp = new XMLHttpRequest();
      //formData.append("casno", caseNo);
      console.log(caseNo);
      //param = "&casno=" + caseNo;
      // Set POST method and ajax file path
      xhttp.open("POST", "php/upload_form.php", true);

      // call on request changes state
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {

           var response = this.responseText;
           if(response == 1){
              alert("Upload successfully.");
              callScrape();
           }else{
              alert("File not uploaded.");
           }
         }
      };

      // Send request with data
      xhttp.send(formData);
      //xhttp.send({'formData':formData, 'caseno':caseNo});

   }else{
      alert("Please select a file");
   }

}




function callScrape() {
  $.ajax({
    type: 'POST',
    url: 'php/run_scrape.php',
    data: {caseno: caseNo},
    success: function(response) {
      console.log("call scrape complete");
      window.location.href = "interest.php";
    }
  });
}
