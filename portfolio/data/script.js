var database = [
    {
        username: "samir",
        passowrd: "samir404"
    }
];

var urlParams = new URLSearchParams(window.location.search);
var firstName = urlParams.get('fname');
var lastName = urlParams.get('lname');
var email = urlParams.get('email');
var rfcontact = urlParams.get('reasoncontact');
var service = urlParams.get('services');
var offer = urlParams.get('job');
var pos = urlParams.get('position');

// var ShowInfo = [
//     {
//         // Firstname: firstName,
//         // Lastname: lastName,
//         // Email: email,
//         // ReasonForContacting: rfcontact,
//         // Services: service,
//         // OfferingJob: offer,
//         // Position: pos    
//     }
// ];
var user = prompt("What is your username?");
var pass = prompt("What is your password?");

function signIn(user,pass){
    if(user === database[0].username && pass === database[0].passowrd){
        document.body.innerHTML =
            `<div class="form">
                <h1>Recorded Form</h1>
                <p><strong>First Name:</strong> ${firstName}</p>
                <p><strong>Last Name:</strong> ${lastName}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Reason For Contacting:</strong> ${rfcontact}</p>
                <p><strong>Selected Services:</strong> ${service}</p>
                <p><strong>Offered Job:</strong> ${offer}</p>
                <p><strong>User Position:</strong> ${pos}</p>
            </div>`
        // console.log(ShowInfo);
    }
    else {
        document.body.innerHTML =
            `<div class="form">
                <h1>Login Failed</h1>
                <p style="text-align: center">Incorrect username and password. Try again.</p>
            </div>`
        //console.log("Incorrect username and password");
    }
}
signIn(user,pass);