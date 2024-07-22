{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Activities" icon="la la-question" :link="backpack_url('activity')" />
<x-backpack::menu-item title="Activity parents" icon="la la-question" :link="backpack_url('activity-parent')" />
<x-backpack::menu-item title="Babysitter custodies" icon="la la-question" :link="backpack_url('babysitter-custody')" />
<x-backpack::menu-item title="Babysitter users" icon="la la-question" :link="backpack_url('babysitter-user')" />
<x-backpack::menu-item title="Childrens" icon="la la-question" :link="backpack_url('children')" />
<x-backpack::menu-item title="Cities" icon="la la-question" :link="backpack_url('city')" />
<x-backpack::menu-item title="Comments" icon="la la-question" :link="backpack_url('comment')" />
<x-backpack::menu-item title="Custody criterias" icon="la la-question" :link="backpack_url('custody-criteria')" />
<x-backpack::menu-item title="Favorites" icon="la la-question" :link="backpack_url('favorites')" />
<x-backpack::menu-item title="Geographic coodinates" icon="la la-question" :link="backpack_url('geographic-coodinate')" />
<x-backpack::menu-item title="Good plans" icon="la la-question" :link="backpack_url('good-plan')" />
<x-backpack::menu-item title="Images" icon="la la-question" :link="backpack_url('image')" />
<x-backpack::menu-item title="Parent users" icon="la la-question" :link="backpack_url('parent-user')" />
<x-backpack::menu-item title="Postal code localites" icon="la la-question" :link="backpack_url('postal-code-localite')" />
<x-backpack::menu-item title="Questions" icon="la la-question" :link="backpack_url('question')" />
<x-backpack::menu-item title="Responses" icon="la la-question" :link="backpack_url('response')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />