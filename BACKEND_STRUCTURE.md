# WIH Cement — TYPO3 Backend Structure & Implementation Guide

## Page Tree Structure

```
WIH Cement (Root)
├── Home
├── About Us
│   ├── Company Overview
│   ├── Vision & Mission
│   ├── Leadership Team
│   ├── Factory & Production Facilities
│   ├── Corporate Social Responsibility (CSR)
│   ├── Sustainability & Environmental Commitment
│   └── Certifications
├── Products
│   ├── Ordinary Portland Cement (OPC)
│   ├── Portland Pozzolana Cement (PPC)
│   ├── Rapid Hardening Cement
│   └── Specialized Cement Products
├── Manufacturing & Quality Control
├── Distribution Network
├── Projects & Case Studies
│   ├── Infrastructure Projects
│   ├── Commercial Projects
│   ├── Residential Projects
│   └── Government Contracts
├── Sustainability
├── News & Media
│   ├── Company News
│   ├── Press Releases
│   ├── Events
│   └── Blog
├── Careers
├── Contact Us
├── Dealer Portal (fe_login protected)
└── [System]
    ├── 404 Not Found
    ├── Storage (sysfolder)
    │   ├── Products Records
    │   ├── Projects Records
    │   ├── News Records
    │   ├── Jobs Records
    │   ├── Testimonials Records
    │   ├── Dealers Records
    │   └── Inquiries Records
    └── Languages
        ├── French
        ├── Kinyarwanda
        └── Chinese
```

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
