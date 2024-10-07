// if url is /dashboard/admin, then this script will be executed
if(window.location.pathname == '/dashboard/admin') {

    // This script is for the admin dashboard page
    var btnActivities = document.getElementById('btnActivities');
    var btnUsers = document.getElementById('btnUsers');
    var btnCriterias = document.getElementById('btnCriterias');
    var btnAbus = document.getElementById('btnAbus');
    var btnForum = document.getElementById('btnForum');

    var listingActivity = document.getElementById('listingActivity');
    var listingUser = document.getElementById('listingUser');
    var listingCriteria = document.getElementById('listingCriteria');
    var listingAbus = document.getElementById('listingAbus');
    var listingForum = document.getElementById('listingForum');

    listingUser.style.display = 'block';
    listingActivity.style.display = 'none';
    listingCriteria.style.display = 'none';
    listingAbus.style.display = 'none';
    listingForum.style.display = 'none';


    btnUsers.addEventListener('click', function () {
        listingUser.style.display = 'block';
        listingActivity.style.display = 'none';
        listingCriteria.style.display = 'none';
        listingAbus.style.display = 'none';
        listingForum.style.display = 'none';


    });
    btnActivities.addEventListener('click', function () {
        listingUser.style.display = 'none';
        listingActivity.style.display = 'block';
        listingCriteria.style.display = 'none';
        listingAbus.style.display = 'none';
        listingForum.style.display = 'none';

    });

    btnCriterias.addEventListener('click', function () {
        listingUser.style.display = 'none';
        listingActivity.style.display = 'none';
        listingCriteria.style.display = 'block';
        listingAbus.style.display = 'none';
        listingForum.style.display = 'none';

    });

    btnAbus.addEventListener('click', function () {
        listingUser.style.display = 'none';
        listingActivity.style.display = 'none';
        listingCriteria.style.display = 'none';
        listingAbus.style.display = 'block';
        listingForum.style.display = 'none';

    });

    btnForum.addEventListener('click', function () {
        listingUser.style.display = 'none';
        listingActivity.style.display = 'none';
        listingCriteria.style.display = 'none';
        listingAbus.style.display = 'none';
        listingForum.style.display = 'block';

    });

};

if(window.location.pathname.includes('/dashboard/babysitter')) {
    var btnUser = document.getElementById('btnUsers');
    var btnActivity = document.getElementById('btnActivities');
    var btnCriteria = document.getElementById('btnCriterias');
    var btnGoodPlan = document.getElementById('btnGoodPlan');
    var btnForums = document.getElementById('btnForum');
    var btnComment = document.getElementById('btnComment');
    var btnFavorite = document.getElementById('btnFavorite');
    var btnCalendar = document.getElementById('btnCalendar');

    var templateUser = document.getElementById('templateUser');
    var templateActivity = document.getElementById('templateActivity');
    var templateCriteria = document.getElementById('templateCriteria');
    var templateGoodPlan = document.getElementById('templateGoodPlan');
    var templateForum = document.getElementById('templateForum');
    var templateComment = document.getElementById('templateComment');
    var templateFavorite = document.getElementById('templateFavorite');
    var templateCalendar = document.getElementById('templateCalendar');


    templateUser.style.display = 'block';
    templateActivity.style.display = 'none';
    templateCriteria.style.display = 'none';
    templateGoodPlan.style.display = 'none';
    templateForum.style.display = 'none';
    templateComment.style.display = 'none';
    templateFavorite.style.display = 'none';
    templateCalendar.style.display = 'none';


    btnUser.addEventListener('click', function () {
        templateUser.style.display = 'block';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnActivity.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'block';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnCriteria.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'block';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnGoodPlan.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'block';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnForums.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'block';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnComment.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'block';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnFavorite.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'block';
        templateCalendar.style.display = 'none';
    });

    btnCalendar.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';
        templateCriteria.style.display = 'none';
        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'block';
    });


};

