var case_number = '';
var ref_reg_owner = '';
var notes_reg_owner = '';
var ref_address = '';
var notes_address = '';
var ref_lease = '';
var notes_lease = '';
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
var ref_correspondence_address = '';
var notes_correspondence_address = '';
var ref_reminders = '';
var notes_reminders = '';

var formmembers = [
  case_number,
  ref_reg_owner,
  notes_reg_owner,
  ref_address,
  notes_address,
  ref_lease,
  notes_lease,
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
  ref_correspondence_address,
  notes_correspondence_address,
  ref_reminders,
  notes_reminders
];

showWrapper();


function showWrapper() {
  //document.getElementById("loader-wrapper").style.display = "none";
}

function hideWrapper() {
  //document.getElementById("loader-wrapper").style.display = "block";
}

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

  //console.log("registered owner entry = " + bigarray[1]);

}

function update_array() {

  formmembers = [
    case_number,
    ref_reg_owner,
    notes_reg_owner,
    ref_address,
    notes_address,
    ref_lease,
    notes_lease,
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
    ref_correspondence_address,
    notes_correspondence_address,
    ref_reminders,
    notes_reminders
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

  showWrapper();

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
      ref_reg_owner: formmembers[1],
      notes_reg_owner: formmembers[2],
      ref_address: formmembers[3],
      notes_address: formmembers[4],
      ref_lease: formmembers[5],
      notes_lease: formmembers[6],
      ref_rtm: formmembers[7],
      notes_rtm: formmembers[8],
      ref_rent: formmembers[9],
      notes_rent: formmembers[10],
      ref_service_charges: formmembers[11],
      notes_service_charges: formmembers[12],
      ref_interest: formmembers[13],
      notes_interest: formmembers[14],
      ref_costs: formmembers[15],
      notes_costs: formmembers[16],
      ref_forfeiture: formmembers[17],
      notes_forfeiture: formmembers[18],
      ref_lender: formmembers[19],
      notes_lender: formmembers[20],
      ref_correspondence_address: formmembers[21],
      notes_correspondence_address: formmembers[22],
      ref_reminders: formmembers[23],
      notes_reminders: formmembers[24]
    },
    success: function(response) {
      hideWrapper();
      console.log("save complete");
      window.location.href = "calc-interest.php";
    }
  });

}

function check_necessary(){
  var necessary = [case_number, ref_reg_owner, ref_address, ref_lease, ref_rtm];
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
