--
-- WIH Cement custom database tables
--

-- Products
CREATE TABLE tx_wihcement_domain_model_product (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,
    sorting int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    slug varchar(2048) DEFAULT '' NOT NULL,
    category varchar(100) DEFAULT '' NOT NULL,
    short_description text,
    description text,
    technical_specs text,
    applications text,
    packaging_details text,
    safety_information text,
    image int(11) DEFAULT '0' NOT NULL,
    datasheet int(11) DEFAULT '0' NOT NULL,
    performance_data text,
    is_featured tinyint(1) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent, sys_language_uid)
);

-- Projects
CREATE TABLE tx_wihcement_domain_model_project (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,
    sorting int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    slug varchar(2048) DEFAULT '' NOT NULL,
    project_type varchar(100) DEFAULT '' NOT NULL,
    client varchar(255) DEFAULT '' NOT NULL,
    location varchar(255) DEFAULT '' NOT NULL,
    completion_date date DEFAULT NULL,
    description text,
    performance_metrics text,
    images int(11) DEFAULT '0' NOT NULL,
    is_featured tinyint(1) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent, sys_language_uid)
);

-- News
CREATE TABLE tx_wihcement_domain_model_news (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,
    sorting int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    slug varchar(2048) DEFAULT '' NOT NULL,
    news_type varchar(50) DEFAULT 'news' NOT NULL,
    publish_date date DEFAULT NULL,
    teaser text,
    body_text text,
    image int(11) DEFAULT '0' NOT NULL,
    author varchar(255) DEFAULT '' NOT NULL,
    tags varchar(500) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent, sys_language_uid)
);

-- Jobs / Careers
CREATE TABLE tx_wihcement_domain_model_job (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    title varchar(255) DEFAULT '' NOT NULL,
    department varchar(100) DEFAULT '' NOT NULL,
    job_type varchar(50) DEFAULT 'full-time' NOT NULL,
    location varchar(255) DEFAULT '' NOT NULL,
    deadline date DEFAULT NULL,
    description text,
    requirements text,
    is_internship tinyint(1) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

-- Job Applications
CREATE TABLE tx_wihcement_domain_model_application (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,

    job int(11) DEFAULT '0' NOT NULL,
    full_name varchar(255) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    phone varchar(50) DEFAULT '' NOT NULL,
    cover_letter text,
    resume int(11) DEFAULT '0' NOT NULL,
    status varchar(50) DEFAULT 'pending' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY job (job)
);

-- Dealers
CREATE TABLE tx_wihcement_domain_model_dealer (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,

    company_name varchar(255) DEFAULT '' NOT NULL,
    contact_person varchar(255) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    phone varchar(50) DEFAULT '' NOT NULL,
    region varchar(255) DEFAULT '' NOT NULL,
    country varchar(100) DEFAULT '' NOT NULL,
    address text,
    latitude decimal(10,8) DEFAULT NULL,
    longitude decimal(11,8) DEFAULT NULL,
    status varchar(50) DEFAULT 'pending' NOT NULL,
    is_approved tinyint(1) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

-- Inquiries
CREATE TABLE tx_wihcement_domain_model_inquiry (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,

    product int(11) DEFAULT '0' NOT NULL,
    full_name varchar(255) DEFAULT '' NOT NULL,
    company varchar(255) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    phone varchar(50) DEFAULT '' NOT NULL,
    quantity varchar(100) DEFAULT '' NOT NULL,
    message text,
    inquiry_type varchar(50) DEFAULT 'general' NOT NULL,
    status varchar(50) DEFAULT 'new' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY product (product)
);

-- Testimonials
CREATE TABLE tx_wihcement_domain_model_testimonial (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    author_name varchar(255) DEFAULT '' NOT NULL,
    author_title varchar(255) DEFAULT '' NOT NULL,
    company varchar(255) DEFAULT '' NOT NULL,
    quote text,
    photo int(11) DEFAULT '0' NOT NULL,
    rating tinyint(1) DEFAULT '5' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
