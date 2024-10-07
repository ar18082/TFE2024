
if(window.location.pathname.includes('/dashboard/parent') || window.location.pathname.includes('/event/ ' && '/edit')) {
    var btnParent = document.getElementById('btnParent');
    var btnActivitiesParent = document.getElementById('btnActivitiesParent');
    var btnGoodPlanParent = document.getElementById('btnGoodPlanParent');
    var btnForumParent = document.getElementById('btnForumParent');
    var btnCommentParent = document.getElementById('btnCommentParent');
    var btnFavoriteParent = document.getElementById('btnFavoriteParent');
    var btnCalendarParent = document.getElementById('btnCalendarParent');

    var templateUser = document.getElementById('templateUser');
    var templateActivity = document.getElementById('templateActivity');

    var templateGoodPlan = document.getElementById('templateGoodPlan');
    var templateForum = document.getElementById('templateForum');
    var templateComment = document.getElementById('templateComment');
    var templateFavorite = document.getElementById('templateFavorite');
    var templateCalendar = document.getElementById('templateCalendar');
    if(window.location.pathname.includes('/event/ ' && '/edit')) {
        var editForm = document.getElementById('editForm');
        editForm.style.display = 'block';
        templateUser.style.display = 'none';
    }else{
        templateUser.style.display = 'block';
    }


    templateActivity.style.display = 'none';

    templateGoodPlan.style.display = 'none';
    templateForum.style.display = 'none';
    templateComment.style.display = 'none';
    templateFavorite.style.display = 'none';
    templateCalendar.style.display = 'none';


    btnParent.addEventListener('click', function () {
        templateUser.style.display = 'block';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });

    btnActivitiesParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'block';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });

    btnGoodPlanParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'block';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });

    btnForumParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'block';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
    });

    btnCommentParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'block';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'none';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });

    btnFavoriteParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'block';
        templateCalendar.style.display = 'none';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });

    btnCalendarParent.addEventListener('click', function () {
        templateUser.style.display = 'none';
        templateActivity.style.display = 'none';

        templateGoodPlan.style.display = 'none';
        templateForum.style.display = 'none';
        templateComment.style.display = 'none';
        templateFavorite.style.display = 'none';
        templateCalendar.style.display = 'block';
        if(window.location.pathname.includes('/event/ ' && '/edit')) {

            editForm.style.display = 'none';

        }
    });


};
