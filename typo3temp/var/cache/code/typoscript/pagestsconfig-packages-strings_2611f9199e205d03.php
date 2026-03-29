<?php
return unserialize('a:9:{s:26:"pagesTsConfig-package-core";a:2:{s:8:"filename";s:78:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/core/Configuration/page.tsconfig";s:7:"content";s:46:"TCEMAIN.translateToMessage = Translate to %s:
";}s:30:"pagesTsConfig-package-filelist";a:2:{s:8:"filename";s:82:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/filelist/Configuration/page.tsconfig";s:7:"content";s:477:"# Register link handlers
TCEMAIN.linkHandler {
  file {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FileLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:file
    displayAfter = page
    scanAfter = page
  }
  folder {
    handler = TYPO3\\CMS\\Filelist\\LinkHandler\\FolderLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:folder
    displayAfter = page,file
    scanAfter = page,file
  }
}
";}s:30:"pagesTsConfig-package-frontend";a:2:{s:8:"filename";s:82:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/frontend/Configuration/page.tsconfig";s:7:"content";s:124:"TCEFORM.tt_content {
  imageorient {
    types {
      image {
        removeItems = 8,9,10,17,18,25,26
      }
    }
  }
}
";}s:25:"pagesTsConfig-package-seo";a:2:{s:8:"filename";s:77:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/seo/Configuration/page.tsconfig";s:7:"content";s:431:"mod.web_info.fieldDefinitions {
  seo {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
    fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
  }
  social_media {
    label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
    fields = title,uid,og_title,og_description,twitter_title,twitter_description
  }
}
";}s:29:"pagesTsConfig-package-backend";a:2:{s:8:"filename";s:81:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/backend/Configuration/page.tsconfig";s:7:"content";s:1990:"# Register default link handlers
TCEMAIN.linkHandler {
  page {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\PageLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:page
  }
  url {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\UrlLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:extUrl
    displayAfter = page,file,folder
    scanAfter = telephone
  }
  email {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\MailLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:email
    displayAfter = page,file,folder,url
    scanBefore = url
  }
  telephone {
    handler = TYPO3\\CMS\\Backend\\LinkHandler\\TelephoneLinkHandler
    label = LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:telephone
    displayAfter = page,file,folder,url,mail
    scanBefore = url
  }
}

mod.web_list {
  enableClipBoard = selectable
  tableDisplayOrder {
    be_users.after = be_groups
    sys_filemounts.after = be_users
    sys_file_storage.after = sys_filemounts
    fe_users.after = fe_groups
    fe_users.before = pages
    sys_template.after = pages
    backend_layout.after = pages
    tt_content.after = pages,backend_layout,sys_template
    sys_category.after = tt_content
  }
  searchLevel.items {
    -1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.infinite
    0 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.0
    1 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.1
    2 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.2
    3 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.3
    4 = EXT:core/Resources/Private/Language/locallang_core.xlf:labels.searchLevel.4
  }
}

# dummy placeholders for item groups
mod.wizards {
  newRecord.pages.show {
    pageInside = 1
    pageAfter = 1
    pageSelectPosition = 1
  }
}
";}s:26:"pagesTsConfig-package-info";a:2:{s:8:"filename";s:78:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/info/Configuration/page.tsconfig";s:7:"content";s:823:"mod.web_info.fieldDefinitions {
    0 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_0
        fields = title,uid,sys_language_uid,slug,starttime,endtime,fe_group,target,link,shortcut,shortcut_mode
    }
    1 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_1
        fields = title,uid,###ALL_TABLES###
    }
    2 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_2
        fields = title,uid,sys_language_uid,lastUpdated,newUntil,cache_timeout,php_tree_stop,TSconfig,is_siteroot
    }
    3 {
        label = LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:pages_layouts
        fields = title,uid,sys_language_uid,actual_backend_layout,backend_layout,backend_layout_next_level,layout
    }
}
";}s:32:"pagesTsConfig-package-wih_cement";a:2:{s:8:"filename";s:80:"C:/xampp/htdocs/sites/WIH Cement/packages/wih_cement/Configuration/page.tsconfig";s:7:"content";s:79:"@import \'EXT:wih_cement/Configuration/TSconfig/Page/ContentElements.tsconfig\'
";}s:34:"pagesTsConfig-package-theme_camino";a:2:{s:8:"filename";s:86:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/theme_camino/Configuration/page.tsconfig";s:7:"content";s:1013:"# disable everything globally for the new fields, so they are only visible
# if the site config enables the fields
TCEFORM.pages {
  tx_themecamino_logo.disabled = 1
}

# Hide custom content types globally, they are only enabled via the set\'s page.tsconfig
TCEFORM.tt_content {
  CType.removeItems := addToList(camino_hero)
  CType.removeItems := addToList(camino_hero_small)
  CType.removeItems := addToList(camino_hero_text_only)
  CType.removeItems := addToList(camino_textteaser)
  CType.removeItems := addToList(camino_testimonial)
  CType.removeItems := addToList(camino_author)
  CType.removeItems := addToList(camino_textmedia_teaser)
  CType.removeItems := addToList(camino_textmedia_teaser_grid)
  CType.removeItems := addToList(camino_linklist)
  CType.removeItems := addToList(camino_sociallinks)

  tx_themecamino_header_style.disabled = 1
  tx_themecamino_link.disabled = 1
  tx_themecamino_link_label.disabled = 1
  tx_themecamino_link_config.disabled = 1
  tx_themecamino_link_icon.disabled = 1
}
";}s:30:"pagesTsConfig-package-viewpage";a:2:{s:8:"filename";s:82:"C:/xampp/htdocs/sites/WIH Cement/typo3/sysext/viewpage/Configuration/page.tsconfig";s:7:"content";s:1055:"mod.web_view.previewFrameWidths {
    phone {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:mobile
        type = mobile
        width = 390
        height = 844
    }
    tabletPortrait {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletPortrait
        type = tablet
        width = 768
        height = 1024
    }
    tabletLandscape {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:tabletLandscape
        type = tablet
        width = 1024
        height = 768
    }
    1280 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1280
        height = 1024
    }
    1440 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1440
        height = 1024
    }
    1920 {
        label = LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:desktop
        type = desktop
        width = 1920
        height = 1080
    }
}
";}}');
#