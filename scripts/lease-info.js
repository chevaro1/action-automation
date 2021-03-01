
var case_number = '';
var owner_type = '';
var ref_reg_owner = '';
var notes_reg_owner = '';
var ref_reg_owner_2 = '';
var ref_reg_owner_3 = '';
var ref_reg_owner_4 = '';
var ref_address_1 = '';
var notes_address_1 = '';
var ref_address_2 = '';
var notes_address_2 = '';
var ref_address_3 = '';
var notes_address_3 = '';
var ref_address_4 = '';
var notes_address_4 = '';
var ref_lease = '';
var notes_lease = '';
var property_manager = '';
var ref_rtm = '';
var notes_rtm = '';
var ref_rent = '';
var notes_rent = '';
var ref_service_charges = '';
var notes_service_charges = '';
var ref_interest = '';
var notes_interest = '';
var ref_costs = '';
var notes_costs = '';
var ref_forfeiture = '';
var notes_forfeiture = '';
var ref_lender = '';
var notes_lender = '';
var ref_lender_address_1 = '';
var notes_lender_address_1 = '';
var ref_lender_address_2 = '';
var notes_lender_address_2 = '';
var ref_lender_address_3 = '';
var notes_lender_address_3 = '';
var ref_lender_address_4 = '';
var notes_lender_address_4 = '';
var ref_correspondence_address_1 = '';
var notes_correspondence_address_1 = '';
var ref_correspondence_address_2 = '';
var notes_correspondence_address_2 = '';
var ref_correspondence_address_3 = '';
var notes_correspondence_address_3 = '';
var ref_correspondence_address_4 = '';
var notes_correspondence_address_4 = '';
var ref_reminders = '';
var notes_reminders = '';
var email = '';
var title_no = '';
var interest_rate = '';
var costs_price = '';
var send_date = '';

var owners = 1;

var formmembers = [
  case_number,
  owner_type,
  ref_reg_owner,
  notes_reg_owner,
  ref_reg_owner_2,
  ref_reg_owner_3,
  ref_reg_owner_4,
  ref_address_1,
  notes_address_1,
  ref_address_2,
  notes_address_2,
  ref_address_3,
  notes_address_3,
  ref_address_4,
  notes_address_4,
  ref_lease,
  notes_lease,
  property_manager,
  ref_rtm,
  notes_rtm,
  ref_rent,
  notes_rent,
  ref_service_charges,
  notes_service_charges,
  ref_interest,
  notes_interest,
  ref_costs,
  notes_costs,
  ref_forfeiture,
  notes_forfeiture,
  ref_lender,
  notes_lender,
  ref_lender_address_1,
  notes_lender_address_1,
  ref_lender_address_2,
  notes_lender_address_2,
  ref_lender_address_3,
  notes_lender_address_3,
  ref_lender_address_4,
  notes_lender_address_4,
  ref_correspondence_address_1,
  notes_correspondence_address_1,
  ref_correspondence_address_2,
  notes_correspondence_address_2,
  ref_correspondence_address_3,
  notes_correspondence_address_3,
  ref_correspondence_address_4,
  notes_correspondence_address_4,
  ref_reminders,
  notes_reminders,
  email,
  title_no,
  interest_rate,
  costs_price,
  send_date
];



function submit_form() {

  get_form_data();

  //console.log("reg owner = " + formmembers[0]);

  var valid = check_necessary();
  if (valid === "exit"){
    return;
  }

  check_valid();

  //save_form_data();

}

function get_form_data() {
  /*
  case_number = document.getElementById("case-number").value;
  ref_reg_owner = document.getElementById("ref-reg-owner").value;
  notes_reg_owner = document.getElementById("notes-reg-owner").value;
  ref_address = document.getElementById("ref-address").value;
  notes_address = document.getElementById("notes-address").value;
  ref_lease = document.getElementById("ref-lease").value;
  notes_lease = document.getElementById("notes-lease").value;
  ref_rtm = document.getElementById("ref-rtm").value;
  notes_rtm = document.getElementById("notes-rtm").value;
  ref_rent = document.getElementById("ref-rent").value;
  notes_rent = document.getElementById("notes-rent").value;
  ref_service_charges = document.getElementById("ref-service-charges").value;
  notes_service_charges = document.getElementById("notes-service-charges").value;
  ref_interest = document.getElementById("ref-interest").value;
  notes_interest = document.getElementById("notes-interest").value;
  ref_costs = document.getElementById("ref-costs").value;
  notes_costs = document.getElementById("notes-costs").value;
  ref_forfeiture = document.getElementById("ref-forfeiture").value;
  notes_forfeiture = document.getElementById("notes-forfeiture").value;
  ref_lender = document.getElementById("ref-lender").value;
  notes_lender = document.getElementById("notes-lender").value;
  ref_correspondence_address = document.getElementById("ref-correspondence-address").value;
  notes_correspondence_address = document.getElementById("notes-correspondence-address").value;
  ref_reminders = document.getElementById("ref-reminders").value;
  notes_reminders = document.getElementById("notes-reminders").value;
  */

  case_number = document.getElementById("case-number").value;
  owner_type = document.getElementById("owner-type").value;
  ref_reg_owner = document.getElementById("ref-reg-owner").value;
  notes_reg_owner = document.getElementById("notes-reg-owner").value;
  ref_reg_owner_2 = document.getElementById("ref-reg-owner-2").value;
  ref_reg_owner_3 = document.getElementById("ref-reg-owner-3").value;
  ref_reg_owner_4 = document.getElementById("ref-reg-owner-4").value;
  ref_address_1 = document.getElementById("ref-address-1").value;
  notes_address_1 = document.getElementById("notes-address-1").value;
  ref_address_2 = document.getElementById("ref-address-2").value;
  notes_address_2 = document.getElementById("notes-address-2").value;
  ref_address_3 = document.getElementById("ref-address-3").value;
  notes_address_3 = document.getElementById("notes-address-3").value;
  ref_address_4 = document.getElementById("ref-address-4").value;
  notes_address_4 = document.getElementById("notes-address-4").value;
  ref_lease = document.getElementById("ref-lease").value;
  notes_lease = document.getElementById("notes-lease").value;
  property_manager = document.getElementById("property-manager").value;
  ref_rtm = document.getElementById("ref-rtm").value;
  notes_rtm = document.getElementById("notes-rtm").value;
  ref_rent = document.getElementById("ref-rent").value;
  notes_rent = document.getElementById("notes-rent").value;
  ref_service_charges = document.getElementById("ref-service-charges").value;
  notes_service_charges = document.getElementById("notes-service-charges").value;
  ref_interest = document.getElementById("ref-interest").value;
  notes_interest = document.getElementById("notes-interest").value;
  ref_costs = document.getElementById("ref-costs").value;
  notes_costs = document.getElementById("notes-costs").value;
  ref_forfeiture = document.getElementById("ref-forfeiture").value;
  notes_forfeiture = document.getElementById("notes-forfeiture").value;
  ref_lender = document.getElementById("ref-lender").value;
  notes_lender = document.getElementById("notes-lender").value;
  ref_lender_address_1 = document.getElementById("ref-lender-address-1").value;
  notes_lender_address_1 = document.getElementById("notes-lender-address-1").value;
  ref_lender_address_2 = document.getElementById("ref-lender-address-2").value;
  notes_lender_address_2 = document.getElementById("notes-lender-address-2").value;
  ref_lender_address_3 = document.getElementById("ref-lender-address-3").value;
  notes_lender_address_3 = document.getElementById("notes-lender-address-3").value;
  ref_lender_address_4 = document.getElementById("ref-lender-address-4").value;
  notes_lender_address_4 = document.getElementById("notes-lender-address-4").value;
  ref_correspondence_address_1 = document.getElementById("ref-correspondence-address-1").value;
  notes_correspondence_address_1 = document.getElementById("notes-correspondence-address-1").value;
  ref_correspondence_address_2 = document.getElementById("ref-correspondence-address-2").value;
  notes_correspondence_address_2 = document.getElementById("notes-correspondence-address-2").value;
  ref_correspondence_address_3 = document.getElementById("ref-correspondence-address-3").value;
  notes_correspondence_address_3 = document.getElementById("notes-correspondence-address-3").value;
  ref_correspondence_address_4 = document.getElementById("ref-correspondence-address-4").value;
  notes_correspondence_address_4 = document.getElementById("notes-correspondence-address-4").value;
  ref_reminders = document.getElementById("ref-reminders").value;
  notes_reminders = document.getElementById("notes-reminders").value;
  email = document.getElementById("email").value;
  title_no = document.getElementById("title-no").value;
  interest_rate = document.getElementById("interest-rate").value;
  costs_price = document.getElementById("costs-price").value;
  send_date = $.datepicker.formatDate("yy-mm-dd", $("#datepicker").datepicker("getDate"));

  //console.log("registered owner entry = " + bigarray[1]);

}

function update_array() {

  formmembers = [
    case_number,
    owner_type,
    ref_reg_owner,
    notes_reg_owner,
    ref_reg_owner_2,
    ref_reg_owner_3,
    ref_reg_owner_4,
    ref_address_1,
    notes_address_1,
    ref_address_2,
    notes_address_2,
    ref_address_3,
    notes_address_3,
    ref_address_4,
    notes_address_4,
    ref_lease,
    notes_lease,
    property_manager,
    ref_rtm,
    notes_rtm,
    ref_rent,
    notes_rent,
    ref_service_charges,
    notes_service_charges,
    ref_interest,
    notes_interest,
    ref_costs,
    notes_costs,
    ref_forfeiture,
    notes_forfeiture,
    ref_lender,
    notes_lender,
    ref_lender_address_1,
    notes_lender_address_1,
    ref_lender_address_2,
    notes_lender_address_2,
    ref_lender_address_3,
    notes_lender_address_3,
    ref_lender_address_4,
    notes_lender_address_4,
    ref_correspondence_address_1,
    notes_correspondence_address_1,
    ref_correspondence_address_2,
    notes_correspondence_address_2,
    ref_correspondence_address_3,
    notes_correspondence_address_3,
    ref_correspondence_address_4,
    notes_correspondence_address_4,
    ref_reminders,
    notes_reminders,
    email,
    title_no,
    interest_rate,
    costs_price,
    send_date
  ];
}

function check_valid() {
  var count = 0;

  update_array();

  for (i = 0; i < formmembers.length; i++) {
    //console.log("interating through array" + formmembers[i]);
    if (formmembers[i] === "") {
      count += 1;
      //console.log("empty cell found count = " + count);
    }
  }

  if (count >= 1) {
    var phrase = "We have detected " + count + " empty cells within the form, do you still wish to continue?";
    document.getElementById("modal-body").innerHTML = phrase;
    $('#warning').modal();
    return;
  }

save_form_data();

}

function save_form_data() {



  for (i = 0; i < formmembers.length; i++) {
    if (formmembers[i] === "") {
      console.log("found empty \n");
      formmembers[i] = "empty";
      console.log("empty  = " + formmembers[i]);
    }
  }

  $.ajax({
    type: 'POST',
    url: 'php/save_form_data.php',
    data: {
      case_number: formmembers[0],
      owner_type: formmembers[1],
      ref_reg_owner: formmembers[2],
      notes_reg_owner: formmembers[3],
      ref_reg_owner_2: formmembers[4],
      ref_reg_owner_3: formmembers[5],
      ref_reg_owner_4: formmembers[6],
      ref_address_1: formmembers[7],
      notes_address_1: formmembers[8],
      ref_address_2: formmembers[9],
      notes_address_2: formmembers[10],
      ref_address_3: formmembers[11],
      notes_address_3: formmembers[12],
      ref_address_4: formmembers[13],
      notes_address_4: formmembers[14],
      ref_lease: formmembers[15],
      notes_lease: formmembers[16],
      property_manager: formmembers[17],
      ref_rtm: formmembers[18],
      notes_rtm: formmembers[19],
      ref_rent: formmembers[20],
      notes_rent: formmembers[21],
      ref_service_charges: formmembers[22],
      notes_service_charges: formmembers[23],
      ref_interest: formmembers[24],
      notes_interest: formmembers[25],
      ref_costs: formmembers[26],
      notes_costs: formmembers[27],
      ref_forfeiture: formmembers[28],
      notes_forfeiture: formmembers[29],
      ref_lender: formmembers[30],
      notes_lender: formmembers[31],
      ref_lender_address_1: formmembers[32],
      notes_lender_address_1: formmembers[33],
      ref_lender_address_2: formmembers[34],
      notes_lender_address_2: formmembers[35],
      ref_lender_address_3: formmembers[36],
      notes_lender_address_3: formmembers[37],
      ref_lender_address_4: formmembers[38],
      notes_lender_address_4: formmembers[39],
      ref_correspondence_address_1: formmembers[40],
      notes_correspondence_address_1: formmembers[41],
      ref_correspondence_address_2: formmembers[42],
      notes_correspondence_address_2: formmembers[43],
      ref_correspondence_address_3: formmembers[44],
      notes_correspondence_address_3: formmembers[45],
      ref_correspondence_address_4: formmembers[46],
      notes_correspondence_address_4: formmembers[47],
      ref_reminders: formmembers[48],
      notes_reminders: formmembers[49],
      email: formmembers[50],
      title_no: formmembers[51],
      interest_rate: formmembers[52],
      costs_price: formmembers[53],
      send_date: formmembers[54]

    },
    success: function(response) {

      console.log("save complete");
      choose(formmembers[0]);
      window.location.href = "upload.php";
    }
  });

}

function check_necessary(){
  var necessary = [case_number, ref_reg_owner, ref_address_1, ref_lease, ref_rtm];
  var count = 0;

  for (i = 0; i < necessary.length; i++) {
    //console.log("interating through array" + formmembers[i]);
    if (necessary[i] === "") {
      count += 1;
      //console.log("empty cell found count = " + count);
    }
  }

  if (count >= 1) {
    var phrase = "the following cells must be filled in before you continue: case number, registered owner, Address, Lease and RTM/Freeholder";
    document.getElementById("modal-necessary").innerHTML = phrase;
    $('#necessary').modal();
    return "exit";
  }

}


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function loadData(){
    var xmlhttp = new XMLHttpRequest();
    var url = "/php/get_lease_info.php";
    var param = "?case=" + caseNo;

    console.log("get data script running");

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        addData(myArr);
      }
    };
    xmlhttp.open("GET", url+param, true);
    xmlhttp.send();
}
window.onload = function() {
  console.log("in onload function");
  if (caseNo !== ''){
    console.log("caseNo does exist!:" + caseNo);
    loadData();
  } else {
    console.log("no caseNo found");
  }
};
function addData(arr){
  document.getElementById("case-number").value = ifEmpty(arr[0].case_number);
  document.getElementById("owner-type").value = ifEmpty(arr[0].owner_type);
  document.getElementById("ref-reg-owner").value = ifEmpty(arr[0].ref_reg_owner);
  document.getElementById("notes-reg-owner").value = ifEmpty(arr[0].notes_reg_owner);
  document.getElementById("ref-reg-owner-2").value = ifEmpty(arr[0].ref_reg_owner_2);
  document.getElementById("ref-reg-owner-3").value = ifEmpty(arr[0].ref_reg_owner_3);
  document.getElementById("ref-reg-owner-4").value = ifEmpty(arr[0].ref_reg_owner_4);
  document.getElementById("ref-address-1").value = ifEmpty(arr[0].ref_address_1);
  document.getElementById("notes-address-1").value = ifEmpty(arr[0].notes_address_1);
  document.getElementById("ref-address-2").value = ifEmpty(arr[0].ref_address_2);
  document.getElementById("notes-address-2").value = ifEmpty(arr[0].notes_address_2);
  document.getElementById("ref-address-3").value = ifEmpty(arr[0].ref_address_3);
  document.getElementById("notes-address-3").value = ifEmpty(arr[0].notes_address_3);
  document.getElementById("ref-address-4").value = ifEmpty(arr[0].ref_address_4);
  document.getElementById("notes-address-4").value = ifEmpty(arr[0].notes_address_4);
  document.getElementById("ref-lease").value = ifEmpty(arr[0].ref_lease);
  document.getElementById("notes-lease").value = ifEmpty(arr[0].notes_lease);
  document.getElementById("property-manager").value = ifEmpty(arr[0].property_manager);
  document.getElementById("ref-rtm").value = ifEmpty(arr[0].ref_rtm);
  document.getElementById("notes-rtm").value = ifEmpty(arr[0].notes_rtm);
  document.getElementById("ref-rent").value = ifEmpty(arr[0].ref_rent);
  document.getElementById("notes-rent").value = ifEmpty(arr[0].notes_rent);
  document.getElementById("ref-service-charges").value = ifEmpty(arr[0].ref_service_charges);
  document.getElementById("notes-service-charges").value = ifEmpty(arr[0].notes_service_charges);
  document.getElementById("ref-interest").value = ifEmpty(arr[0].ref_interest);
  document.getElementById("notes-interest").value = ifEmpty(arr[0].notes_interest);
  document.getElementById("ref-costs").value = ifEmpty(arr[0].ref_costs);
  document.getElementById("notes-costs").value = ifEmpty(arr[0].notes_costs);
  document.getElementById("ref-forfeiture").value = ifEmpty(arr[0].ref_forfeiture);
  document.getElementById("notes-forfeiture").value = ifEmpty(arr[0].notes_forfeiture);
  document.getElementById("ref-lender").value = ifEmpty(arr[0].ref_lender);
  document.getElementById("notes-lender").value = ifEmpty(arr[0].notes_lender);
  document.getElementById("ref-lender-address-1").value = ifEmpty(arr[0].ref_lender_address_1);
  document.getElementById("notes-lender-address-1").value = ifEmpty(arr[0].notes_lender_address_1);
  document.getElementById("ref-lender-address-2").value = ifEmpty(arr[0].ref_lender_address_2);
  document.getElementById("notes-lender-address-2").value = ifEmpty(arr[0].notes_lender_address_2);
  document.getElementById("ref-lender-address-3").value = ifEmpty(arr[0].ref_lender_address_3);
  document.getElementById("notes-lender-address-3").value = ifEmpty(arr[0].notes_lender_address_3);
  document.getElementById("ref-lender-address-4").value = ifEmpty(arr[0].ref_lender_address_4);
  document.getElementById("notes-lender-address-4").value = ifEmpty(arr[0].notes_lender_address_4);
  document.getElementById("ref-correspondence-address-1").value = ifEmpty(arr[0].ref_correspondence_address_1);
  document.getElementById("notes-correspondence-address-1").value = ifEmpty(arr[0].notes_correspondence_address_1);
  document.getElementById("ref-correspondence-address-2").value = ifEmpty(arr[0].ref_correspondence_address_2);
  document.getElementById("notes-correspondence-address-2").value = ifEmpty(arr[0].notes_correspondence_address_2);
  document.getElementById("ref-correspondence-address-3").value = ifEmpty(arr[0].ref_correspondence_address_3);
  document.getElementById("notes-correspondence-address-3").value = ifEmpty(arr[0].notes_correspondence_address_3);
  document.getElementById("ref-correspondence-address-4").value = ifEmpty(arr[0].ref_correspondence_address_4);
  document.getElementById("notes-correspondence-address-4").value = ifEmpty(arr[0].notes_correspondence_address_4);
  document.getElementById("ref-reminders").value = ifEmpty(arr[0].ref_reminders);
  document.getElementById("notes-reminders").value = ifEmpty(arr[0].notes_reminders);
  document.getElementById("email").value = ifEmpty(arr[0].email);
  document.getElementById("title-no").value = ifEmpty(arr[0].title_no);
  document.getElementById("interest-rate").value = ifEmpty(arr[0].interest_rate);
  document.getElementById("costs-price").value = ifEmpty(arr[0].costs_price);

}

function ifEmpty(val){
  if (val == "empty"){
    val = "";
  }
  return val;
}



function edit_form(){
  window.location.href = "lease-info-details.php";
}

function addOwner(){

  if (owners >= 4){
    alert("Maximum number of owners reached");
    return;
  }
  owners = owners + 1;
  if (owners == 1){
    var add = '<div class="input-group mb-3" id="owndiv' + owners + '">' +
        '<div class="input-group-prepend col-4">' +
        '<span class="input-group-text col-10 pl-5" id="basic-addon3">Owner ' + owners + '</span>' +
        '<button class="btn btn-outline-secondary col-2" onclick="removeOwn(' + 'owndiv' + owners + ')" type="button">-</button>' +
        '</div>' +
        '<input type="text" id="ref-reg-owner-' + owners + '" class="form-control col-sm-4" aria-describedby="basic-addon3">' +
        '</div>';
    document.getElementById("addOwner").innerHTML = add;
  }
  if (owners > 1){
    var add2 = '<div class="input-group mb-3" id="owndiv' + owners + '">' +
        '<div class="input-group-prepend col-4">' +
        '<span class="input-group-text col-10 pl-5" id="basic-addon3">Owner:</span>' +
        '<button class="btn btn-outline-secondary col-2" onclick="removeOwn(' + '\'' + 'owndiv' + owners + '\'' +  ')" type="button">-</button>' +
        '</div>' +
        '<input type="text" id="ref-reg-owner-' + owners + '" class="form-control col-sm-4" aria-describedby="basic-addon3">' +
        '</div>';
    document.getElementById("addOwner").insertAdjacentHTML('beforeend', add2);
  }
}

function removeOwn(cls){
  var div = document.getElementById(cls);
  owners = owners - 1;
  div.remove();
}


$( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', setDate: new Date()});
} );


function choose(caseNo){

  var xmlhttp = new XMLHttpRequest();
  var url = "/php/set_file.php";
  var param = "?case=" + caseNo;

  console.log("case = " + caseNo);

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //var myArr = JSON.parse(this.responseText);

    }
  };
  xmlhttp.open("GET", url+param, true);
  xmlhttp.send();
}
