<?php
return unserialize('a:5:{s:29:"userTsConfig-package-filelist";s:157:"options.file_list {
    enableDisplayThumbnails = selectable
    enableClipBoard = selectable
    thumbnail {
        width = 64
        height = 64
    }
}
";s:29:"userTsConfig-package-frontend";s:172:"options {
    saveDocView = 1
    saveDocNew = 1
    saveDocNew.pages = 0
    saveDocNew.sys_file = 0
    saveDocNew.sys_file_metadata = 0
    disableDelete.sys_file = 1
}
";s:31:"userTsConfig-package-adminpanel";s:158:"// BE admin users see all admin panel modules by default, non-admin users need manual User TSconfig.
[backend.user.isAdmin]
    admPanel.enable.all = 1
[end]
";s:28:"userTsConfig-package-backend";s:456:"options.enableBookmarks = 1

options.pageTree {
  doktypesToShowInNewPageDragArea := addToList(1,6,4,7,3,254,199)
  searchInTranslatedPages = 1
}

options.contextMenu {
    table {
        pages {
            disableItems =
            tree.disableItems =
        }
        sys_file {
            disableItems =
            tree.disableItems =
        }
        sys_filemounts {
            disableItems =
            tree.disableItems =
        }
    }
}
";s:31:"userTsConfig-package-wih_cement";s:68:"@import \'EXT:wih_cement/Configuration/TSconfig/User/user.tsconfig\'
";}');
#