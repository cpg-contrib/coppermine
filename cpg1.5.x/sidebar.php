<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 3241 $
  $LastChangedBy: gaugau $
  $Date: 2006-08-18 08:52:27 +0200 (Fr, 18 Aug 2006) $
**********************************************/

// ------------------------------------------------------------------------- //
// Sidebar script (c) 2004 Tarique Sani <tarique@sanisoft.com>,              //
// Amit Badkas <amit@sanisoft.com>                                           //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('SIDEBAR_PHP', true);
require('include/init.inc.php');
if ($_GET['action'] == 'install') {
//////// install --- start
pageheader($lang_sidebar_php['sidebar'] . ' - ' . $lang_sidebar_php['install']);
?>

<?php

starttable('100%', $CONFIG['gallery_name']. ' - ' . $lang_sidebar_php['sidebar'] , 1);

print <<< EOT
<tr>
<td class="tableh2">{$lang_sidebar_php['install_explain']}</td>
</tr>
<tr>
<td class="tableh2">
<div id="detecting">
EOT;

starttable('100%', $lang_sidebar_php['os_browser_detect'] , 1);
print <<< EOT
<tr>
<td class="tableb">
EOT;
printf($lang_sidebar_php['os_browser_detect_explain'], '<a href="javascript:unhide_all();">', '</a>');
print <<< EOT
</td>
</tr>
EOT;
endtable();
print <<< EOT
<br />
</div>

<div id="mozilla" style="display:none">
EOT;
starttable('100%', 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+' , 1);
print <<< EOT
<tr>
<td class="tableb"> If you use Mozilla 0.9.4 or later, you can <a href="javascript:addPanel()">add our sidebar to your set</a>. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.</td>
</tr>
EOT;
endtable();
print <<< EOT
<br />
</div>
<div id="ie5win" style="display:none">
EOT;
starttable('100%', 'Internet Explorer 5 and above on Windows' , 1);
print <<< EOT
<tr>
  <td class="tableb">
    <p>If you use Internet Explorer 5 or above on Windows, you can add the <a href="javascript:void(open('{$CONFIG['ecards_more_pic_target']}sidebar.php','_search'))">Side Bar</a> to your Links toolbar (dragging the link there) or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar. This link does not install our bar as your default search bar, so no modification is made to your system.</p>
  </td>
</tr>
EOT;
endtable();
print <<< EOT
<br />
</div>
<div id="ie5mac" style="display:none">
EOT;
starttable('100%', 'Internet Explorer 5 and above on Mac OS' , 1);
print <<< EOT
<tr>
  <td class="tableb">
    If you use Internet Explorer 5 or above on MacOS, <a href="{$CONFIG['ecards_more_pic_target']}sidebar.php">open our sidebar page</a> in a  separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add." If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites."
  </td>
</tr>
EOT;
endtable();
print <<< EOT
<br />
</div>
<div id="opera" style="display:none">
EOT;
starttable('100%', 'Opera 6 and above' , 1);
print <<< EOT
<tr>
  <td class="tableb">
    If you are using Opera, you can <a href="{$CONFIG['ecards_more_pic_target']}sidebar.php" rel="sidebar" title="{$CONFIG['gallery_name']}">click on this link to add our sidebar to your set</a>. You can uninstall the sidebar by right clicking on it's tab and choosing "Delete" from the context menu.
</td>
</tr>
EOT;

endtable();
print <<< EOT
</div>
<div id="additional" style="display:none">
EOT;
starttable('100%', 'Additional options' , 1);
print <<< EOT
<tr>
  <td class="tableb">
    If you have another browser than the one mentioned above, then click <a href="javascript:unhide_all();">here</a> to display all possible sidebar options.
  </td>
</tr>
EOT;

endtable();
print <<< EOT
</div>

<script type="text/javascript">
function addPanel() {
  if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function")) {
    window.sidebar.addPanel("{$CONFIG['gallery_name']}", "{$CONFIG['ecards_more_pic_target']}/sidebar.php", "");
  } else {
    alert('Sidebar cannot be added! Your browser does not support this method!');
  }
}

function unhide_all() {
  document.getElementById('detecting').style.display = 'none';
  document.getElementById('additional').style.display = 'none';
  document.getElementById('mozilla').style.display = 'block';
  document.getElementById('ie5win').style.display = 'block';
  document.getElementById('ie5mac').style.display = 'block';
  document.getElementById('opera').style.display = 'block';
}

function os_browser_detection() {
  // browser detection.
  // Usually, browser detection is buggy and should not be used. However, the sidebar works only in mainstream browsers anyway and requires JavaScript, so we can be pretty sure that the user has it enabled if this is suppossed to work in the first place.
   var detection_success = 0;
   if (navigator.userAgent.indexOf('Firefox') != -1 || navigator.userAgent.indexOf('Netscape') != -1 || navigator.userAgent.indexOf('Konqueror') != -1 || navigator.userAgent.indexOf('Gecko') != -1) {
       document.getElementById('mozilla').style.display = 'block';
       document.getElementById('additional').style.display = 'block';
       document.getElementById('detecting').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('Opera') != -1) {
       document.getElementById('opera').style.display = 'block';
       document.getElementById('additional').style.display = 'block';
       document.getElementById('detecting').style.display = 'none';
       detection_success = 1;
   }
   if (navigator.userAgent.indexOf('MSIE') != -1) {
       if (navigator.userAgent.indexOf('Mac') != -1) {
           document.getElementById('ie5mac').style.display = 'block';
           document.getElementById('additional').style.display = 'block';
           document.getElementById('detecting').style.display = 'none';
           detection_success = 1;
       } else {
           document.getElementById('ie5win').style.display = 'block';
           document.getElementById('additional').style.display = 'block';
           document.getElementById('detecting').style.display = 'none';
           detection_success = 1;
       }
   }
}


self.onload = os_browser_detection();
</script>
<noscript>
EOT;
starttable('100%', 'Error: JavaScript disabled' , 1);
print <<< EOT
<tr>
  <td class="tableb">
You appear to have disabled JavaScript. You can't use the sidebar without JavaScript. If you need it, re-enable it or use another browser.
</td>
</tr>
EOT;

endtable();
print <<< EOT
</noscript>
</td>
</tr>
EOT;
endtable();


pagefooter();
ob_end_flush();
//////// install --- end
} else {
?>

<html>
<head>
<title></title>
<script type="text/javascript">
/*--------------------------------------------------|
| dTree 2.05 | www.destroydrop.com/javascript/tree/ |
|---------------------------------------------------|
| Copyright (c) 2002-2003 Geir Landrö               |
|                                                   |
| This script can be used freely as long as all     |
| copyright messages are intact.                    |
|                                                   |
| Updated: 17.04.2003                               |
|--------------------------------------------------*/

// Node object
function Node(id, pid, name, url, title, target, icon, iconOpen, open) {
        var target = '_content';
        if(document.all){
          var target='_main';
        }
        this.id = id;
        this.pid = pid;
        this.name = name;
        this.url = url;
        this.title = title;
        this.target = target;
        this.icon = icon;
        this.iconOpen = iconOpen;
        this._io = open || false;
        this._is = false;
        this._ls = false;
        this._hc = false;
        this._ai = 0;
        this._p;
};

// Tree object
function dTree(objName) {
        this.config = {
                target                                        : null,
                folderLinks                        : true,
                useSelection                : true,
                useCookies                        : true,
                useLines                                : true,
                useIcons                                : true,
                useStatusText                : false,
                closeSameLevel        : false,
                inOrder                                        : false
        }
        this.icon = {
                root                                : 'images/sidebar/base.gif',
                folder                        : 'images/sidebar/folder.gif',
                folderOpen        : 'images/sidebar/folderopen.gif',
                node                                : 'images/sidebar/page.gif',
                empty                                : 'images/sidebar/empty.gif',
                line                                : 'images/sidebar/line.gif',
                join                                : 'images/sidebar/join.gif',
                joinBottom        : 'images/sidebar/joinbottom.gif',
                plus                                : 'images/sidebar/plus.gif',
                plusBottom        : 'images/sidebar/plusbottom.gif',
                minus                                : 'images/sidebar/minus.gif',
                minusBottom        : 'images/sidebar/minusbottom.gif',
                nlPlus                        : 'images/sidebar/nolines_plus.gif',
                nlMinus                        : 'images/sidebar/nolines_minus.gif'
        };
        this.obj = objName;
        this.aNodes = [];
        this.aIndent = [];
        this.root = new Node(-1);
        this.selectedNode = null;
        this.selectedFound = false;
        this.completed = false;
};

// Adds a new node to the node array
dTree.prototype.add = function(id, pid, name, url, title, target, icon, iconOpen, open) {
        this.aNodes[this.aNodes.length] = new Node(id, pid, name, url, title, target, icon, iconOpen, open);
};

// Open/close all nodes
dTree.prototype.openAll = function() {
        this.oAll(true);
};
dTree.prototype.closeAll = function() {
        this.oAll(false);
};

// Outputs the tree to the page
dTree.prototype.toString = function() {
        var str = '<div class="dtree">\n';
        if (document.getElementById) {
                if (this.config.useCookies) this.selectedNode = this.getSelected();
                str += this.addNode(this.root);
        } else str += 'Browser not supported.';
        str += '</div>';
        if (!this.selectedFound) this.selectedNode = null;
        this.completed = true;
        return str;
};

// Creates the tree structure
dTree.prototype.addNode = function(pNode) {
        var str = '';
        var n=0;
        if (this.config.inOrder) n = pNode._ai;
        for (n; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == pNode.id) {
                        var cn = this.aNodes[n];
                        cn._p = pNode;
                        cn._ai = n;
                        this.setCS(cn);
                        if (!cn.target && this.config.target) cn.target = this.config.target;
                        if (cn._hc && !cn._io && this.config.useCookies) cn._io = this.isOpen(cn.id);
                        if (!this.config.folderLinks && cn._hc) cn.url = null;
                        if (this.config.useSelection && cn.id == this.selectedNode && !this.selectedFound) {
                                        cn._is = true;
                                        this.selectedNode = n;
                                        this.selectedFound = true;
                        }
                        str += this.node(cn, n);
                        if (cn._ls) break;
                }
        }
        return str;
};

// Creates the node icon, url and text
dTree.prototype.node = function(node, nodeId) {
        var str = '<div class="dTreeNode">' + this.indent(node, nodeId);
        if (this.config.useIcons) {
                if (!node.icon) node.icon = (this.root.id == node.pid) ? this.icon.root : ((node._hc) ? this.icon.folder : this.icon.node);
                if (!node.iconOpen) node.iconOpen = (node._hc) ? this.icon.folderOpen : this.icon.node;
                if (this.root.id == node.pid) {
                        node.icon = this.icon.root;
                        node.iconOpen = this.icon.root;
                }
                str += '<img id="i' + this.obj + nodeId + '" src="' + ((node._io) ? node.iconOpen : node.icon) + '" alt="" />';
        }
        if (node.url) {
                str += '<a id="s' + this.obj + nodeId + '" class="' + ((this.config.useSelection) ? ((node._is ? 'nodeSel' : 'node')) : 'node') + '" href="' + node.url + '"';
                if (node.title) str += ' title="' + node.title + '"';
                if (node.target) str += ' target="' + node.target + '"';
                if (this.config.useStatusText) str += ' onmouseover="window.status=\'' + node.name + '\';return true;" onmouseout="window.status=\'\';return true;" ';
                if (this.config.useSelection && ((node._hc && this.config.folderLinks) || !node._hc))
                        str += ' onclick="javascript: ' + this.obj + '.s(' + nodeId + ');"';
                str += '>';
        }
        else if ((!this.config.folderLinks || !node.url) && node._hc && node.pid != this.root.id)
                str += '<a href="javascript: ' + this.obj + '.o(' + nodeId + ');" class="node">';
        str += node.name;
        if (node.url || ((!this.config.folderLinks || !node.url) && node._hc)) str += '</a>';
        str += '</div>';
        if (node._hc) {
                str += '<div id="d' + this.obj + nodeId + '" class="clip" style="display:' + ((this.root.id == node.pid || node._io) ? 'block' : 'none') + ';">';
                str += this.addNode(node);
                str += '</div>';
        }
        this.aIndent.pop();
        return str;
};

// Adds the empty and line icons
dTree.prototype.indent = function(node, nodeId) {
        var str = '';
        if (this.root.id != node.pid) {
                for (var n=0; n<this.aIndent.length; n++)
                        str += '<img src="' + ( (this.aIndent[n] == 1 && this.config.useLines) ? this.icon.line : this.icon.empty ) + '" alt="" />';
                (node._ls) ? this.aIndent.push(0) : this.aIndent.push(1);
                if (node._hc) {
                        str += '<a href="javascript: ' + this.obj + '.o(' + nodeId + ');"><img id="j' + this.obj + nodeId + '" src="';
                        if (!this.config.useLines) str += (node._io) ? this.icon.nlMinus : this.icon.nlPlus;
                        else str += ( (node._io) ? ((node._ls && this.config.useLines) ? this.icon.minusBottom : this.icon.minus) : ((node._ls && this.config.useLines) ? this.icon.plusBottom : this.icon.plus ) );
                        str += '" alt="" /></a>';
                } else str += '<img src="' + ( (this.config.useLines) ? ((node._ls) ? this.icon.joinBottom : this.icon.join ) : this.icon.empty) + '" alt="" />';
        }
        return str;
};

// Checks if a node has any children and if it is the last sibling
dTree.prototype.setCS = function(node) {
        var lastId;
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.id) node._hc = true;
                if (this.aNodes[n].pid == node.pid) lastId = this.aNodes[n].id;
        }
        if (lastId==node.id) node._ls = true;
};

// Returns the selected node
dTree.prototype.getSelected = function() {
        var sn = this.getCookie('cs' + this.obj);
        return (sn) ? sn : null;
};

// Highlights the selected node
dTree.prototype.s = function(id) {
        if (!this.config.useSelection) return;
        var cn = this.aNodes[id];
        if (cn._hc && !this.config.folderLinks) return;
        if (this.selectedNode != id) {
                if (this.selectedNode || this.selectedNode==0) {
                        eOld = document.getElementById("s" + this.obj + this.selectedNode);
                        eOld.className = "node";
                }
                eNew = document.getElementById("s" + this.obj + id);
                eNew.className = "nodeSel";
                this.selectedNode = id;
                if (this.config.useCookies) this.setCookie('cs' + this.obj, cn.id);
        }
};

// Toggle Open or close
dTree.prototype.o = function(id) {
        var cn = this.aNodes[id];
        this.nodeStatus(!cn._io, id, cn._ls);
        cn._io = !cn._io;
        if (this.config.closeSameLevel) this.closeLevel(cn);
        if (this.config.useCookies) this.updateCookie();
};

// Open or close all nodes
dTree.prototype.oAll = function(status) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n]._hc && this.aNodes[n].pid != this.root.id) {
                        this.nodeStatus(status, n, this.aNodes[n]._ls)
                        this.aNodes[n]._io = status;
                }
        }
        if (this.config.useCookies) this.updateCookie();
};

// Opens the tree to a specific node
dTree.prototype.openTo = function(nId, bSelect, bFirst) {
        if (!bFirst) {
                for (var n=0; n<this.aNodes.length; n++) {
                        if (this.aNodes[n].id == nId) {
                                nId=n;
                                break;
                        }
                }
        }
        var cn=this.aNodes[nId];
        if (cn.pid==this.root.id || !cn._p) return;
        cn._io = true;
        cn._is = bSelect;
        if (this.completed && cn._hc) this.nodeStatus(true, cn._ai, cn._ls);
        if (this.completed && bSelect) this.s(cn._ai);
        else if (bSelect) this._sn=cn._ai;
        this.openTo(cn._p._ai, false, true);
};

// Closes all nodes on the same level as certain node
dTree.prototype.closeLevel = function(node) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.pid && this.aNodes[n].id != node.id && this.aNodes[n]._hc) {
                        this.nodeStatus(false, n, this.aNodes[n]._ls);
                        this.aNodes[n]._io = false;
                        this.closeAllChildren(this.aNodes[n]);
                }
        }
}

// Closes all children of a node
dTree.prototype.closeAllChildren = function(node) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.id && this.aNodes[n]._hc) {
                        if (this.aNodes[n]._io) this.nodeStatus(false, n, this.aNodes[n]._ls);
                        this.aNodes[n]._io = false;
                        this.closeAllChildren(this.aNodes[n]);
                }
        }
}

// Change the status of a node(open or closed)
dTree.prototype.nodeStatus = function(status, id, bottom) {
        eDiv        = document.getElementById('d' + this.obj + id);
        eJoin        = document.getElementById('j' + this.obj + id);
        if (this.config.useIcons) {
                eIcon        = document.getElementById('i' + this.obj + id);
                eIcon.src = (status) ? this.aNodes[id].iconOpen : this.aNodes[id].icon;
        }
        eJoin.src = (this.config.useLines)?
        ((status)?((bottom)?this.icon.minusBottom:this.icon.minus):((bottom)?this.icon.plusBottom:this.icon.plus)):
        ((status)?this.icon.nlMinus:this.icon.nlPlus);
        eDiv.style.display = (status) ? 'block': 'none';
};


// [Cookie] Clears a cookie
dTree.prototype.clearCookie = function() {
        var now = new Date();
        var yesterday = new Date(now.getTime() - 1000 * 60 * 60 * 24);
        this.setCookie('co'+this.obj, 'cookieValue', yesterday);
        this.setCookie('cs'+this.obj, 'cookieValue', yesterday);
};

// [Cookie] Sets value in a cookie
dTree.prototype.setCookie = function(cookieName, cookieValue, expires, path, domain, secure) {
        document.cookie =
                escape(cookieName) + '=' + escape(cookieValue)
                + (expires ? '; expires=' + expires.toGMTString() : '')
                + (path ? '; path=' + path : '')
                + (domain ? '; domain=' + domain : '')
                + (secure ? '; secure' : '');
};

// [Cookie] Gets a value from a cookie
dTree.prototype.getCookie = function(cookieName) {
        var cookieValue = '';
        var posName = document.cookie.indexOf(escape(cookieName) + '=');
        if (posName != -1) {
                var posValue = posName + (escape(cookieName) + '=').length;
                var endPos = document.cookie.indexOf(';', posValue);
                if (endPos != -1) cookieValue = unescape(document.cookie.substring(posValue, endPos));
                else cookieValue = unescape(document.cookie.substring(posValue));
        }
        return (cookieValue);
};

// [Cookie] Returns ids of open nodes as a string
dTree.prototype.updateCookie = function() {
        var str = '';
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n]._io && this.aNodes[n].pid != this.root.id) {
                        if (str) str += '.';
                        str += this.aNodes[n].id;
                }
        }
        this.setCookie('co' + this.obj, str);
};

// [Cookie] Checks if a node id is in a cookie
dTree.prototype.isOpen = function(id) {
        var aOpen = this.getCookie('co' + this.obj).split('.');
        for (var n=0; n<aOpen.length; n++)
                if (aOpen[n] == id) return true;
        return false;
};

// If Push and pop is not implemented by the browser
if (!Array.prototype.push) {
        Array.prototype.push = function array_push() {
                for(var i=0;i<arguments.length;i++)
                        this[this.length]=arguments[i];
                return this.length;
        }
};
if (!Array.prototype.pop) {
        Array.prototype.pop = function array_pop() {
                lastElement = this[this.length-1];
                this.length = Math.max(this.length-1,0);
                return lastElement;
        }
};
</script>
<script type="text/javascript">
<?php
global $CONFIG, $HIDE_USER_CAT, $FORBIDDEN_SET,$cpg_show_private_album;
if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
}
$sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT . $album_filter;
$result = cpg_db_query($sql);
$album_count = mysql_num_rows($result);
if (!$album_count) {
        $HIDE_USER_CAT = 1;
}


$dtree_counter=0;

function get_tree_subcat_data($parent, $dtree_parent = 0) {
        global $CONFIG, $HIDE_USER_CAT, $catStr, $dtree_counter;
        if ($CONFIG['categories_alpha_sort'] == 1) {
                $cat_sort_order = 'name';
        }else{
                $cat_sort_order = 'pos';
        }
        $sql = "SELECT cid, name " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY ". $cat_sort_order;
        $result = cpg_db_query($sql);
        if (($cat_count = mysql_num_rows($result)) > 0) {
                $rowset = cpg_db_fetch_rowset($result);
                $pos = 0;
                foreach ($rowset as $subcat) {
                        if ($subcat['cid'] == USER_GAL_CAT && $HIDE_USER_CAT == 1) {

                        } else {
                                $dtree_counter++;
                                $catStr .= "d.add(".$dtree_counter.",".$dtree_parent.",'".addslashes($subcat['name'])."','index.php?cat=".$subcat['cid']."','');\n";
                                $dtree_temp=$dtree_counter;
                                get_tree_subcat_data($subcat['cid'], $dtree_temp);
                                get_tree_album_data($subcat['cid'], $dtree_temp);
                        }
                }
                if ($parent == 0) {
                        get_tree_album_data($parent,0);
                }
        }
}

function get_tree_album_data($category,$dtree_parent) {
        global $catStr,$ALBUM_SET, $dtree_counter;
        global $CONFIG, $HIDE_USER_CAT, $FORBIDDEN_SET,$cpg_show_private_album;
        $album_filter='';
        $pic_filter='';
        if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
                $album_filter = ' and '.str_replace('p.','a.',$FORBIDDEN_SET);
                $pic_filter = ' and '.str_replace('p.',$CONFIG['TABLE_PICTURES'].'.',$FORBIDDEN_SET);
        }
        if ($category == USER_GAL_CAT) {
                $sql = "SELECT DISTINCT user_id, user_name FROM {$CONFIG['TABLE_USERS']}, {$CONFIG['TABLE_ALBUMS']} WHERE  10000 + {$CONFIG['TABLE_USERS']}.user_id = {$CONFIG['TABLE_ALBUMS']}.category ORDER BY user_name ASC";
                $result = cpg_db_query($sql);
                if (($cat_count = mysql_num_rows($result)) > 0) {
                        $rowset = cpg_db_fetch_rowset($result);
                        foreach ($rowset as $subcat) {
                                $dtree_counter++;
                                $catStr .= "d.add(".$dtree_counter.",".$dtree_parent.",'".addslashes($subcat['user_name'])."','index.php?cat=". (FIRST_USER_CAT + (int) $subcat['user_id']) ."');\n";
                                get_tree_album_data(FIRST_USER_CAT + (int) $subcat['user_id'], $dtree_counter);
                        }
                }
        } else {
                if ($category == USER_GAL_CAT) {
                        $sql = "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET .$album_filter . " ORDER BY pos";
                } else {
                        $unaliased_album_filter = str_replace('a.','',$album_filter);
                        $sql = "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET .$unaliased_album_filter . " ORDER BY pos";
                }
                $result = cpg_db_query($sql);
                if (($cat_count = mysql_num_rows($result)) > 0) {
                        $rowset = cpg_db_fetch_rowset($result);
                        foreach ($rowset as $subcat) {
                                $dtree_counter++;
                                $catStr .= "d.add(".$dtree_counter.",".$dtree_parent.",'".addslashes($subcat['title'])."','thumbnails.php?album=".$subcat['aid']."','');\n";
                        }
                }
        }
}

get_tree_subcat_data(0,0);


echo "d = new dTree('d');\n";
echo "d.add(0,-1,'".$CONFIG['gallery_name'].$lang_list_categories['home']."','index.php');\n";
echo $catStr;
echo "document.write(d);\n";
?>
</script>
<style type="text/css">
.dtree {
        font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size: 11px;
        color: #666;
        white-space: nowrap;
}
.dtree img {
        border: 0px;
        vertical-align: middle;
}
.dtree a {
        color: #333;
        text-decoration: none;
}
.dtree a.node, .dtree a.nodeSel {
        white-space: nowrap;
        padding: 1px 2px 1px 2px;
}
.dtree a.node:hover, .dtree a.nodeSel:hover {
        color: #333;
        text-decoration: underline;
}
.dtree a.nodeSel {
        background-color: #c0d2ec;
}
.dtree .clip {
        overflow: hidden;
}
</style>
</head>
<body >
<form method="GET" action="thumbnails.php" target="_content">
<input type="hidden" name="album" value="search" />
<input type="hidden" name="type" value="full" />
<div id="tlbSearch" style="margin: 1px 1px;float: left;">
<input id="fldSearch" type="text" name="search" style="font-size: 7pt;background: white;width: 7em;" />
<input id="btnSearch" type="image" src="images/sidebar/search.gif" alt="Search" />
<a href="sidebar.php" target="_self" ><img id="btnReload" src="images/sidebar/reload.gif" border="0" width="13" height="15" alt="Reload" /></a>
</div>
</form>
</body>
</html>
<?php
}
?>