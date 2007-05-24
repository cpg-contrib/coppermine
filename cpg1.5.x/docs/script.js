/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $Revision: 3440 $
  $LastChangedBy: nibbler999 $
  $Date: 2007-01-27 22:50:27 +0100 (Sa, 27 Jan 2007) $
**********************************************/


var thisPage = window.location.href;
thisPage = thisPage.substring(thisPage.lastIndexOf('/') + 1, thisPage.length);
if (thisPage.indexOf('?') != -1) {
  thisPage = thisPage.substring(0, thisPage.indexOf('?'));
}
var thisUrl = thisPage;
if (thisPage.indexOf('#') != -1) {
  thisPage = thisPage.substring(0, thisPage.indexOf('#'));
}
thisPage = thisPage.substring(0, thisPage.indexOf('.htm'));

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
                useSelection                : false,
                useCookies                        : false,
                useLines                                : false,
                useIcons                                : false,
                useStatusText                : false,
                closeSameLevel        : false,
                inOrder                                        : true
        }
        this.icon = {
                root                                : 'pics/base.gif',
                folder                        : 'pics/folder.gif',
                folderOpen        : 'pics/folderopen.gif',
                node                                : 'pics/page.gif',
                empty                                : 'pics/empty.gif',
                line                                : 'pics/line.gif',
                join                                : 'pics/join.gif',
                joinBottom        : 'pics/joinbottom.gif',
                plus                                : 'pics/plus.gif',
                plusBottom        : 'pics/plusbottom.gif',
                minus                                : 'pics/minus.gif',
                minusBottom        : 'pics/minusbottom.gif',
                nlPlus                        : 'pics/nolines_plus.gif',
                nlMinus                        : 'pics/nolines_minus.gif'
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
                str += '<img id="i' + this.obj + nodeId + '" src="' + ((node._io) ? node.iconOpen : node.icon) + '" border="0" alt="" />';
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
                        str += '<img src="' + ( (this.aIndent[n] == 1 && this.config.useLines) ? this.icon.line : this.icon.empty ) + '" border="0" alt="" />';
                (node._ls) ? this.aIndent.push(0) : this.aIndent.push(1);
                if (node._hc) {
                        str += '<a href="javascript: ' + this.obj + '.o(' + nodeId + ');"><img id="j' + this.obj + nodeId + '" src="';
                        if (!this.config.useLines) str += (node._io) ? this.icon.nlMinus : this.icon.nlPlus;
                        else str += ( (node._io) ? ((node._ls && this.config.useLines) ? this.icon.minusBottom : this.icon.minus) : ((node._ls && this.config.useLines) ? this.icon.plusBottom : this.icon.plus ) );
                        str += '" border="0" alt="" /></a>';
                } else str += '<img src="' + ( (this.config.useLines) ? ((node._ls) ? this.icon.joinBottom : this.icon.join ) : this.icon.empty) + '" border="0" alt="" />';
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



d = new dTree('d');

d.add(0,-1,'Table of contents');
d.add(10,0,'About Coppermine','index.htm');
d.add(15,10,'Quick-Start guide','quickstart.htm');
d.add(20,10,'Table of Contents','toc.htm');
d.add(30,10,'Minimum Requirements','requirements.htm');
d.add(40,10,'Beta (Testing) version','testing.htm');
d.add(50,10,'Languages','languages.htm');
d.add(60,50,'Translation guide','translation.htm');
d.add(70,10,'Credits','credits.htm');
d.add(80,70,'Coppermine team','credits.htm#developers');
d.add(90,70,'Contributors','credits.htm#contributors');
d.add(100,70,'Free code used','credits.htm#codebase');
d.add(110,10,'Copyrights &amp; Disclaimer','copyrights.htm');
d.add(120,10,'Known issues','known_issues.htm');
d.add(130,0,'Installation and setup','install.htm');
d.add(140,130,'How to install the script','install.htm#how');
d.add(145,130,'What the installer does','install.htm#what');
d.add(150,130,'Setting permissions','install_permissions.htm');
d.add(160,150,'Apache on Unix/Linux (CHMOD)','install_permissions.htm#chmod');
d.add(170,150,'Apache on Windows','install_permissions.htm#apache_windows');
d.add(180,150,'IIS on Windows','install_permissions.htm#iis');
d.add(190,150,'Asking for support on permissions issues','install_permissions.htm#support');
d.add(200,130,'The install screen','install_screen.htm');
d.add(205,130,'Auto-Installers','auto-installers.htm');
d.add(207,130,'Installation FAQ','install_faq.htm');
d.add(210,0,'Upgrading','upgrading.htm');
d.add(220,210,'Necessary upgrading steps (from any version)','upgrading.htm#upgrade_any');
d.add(230,210,'Additional actions for updating from particular versions','upgrading.htm#upgrade_particular');
d.add(240,230,'Upgrading from version cpg1.0 or cpg1.1','upgrading.htm#upgrade_10');
d.add(250,230,'Upgrading from cpg1.2.x or cpg1.3.x to cpg1.5.x','upgrading.htm#upgrade_12');
d.add(260,230,'Upgrading from cpg1.4.x to version cpg1.5.x','upgrading.htm#upgrade_14');
d.add(270,210,'The version check tool','upgrading.htm#versioncheck');
d.add(280,270,'What it does','upgrading.htm#versioncheck_description_start');
d.add(290,270,'Options','upgrading.htm#versioncheck_options_start');
d.add(300,270,'Version comparison','upgrading.htm#versioncheck_comparison_start');
d.add(310,210,'Downgrading from cpg1.5.x to an older version','upgrading.htm#downgrading');
d.add(320,0,'Getting Started','start.htm');
d.add(330,320,'Basic concepts','start.htm#getting_concepts');
d.add(340,320,'Initial configuration','start.htm#getting_initial_configuration');
d.add(350,320,'Category/album/file structure','start.htm#getting_structure');
d.add(360,320,'Your admin account','start.htm#getting_admin_account');
d.add(370,320,'Check uploads','start.htm#getting_check_uploads');
d.add(380,320,'Consider bridging','start.htm#getting_consider_bridging');
d.add(390,320,'What are your visitors allowed to do?','start.htm#getting_interaction');
d.add(400,320,'Change your coppermine\'s design','start.htm#getting_design');
d.add(410,0,'Frequently Asked Questions','faq.htm');
d.add(420,0,'Themes','theme.htm');
d.add(425,420,'Themes that come with Coppermine','theme.htm#theme_builtin');
d.add(430,420,'Upgrading your custom theme','theme.htm#theme_upgrading');
d.add(440,430,'Converting cpg1.3.x themes to cpg1.4.x','theme_upgrade_13x-14x.htm');
d.add(443,440,'Edit style.css','theme_upgrade_13x-14x.htm#style');
d.add(444,440,'Edit theme.php','theme_upgrade_13x-14x.htm#template');
d.add(445,440,'Edit template.html','theme_upgrade_13x-14x.htm#theme');
d.add(446,440,'Validation Methodology','theme_upgrade_13x-14x.htm#validation');
d.add(447,420,'Converting cpg1.4.x themes to cpg1.5.x','theme_upgrade_14x-15x.htm');
d.add(448,447,'Edit style.css','theme_upgrade_14x-15x.htm#style');
d.add(449,447,'Edit theme.php','theme_upgrade_14x-15x.htm#template');
d.add(450,447,'Edit template.html','theme_upgrade_14x-15x.htm#theme');
d.add(451,447,'Validation Methodology','theme_upgrade_14x-15x.htm#validation');
d.add(460,420,'Content of a theme','theme.htm#theme_files');
d.add(470,420,'The sample theme - a template to copy from','theme.htm#theme_sample');
d.add(480,420,'How the theme engine works','theme.htm#theme_engine');
d.add(490,420,'Creating your custom theme','theme.htm#theme_create');
d.add(500,420,'Copyright-disclaimer in footer','theme_copyright.htm');
d.add(510,420,'Dynamic (PHP-driven) content','php-content.htm');
d.add(520,510,'Using anycontent.php','php-content.htm#php-content_anycontent');
d.add(530,510,'Custom header and footer','php-content.htm#php-content_header_footer');
d.add(540,510,'Theme-based dynamic content (theme.php)','php-content.htm#php-content_theme');
d.add(550,510,'Modifying core files','php-content.htm#php-content_core');
d.add(560,0,'Administration','administration.htm');
d.add(570,560,'Admin menu items','admin_menu.htm');
d.add(580,560,'Configuration','configuration.htm');
d.add(590,580,'General settings','configuration.htm#admin_general');
d.add(600,580,'Language & Charset settings','configuration.htm#admin_language');
d.add(610,580,'Themes settings','configuration.htm#admin_theme');
d.add(620,580,'Album list view','configuration.htm#admin_album_list');
d.add(630,580,'Thumbnail view','configuration.htm#admin_thumbnail_view');
d.add(640,580,'Image view','configuration.htm#admin_image_comment');
d.add(650,580,'Comment settings','configuration.htm#admin_comment_start');
d.add(660,580,'File settings','configuration.htm#admin_picture_thumbnail');
d.add(670,580,'Image watermarking','configuration.htm#admin_watermarking');
d.add(680,580,'Registration','configuration.htm#admin_registration');
d.add(690,580,'User settings','configuration.htm#admin_user');
d.add(700,580,'Custom fields for user profile','configuration.htm#admin_custom');
d.add(710,580,'Custom fields for image description','configuration.htm#admin_custom_image');
d.add(720,580,'Cookie settings','configuration.htm#admin_cookie');
d.add(730,580,'Email settings','configuration.htm#admin_email');
d.add(740,580,'Logging & statistics','configuration.htm#admin_logging');
d.add(750,580,'Miscellaneous settings','configuration.htm#admin_misc');
d.add(760,560,'Groups','groups.htm');
d.add(770,760,'The group control panel','groups.htm#group_cp');
d.add(780,760,'Group names','groups.htm#group_cp_names');
d.add(790,760,'Group types','groups.htm#group_cp_types');
d.add(800,760,'Quota','groups.htm#group_cp_quota');
d.add(810,760,'Group permissions (Rating/Ecards/Comments)','groups.htm#group_cp_permissions');
d.add(820,760,'Public albums upload','groups.htm#group_cp_public');
d.add(830,760,'Personal gallery','groups.htm#group_cp_personal');
d.add(840,760,'Upload method','groups.htm#group_cp_upload_method');
d.add(850,760,'Assigned albums','groups.htm#group_cp_assigned');
d.add(860,760,'Creating custom groups','groups.htm#group_cp_create');
d.add(870,760,'Deleting custom groups','groups.htm#group_cp_delete');
d.add(880,760,'Triggering synchronisation (bridged only)','groups.htm#group_cp_sync');
d.add(890,560,'Users','users.htm');
d.add(900,890,'The user control panel','users.htm#user_cp');
d.add(910,890,'Page controls','users.htm#user_cp_page');
d.add(920,890,'Searching for user(s)','users.htm#user_cp_search');
d.add(930,890,'Creating new users','users.htm#user_cp_new');
d.add(940,890,'Editing users','users.htm#user_cp_edit');
d.add(950,890,'Group membership','users.htm#user_cp_group');
d.add(960,560,'Categories','categories.htm');
d.add(970,560,'Albums','albums.htm');
d.add(980,970,'The Album Manager','albums.htm#albmgr');
d.add(990,980,'Creating albums','albums.htm#albmgr_create');
d.add(1010,980,'Renaming albums','albums.htm#albmgr_rename');
d.add(1020,980,'Changing the album order','albums.htm#albmgr_order');
d.add(1030,980,'Deleting albums','albums.htm#albmgr_delete');
d.add(1040,970,'Modifying albums/files','albums.htm#modif_alb_pics');
d.add(1050,970,'Album properties','albums.htm#album_prop');
d.add(1060,1050,'Reset album properties','albums.htm#album_prop_reset_start');
d.add(1070,560,'Files','files.htm');
d.add(1080,1070,'Editing files','files.htm#edit_pics');
d.add(1090,1070,'Editing videos','files.htm#edit_vids');
d.add(1100,1070,'Custom Thumbnails','files.htm#cust_thmb');
d.add(1110,560,'BBCODE','bbcode.htm');
d.add(1120,560,'EXIF data','exif.htm');
d.add(1130,560,'Plugins','plugins.htm');
d.add(1140,1130,'What is a plugin?','plugins.htm#plugin_definition');
d.add(1150,1130,'The Plugin API','plugins.htm#plugin_api');
d.add(1160,1130,'Where to get Plugins from?','plugins.htm#plugin_obtain');
d.add(1170,1130,'The Plugin Manager','plugins.htm#plugin_manager');
d.add(1180,1170,'Uploading a plugin','plugins.htm#plugin_manager_upload');
d.add(1190,1170,'Installing a plugin','plugins.htm#plugin_manager_install');
d.add(1200,1170,'Plugin Configuration','plugins.htm#plugin_manager_configuration');
d.add(1210,1170,'Uninstalling a plugin','plugins.htm#plugin_manager_uninstall');
d.add(1220,1130,'Writing plugins','plugins.htm#plugin_writing');
d.add(1230,0,'Uploading','uploading.htm');
d.add(1240,1230,'Uploading pics by FTP / Batch-Add Pictures','uploading.htm#batch_add_pics');
d.add(1250,1230,'Uploading by HTTP','uploading.htm#upload_http');
d.add(1260,1230,'Windows XP Web Publishing Wizard','uploading.htm#xp_publish_upload');
d.add(1270,1270,'XP Web Publishing Wizard: Setup','uploading.htm#xp_publish_setup');
d.add(1280,1270,'XP Web Publishing Wizard: Uploading pictures','uploading.htm#xp_publish_upload');
d.add(1290,1230,'Upload troubleshooting','upload_troubleshooting.htm#upload_trouble');
d.add(1293,1290,'Error messages','upload_troubleshooting#upload_error_messages');
d.add(1295,1290,'Asking for support on upload issues','upload_troubleshooting#upload_support');
d.add(1300,0,'Comments','comments.htm');
d.add(1310,1300,'Allowing comments','comments.htm#comments_allow');
d.add(1320,1300,'Comments options','comments.htm#comments_options');
d.add(1330,1300,'Spam issues','comments.htm#comments_options_spam');
d.add(1340,1300,'Reviewing Comments','comments.htm#comments_individual');
d.add(1350,0,'Bridging','bridging.htm');
d.add(1360,1350,'What bridging does','bridging.htm#integrating_bridge_purpose');
d.add(1370,1350,'Available bridge files','bridging.htm#integrating_bridge_start');
d.add(1380,1350,'Pre-requistes','bridging.htm#integrating_prerequisites_start');
d.add(1390,1380,'Authentication by cookie','bridging.htm#integrating_cookie_start');
d.add(1400,1380,'Standalone version first','bridging.htm#integrating_standalone_start');
d.add(1410,1380,'Coppermine users, groups and pics are lost when integrating','bridging.htm#integrating_users_start');
d.add(1420,1380,'Backup','bridging.htm#integrating_backup_start');
d.add(1430,1350,'Integration steps','bridging.htm#integrating_steps_start');
d.add(1440,1430,'Using the bridge manager','bridging.htm#bridge_manager_start');
d.add(1450,1430,'Choose application to bridge coppermine with','bridging.htm#bridge_manager_app_start');
d.add(1460,1430,'Path(s) used by your BBS app','bridging.htm#bridge_manager_path_start');
d.add(1470,1430,'BBS-specific settings','bridging.htm#bridge_manager_specific_start');
d.add(1480,1430,'Enable/disable BBS integration','bridging.htm#bridge_manager_enable_start');
d.add(1490,1350,'Recover from failed bridging','bridging.htm#bridge_manager_recover_start');
d.add(1500,1350,'Synchronising the bbs groups with Coppermine\'s groups','bridging.htm#integrating_steps_sync_start');
d.add(1510,1350,'Bridging support','bridging.htm#integrating_support_start');
d.add(1520,0,'Developer documentation','dev.htm');
d.add(1530,1520,'Plugin hooks','plugin_hooks.htm');
d.add(1540,1520,'Editing the documentation','dev_documentation.htm');
d.add(1550,1520,'Subversion','dev_subversion.htm');

function cpgDocToc() {
  document.write(d); // write the navigation
  d.closeAll(); // unexpand all branches
  var myCounter = 0;
  while (myCounter < d.aNodes.length) { // lopp through the navigation array and unexpand the one we're currently looking at
    if (d.aNodes[myCounter].url == thisUrl) {
      d.openTo(d.aNodes[myCounter].id, true);
    }
    myCounter = myCounter + 1;
  }
  document.write('<br />&nbsp;<br />');
  document.write('<form method="get" action="http://google.com/search" name="googlesearch" style="margin:0px">\n');
  document.write('<input type="text" name="q" size="20" maxlength="255" value="" style="border:1px solid black" title="Enter your search phrase here" />\n');
  document.write('<input type="hidden" value="documentation.coppermine-gallery.net" name="as_sitesearch" />\n');
  document.write('<img src="pics/views.gif" width="16" height="16" border="0" alt="" title="Search the Coppermine documentation online (using Google)" onclick="document.googlesearch.submit();" style="cursor:pointer" />\n');
  document.write('</form>\n');
}

function cpgDocBreadcrumb() {
  var cpgDocLoopCounter = 0;
  var cpgDocBreadcrumbPath = '';
  var cpgLoopTemp = thisPage;
  while(docSections[cpgLoopTemp]['up'] != '' && cpgDocLoopCounter <= 10) { // avoid endless loops if docSections-array is improperly nested
    var cpgDocStepBreadcrumb = '';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '<a href="';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + docSections[docSections[cpgLoopTemp]['up']]['file'];
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '">';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + docSections[docSections[cpgLoopTemp]['up']]['name'];
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '</a>';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + ' &gt; ';
    cpgDocBreadcrumbPath =  cpgDocStepBreadcrumb + cpgDocBreadcrumbPath;
    cpgDocLoopCounter = cpgDocLoopCounter + 1;
    cpgLoopTemp = docSections[cpgLoopTemp]['up'];
  }
  cpgDocBreadcrumbPath = cpgDocBreadcrumbPath + docSections[thisPage]['name'];
  document.write(cpgDocBreadcrumbPath);
}


function cpgDocHeader() {
  document.write('<!--<img src="../images/coppermine_logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" align="left" />-->');
  document.write('<h1>Coppermine Photo Gallery v1.5.0: Documentation and Manual</h1>');
  document.write('<br clear="all" />');
  //cpgDocPrevNext();
  //cpgDocBreadcrumb();
  document.write('<a name="top"></a>');
}

function cpgDocFooter() {
  document.write('</div>');
  document.write('<div align="right">');
  document.write('<a href="#top">Back to Top</a>');
  document.write('</div>');
  //cpgDocPrevNext();
}


function cpgDocPrevNext() {
  document.write('<div align="right">');
  if(docSections[thisPage]['previous'] != '') {
    document.write('<a href="' + docSections[docSections[thisPage]['previous']]['file'] + '" class="prev_next">&laquo; previous (' + docSections[docSections[thisPage]['previous']]['name'] + ')</a>&nbsp;&nbsp;&nbsp;');
  }
  if(docSections[thisPage]['next'] != '') {
    document.write('<a href="' + docSections[docSections[thisPage]['next']]['file'] + '" class="prev_next">next (' + docSections[docSections[thisPage]['next']]['name'] + ') &raquo;</a>');
  }
  document.write('</div>');
}

function displayNavigation() {
  // loop through all submenu-items and hide them
  var idName = '';
  for (var i = 0; i < docSections.length; i++) {
    idName = 'menu_' + docSections[i];
    document.getElementById(idName).style.display = 'none';
  }
  // unhide the menu item we're in
  var fileName = returnFileName();
  var expandNavigation = 'menu_' + fileName.substring(fileName.lastIndexOf('_') + 1, fileName.length);
  alert(expandNavigation);
  //document.getElementById(expandNavigation).style.display = 'block';
}