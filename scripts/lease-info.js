var ref_reg_owner = '';
var ref_address = '';
var ref_lease = '';
var ref_rtm = '';
var ref_rent = '';
var ref_service_charges = '';
var notes_service_charges = '';
var ref_interest = '';
var notes_interest = '';
var ref_costs = '';
var notes_costs = '';
var ref_forfeiture = '';
var ref_lender = '';
var notes_lender = '';
var ref_correspondence_address = '';
var ref_reminders = '';
var notes_reminders = '';

var formmembers = [
  ref_reg_owner,
  ref_address,
  ref_lease,
  ref_rtm,
  ref_rent,
  ref_service_charges,
  notes_service_charges,
  ref_interest,
  notes_interest,
  ref_costs,
  notes_costs,
  ref_forfeiture,
  ref_lender,
  notes_lender,
  ref_correspondence_address,
  ref_reminders,
  notes_reminders
];

showWrapper();


function showWrapper() {
  document.getElementById("loader-wrapper").style.display = "none";
}

function hideWrapper() {
  document.getElementById("loader-wrapper").style.display = "block";
}

function submit_form() {

  get_form_data();

  //console.log("reg owner = " + formmembers[0]);

  check_valid();

  //save_form_data();

}

function get_form_data() {

  ref_reg_owner = document.getElementById("ref-reg-owner").value;
  ref_address = document.getElementById("ref-address").value;
  ref_lease = document.getElementById("ref-lease").value;
  ref_rtm = document.getElementById("ref-rtm").value;
  ref_rent = document.getElementById("ref-rent").value;
  ref_service_charges = document.getElementById("ref-service-charges").value;
  notes_service_charges = document.getElementById("notes-service-charges").value;
  ref_interest = document.getElementById("ref-interest").value;
  notes_interest = document.getElementById("notes-interest").value;
  ref_costs = document.getElementById("ref-costs").value;
  notes_costs = document.getElementById("notes-costs").value;
  ref_forfeiture = document.getElementById("ref-forfeiture").value;
  ref_lender = document.getElementById("ref-lender").value;
  notes_lender = document.getElementById("notes-lender").value;
  ref_correspondence_address = document.getElementById("ref-correspondence-address").value;
  ref_reminders = document.getElementById("ref-reminders").value;
  notes_reminders = document.getElementById("notes-reminders").value;

  //console.log("registered owner entry = " + bigarray[1]);

}

function update_array() {

  formmembers = [
    ref_reg_owner,
    ref_address,
    ref_lease,
    ref_rtm,
    ref_rent,
    ref_service_charges,
    notes_service_charges,
    ref_interest,
    notes_interest,
    ref_costs,
    notes_costs,
    ref_forfeiture,
    ref_lender,
    notes_lender,
    ref_correspondence_address,
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
      formmembers[i] = "empty";
    }
  }

  $.ajax({
    type: 'POST',
    url: 'php/save_form_data.php',
    data: {
      ref_reg_owner: ref_reg_owner,
      ref_address: ref_address,
      ref_lease: ref_lease,
      ref_rtm: ref_rtm,
      ref_rent: ref_rent,
      ref_service_charges: ref_service_charges,
      notes_service_charges: notes_service_charges,
      ref_interest: ref_interest,
      notes_interest: notes_interest,
      ref_costs: ref_costs,
      notes_costs: notes_costs,
      ref_forfeiture: ref_forfeiture,
      ref_lender: ref_lender,
      notes_lender: notes_lender,
      ref_correspondence_address: ref_correspondence_address,
      ref_reminders: ref_reminders,
      notes_reminders: notes_reminders
    },
    success: function(response) {
      hideWrapper();
      console.log("save complete");
      window.location.href = "calc-interest.php";
    }
  });

}
