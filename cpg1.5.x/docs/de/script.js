/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  as published by the Free Software Foundation.

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
| Copyright (c) 2002-2003 Geir Landr�              |
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
                root                                : 'images/base.gif',
                folder                        : 'images/folder.gif',
                folderOpen        : 'images/folderopen.gif',
                node                                : 'images/page.gif',
                empty                                : 'images/empty.gif',
                line                                : 'images/line.gif',
                join                                : 'images/join.gif',
                joinBottom        : 'images/joinbottom.gif',
                plus                                : 'images/plus.gif',
                plusBottom        : 'images/plusbottom.gif',
                minus                                : 'images/minus.gif',
                minusBottom        : 'images/minusbottom.gif',
                nlPlus                        : 'images/nolines_plus.gif',
                nlMinus                        : 'images/nolines_minus.gif'
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

d.add(0,-1,'Coppermine Dokumentation');
d.add(100,0,'Über Coppermine','index.htm');
//d.add(150,100,'Quick-Start guide','quickstart.htm');
d.add(200,100,'Inhaltsverzeichnis','toc.htm');
d.add(300,100,'Mindestvoraussetzung','requirements.htm');
//d.add(400,100,'Beta (Testing) version','testing.htm');
//d.add(500,100,'Languages','languages.htm');
//d.add(600,500,'Translation guide','translation.htm');
d.add(700,100,'Credits','credits.htm');
d.add(800,700,'Coppermine Team','credits.htm#developers');
d.add(900,700,'Unterstützer','credits.htm#contributors');
d.add(1000,700,'Verwendeter Open Source Code','credits.htm#codebase');
//d.add(1100,100,'Copyrights &amp; Disclaimer','copyrights.htm');
//d.add(1200,100,'Known issues','known_issues.htm');
//d.add(1300,0,'Installation and setup','install.htm');
//d.add(1400,1300,'How to install the script','install.htm#how');
//d.add(1450,1300,'What the installer does','install.htm#what');
//d.add(1500,1300,'Setting permissions','install_permissions.htm');
//d.add(1600,1500,'Apache on Unix/Linux (CHMOD)','install_permissions.htm#chmod');
//d.add(1700,1500,'Apache on Windows','install_permissions.htm#apache_windows');
//d.add(1800,1500,'IIS on Windows','install_permissions.htm#iis');
//d.add(1900,1500,'Asking for support on permissions issues','install_permissions.htm#support');
//d.add(2000,1300,'The install screen','install_screen.htm');
//d.add(2050,1300,'Auto-Installers','auto-installers.htm');
//d.add(2070,1300,'Installation FAQ','install_faq.htm');
//d.add(2080,1300,'Uninstall','uninstall.htm');
//d.add(2100,0,'Upgrading','upgrading.htm');
//d.add(2200,2100,'Necessary upgrading steps (from any version)','upgrading.htm#upgrade_any');
//d.add(2300,2100,'Additional actions for updating from particular versions','upgrading.htm#upgrade_particular');
//d.add(2400,2300,'Upgrading from version cpg1.0 or cpg1.1','upgrading.htm#upgrade_10');
//d.add(2500,2300,'Upgrading from cpg1.2.x or cpg1.3.x to cpg1.5.x','upgrading.htm#upgrade_12');
//d.add(2600,2300,'Upgrading from cpg1.4.x to version cpg1.5.x','upgrading.htm#upgrade_14');
//d.add(2700,2100,'The version check tool','upgrading.htm#versioncheck');
//d.add(2800,2700,'What it does','upgrading.htm#versioncheck_description_start');
//d.add(2900,2700,'Options','upgrading.htm#versioncheck_options_start');
//d.add(3000,2700,'Version comparison','upgrading.htm#versioncheck_comparison_start');
//d.add(3100,2100,'Downgrading from cpg1.5.x to an older version','upgrading.htm#downgrading');
//d.add(3200,0,'Getting Started','start.htm');
//d.add(3300,3200,'Basic concepts','start.htm#getting_concepts');
//d.add(3400,3200,'Initial configuration','start.htm#getting_initial_configuration');
//d.add(3500,3200,'Category/album/file structure','start.htm#getting_structure');
//d.add(3600,3200,'Your admin account','start.htm#getting_admin_account');
//d.add(3700,3200,'Check uploads','start.htm#getting_check_uploads');
//d.add(3800,3200,'Consider bridging','start.htm#getting_consider_bridging');
//d.add(3900,3200,'What are your visitors allowed to do?','start.htm#getting_interaction');
//d.add(4000,3200,'Change your coppermine\'s design','start.htm#getting_design');
//d.add(4100,0,'Frequently Asked Questions','faq.htm');
//d.add(4200,0,'Themes','theme.htm');
//d.add(4250,4200,'Themes that come with Coppermine','theme.htm#theme_builtin');
//d.add(4300,4200,'Upgrading your custom theme','theme.htm#theme_upgrading');
//d.add(4400,4300,'Converting cpg1.3.x themes to cpg1.4.x','theme_upgrade_13x-14x.htm');
//d.add(4430,4400,'Edit style.css','theme_upgrade_13x-14x.htm#style');
//d.add(4440,4400,'Edit theme.php','theme_upgrade_13x-14x.htm#template');
//d.add(4450,4400,'Edit template.html','theme_upgrade_13x-14x.htm#theme');
//d.add(4460,4400,'Validation Methodology','theme_upgrade_13x-14x.htm#validation');
//d.add(4470,4300,'Converting cpg1.4.x themes to cpg1.5.x','theme_upgrade_14x-15x.htm');
//d.add(4480,4470,'Edit style.css','theme_upgrade_14x-15x.htm#style');
//d.add(4490,4470,'Edit theme.php','theme_upgrade_14x-15x.htm#template');
//d.add(4500,4470,'Edit template.html','theme_upgrade_14x-15x.htm#theme');
//d.add(4510,4470,'Validation Methodology','theme_upgrade_14x-15x.htm#validation');
//d.add(4600,4200,'Content of a theme','theme.htm#theme_files');
//d.add(4700,4200,'The sample theme - a template to copy from','theme.htm#theme_sample');
//d.add(4800,4200,'How the theme engine works','theme.htm#theme_engine');
//d.add(4850,4200,'User-contributed themes','theme_user-contributions.htm#theme_user-contributions');
//d.add(4900,4200,'Creating your custom theme','theme_create.htm#theme_create');
//d.add(4910,4900,'Rename your theme first','theme_create.htm#theme_create_rename');
//d.add(4920,4900,'Tipps & tricks','theme_create.htm#theme_create_tipps');
//d.add(4930,4900,'Using WYSIWYG-editors','theme_create.htm#theme_create_wysiwyg');
//d.add(4940,4900,'Editing template.html','theme_create.htm#theme_create_template_html');
//d.add(4950,4900,'Modifying colors','theme_create.htm#theme_create_colors');
//d.add(4960,4900,'Editing theme.php','theme_create.htm#theme_create_theme_php');
//d.add(5000,4200,'Copyright-disclaimer in footer','theme_copyright.htm');
//d.add(5100,4200,'Dynamic (PHP-driven) content','php-content.htm');
//d.add(5200,5100,'Using anycontent.php','php-content.htm#php-content_anycontent');
//d.add(5300,5100,'Custom header and footer','php-content.htm#php-content_header_footer');
//d.add(5400,5100,'Theme-based dynamic content (theme.php)','php-content.htm#php-content_theme');
//d.add(5500,5100,'Modifying core files','php-content.htm#php-content_core');
d.add(5600,0,'Administration','administration.htm');
//d.add(5700,5600,'Admin menu items','admin_menu.htm');
//d.add(5800,5600,'Configuration','configuration.htm');
//d.add(5900,5800,'General settings','configuration.htm#admin_general');
//d.add(6000,5800,'Language & Charset settings','configuration.htm#admin_language');
//d.add(6100,5800,'Themes settings','configuration.htm#admin_theme');
//d.add(6200,5800,'Album list view','configuration.htm#admin_album_list');
//d.add(6300,5800,'Thumbnail view','configuration.htm#admin_thumbnail_view');
//d.add(6400,5800,'Image view','configuration.htm#admin_image_comment');
//d.add(6500,5800,'Comment settings','configuration.htm#admin_comment_start');
//d.add(6500,5800,'Contact form settings','configuration.htm#admin_contact_start');
//d.add(6600,5800,'File settings','configuration.htm#admin_picture_thumbnail');
//d.add(6700,5800,'Image watermarking','configuration.htm#admin_watermarking');
//d.add(6800,5800,'Registration','configuration.htm#admin_registration');
//d.add(6900,5800,'User settings','configuration.htm#admin_user');
//d.add(7000,5800,'Custom fields for user profile','configuration.htm#admin_custom');
//d.add(7100,5800,'Custom fields for image description','configuration.htm#admin_custom_image');
//d.add(7200,5800,'Cookie settings','configuration.htm#admin_cookie');
//d.add(7300,5800,'Email settings','configuration.htm#admin_email');
//d.add(7400,5800,'Logging & statistics','configuration.htm#admin_logging');
//d.add(7500,5800,'Miscellaneous settings','configuration.htm#admin_misc');
//d.add(7600,5600,'Groups','groups.htm');
//d.add(7700,7600,'The group control panel','groups.htm#group_cp');
//d.add(7800,7600,'Group names','groups.htm#group_cp_names');
//d.add(7900,7600,'Group types','groups.htm#group_cp_types');
//d.add(8000,7600,'Quota','groups.htm#group_cp_quota');
//d.add(8100,7600,'Group permissions (Rating/Ecards/Comments)','groups.htm#group_cp_permissions');
//d.add(8200,7600,'Public albums upload','groups.htm#group_cp_public');
//d.add(8300,7600,'Personal gallery','groups.htm#group_cp_personal');
//d.add(8400,7600,'Upload method','groups.htm#group_cp_upload_method');
//d.add(8500,7600,'Assigned albums','groups.htm#group_cp_assigned');
//d.add(8600,7600,'Creating custom groups','groups.htm#group_cp_create');
//d.add(8700,7600,'Deleting custom groups','groups.htm#group_cp_delete');
//d.add(8800,7600,'Triggering synchronisation (bridged only)','groups.htm#group_cp_sync');
//d.add(8900,5600,'Users','users.htm');
//d.add(9000,8900,'The user control panel','users.htm#user_cp');
//d.add(9100,8900,'Page controls','users.htm#user_cp_page');
//d.add(9200,8900,'Searching for user(s)','users.htm#user_cp_search');
//d.add(9300,8900,'Creating new users','users.htm#user_cp_new');
//d.add(9400,8900,'Editing users','users.htm#user_cp_edit');
//d.add(9500,8900,'Group membership','users.htm#user_cp_group');
//d.add(9600,5600,'Categories','categories.htm');
//d.add(9700,5600,'Albums','albums.htm');
//d.add(9800,9700,'The Album Manager','albums.htm#albmgr');
//d.add(9900,9800,'Creating albums','albums.htm#albmgr_create');
//d.add(10100,9800,'Renaming albums','albums.htm#albmgr_rename');
//d.add(10200,9800,'Changing the album order','albums.htm#albmgr_order');
//d.add(10300,9800,'Deleting albums','albums.htm#albmgr_delete');
//d.add(10400,9700,'Modifying albums/files','albums.htm#modif_alb_pics');
//d.add(10500,9700,'Album properties','albums.htm#album_prop');
//d.add(10600,10500,'Reset album properties','albums.htm#album_prop_reset_start');
//d.add(10620,9700,'Admin vs. user','albums.htm#album_admin_user');
//d.add(10700,5600,'Files','files.htm');
//d.add(10800,10700,'Editing files','files.htm#edit_pics');
//d.add(10900,10700,'Editing videos','files.htm#edit_vids');
//d.add(11000,10700,'Custom Thumbnails','files.htm#cust_thmb');
//d.add(11030,5600,'Keywords','keywords.htm');
//d.add(11040,11030,'Assigning keywords','keywords.htm#keywords_assign');
//d.add(11050,11030,'Assigning keywords when uploading','keywords.htm#keywords_assign_upload');
//d.add(11060,11030,'Editing/adding keywords','keywords.htm#keywords_assign_edit');
//d.add(11070,11030,'Keywords manager','keywords.htm#keywords_manager');
//d.add(11080,11030,'Album keywords','keywords.htm#keywords_album');
//d.add(11100,5600,'BBCODE','bbcode.htm');
//d.add(11200,5600,'EXIF data','exif.htm');
//d.add(11300,5600,'Plugins','plugins.htm');
//d.add(11400,11300,'What is a plugin?','plugins.htm#plugin_definition');
//d.add(11500,11300,'The Plugin API','plugins.htm#plugin_api');
//d.add(11600,11300,'Where to get Plugins from?','plugins.htm#plugin_obtain');
//d.add(11700,11300,'The Plugin Manager','plugins.htm#plugin_manager');
//d.add(11800,11700,'Uploading a plugin','plugins.htm#plugin_manager_upload');
//d.add(11900,11700,'Installing a plugin','plugins.htm#plugin_manager_install');
//d.add(12000,11700,'Plugin Configuration','plugins.htm#plugin_manager_configuration');
//d.add(12100,11700,'Uninstalling a plugin','plugins.htm#plugin_manager_uninstall');
//d.add(12200,11300,'Writing plugins','plugins.htm#plugin_writing');
//d.add(12250,5600,'Admin Tools','admin-tools.htm#admin_tools');
//d.add(12270,5600,'Errors','errors.htm#errors');
//d.add(12280,5600,'Exporting','export.htm#export');
//d.add(12300,0,'Uploading','uploading.htm');
//d.add(12400,12300,'Uploading pics by FTP / Batch-Add Pictures','uploading.htm#batch_add_pics');
//d.add(12500,12300,'Uploading by HTTP','uploading.htm#upload_http');
//d.add(12600,12300,'Windows XP Web Publishing Wizard','uploading.htm#xp_publish_upload');
//d.add(12700,12700,'XP Web Publishing Wizard: Setup','uploading.htm#xp_publish_setup');
//d.add(12800,12700,'XP Web Publishing Wizard: Uploading pictures','uploading.htm#xp_publish_upload');
//d.add(12900,12300,'Upload troubleshooting','upload_troubleshooting.htm#upload_trouble');
//d.add(12930,12900,'Asking for support on upload issues','upload_troubleshooting.htm#upload_support');
//d.add(12950,12900,'Error messages','upload_troubleshooting.htm#upload_error_messages');
//d.add(12960,12900,'Server-sided restrictions','upload_troubleshooting.htm#upload_trouble_server-sided_restrictions');
//d.add(12970,12900,'Things to check','upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check');
//d.add(13000,0,'Comments','comments.htm');
//d.add(13100,13000,'Allowing comments','comments.htm#comments_allow');
//d.add(13200,13000,'Comments options','comments.htm#comments_options');
//d.add(13300,13000,'Spam issues','comments.htm#comments_options_spam');
//d.add(13400,13000,'Reviewing Comments','comments.htm#comments_individual');
//d.add(13500,0,'Bridging','bridging.htm');
//d.add(13600,13500,'What bridging does','bridging.htm#integrating_bridge_purpose');
//d.add(13700,13500,'Available bridge files','bridging.htm#integrating_bridge_start');
//d.add(13800,13500,'Pre-requistes','bridging.htm#integrating_prerequisites_start');
//d.add(13900,13800,'Authentication by cookie','bridging.htm#integrating_cookie_start');
//d.add(14000,13800,'Standalone version first','bridging.htm#integrating_standalone_start');
//d.add(14100,13800,'Coppermine users, groups and pics are lost when integrating','bridging.htm#integrating_users_start');
//d.add(14200,13800,'Backup','bridging.htm#integrating_backup_start');
//d.add(14300,13500,'Integration steps','bridging.htm#integrating_steps_start');
//d.add(14400,14300,'Using the bridge manager','bridging.htm#bridge_manager_start');
//d.add(14500,14300,'Choose application to bridge coppermine with','bridging.htm#bridge_manager_app_start');
//d.add(14600,14300,'Path(s) used by your bridge app','bridging.htm#bridge_manager_path_start');
//d.add(14700,14300,'Bridge-app-specific settings','bridging.htm#bridge_manager_specific_start');
//d.add(14800,14300,'Enable/disable bridging','bridging.htm#bridge_manager_enable_start');
//d.add(14900,13500,'Recover from failed bridging','bridging.htm#bridge_manager_recover_start');
//d.add(15000,13500,'Synchronising the bridge app groups with Coppermine\'s groups','bridging.htm#integrating_steps_sync_start');
//d.add(15020,13500,'Bridging support','bridging.htm#integrating_support_start');
//d.add(15040,13500,'Some config options get disabled','bridging.htm#integrating_config_options_start');
//d.add(15060,13500,'Bridging files','bridging.htm#integrating_files_start');
//d.add(15080,13500,'Creating a custom bridge file','bridging.htm#integrating_bridge_file_creating_start');
//d.add(15200,0,'Developer documentation','dev.htm');
//d.add(15300,15200,'Sanitization Superglobals (Inspekt)','dev_superglobals.htm');
//d.add(15350,15200,'Javascript in Coppermine','dev_javascript.htm');
//d.add(15400,15200,'Plugin Writing','plugin_writing.htm');
//d.add(15500,15200,'Plugin hooks','plugin_hooks.htm');
//d.add(15600,15200,'Editing the documentation','dev_documentation.htm');
//d.add(15700,15200,'Subversion','dev_subversion.htm');
//d.add(15800,15200,'Adding config options','dev_config.htm');
//d.add(15900,15200,'Versioncheck','dev_versioncheck.htm');


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
  document.write('<img src="images/views.gif" width="16" height="16" border="0" alt="" title="Search the Coppermine documentation online (using Google)" onclick="document.googlesearch.submit();" style="cursor:pointer" />\n');
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
  document.write('<img src="images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" align="left" />');
  document.write('<h1>Coppermine Photo Gallery v1.5.0: Documentation und Handbuch</h1>');
  document.write('<br clear="all" />');
  //cpgDocPrevNext();
  //cpgDocBreadcrumb();
  document.write('<a name="top"></a>');
}

function cpgDocFooter() {
  document.write('</div>');
  document.write('<div align="right">');
  document.write('<a href="#top">Nach oben</a>');
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

function dateRevision(lastChangeDate, revisionNumber) {
  // strip the unneeded data from last_changed and revision fields
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('LastChangedDate: ', '');
  var lastChangeDate = lastChangeDate.replace(/Date: /g, '');

  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');

  document.write('<div class="doc_info_wrapper">');
  document.write('About this document: ');
  document.write('Last changed on ');
  document.write(lastChangeDate);
  document.write(',&nbsp;Revision ');
  document.write(revisionNumber);
  document.write('</div>');
}