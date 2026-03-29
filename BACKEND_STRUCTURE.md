# WIH Cement — TYPO3 Backend Structure & Implementation Guide

## Page Tree Structure

```
WIH Cement [Root]
├── Home [Standard]
├── About Us [Standard]
│   ├── Company Overview [Standard]
│   ├── Vision & Mission [Standard]
│   ├── Leadership Team [Standard]
│   ├── Factory & Production Facilities [Standard]
│   ├── Corporate Social Responsibility [Standard]
│   ├── Sustainability & Environmental Commitment [Standard]
│   └── Certifications [Standard]
├── Products [Standard]
│   ├── Ordinary Portland Cement (OPC) [Standard]
│   ├── Portland Pozzolana Cement (PPC) [Standard]
│   ├── Rapid Hardening Cement [Standard]
│   └── Specialized Cement Products [Standard]
├── Manufacturing & Quality Control [Standard]
├── Distribution Network [Standard]
├── Projects & Case Studies [Standard]
│   ├── Infrastructure Projects [Standard]
│   ├── Commercial Projects [Standard]
│   ├── Residential Projects [Standard]
│   └── Government Contracts [Standard]
├── Sustainability [Standard]
├── News & Media [Standard]
│   ├── Company News [Standard]
│   ├── Press Releases [Standard]
│   ├── Events [Standard]
│   └── Blog [Standard]
├── Careers [Standard]
├── Contact Us [Standard]
├── Dealer Portal [Standard]
├── 404 Not Found [Standard] ← hidden in menu
└── _Storage [Folder]
    ├── Products Records [Folder]
    ├── Projects Records [Folder]
    ├── News Records [Folder]
    ├── Jobs Records [Folder]
    ├── Dealers Records [Folder]
    ├── Inquiries Records [Folder]
    └── Applications Records [Folder]
```

> Status: Page tree created ✓

---

## Implementation Files Index

| File | Purpose |
|------|---------|
| `config/site/wih-cement/config.yaml` | Site configuration, languages, routing |
| `config/site/wih-cement/routes.yaml` | Custom route enhancers |
| `packages/wih_cement/ext_emconf.php` | Extension metadata |
| `packages/wih_cement/ext_localconf.php` | Extension local config |
| `packages/wih_cement/ext_tables.php` | TCA overrides registration |
| `packages/wih_cement/ext_tables.sql` | Custom DB tables |
| `packages/wih_cement/Configuration/TCA/` | Custom content types |
| `packages/wih_cement/Configuration/TypoScript/` | TypoScript setup |
| `packages/wih_cement/Configuration/TSconfig/` | Backend TSconfig |
| `packages/wih_cement/Configuration/FlexForms/` | FlexForm configs |
| `packages/wih_cement/Resources/Private/Templates/` | Fluid templates |
| `packages/wih_cement/Resources/Private/Layouts/` | Fluid layouts |
| `packages/wih_cement/Resources/Private/Partials/` | Fluid partials |

---

## Role Permissions Matrix

| Role | Pages | Content | Products | Projects | News | Jobs | Users | Reports |
|------|-------|---------|---------|---------|------|------|-------|---------|
| Super Admin | Full | Full | Full | Full | Full | Full | Full | Full |
| Administrator | Full | Full | Full | Full | Full | Full | Limited | Full |
| Marketing Manager | Read | Read | Read | Read | Full | Read | None | Read |
| Sales Manager | Read | Read | Read | Read | Read | Read | None | Read |
| Sales Officer | Read | Read | Read | Read | Read | Read | None | None |
| Media Officer | Read | Full | Read | Read | Full | Read | None | None |
| Content Manager | Read | Full | Full | Full | Full | Read | None | None |
| HR Officer | Read | Read | None | None | None | Full | None | None |
| Data Entry Clerk | Read | Limited | Full | Read | Read | Read | None | None |
| Dealer | None | None | Read | None | None | None | None | None |
| Visitor | None | None | None | None | None | None | None | None |
