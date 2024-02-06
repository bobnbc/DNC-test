/**
 * scripts.js
/**/
let buttonElement = document.createElement('button');

let donateLink = 'https://secure.actblue.com/donate/feb-democratic-momentum-fund-web';

let volunteerLink = 'https://events.democrats.org/?is_high_priority=true';

window.onload = function() {
    document.getElementById('donate').addEventListener('click', function() {
        window.location.href = donateLink;
    });
    document.getElementById('volunteer').addEventListener('click', function() {
        window.location.href = volunteerLink;
    });
    /*SANDBOX*/
    //document.body.classList.toggle('dark');
}
