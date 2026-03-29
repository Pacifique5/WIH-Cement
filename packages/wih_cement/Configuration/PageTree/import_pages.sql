-- ============================================================
-- WIH Cement — Page Tree Import SQL
-- Run this AFTER installing the extension and creating root page
-- Update the root page UID (pid=1) if your root page has a different UID
-- ============================================================

SET @root = 1;  -- Change this to your actual root page UID

-- ============================================================
-- MAIN NAVIGATION PAGES
-- ============================================================

-- Home (already created by wizard, update it)
UPDATE pages SET
    title = 'Home',
    slug = '/',
    description = 'WIH Cement - Building the Future',
    backend_layout = 'pagets__home',
    backend_layout_next_level = 'pagets__default',
    is_siteroot = 1
WHERE pid = 0 AND title = 'WIH Cement';

-- About Us
INSERT INTO pages (pid, sorting, title, slug, nav_title, description, backend_layout, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 128, 'About Us', '/about-us', 'About', 'Learn about WIH Cement company', 'pagets__default', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @about = LAST_INSERT_ID();

-- About subpages
INSERT INTO pages (pid, sorting, title, slug, doktype, hidden, deleted, crdate, tstamp) VALUES
(@about, 128, 'Company Overview', '/about-us/company-overview', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 256, 'Vision & Mission', '/about-us/vision-mission', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 384, 'Leadership Team', '/about-us/leadership-team', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 512, 'Factory & Production Facilities', '/about-us/factory-production', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 640, 'Corporate Social Responsibility', '/about-us/csr', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 768, 'Sustainability & Environment', '/about-us/sustainability', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@about, 896, 'Certifications', '/about-us/certifications', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Products
INSERT INTO pages (pid, sorting, title, slug, nav_title, description, backend_layout, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 256, 'Products', '/products', 'Products', 'WIH Cement product range', 'pagets__products', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @products = LAST_INSERT_ID();

-- Product subpages
INSERT INTO pages (pid, sorting, title, slug, backend_layout, doktype, hidden, deleted, crdate, tstamp) VALUES
(@products, 128, 'Ordinary Portland Cement (OPC)', '/products/ordinary-portland-cement', 'pagets__product_detail', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@products, 256, 'Portland Pozzolana Cement (PPC)', '/products/portland-pozzolana-cement', 'pagets__product_detail', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@products, 384, 'Rapid Hardening Cement', '/products/rapid-hardening-cement', 'pagets__product_detail', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@products, 512, 'Specialized Cement Products', '/products/specialized-cement', 'pagets__product_detail', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Manufacturing & Quality Control
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 384, 'Manufacturing & Quality Control', '/manufacturing', 'Our manufacturing process and quality standards', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Distribution Network
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 512, 'Distribution Network', '/distribution', 'Find dealers and distributors near you', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @distribution = LAST_INSERT_ID();

-- Projects & Case Studies
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 640, 'Projects & Case Studies', '/projects', 'Our completed and ongoing projects', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @projects = LAST_INSERT_ID();

-- Project subpages
INSERT INTO pages (pid, sorting, title, slug, doktype, hidden, deleted, crdate, tstamp) VALUES
(@projects, 128, 'Infrastructure Projects', '/projects/infrastructure', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@projects, 256, 'Commercial Projects', '/projects/commercial', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@projects, 384, 'Residential Projects', '/projects/residential', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@projects, 512, 'Government Contracts', '/projects/government', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Sustainability
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 768, 'Sustainability', '/sustainability', 'Our commitment to the environment', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- News & Media
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 896, 'News & Media', '/news', 'Latest news, press releases and events', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @news = LAST_INSERT_ID();

-- News subpages
INSERT INTO pages (pid, sorting, title, slug, doktype, hidden, deleted, crdate, tstamp) VALUES
(@news, 128, 'Company News', '/news/company-news', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@news, 256, 'Press Releases', '/news/press-releases', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@news, 384, 'Events', '/news/events', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@news, 512, 'Blog', '/news/blog', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Careers
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 1024, 'Careers', '/careers', 'Join the WIH Cement team', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Contact Us
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 1152, 'Contact Us', '/contact', 'Get in touch with WIH Cement', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- Dealer Portal (fe_login protected)
INSERT INTO pages (pid, sorting, title, slug, description, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 1280, 'Dealer Portal', '/dealer-portal', 'Dealer login and resources', 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- ============================================================
-- SYSTEM PAGES (hidden from navigation)
-- ============================================================

-- 404 Page
INSERT INTO pages (pid, sorting, title, slug, nav_hide, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 9000, '404 Not Found', '/404', 1, 1, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());

-- ============================================================
-- STORAGE SYSFOLDERS
-- ============================================================

-- Main storage folder
INSERT INTO pages (pid, sorting, title, doktype, hidden, deleted, crdate, tstamp)
VALUES (@root, 9100, '_Storage', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
SET @storage = LAST_INSERT_ID();

-- Storage subfolders
INSERT INTO pages (pid, sorting, title, doktype, hidden, deleted, crdate, tstamp) VALUES
(@storage, 128, 'Products Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 256, 'Projects Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 384, 'News Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 512, 'Jobs Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 640, 'Testimonials Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 768, 'Dealers Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 896, 'Inquiries Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP()),
(@storage, 1024, 'Applications Records', 254, 0, 0, UNIX_TIMESTAMP(), UNIX_TIMESTAMP());
