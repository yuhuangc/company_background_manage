<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-12-14
 * Time: 15:20
 */
?>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/css/select2_metro.css" />
<link rel="stylesheet" href="/css/DT_bootstrap.css" />


<div class="portlet-body">

    <div class="clearfix">

        <div class="btn-group">

            <button id="sample_editable_1_new" class="btn green">

                Add New <i class="icon-plus"></i>

            </button>

        </div>

        <div class="btn-group pull-right">

            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>

            </button>

            <ul class="dropdown-menu pull-right">

                <li><a href="#">Print</a></li>

                <li><a href="#">Save as PDF</a></li>

                <li><a href="#">Export to Excel</a></li>

            </ul>

        </div>

    </div>

    <div id="sample_editable_1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="sample_editable_1_length" class="dataTables_length"><label><div class="select2-container m-wrap small" id="s2id_autogen1"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span>5</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen2"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select size="1" name="sample_editable_1_length" aria-controls="sample_editable_1" class="m-wrap small select2-offscreen" tabindex="-1"><option value="5" selected="selected">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="sample_editable_1_filter"><label>Search: <input type="text" aria-controls="sample_editable_1" class="m-wrap medium"></label></div></div></div><table class="table table-striped table-hover table-bordered dataTable" id="sample_editable_1" aria-describedby="sample_editable_1_info">

            <thead>

            <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Username" style="width: 205px;">Username</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 320px;">Full Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 161px;">Points</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 223px;">Notes</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 121px;">Edit</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 163px;">Delete</th></tr>

            </thead>



            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">

                <td class=" sorting_1">alex</td>

                <td class=" ">Alex Nilson</td>

                <td class=" ">1234</td>

                <td class="center ">power user</td>

                <td class=" "><a class="edit" href="javascript:;">Edit</a></td>

                <td class=" "><a class="delete" href="javascript:;">Delete</a></td>

            </tr><tr class="even">

                <td class=" sorting_1">gist124</td>

                <td class=" ">Nick Roberts</td>

                <td class=" ">62</td>

                <td class="center ">new user</td>

                <td class=" "><a class="edit" href="javascript:;">Edit</a></td>

                <td class=" "><a class="delete" href="javascript:;">Delete</a></td>

            </tr><tr class="odd">

                <td class=" sorting_1">goldweb</td>

                <td class=" ">Sergio Jackson</td>

                <td class=" ">132</td>

                <td class="center ">elite user</td>

                <td class=" "><a class="edit" href="javascript:;">Edit</a></td>

                <td class=" "><a class="delete" href="javascript:;">Delete</a></td>

            </tr><tr class="even">

                <td class=" sorting_1">lisa</td>

                <td class=" ">Lisa Wong</td>

                <td class=" ">434</td>

                <td class="center ">new user</td>

                <td class=" "><a class="edit" href="javascript:;">Edit</a></td>

                <td class=" "><a class="delete" href="javascript:;">Delete</a></td>

            </tr><tr class="odd">

                <td class=" sorting_1">nick12</td>

                <td class=" ">Nick Roberts</td>

                <td class=" ">232</td>

                <td class="center ">power user</td>

                <td class=" "><a class="edit" href="javascript:;">Edit</a></td>

                <td class=" "><a class="delete" href="javascript:;">Delete</a></td>

            </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_editable_1_info">Showing 1 to 5 of 6 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← <span class="hidden-480">Prev</span></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li></ul></div></div></div></div>

</div>




<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/js/excanvas.min.js"></script>
<script src="/js/respond.min.js"></script>
<![endif]-->
<script src="/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/js/select2.min.js"></script>
<script type="text/javascript" src="/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/js/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/js/app.js"></script>
<script src="/js/table-editable.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        TableEditable.init();
    });
</script>

