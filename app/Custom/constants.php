<?php
use Carbon\Carbon;
//date
define('CUR_DATE_TIME', Carbon::now());
define('CUR_MONTH', date('m',strtotime(CUR_DATE_TIME)));
define('CUR_YEAR', date('Y',strtotime(CUR_DATE_TIME)));
define('CUR_DAY', date('d',strtotime(CUR_DATE_TIME)));	
define('CUR_DATE', CUR_YEAR.'-'.CUR_MONTH.'-'.CUR_DAY);

define('RPP', 30);//admin - row per page
define('ABS', '<li>');//bredcrumb sepetator admin
define('BS', '<li>');//bredcrumb sepetator

define('POST', 'trip');//post url.. eg. post, trip, product etc.
define('POSTS', 'trips');//post url.. eg. posts, trips, products etc.

define('COMMENT_LEVEL', '3');



define('NEWSLETTER_CREATED', 'newsletter(s) has been created/sent.');
define('NEWSLETTER_UPDATED', 'newsletter(s) has been updated/sent.');

// nivaj 
define('PUBLISH', 'Publish');
define('UNPUBLISH', 'UnPublish');

//messages
define('CREATED', 'Record has been created.');
define('UPDATED', 'Record has been updated.');
define('DELETED', 'Record has been deleted.');
define('IMPORTED', 'Record has been imported.');
define('COMPLETED', 'task has been created.');
define('SUCCESSFULLY_UPDATED', 'Successfully Updated.');
define('OLD_PASSWORD_MESSAGE', "Old Password Doesn't Match...");
define('PASSWORD_MESSAGE', "Password successfully changed. Please Login With your new password");

define('NO_RECORD', 'NO Record ...');
define('PAGES', '15');

define('ACTIVE_STATUS', '<span class="badge badge-success">Active</span>');
define('NEW_STATUS', '<span class="badge badge-success">New</span>');
define('VIEW_STATUS', '<span class="badge badge-danger">Viewed</span>');
define('INACTIVE_STATUS', '<span class="badge badge-danger">InActive</span>');

define('PENDING', '<span class="badge badge-danger">Pending</span>');


define('EDIT_ICON', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>');
define('DELETE_ICON', '<i class="fa fa-trash" aria-hidden="true"></i>');
define('PENDING_ICON', '<i class="fa fa-eye" aria-hidden="true"></i>');
define('VIEW_ICON', '<i class="fa fa-eye" aria-hidden="true"></i>');
define('LINK_ICON', '<i class="fa fa-external-link" aria-hidden="true"></i>');
define('ADD_ICON', '<i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New');
define('VIEWLIST_ICON', '<i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp; View List');


//array seperator
define('STRING_SEPERATOR', '@@@rraySeper#ator@@@');
define('DEFAULT_IMG', 'http://103.233.56.101:5003/pefagov/site/pefa-default.jpg');
define('MAP_API_KEY', 'AIzaSyDCe5b56FGh3_YsPZRwLXvYP_2TlhkI8CA');
define('INDEX_URL', 'http://localhost/sajilomeals');
define('CHEF_URL', 'http://localhost/sajilomeal-chef');

