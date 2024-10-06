
var btnActivities = document.getElementById('btnActivities');
var btnUsers = document.getElementById('btnUsers');
var btnCriterias = document.getElementById('btnCriterias');
var btnAbus = document.getElementById('btnAbus');
var btnForum = document.getElementById('btnForum');

var listingActivity = document.getElementById('listingActivity');
var listingUser = document.getElementById('listingUser');
var listingCriteria = document.getElementById('listingCriteria');
var listingAbuse = document.getElementById('listingAbuse');
var listingForum = document.getElementById('listingForum');

listingUser.style.display = 'block';
listingActivity.style.display = 'none';
listingCriteria.style.display = 'none';
listingAbuse.style.display = 'block';
listingForum.style.display = 'none';


btnUsers.addEventListener('click', function() {
    listingUser.style.display = 'block';
    listingActivity.style.display = 'none';
    listingCriteria.style.display = 'none';
    listingAbuse.style.display = 'none';
    listingForum.style.display = 'none';


});
btnActivities.addEventListener('click', function() {
    listingUser.style.display = 'none';
    listingActivity.style.display = 'block';
    listingCriteria.style.display = 'none';
    listingAbuse.style.display = 'none';
    listingForum.style.display = 'none';

});

btnCriterias.addEventListener('click', function() {
    listingUser.style.display = 'none';
    listingActivity.style.display = 'none';
    listingCriteria.style.display = 'block';
    listingAbuse.style.display = 'none';
    listingForum.style.display = 'none';

});

btnAbus.addEventListener('click', function() {
    listingUser.style.display = 'none';
    listingActivity.style.display = 'none';
    listingCriteria.style.display = 'none';
    listingAbuse.style.display = 'block';
    listingForum.style.display = 'none';

});

btnForum.addEventListener('click', function() {
    listingUser.style.display = 'none';
    listingActivity.style.display = 'none';
    listingCriteria.style.display = 'none';
    listingAbuse.style.display = 'none';
    listingForum.style.display = 'block';

});


