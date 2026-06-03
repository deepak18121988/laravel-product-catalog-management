# Laravel Product Catalog Management System

## Project Overview

Laravel Product Catalog Management System is a complete catalog management solution developed for businesses that need to manage products, categories, certificates, barcodes, and product information without implementing a full e-commerce checkout process.

The system provides a secure admin panel where administrators can manage product data and display products on a public-facing website.

---

## Features

### Admin Authentication

* Secure Login System
* Session-based Authentication
* Protected Admin Routes

---

### Category Management

* Create Category
* Update Category
* Delete Category
* Nested Categories Support
* Unlimited Category Levels using Parent ID

---

### Shape Management

* Create Shape
* Update Shape
* Delete Shape

Examples:

* Round
* Oval
* Custom Shapes

---

### Product Management

Manage complete product information:

* Product Name
* Product Code
* SKU
* Barcode
* Certificate Number
* Company Name
* Weight
* Price
* Stock
* Description
* Category Assignment
* Shape Assignment

Validation:

* Unique Barcode
* Unique Certificate Number
* Unique Product Code

---

### Product Images

* Multiple Images Per Product
* Primary Image Selection
* Product Gallery

---

### Certificate Management

* Upload Certificates
* Store Certificate Number
* Certificate Verification

---

### Barcode Management

* Generate Product Barcode
* Barcode Printing
* Barcode-Based Product Lookup

---

### Product Label Printing

Print product labels containing:

* Product Name
* SKU
* Barcode
* Certificate Number
* Product Information

---

### Bulk Label Printing

* Print Multiple Product Labels
* Bulk Barcode Printing

---

### Website Settings

Manage:

* Website Name
* Contact Information
* Email Configuration
* General Settings

---

## Frontend Pages

* Home Page
* Category Listing Page
* Product Detail Page
* About Us Page
* Contact Us Page
* FAQ Page

---

## Barcode Product Verification

Customers can scan a product barcode and directly open the product detail page to verify:

* Product Name
* Product Images
* Barcode
* SKU
* Certificate Number
* Weight
* Product Description
* Shape Information

---

## Technology Stack

* Laravel
* PHP
* MySQL
* Bootstrap 5
* jQuery
* AJAX
* Repository Pattern

---

## Project Structure

* Repository Pattern Architecture
* AJAX CRUD Operations
* Reusable Layout Components
* Bootstrap UI
* SweetAlert2 Notifications

---

## Current Development Status

### Completed

* Authentication System
* Repository Pattern Setup
* Admin Dashboard
* Category CRUD
* AJAX Category Management
* SweetAlert Notifications
* Layout Components

### Upcoming Modules

* Shape Management
* Product Management
* Product Images
* Product Variants
* Reviews
* Certificate Management
* Barcode Generation
* Frontend Product Catalog

---

## Installation

Clone Repository

```bash
git clone https://github.com/deepak18121988/laravel-product-catalog-management.git
```

Install Dependencies

```bash
composer install
```

Copy Environment File

```bash
cp .env.example .env
```

Generate Application Key

```bash
php artisan key:generate
```

Run Migrations

```bash
php artisan migrate
```

Start Development Server

```bash
php artisan serve
```

---

## Author

Deepak Lohani

Laravel Developer
